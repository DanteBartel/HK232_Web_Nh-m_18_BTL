function validateNewAccount() {
    // Get form elements
    let username = $("#username").val();
    let password = $("#password").val();
    let con_password = $("#con_password").val();
    let email = $("#email").val();

    // Validation
    if (username.length < 2 || username.length > 20) {
        alert("Username must have a length of 2-20 characters")
        return false;
    }
    if (password.length < 2 || password.length > 20) {
        alert("Password must have less than 2-20 characters");
        return false;
    }
    if (password != con_password) {
        alert("Confirm password must match password");
        return false;
    }
    const email_reg = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email_reg.test(email)) {
        alert("Email is not valid");
        return false;
    }

    // If all validations pass, return true to allow form submission
    return true;
}