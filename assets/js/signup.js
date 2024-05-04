// Password
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

// Confirm Password
document.getElementById('con_showPassword').addEventListener('click', function() {
    document.getElementById('con_password').type = 'text';
    document.getElementById('con_showPassword').style.display = 'none';
    document.getElementById('con_hidePassword').style.display = 'block';
});

document.getElementById('con_hidePassword').addEventListener('click', function() {
    document.getElementById('con_password').type = 'password';
    document.getElementById('con_showPassword').style.display = 'block';
    document.getElementById('con_hidePassword').style.display = 'none';
});
