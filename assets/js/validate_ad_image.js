function validateAdImage() {
    // Get form elements
    let image = $("#image").val();

    // Validation
    if (image.length > 255) {
        alert("Image must have less than 255 characters");
        return false;
    }

    // If all validations pass, return true to allow form submission
    return true;
}