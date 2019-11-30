 var firebaseConfig = {
    apiKey: "AIzaSyCRn1Oy2HVFEJ7QPVk54kMLnks5g4iasPc",
    authDomain: "fisitex-f8765.firebaseapp.com",
    databaseURL: "https://fisitex-f8765.firebaseio.com",
    projectId: "fisitex-f8765",
    storageBucket: "fisitex-f8765.appspot.com",
    messagingSenderId: "514416727575",
    appId: "1:514416727575:web:951417cbe9327dcb796e52",
    measurementId: "G-WL0YEWH8PB"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

const txtEmail = document.getElementById('correo');
const txtPassword = document.getElementById('pass');
const btnLogin = document.getElementById('login');
btnLogin.addEventListener('click', e => {
  const email = txtEmail.value;
  const pass = txtPassword.value;
  const auth = firebase.auth();

  const promesa = auth.signInWithEmailAndPassword(email,pass);
  promesa.catch(e => location.href = "admin/error.php");

});


firebase.auth().onAuthStateChanged(firebaseUser => {
  if (firebaseUser) {
      location.href="admin";
    }
});
