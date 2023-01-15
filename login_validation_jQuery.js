$(document).ready(function() { 
    $( "#submit" ).on( "click", function() {
        
     let username = $('#username').val();
     let password = $('#password').val();
     $('.errorMsg').hide();
     
     if(Username(username) == false){   
           $('#errorusername').show();   
           $('#username').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')}); 
           $('#username').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')});
           $('#username').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')}); 
           $('#username').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')});  
           $('#username').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')}); 
           $('#username').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')});
           $('#username').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')}); 
           $('#username').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')}); 
           
           return false;    
     }
     else if(Password(password) == false){    
           $('#errorpassword').show();     
           $('#password').animate({left: '+=10px'}, 20); 
           $('#password').animate({left: '-=10px'}, 20);
           $('#password').animate({left: '+=10px'}, 20); 
           $('#password').animate({left: '-=10px'}, 20); 
           $('#password').animate({left: '+=10px'}, 20); 
           $('#password').animate({left: '-=10px'}, 20);
           $('#password').animate({left: '+=10px'}, 20); 
           $('#password').animate({left: '-=10px'}, 20); 
           return false;             
     }
    });
    });
    function Username(username){
        let name_pattern = /^(?=.{8,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+(?<![_.])$/;
        if(name_pattern.test(username)){
            return true;
        }else{
            return false;
        }
    }
    function Password(password){
      //  Minimum eight characters, at least one letter, one number and one special character:
        let password_pattern =/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
        if(password_pattern.test(password)){
            return true;
        }else{
            return false;
        }
    }
