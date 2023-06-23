// $(document).ready(function(){
//     $('#subscribe').click(function(event){
//         event.preventDefault();
//         $.ajax(
//             {
//                 type: "POST",
//                 url: './controllers/account_ctrl.php',
//                 data: $('#subForm').serialize(),
//                 success:function(response){
//                     console.log(response);
//                     if(response == 1){
//                         window.location.assign("compte");
//                     }
//                     else{
//                         alert("Erreur !");
//                     }
//                 }
//             }
//         )
//     })
// })