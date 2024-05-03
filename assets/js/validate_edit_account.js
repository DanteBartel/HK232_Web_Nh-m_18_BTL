function validateEditUsername() {
    // Get form elements
    let username = $("#username").val();

    // Validation
    if (username.length < 2 || username.length > 20) {
        alert("Username must have a length of 2-20 characters")
        return false;
    }

    // If all validations pass, return true to allow form submission
    return true;
}

function validateEditPassword() {
    // Get form elements
    let old_password = $("#old_password").val();
    let new_password = $("#new_password").val();
    let con_password = $("#con_password").val();

    // Validation
    if (new_password.length < 2 || new_password.length > 20) {
        alert("New password must have less than 2-20 characters");
        return false;
    }
    if (new_password != con_password) {
        alert("Confirmation password must be the same as new password");
        return false;
    }

    // If all validations pass, return true to allow form submission
    return true;
}

function validateEditEmail() {
    // Get form elements
    let email = $("#email").val();

    // Validation
    const email_reg = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email_reg.test(email)) {
        alert("Email is not valid");
        return false;
    }

    // If all validations pass, return true to allow form submission
    return true;    
}