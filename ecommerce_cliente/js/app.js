  var firebaseConfig = {
    apiKey: "AIzaSyD_WrvwWzTA5CgEpi03JzWIIxMJBU4RQh4",
    authDomain: "fisitexcli.firebaseapp.com",
    databaseURL: "https://fisitexcli.firebaseio.com",
    projectId: "fisitexcli",
    storageBucket: "fisitexcli.appspot.com",
    messagingSenderId: "992774410283",
    appId: "1:992774410283:web:ce4b267d5f9b88dff8da6e",
    measurementId: "G-DM643882QH"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);


 function IngresoGoogle() {
    if (!firebase.auth().currentUser) {
      var provider = new firebase.auth.GoogleAuthProvider();

      provider.addScope('https://www.googleapis.com/auth/plus.login');
      firebase.auth().signInWithPopup(provider).then(function(result){
        var token = result.credential.accessToken;
        var user = result.user;
        var name = result.user.displayName;
        var correo = result.user.email;
        var foto = result.user.photoURL;
        var red = 'Google';
        location.href = 'login/index.php?name=' + name + '&correo=' + correo + '&foto=' + foto + '&red=' + red;
      }).catch(function(error){
        var errorCode = error.code;
        if (errorCode === 'auth/account-exist-with-diferent-credential') {
          alert('El usuario ya existe');
        }
      });
    }else{
      firebase.auth().signOut();
    }
  }

  document.getElementById('btn-Google').addEventListener('click',IngresoGoogle,false);


