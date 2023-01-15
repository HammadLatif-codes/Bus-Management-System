$(document).ready(function() { 
    $( "#submit" ).on( "click", function() {
        
     let dloc = $('#dloc').val()
     let ploc = $('#ploc').val()
     let rdate = $('#rdate').val()
     let rid = $('#rid').val()
     $('.errorMsg').hide()


            // if(RDate(rdate) == false){   
            //     $('#errorRDate').show();   
            //     $('#rdate').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')}); 
            //     $('#rdate').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')})
                
            // return false;    
            // }

            if(PickLoc(ploc) == false){   
                $('#errorPickLoc').show();   
                $('#ploc').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')}); 
                $('#ploc').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')})
                
                return false;    
            }
        
            else if(DropLoc(dloc) == false){   
                $('#errorDropLoc').show();   
                $('#dloc').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')});
                $('#dloc').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')});
                
                return false;    
            }
            
            
            else if(RID(rid) == false){   
                $('#errorRID').show();   
                $('#rid').animate({left: '-=10px'}, 20, function() {console.log('Animate Completed')}); 
                $('#rid').animate({left: '+=10px'}, 20, function() {console.log('Animate Completed')})
                        
                return false;    
            }       
    })
})

function RDate(rdate){
    let rdate_pattern = /^(0[1-9]|1[0-2])\/(0[1-9]|[1-2][0-9]|3[0-1])\/(20[0-9][0-9]|19[0-9][0-9])$/
    if(rdate_pattern.test(rdate)){
        return true;
    }else{
        return false;
    }
}

function PickLoc(ploc){
    let ploc_pattern = /^[a-zA-Z0-9_\s@#$%^&*()+\-=\[\]{};':"\\|,.<>\/?]{1,75}$/
    if(ploc_pattern.test(ploc)){
        return true;
    }else{
        return false;
    }
}

function DropLoc(dloc){
    let dloc_pattern = /^[a-zA-Z0-9_\s@#$%^&*()+\-=\[\]{};':"\\|,.<>\/?]{1,75}$/
    if(dloc_pattern.test(dloc)){
        return true;
    }else{
        return false;
    }
}



function RID(rid){
    let rid_pattern = /^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]+$/
    if(rid_pattern.test(rid)){
        return true;
    }else{
        return false;
    }
}