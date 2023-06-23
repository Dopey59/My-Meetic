$(document).ready(function(){
    $('#submitCnx').click(function(event){
        event.preventDefault();
        $.ajax(
            {
                type : "POST",
                url : './controllers/user.class.php',
                data : $('#connectForm').serialize(),
                success:function(response){
                    if(response == 1){
                        
                        window.location.assign("accueil");
                    }
                    else{
                        alert ("Veuillez entrer des indentifiants valides !");
                    }
                }
            }
        )
    })
})