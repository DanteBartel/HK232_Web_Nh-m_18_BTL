
    document.getElementById('menuButton').addEventListener('click', function() {
        // Lấy ra dropdown menu
        var dropdownMenu = document.getElementById('dropdownMenu');
        
        // Kiểm tra nếu dropdown menu đang ẩn, thì hiển thị, ngược lại ẩn đi
        if (dropdownMenu.classList.contains('hidden')) {
            dropdownMenu.classList.remove('hidden');
        } else {
            dropdownMenu.classList.add('hidden');
        }
    });



    document.addEventListener('DOMContentLoaded', function() {
        toggleMenu();
    });
    
    window.addEventListener('resize', function() {
        toggleMenu();
    });
    
    function toggleMenu() {
        var menuButton = document.getElementById('menuButton');
        var flexMenu = document.getElementById('flexMenu');
    
        if (window.innerWidth < 768) { // Sử dụng 768px là một số ngưỡng phổ biến cho breakpoint md
            menuButton.style.display = 'flex';
            flexMenu.style.display = 'none';
        } else {
            menuButton.style.display = 'none';
            flexMenu.style.display = 'flex';
        }
    }
    
    