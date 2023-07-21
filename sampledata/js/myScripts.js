$(document).ready(function() {
    $("#jq").append("<p>jQuery loaded...Let's go !</p>");

    /*window.addEventListener("hashchange", function(e) {

        var hash = window.location.hash;
        alert(hash);
        if (hash === "#showXML") {
            showXML();
        } else if (hash === "#showForm") {
            showForm();
        } else if (hash === "showImage") {
            showImage();
        }
    }, false);*/

    /*  $(window).on('hashchange', function(e) {
        var hash = window.location.hash;
        if (hash === "#showXML") {
            showXML();
        } else if (hash === "#showForm") {
            showForm();
        } else if (hash === "showImage") {
            showImage();
        }
    });*/




    //Click Listeners
    $("#showXML").click(changeToXML);
    $("#showForm").click(changeToForm);
    $("#showImage").click(changeToImage);

    //functions declarations
    function changeToXML() {
        window.location.hash = "showXML";
        showXML();

    }

    function changeToForm() {
        window.history.pushState({}, '', '#showForm');
        console.log("Change to form");
        showForm();
    }

    function changeToImage() {
        window.history.replaceState({}, '', '#showImage');
        console.log("Change to image");
        showImage();
    }





    function showXML() {
        //Let's change the Hash first
        $("#methodUsed").text("window.location.hash");
        $("#loading").html("<img src='img/ajax-loader.gif'><br/>loading....");
        //now let's roll
        var url = "XML/wod.xml";
        $("#reciever").animate({
            left: '-=200%'
        }, 1000, function() {
            $("#reciever").text('');
            $("#reciever").animate({
                left: '+=200%'
            }, 1000, function() {
                $.ajax({
                    url: url,
                    dataType: "xml",
                    async: true,
                    success: function(result) {
                        //$("#loading").text("");

                        $(result).find("participant").each(function() {

                            var name = $(this).find("name").text();
                            var rawData = $(this).find("rawData").text();

                            $("#reciever").append("<ul><li>" + name + "</li><br/><li>" + rawData + "</li></ul><hr>").hide().fadeIn(500);
                            $("#loading").html("");
                        });
                    },
                    error: function(result) {
                        console.error(result);
                    }
                });
            });
        });



    }

    function showForm() {
        //Let's change the Hash first

        $("#methodUsed").text("window.history.pushState");
        $("#loading").html("<img src='img/ajax-loader.gif'><br/>loading....");
        $("#reciever").animate({
            left: '-=200%'
        }, 1000, function() {
            $("#reciever").text('');
            $("#reciever").animate({
                left: '+=200%'
            }, 1000, function() {
                $.ajax({
                    url: "form.html",
                    dataType: "html",
                    async: true,
                    success: function(result) {
                        $("#loading").html("");
                        $("#reciever").html(result).hide().fadeIn(500);
                    },
                    error: function(result) {
                        console.error(result);
                    }
                });
            });
        });
    }

    function showImage() {
        //let's change the hash
        $("#methodUsed").text("window.history.replaceState");

        $("#loading").html("<img src='img/ajax-loader.gif'><br/>loading....");

        $("#reciever").animate({
            left: '-=200%'
        }, 1000, function() {
            $("#reciever").text('');
            $("#reciever").animate({
                left: '+=200%'
            }, 1000, function() {
                $.ajax({
                    url: "image.html",
                    dataType: "html",
                    async: true,
                    success: function(result) {
                        $("#loading").html("");
                        $("#reciever").html(result).hide().fadeIn(500);
                    },
                    error: function(result) {
                        console.error(result);
                    }
                });
            });
        });
    }


});