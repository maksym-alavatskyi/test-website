$(document).ready(function() {

    //button listener
    $("#positionChanger").click(function() {
        var selected = $(".selectDiv option:selected").text();
        window.location = "./index_aviad_ea.php?moveTo=" + selected;
    });


    if ( !! ClickTale ) {
        var version = ClickTaleGetVersion();
        $('#recorderVer').html('recorder version ' + version[0] + '.' + version[1]);
    }




});