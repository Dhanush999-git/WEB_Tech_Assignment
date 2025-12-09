// script.js

// This will run when the page is fully loaded
$(document).ready(function () {

    // Example: when user focuses on Full Name, change border temporarily
    $("#fullName").on("focus", function () {
        $(this).css("border-color", "#28a745");
    }).on("blur", function () {
        $(this).css("border-color", "#ccc");
    });

    // Example: simple check before submit (client-side validation)
    $("#registrationForm").on("submit", function (e) {
        // Clear previous message
        $("#message").text("");

        const name = $("#fullName").val().trim();
        const email = $("#email").val().trim();
        const phone = $("#phone").val().trim();

        if (name === "" || email === "" || phone === "") {
            e.preventDefault(); // stop form submit
            $("#message").css("color", "red");
            $("#message").text("Please fill all required fields (Name, Email, Phone).");
        } else {
            // Optional: show success note before PHP page
            $("#message").css("color", "green");
            $("#message").text("Submitting your application...");
            // Allow form submit to process.php
        }
    });
});
