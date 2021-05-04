
<?php
    require_once 'classes/validadados.php';
    $u = new Usuario; //chamando a classe
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="./imagens/acmefavicon.ico">
    <link rel="stylesheet" href="./css/cadastra.css">
    <title>ACME - Cadastro</title>
</head>

<body>

     <section class="container" >
                <div class="card mx-auto my-5 p-2">
                    <div class="card-body">

                        <form method="POST">
                            <div class="text-center mt-3 mb-4">
                                <img id="img" src="./imagens/acmelogo.png"  class="imglogo">
                            </div>

                            <div class="mt-3">
                                <label for="nome" class="form-label mx-3">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nome" placeholder="Insira seu nome" maxlength="60">
                            </div>

                            <div class="mt-3">
                                <label for="email" class="form-label mx-3">E-mail:</label>
                                <input type="email" class="form-control " id="email" name="email" aria-describedby="area_de_email" placeholder="Insira um email para cadastrar" maxlength="50">
                            </div>

                            <div class="mt-3">
                                <label for="senha" class="form-label mx-3">Senha:</label>
                                <input type="password" class="form-control senha" id="senha" name="senha" aria-describedby="area_de_senha" placeholder="Crie uma senha para cadastrar" maxlength="32">
                            </div>

                            <div class="mt-3">
                                <label for="confirmar_senha" class="form-label mx-3">Confirmar senha:</label>
                                <input type="password" class="form-control senha" id="confirmar_senha" name="confirmar_senha" aria-describedby="area_de_confirmar_senha" placeholder="Confirme sua  senha criada para cadastrar" maxlength="32">
                            </div>

                        <div class="form-check mx-3 mt-3">
                        <input class="form-check-input" type="checkbox" value=""  onclick="validando()"  id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                           Mostrar Senha
                        </label>
                        </div>

                        <div class="position_btn mt-4">
                        <button class="btn btn-primary btn_cadastrar w-100 " type="submit">Cadastra</button>
                        </div>

                        <div class="text-center mt-4 mb-3">
                        <a href="index.php" class="logar"><strong>Fazer login</strong></a>
                        </div>
                        </form>
                        

                        <?php
                        if (isset($_POST['email'])) {
                            $nome             = addslashes($_POST['nome']);
                            $email            = addslashes($_POST['email']);
                            $senha            = addslashes($_POST['senha']);
                            $confirmar_senha  = addslashes($_POST['confirmar_senha']);

                            if (!empty($nome) && !empty($email) && !empty($senha)) 
                            {
                                $u->conectar("bd_acme", "localhost", "root", "");

                                if ($u->msgerro == "") 
                                {
                                    if ($senha == $confirmar_senha) 
                                    {
                                        if ($u->cadastrar($nome, $email, $senha)) 
                                        {
                                            ?>
                                               <div class="text-center mt-3 p-2" id="msg1">
                                                 Cadastrado com sucesso!
                                                </div>
                                             <?php
                                        } 
                                        else 
                                        {
                                            ?>                     
                                               <div class="text-center mt-3 p-2" id="msg2">
                                                 Usuario já cadastrado!
                                               </div>
                                            <?php
                                        }
                                    }
                                else 
                                {
                                  ?>                     
                                     <div class="text-center mt-3 p-2" id="msg3">
                                        A senha e a senha de confirmação não conferem!
                                     </div>
                                   <?php
                                }
                            } 
                            else 
                            {
                                ?>                     
                                   <div class="text-center mt-3 p-2" id="msg4">
                                     <?php echo "Erro: " . $u->msgerro;?>
                                   </div>
                                <?php
                            }
                        }
                         else
                          {
                            ?>                     
                               <div class="text-center mt-3 p-2" id="msg5">
                                  Preencha todos os campos!
                               </div>
                            <?php
                        }
                    }
                        ?>
            </div>
        </div>
    </section>

    <script>
			function validando() {
				var  capturandoSenha = document.querySelector("#senha");
                var  capturandoConfirmarSenha = document.querySelector("#confirmar_senha");
				
                if (capturandoSenha.type == "password" && capturandoConfirmarSenha.type == "password") {
					capturandoSenha.type = "text";
                    capturandoConfirmarSenha.type = "text";
				} else {
					capturandoSenha.type = "password";
                    capturandoConfirmarSenha.type = "password";
				}
			}

		</script>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>