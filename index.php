<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo/style.css">
    <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <title>Login</title>
</head>

<body>
    
    <div class="container">
    
     <h2>LOGIN</h2>
         <div class="form-container">
             <form action="pages/index_validar.php" method="POST">
                <label><b>Usuário</b></label>
                <input type="text" placeholder="Usuário" name="txtUsuario" required=""><br>

                <label><b>Senha</b></label>
                <input type="password" placeholder="Senha" name="txtSenha" required=""><br>

                <button type="submit">Enviar</button>
              </form>
          </div>
        
    </div>

</body>
</html>