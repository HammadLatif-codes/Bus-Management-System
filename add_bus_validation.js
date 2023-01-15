$(document).ready(function() { 
    $( "#submit" ).on( "click", function() {
        
     let destination = $('#destination').val()
     let routes = $('#routes').val()
    //  let time = $('#time').val();
     $('.errorMsg').hide()
     
     if(Destination(destination) == false){   
           $('#errordestination').show();   
           $('#destination').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')}); 
           $('#destination').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')});
           $('#destination').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')}); 
           $('#destination').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')});  
           $('#destination').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')}); 
           $('#destination').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')});
           $('#destination').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')}); 
           $('#destination').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')});  
           
           return false;    
     }
     else if(Routes(routes) == false){   
        $('#errorRoutes').show();   
        $('#routes').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')}); 
        $('#routes').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')});
        $('#routes').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')}); 
        $('#routes').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')});  
        $('#routes').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')}); 
        $('#routes').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')});
        $('#routes').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')}); 
        $('#routes').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')});  
        
        return false;    
        }
    })
})

function Destination(destination){
    let des_pattern =  /^[a-zA-Z0-9_\s@#$%^&*()+\-=\[\]{};':"\\|,.<>\/?]{1,75}$/
    if(des_pattern.test(destination)){
        return true
    }else{
        return false
    }
}

function Routes(routes){
    let routes_pattern =  /^[a-zA-Z0-9_\s@#$%^&*()+\-=\[\]{};':"\\|,.<>\/?]{1,75}$/
    if(routes_pattern.test(routes)){
        return true;
    }else{
        return false;
    }
}