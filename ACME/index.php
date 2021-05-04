<?php
  require_once 'classes/validadados.php';
  $u = new Usuario; //chamando a classe
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagens/acmefavicon.ico">
    <link rel="stylesheet" href="css/estilo.css">  
    <title>ACME</title>
  </head>
  <body>
    <section class="container ">

        <div class="card mx-auto my-5 p-2">
          <div class="card-body ">

        <form  method="POST">
        <div class="logo text-center mt-3 mb-4">
          <img src="imagens/acmelogo.png"   class="imglogo">
        </div>

          <div class="mt-3">
            <label for="email" class="form-label mx-3">Email :</label>
            <input type="email" class="form-control "  id="email" name="email" aria-describedby="emailHelp">
          </div>

          <div class="mt-3">
            <label for="senha" class="form-label mx-3">Senha :</label>
            <input type="password" class="form-control" id="senha" name="senha">
          </div>

          <div class="form-check mx-3 mt-3">
                        <input class="form-check-input" type="checkbox" value=""  onclick="validando()"  id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                           Mostrar Senha
                        </label>
                        </div>

          <div class=" mt-4">
            <button class="btn btn-primary btn_entrar w-100" type="submit">Entrar</button>
          </div>

          <div class="text-center mt-4 mb-3">
          <a href="cadastrar.php" class="cadastra"><strong>Cadastre-se</strong></a>
          </div>
          
        </form>
        <?php
        
        if(isset($_POST['email']))
        {
            $email          = addslashes($_POST['email']);
            $senha         = addslashes($_POST['senha']);

            if(!empty($email) && !empty($senha))
            {
                $u->conectar("bd_aula8","localhost","root","root");

                if($u->msgerro == "")
                {
                  if($u->logar($email, $senha))
                  {
                    header("location: paginalogada.php");
                  }
                  else
                  {
                    header("location: paginaerro.php");
                  }
                }
              else
              { ?>
                  <div class="msg_erro">
                    <?php echo "Erro: ".$u->msgerro; ?>
                  </div>  
        <?php  }
          }
          else
          { ?>
              <div class="msg_erro">
                Preencha todos os dados para logar!
              </div>
  <?php   }  
        }    
  ?>
        
        </div>
      </div>
      </section>


      <script>
			function validando() {
				var  capturandoSenha = document.querySelector("#senha");
				
                if (capturandoSenha.type == "password" ) {
					capturandoSenha.type = "text";
				} else {
					capturandoSenha.type = "password";
				}
			}

		</script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>