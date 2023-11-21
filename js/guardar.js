// Get a reference to the auth service
//import firebase from "firebase/app";

var auth = firebase.auth();
const signupForm = document.querySelector('#register-form');
const messageElement = document.getElementById('message');
const messageError = document.getElementById('error-message');

signupForm.addEventListener('submit', (e) =>{
    e.preventDefault();
    const signupEmail= document.querySelector('#email').value;
    const signupContraseña= document.querySelector('#password').value;

    console.log(signupEmail,signupContraseña);

    auth.createUserWithEmailAndPassword(signupEmail, signupContraseña)
    .then((userCredential) => {
    // User registered successfully
    var user = userCredential.user;
    console.log("User registered:", user.email);
    
    messageError.innerHTML = "";
    messageElement.innerHTML = "Registro exitosamente!";
    
    })
    .catch((error) => {
    // Handle errors
    var errorCode = error.code;
    var errorMessage = error.message;
    console.error(errorCode, errorMessage);
    messageElement.innerHTML = "";
    
    messageError.innerHTML = "el correo ya ha sido registrado,intente con otro correo";
    });

})
