var info = {
    username: "Lemlem",
    password: "1234"
}
function user(){
   
var username = document.getElementById('username').value;
var password = document.getElementById('psw').value;
  if (username == info.username && password == info.password){
      window.location.href="./Week2-Project Home Page.html";
    //   alert('correct username or password');
   } else {
       alert('incorrect username or password');
   }
}