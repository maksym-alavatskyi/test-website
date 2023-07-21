$(document).ready(function() {

  //button listener
  $("#positionChanger").click(function() {
    var selected = $(".selectDiv option:selected").text();
    window.location = "./index.php?moveTo=" + selected;
  });


});
