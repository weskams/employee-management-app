function login() {
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    if (username === 'admin' && password === 'password') {
        alert('Login successful!');
        window.location.href = 'index.html';
    } else {
        alert('Invalid username or password');
    }

}