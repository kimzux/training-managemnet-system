function check(input)
{
    
    var checkboxes = document.getElementsByClassName("node");
    
    for(var i = 0; i < checkboxes.length; i++)
    {
        //uncheck all
        if(checkboxes[i].checked == true)
        {
            checkboxes[i].checked = false;
        }
    }
    
    //set checked of clicked object
    if(input.checked == true)
    {
        input.checked = false;
    }
    else
    {
        input.checked = true;
    }	
}
function checkTime(inputCheck)
{
    
    var checkboxesTime = document.getElementsByClassName("nodetime");
    
    for(var i = 0; i < checkboxesTime.length; i++)
    {
        //uncheck all
        if(checkboxesTime[i].checked == true)
        {
            checkboxesTime[i].checked = false;
        }
    }
    
    //set checked of clicked object
    if(inputCheck.checked == true)
    {
        inputCheck.checked = false;
    }
    else
    {
        inputCheck.checked = true;
    }	
}
function checkMe(inputChecks)
{
    
    var checkboxesMe = document.getElementsByClassName("nodeMe");
    
    for(var i = 0; i < checkboxesMe.length; i++)
    {
        //uncheck all
        if(checkboxesMe[i].checked == true)
        {
            checkboxesMe[i].checked = false;
        }
    }
    
    //set checked of clicked object
    if(inputChecks.checked == true)
    {
        inputChecks.checked = false;
    }
    else
    {
        inputChecks.checked = true;
    }	
}