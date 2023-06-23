$(document).ready(function(){
    $('#subscribe').click(function(event){
        event.preventDefault();
        $.ajax(
            {
                type: "POST",
                url: './controllers/subs.php',
                data: $('#subForm').serialize(),
                success:function(response){
                    console.log(response);
                    if(response == 1){
                        window.location.assign("accueil");
                    }
                    else{
                        alert("Erreur !");
                    }
                }
            }
        )
    })
})