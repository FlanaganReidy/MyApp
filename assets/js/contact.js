/*
 * Name: Shannon Reidy
 * Final Project
 * Purpose:form behavior and client side validation for contact page
 */

function sendData(name, returnEmail, contactSubject, message){

    $.ajax({
        url: 'Email/validateEmail',
        type:'POST',
        data: {name:name, returnEmail:returnEmail, contactSubject: contactSubject, message:message },
        success: function(val){
            if(val==='okay'){
                clearForm();
                $("#message").val("Your email was sent.");
            } else{
                $("#message").val("processing error");
            }
        },
        error: function(){
            console.log("server error");
        }
    });

    return;
}

function validEmail(email) {
    var re =/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validate(){
    let errorMessage = "";

    let name = $("#name").val().trim();
    let returnEmail = $("#return-email").val().trim();
    let reEnterReturnEmail = $("#re-enter-return-email").val().trim();
    let contactSubject = $("#contact-subject").val().trim();
    let message = $("#message").val().trim();

    $("#name").val(name);
    $("#return-email").val(returnEmail);
    $("#re-enter-return-email").val(reEnterReturnEmail);
    $("#contact-subject").val(contactSubject);
    $("#message").val(message);

    if(name === ""){
        errorMessage += "Name cannot be blank <br>";
    }
    if(returnEmail === ""){
        errorMessage += "Return Email cannot be blank <br>";
    }
    if(reEnterReturnEmail === ""){
        errorMessage += "Correctly enter your return email <br>";
    }
    if(contactSubject === ""){
        errorMessage += "Subject cannot be blank <br>";
    }
    if(message === ""){
        errorMessage += "There must be a message <br>";
    }
    if(returnEmail !== reEnterReturnEmail){
        errorMessage += "Your emails must match <br>";
    }
    if (!validEmail(returnEmail)){
       errorMessage += "Your email must be valid <br>";
    }

    if (errorMessage == ""){
        console.log("oh look, we made it");
        sendData(name, returnEmail, contactSubject, message);
    } else{
        $("#error").html(errorMessage);
    }

}

function clearForm(){
    $("input").val('');
    
    $("textarea").val('');
    
    $("#error").html("<br>");
}

$(document).ready(function(){


    $("#contact-clear").click(function(){
        clearForm();
    });

    $("#contact-submit").click(function(){
        validate();
    });

});