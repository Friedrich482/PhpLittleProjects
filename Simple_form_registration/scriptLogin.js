console.log('Form submission intercepted');
document.addEventListener('DOMContentLoaded', function() {
    
    const loginForm = document.getElementById('loginForm');
    const displayErrors = document.getElementById('displayErrors');

    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(loginForm);
        fetch('login_process.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                displayErrors.textContent = data.message;
                displayErrors.style.color = 'red';
            } else {
                window.location.href = data.redirect;
            }
        })
        .catch(error => console.error('Error:', error));
    });
});


