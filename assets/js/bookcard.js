    // click thêm vào yêu thích
    document.addEventListener("DOMContentLoaded", function() {
        // Lấy danh sách các button
        const borderheart = document.querySelectorAll('.border-heart');
        const fullheart = document.querySelectorAll('.full-heart');

        // Đặt sự kiện click cho mỗi button
        borderheart.forEach(function(button) {
                button.addEventListener('click', function() {
                    button.classList.add('hidden');
                    button.nextElementSibling.classList.remove('hidden');
                });
            });

        fullheart.forEach(function(button) {
            button.addEventListener('click', function() {
                button.classList.add('hidden');
                button.previousElementSibling.classList.remove('hidden');
            });
        });
    });


