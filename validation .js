function showLogin() {
    document.getElementById('register-form').reset();
    document.getElementById('register-form').style.display = 'none';
    document.getElementById('login-container').style.display = 'block';
}

function showRegister() {
    document.getElementById('login-form').reset();
    document.getElementById('login-container').style.display = 'none';
    document.getElementById('register-form').style.display = 'block';
}
