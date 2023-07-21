function showForm() 
{
   
    if (typeof ClickTaleExec == 'function')
        ClickTaleExec("showForm()");

    var userInput = document.getElementById('democlick');

    userInput.innerHTML = "<form name='demo'  action=''>" + "<label for='from'>Your fname:</label>" + "<input type='text' id='from' size='35' maxlength='50' />"+"<br />"
    + "<label for='from1'>Your sName:</label>" + "<input type='text' name ='from1' id='Text1' />" + "<br />" + "<input type='submit' name='Submit' value='Send' style='width: 214px'/>"
    + "</form>";

    if (typeof ClickTaleExec == 'function')
        ClickTaleRebindEvents();

}
