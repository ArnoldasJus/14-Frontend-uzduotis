"use strict";

document.getElementById("form-submit").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("contact-form").classList.add("hidding-form");
    document.getElementById("form-message").classList.add("showing-message");
});

document.getElementById("new-form").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("form-message").classList.remove("showing-message");
    document.getElementById("contact-form").classList.remove("hidding-form");
});