console.log('Form submission intercepted');
document.addEventListener('DOMContentLoaded', function() {
    const registerForm = document.getElementById('registerForm');
    const displayErrors = document.getElementById('displayErrors');
    const usernameInput = document.getElementById('username'); 
    // const passwordInput = document.getElementById('password');
   
    registerForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(registerForm);
        fetch('register_process.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                displayErrors.textContent = data.message;
                displayErrors.style.color = 'red';

                if(data.message.includes("This email/username is already taken ❌")){
                    usernameInput.focus();
                }
                
            } else {
                window.location.href = data.redirect;
            }
        })
        .catch(error => console.error('Error:', error));
    });
});
