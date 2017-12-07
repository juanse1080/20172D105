function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  perfil(cname);
  }

  function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for(var i = 0; i < ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') {
              c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length);
          }
      }
      return "";
  }
  function perfil(username){
    var audio = new Audio('/20172D105/conuss/audio/musica_espera.mp3');
    audio.play();
    document.getElementById('perfil').innerHTML = username;
    document.getElementById('login-modal').style.display = "none";
    document.getElementById('login').style.display = "inline";
  }
  function checkCookie(username,password) {
      var user=getCookie(username);
      if (user != "") {
          alert("Welcome again " + username);
          perfil(username);
      } else {
         if (username != "" && username != null && password != "" && password != null) {
             setCookie(username, password, 30);
         }
      }
  }
  function alertC(){
    user1=document.getElementById('username');
    pass1=document.getElementById('password');
    user=user1.value;
    pass=pass1.value;
    checkCookie(user,pass);
  }
  function verifyC(username){
    var pass=getCookie(username);
    document.getElementById("password").value=pass;
  }