var auth = firebase.auth();

const loginForm = document.querySelector('#login-form');
const messageElement = document.getElementById('message');
loginForm.addEventListener('submit', (e) =>{
    e.preventDefault();
    const signinEmail= document.querySelector('#email').value;
    const signinContraseña= document.querySelector('#password').value;
    console.log(signinEmail,signinContraseña);

    auth.signInWithEmailAndPassword(signinEmail, signinContraseña)
    .then((userCredential) => {
    // User logged in successfully
    var user = userCredential.user;
    console.log("User logged in:", user.email);
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
          // User is signed in, redirect to another HTML file
          window.location.replace("main.html");
        } else {
          // User is signed out
        }
      });
    })
    .catch((error) => {
    // Handle errors
    var errorCode = error.code;
    var errorMessage = error.message;
    console.error(errorCode, errorMessage);
    messageElement.innerHTML = "Inicio de sesion invalida, intente nuevamente.";
    });

})

