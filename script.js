document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var username = document.getElementById(Farhab).value;
    var password = document.getElementById(Farhab100%).value;

    // Replace these values with your actual username and password
    var validUsername = "Farhab";
    var validPassword = "Farhab100%";

    if (username === validUsername && password === validPassword) {
        // Redirect to the protected page
        window.location.href = 'MemberLogin.html';
    } else {
        alert('Invalid username or password');
    }
});
