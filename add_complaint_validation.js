$(document).ready(function() { 
    $( "#submit" ).on( "click", function() {
        
     let complaints = $('#complaints').val()
     let id = $('#id').val()
    //  let time = $('#time').val();
     $('.errorMsg').hide()
     
     if(Complaints(complaints) == false){   
           $('#errorComplaints').show();   
           $('#complaints').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')});
           $('#complaints').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')});
           
           return false;    
     }
     else if(ID(id) == false){   
        $('#errorID').show();   
        $('#id').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')}); 
        $('#id').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')})
        
        return false;    
        }
    })
})

function Complaints(complaints){
    let complaint_pattern = /^[a-zA-Z0-9_\s@#$%^&*()+\-=\[\]{};':"\\|,.<>\/?]{1,75}$/
    if(complaint_pattern.test(complaints)){
        return true;
    }else{
        return false;
    }
}

function ID(id){
    let id_pattern = /^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]+$/
    if(id_pattern.test(id)){
        return true;
    }else{
        return false;
    }
}