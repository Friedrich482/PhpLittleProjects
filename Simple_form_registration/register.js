let registerForm = document.getElementById('registerForm');
let displayErrors = document.getElementById('displayErrors');

// Flag variable
let isErrorDisplayed = false;
// Prevent the submission of the form, so the data won't be sent and the user can correct them without having to re-entrer them

registerForm.addEventListener('submit', event => {
    
    if (!isErrorDisplayed) {
        
        event.preventDefault();
        document.getElementById('email').focus();

        // Display error message

        displayErrors.textContent = 'This email/username is already taken!❌';
        displayErrors.style.color = 'red';
        displayErrors.style.fontSize = '30px';

        isErrorDisplayed = true;
        
    }
    
})





