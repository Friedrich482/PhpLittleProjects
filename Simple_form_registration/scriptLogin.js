// The eyes with the password

let eyeSlashed = document.getElementById('eyeSlashed');

eyeSlashed.addEventListener('click', () =>{
    let password = document.getElementById('password');
    if(password.type == 'password'){
        password.type = 'text';
        eyeSlashed.src = 'eye.png';
        eyeSlashed.title = "Hide the password"
    }
    else{
        password.type = 'password';
        eyeSlashed.src = 'eye_slashed.jpg';
        title="Display the password"
    }
   
})