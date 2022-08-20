"use strict";

document.getElementById("form-submit").addEventListener("click", function(event) {
    event.preventDefault();
    var form = document.getElementById("contact-form");
    form.classList.add("hidding-form");
});