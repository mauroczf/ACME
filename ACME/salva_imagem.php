<?php
    include_once ('conexao.php');

    if(isset($_POST['salvar'])){

        $foto       = $_FILES['load_img'];
        $desc_img   = $_POST['descri_img'];

        if(!empty($foto["name"])){
            $largura    = 280;
            $altura     = 180;
            $tamanho    = 13000;
            $error = array();

            if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/",  $foto["type"]))
            {
               $error[1] = "Isso não é uma imagem.";
            }
            $dimensoes = getimagesize($foto["tmp_name"]);

            if($dimensoes[0] > $largura){
                $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixes";
            }
            if($dimensoes[1] > $altura){
                $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixes";
            }
            if($foto["size"] > $tamanho){
                $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
            }
            if(count($error) == 0){
                preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
            
                $nome_imagem = md5(uniqid(time())).".".$ext[1];
                $caminho_imagem = "fotos/".$nome_imagem;
                move_uploaded_file($foto["tmp_name"], $caminho_imagem);

                $sql = "INSERT INTO tb_img VALUE (null, '$nome_imagem', '$desc_img')";
                $result_img = mysqli_query($mysqli, $sql);

                if($result_img){
                    header("Location: cadimg.php");
                }
            }

            if(count($error) != 0){
                foreach ($error as $erro){
                    echo $erro."<br />";
                }
            }
        }
    }

?>