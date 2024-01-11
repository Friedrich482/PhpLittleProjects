let loginForm = document.getElementById('loginForm');
let displayErrors = document.getElementById('displayErrors');

// Flag variable

let isErrorDisplayed = false;

// Prevent the submission of the form, so the data won't be sent and the user can correct them without having to re-entrer them

loginForm.addEventListener('submit', event => {
    
    if (!isErrorDisplayed) {
        
        event.preventDefault();
        document.getElementById('username').focus();

        // Display error message
        
        displayErrors.textContent = 'User not found! (ಥ _ ಥ)';
        displayErrors.style.color = 'red';
        displayErrors.style.fontSize = '30px';
        isErrorDisplayed = true;
        
    }
    
})   