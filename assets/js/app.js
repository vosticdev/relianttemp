function loginUser() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    $.ajax({
        type: "POST",
        url: "modules/login_process.php",
        data: {
            email: email,
            password: password
        },
        success: function(response) {
            if (response === "success") {
                Toastify({
                    text: '✅ You logged in!',
                    className: 'toast-custom',
                }).showToast();
            } else {
                Toastify({
                    text: response,
                    className: 'error',
                    style: {
                        background: 'linear-gradient(to right, #ff416c, #ff4b2b)',
                    }
                }).showToast();
            }
        }
    });
}

function registerUser() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    $.ajax({
        type: "POST",
        url: "modules/signup_process.php",
        data: {
            username: username,
            email: email,
            password: password
        },
        success: function(response) {
            if (response === "success") {
                Toastify({
                    text: '✅ You have successfully registered!',
                    className: 'toast-custom',
                }).showToast();
            } else {
                Toastify({
                    text: response,
                    className: 'error',
                    style: {
                        background: 'linear-gradient(to right, #ff416c, #ff4b2b)',
                    }
                }).showToast();
            }
        }
    });
}
