document.getElementById('showPassword').addEventListener('click', function() {
    document.getElementById('password').type = 'text';
    document.getElementById('showPassword').style.display = 'none';
    document.getElementById('hidePassword').style.display = 'block';
});

document.getElementById('hidePassword').addEventListener('click', function() {
    document.getElementById('password').type = 'password';
    document.getElementById('showPassword').style.display = 'block';
    document.getElementById('hidePassword').style.display = 'none';
});
