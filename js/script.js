"use strict";

document.getElementById("form-submit").addEventListener("click", function(event) {
    event.preventDefault();
    let form = document.getElementById("contact-form");
    let message = document.getElementById("form-message");
    form.classList.add("hidding-form");
    message.classList.add("showing-message");
    
    // var message = document.getElementById("form-message");
    // message.classList.add("showing-message");
});