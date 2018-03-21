<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login com Google</title>
        
        <!-- Links do google para efetuar o login -->
        <meta name="google-signin-scope" content="profile email">
        <!--<meta name="google-signin-client_id" content="SUA_CHAVE.apps.googleusercontent.com">-->
        <meta name="google-signin-client_id" content="434380657560-1aubjsedos72o7r279mjjuhaavhp57b9.apps.googleusercontent.com">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
    </head>
    <body>
            <h4>Login com a Api do google</h4>
            <div class="testando" id="testando">
                <div class="g-signin2" data-onsuccess="onSignIn"></div>
            </div>

        <!-- Links do google para efetuar o login -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
            function onSignIn(googleUser) 
            {
                var profile     = googleUser.getBasicProfile();
                var userID      = profile.getId(); 
                var userName    = profile.getName(); 
                var userPicture = profile.getImageUrl(); 
                var userEmail   = profile.getEmail(); 			 
                var userToken   = googleUser.getAuthResponse().id_token; 

                //document.getElementById('msg').innerHTML = userEmail;
                if(userEmail !== ''){
                        var dados = {
                                userID:userID,
                                userName:userName,
                                userPicture:userPicture,
                                userEmail:userEmail
                        };
                        console.log(dados);
                        //verificação pessoal no php
    //				$.post('valida_google.php', dados, function(retorna){
    //					if(retorna === '"erro"'){
    //						var msg = "<div class='alert alert-danger'>Usuário não encontrado com esse e-mail!</div>";
    //						document.getElementById('msg').innerHTML = msg;
    //					}else{
    //						window.location.href = retorna;
    //					}
    //					
    //				});
                }else{
                    var msg = "Usuário não encontrado!";
                    document.getElementById('msg').innerHTML = msg;
                }
            }
        </script>
    </body>
</html>
