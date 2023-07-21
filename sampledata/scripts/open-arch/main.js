window.onload = function(){
    const CTC = window.CTCommunicator;

    CTC.getFilterSet(res => {
        if(!res)
            return;

        let filterSetKey = res.data;

        CTC.getMetricIdsList(metricsListRes => {
            if(!metricsListRes || !metricsListRes.data)
                return;

            let metricsIds = metricsListRes.data.metrics.map((d) => {
                return d.id;
            });

            CTC.getMetricsByIds(filterSetKey, metricsIds, lastResponse => {
                console.info("GOT DATA FROM OA!!!!!!!!", lastResponse.data);

                document.documentElement.style.backgroundColor = "#d9dadb !important";

                let introElement = document.querySelector(".intro");
                introElement.parentNode.removeChild(introElement);


                let parentElement = document.getElementById("wrapper");

                metricsListRes.data.metrics.map((m, i) => {
                    let mBoxElem = document.createElement("div");
                    mBoxElem.style.display = "block";
                    mBoxElem.style.float = "left";
                    mBoxElem.style.minHeight = "180px";
                    mBoxElem.style.width = "180px";
                    mBoxElem.style.borderRadius = "10px";
                    mBoxElem.style.backgroundColor = "#2d2d2d";
                    mBoxElem.style.color = "#ffffff";
                    mBoxElem.style.textAlign = "center";
                    mBoxElem.style.margin = "10px 5px";
                    mBoxElem.style.padding = "5px";

                    mBoxElem.className = "metric-box";
                    mBoxElem.innerHTML = m.name;

                    lastResponse.data[i].results.map(mr => {
                        let aggregationBox = document.createElement("span");
                        aggregationBox.style.display = "block";
                        aggregationBox.innerHTML = "Aggregation: " + mr.aggregation + mr.units + " (" + (mr.isBigger ? "bigger" : "smaller") + ")";
                        mBoxElem.appendChild(aggregationBox);

                        mr.data.map(mrd => {
                            let dataBox = document.createElement("div");
                            let content = "";

                            dataBox.style.fontSize = "9px";
                            dataBox.style.margin = "5px 0";
                            dataBox.style.padding = "5px";
                            dataBox.style.borderTop = "1px solid #fff";
                            dataBox.style.textAlign = "left";
                            dataBox.style.color = "#2d2d2d";
                            dataBox.style.background = "#ffffff";
                            dataBox.style.borderRadius = "6px";

                            content += `Count: ${mrd.count}<br>`;
                            content += `Value: ${mrd.value}<br>`;
                            content += `Date: ${mrd.date}<br>`;
                            content += `Tooltip Amount: ${mrd.tooltipAmont}<br>`;

                            dataBox.className = ".content-box";
                            dataBox.innerHTML = content;
                            mBoxElem.appendChild(dataBox);
                        });
                    });

                    parentElement.appendChild(mBoxElem);
                });
            });
        });
    });
};