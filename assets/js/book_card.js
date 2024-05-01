document.addEventListener("DOMContentLoaded", function() {
    // Lấy danh sách các button
    const borderheart = document.querySelectorAll('.border-heart');
    const fullheart = document.querySelectorAll('.full-heart');

    // Đặt sự kiện click cho mỗi button
    borderheart.forEach(function(button) {
        button.addEventListener('click', function() {
            // init account_id and book_id
            let account_id = Cookies.get("account_id");
            let book_id = $(button).parent().children(":first").html();
            let callData = {account_id: account_id, book_id: book_id};
            let url = api_url('favorite_book.php');
            let method = 'POST';

            // Send the request
            $.ajax({
                url: url,
                type: method,
                data: JSON.stringify(callData),
                success: function(data, textStatus, jqXHR) {
                    // Handle success
                    httpCode = jqXHR.status;
                    return_data = data;
                    if (jqXHR.status == 201) {
                        button.classList.add('hidden');
                        button.nextElementSibling.classList.remove('hidden');
                    }
                },
                error: function(xhr, status, error) {
                    // Handle errors
                }
            });
        });
    });

    fullheart.forEach(function(button) {
        button.addEventListener('click', function() {
            // init account_id and book_id
            let account_id = Cookies.get("account_id");
            let book_id = $(button).parent().children(":first").html();
            let callData = {account_id: account_id, book_id: book_id};
            let url = api_url('favorite_book.php');
            let method = 'DELETE';

            // Send the request
            $.ajax({
                url: url,
                type: method,
                data: JSON.stringify(callData),
                success: function(data, textStatus, jqXHR) {
                    // Handle success
                    httpCode = jqXHR.status;
                    return_data = data;
                    if (jqXHR.status == 204) {
                        button.classList.add('hidden');
                        button.previousElementSibling.classList.remove('hidden');
                    }
                },
                error: function(xhr, status, error) {
                    // Handle errors
                }
            });
        });
    });
});