/*
 * Name: Shannon Reidy
 * Coding 07
 * Purpose: pilot creator page behavior
 */


"use strict";

function validate() {
    let error = '';

    let pilotName = $("#pilot-name").val().trim();
    let callsign = $("#callsign").val().trim();
    let background= $("#background").val().trim();

    $("#pilot-name").val(pilotName);
    $("#callsign").val(callsign);
    $("#background").val(background);

    if($("#pilot-name").val("")){
        error+="Your pilot needs a name. <br>";
    }
    if($("#callsign").val("")){
        error += "You gotta have a callsign <br>";
    }
    if($("#background").val("")){
        error +="What's your pilot's background? <br>";
    }
    console.log(error);
    let triggerArray=[];
    $('input:checkbox').each(
        function(){
            if($(this).is(':checked')){
                triggerArray.push($("label[for='"+$(this).attr("id")+"']").text());
            }
        }
    );

    if (triggerArray.length<4){
        
        error += "You've selected too few triggers.";
        $("#error").html(error);
        return false;
    }
    else if(triggerArray.length>4){
        error += "You've selected too many triggers.";
        $("#error").html(error);
        return false;
    }
    else{
        $("#error").html('');
        return true;
    }
    

}

$(document).ready(function(){


    $("#pilot-submit").click(function(event){
        if(validate()){
            event.preventDefault();
            $("#error").html("You've completed the first step to character creation!");
        }
    });

});


