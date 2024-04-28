function validateBook() {
    // Get form elements
    let isbn = $("#isbn").val();
    let name = $("#name").val();
    let price = $("#price").val();
    let author = $("#author").val();
    let description = $("#description").val();
    let image = $("#image").val();
    let quantity = $("#quantity").val();

    // Validation
    if (isbn !== '' && isbn.length !== 13) {
        alert("ISBN must have a length of 13 characters")
        return false;
    }
    if (name.length > 255) {
        alert("Name must have less than 255 characters");
        return false;
    }
    if (isNaN(price)) {
        alert("Price must be a number");
        return false;
    }
    if (author !== '' && author.length > 255) {
        alert("Author must have less than 255 characters");
        return false;
    }
    if (description.length > 5000) {
        alert("Description must have less than 5000 characters");
        return false;
    }
    if (image !== '' && image.length > 255) {
        alert("Image must have less than 255 characters");
        return false;
    }
    if (!(!isNaN(parseInt(quantity)) && parseInt(quantity) === parseFloat(quantity))) {
        alert("Quantity must be integer");
        return false;
    }

    // If all validations pass, return true to allow form submission
    return true;
}