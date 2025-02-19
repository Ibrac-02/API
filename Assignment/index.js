function validateForm(){
    let username = document.getElementById('username');
    let password = document.getElementById('password');
    let username_error = document.getElementById('username_error');
    let password_error = document.getElementById('password_error');
    let form = document.getElementById('form');

    form.addEventListener("submit", (e) => {

        if (username.value === "") {
            e.preventDefault();
            user_error.textContent = "Please enter your username";
        }
        if (password.value === "") {
            e.preventDefault();
            password_error.textContent = "Please enter your password";
        }
    });
}