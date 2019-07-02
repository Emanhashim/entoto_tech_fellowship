function validateForm(){
    
    var userrec={
        
        password:"12345",
        Email:"emanhashim42@gmail.com"
    };
   
  
    // var name =document.forms["formm"]["name"].value;
    var pass =document.forms["formm"]["pass"].value;
    var email =document.forms["formm"]["email"].value;
    
    {
        //var x = document.forms["Formm"]["eman"].value;
        if (pass === userrec.password && email === userrec.Email){
            alert("you are in!");
            window.open("./About.html")
        }
            else {
                alert("Incorrect filled!")
            }
        }
    }
