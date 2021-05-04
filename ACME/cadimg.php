<?php
session_start();
if(!isset($_SESSION['id_user']))
{
    header("location:index.php");
    exit;
}
    include ("navbar.php");
    include ("head.php");
    include ("footer.php");
    include_once ("conexao.php")
?>

<style>
    .container{
    border-radius: 15px;
}
@media (max-width: 575.98px){
    #title {
    height: 5px;
    background-color: rgb(255, 69, 69);
    margin-left: auto;
    margin-right: auto;
    width: 85%;
    opacity: 60%;
    border-radius: 100rem;
}

#load_img{
    border-radius: 15rem;
    width: 100%;
    border: 2.5px solid black;
}

#load_img:hover{
    border: 2.5px solid rgb(255, 69, 69);
}

#descri_img{
    border-radius: 20px;
    width: 100%;
    border: 2.5px solid black;
}

#descri_img:hover{
    border: 2.5px solid rgb(255, 69, 69);
}
#cad_img{
    border-radius: 5rem;
    width: 65%;
    color: #fff;
    background-color: rgb(255, 69, 69);
    padding-top: 10px;
    padding-bottom: 10px;
    border: 3px solid #000;
    margin-left: 18.5%;
}
#cad_img:hover{
    color: #000;
    background-color: #fff;
    border: 3px solid rgb(255, 69, 69);
}
}
@media (min-width: 576px) and (max-width: 767.98px){
    #title {
    height: 5px;
    background-color: rgb(255, 69, 69);
    margin-left: auto;
    margin-right: auto;
    width: 75%;
    opacity: 60%;
    border-radius: 100rem;
}

#load_img{
    border-radius: 15rem;
    width: 100%;
    border: 2.5px solid black;
}

#load_img:hover{
    border: 2.5px solid rgb(255, 69, 69);
}

#descri_img{
    border-radius: 20px;
    width: 100%;
    border: 2.5px solid black;
}

#descri_img:hover{
    border: 2.5px solid rgb(255, 69, 69);
}
#cad_img{
    border-radius: 5rem;
    width: 55%;
    color: #fff;
    background-color: rgb(255, 69, 69);
    padding-top: 10px;
    padding-bottom: 10px;
    border: 3px solid #000;
    margin-left: 20%;
}
#cad_img:hover{
    color: #000;
    background-color: #fff;
    border: 3px solid rgb(255, 69, 69);
}
}
@media (min-width: 768px) and (max-width: 991.98px){
     #title {
    height: 5px;
    background-color: rgb(255, 69, 69);
    margin-left: auto;
    margin-right: auto;
    width: 75%;
    opacity: 60%;
    border-radius: 100rem;
}

#load_img{
    border-radius: 15rem;
    width: 100%;
    border: 2.5px solid black;
}

#load_img:hover{
    border: 2.5px solid rgb(255, 69, 69);
}

#descri_img{
    border-radius: 20px;
    width: 100%;
    border: 2.5px solid black;
}

#descri_img:hover{
    border: 2.5px solid rgb(255, 69, 69);
}
#cad_img{
    border-radius: 5rem;
    width: 45%;
    color: #fff;
    background-color: rgb(255, 69, 69);
    padding-top: 10px;
    padding-bottom: 10px;
    border: 3px solid #000;
    margin-left: 26%;
}
#cad_img:hover{
    color: #000;
    background-color: #fff;
    border: 3px solid rgb(255, 69, 69);
}
}
@media (min-width: 992px) and (max-width: 1199.98px){
    #title {
    height: 5px;
    background-color: rgb(255, 69, 69);
    margin-left: auto;
    margin-right: auto;
    width: 75%;
    opacity: 60%;
    border-radius: 100rem;
}

#load_img{
    border-radius: 15rem;
    width: 100%;
    border: 2.5px solid black;
}

#load_img:hover{
    border: 2.5px solid rgb(255, 69, 69);
}

#descri_img{
    border-radius: 20px;
    width: 100%;
    border: 2.5px solid black;
}

#descri_img:hover{
    border: 2.5px solid rgb(255, 69, 69);
}
#cad_img{
    border-radius: 5rem;
    width: 45%;
    color: #fff;
    background-color: rgb(255, 69, 69);
    padding-top: 10px;
    padding-bottom: 10px;
    border: 3px solid #000;
    margin-left: 26%;
}
#cad_img:hover{
    color: #000;
    background-color: #fff;
    border: 3px solid rgb(255, 69, 69)d;
}
}
@media (min-width: 1200px){
    #title {
    height: 5px;
    background-color: rgb(255, 69, 69);
    margin-left: auto;
    margin-right: auto;
    width: 75%;
    opacity: 60%;
    border-radius: 10rem;
}

#load_img{
    border-radius: 15rem;
    width: 100%;
    border: 2.5px solid black;
}

#load_img:hover{
    border: 2.5px solid rgb(255, 69, 69);
}

#descri_img{
    border-radius: 20px;
    width: 100%;
    border: 2.5px solid black;
}

#descri_img:hover{
    border: 2.5px solid rgb(255, 69, 69);
}
#cad_img{
    border-radius: 5rem;
    width: 45%;
    color: #fff;
    background-color: rgb(255, 69, 69);
    padding-top: 10px;
    padding-bottom: 10px;
    border: 3px solid #000;
    margin-left: 28%;
}
#cad_img:hover{
    color: #000;
    background-color: #fff;
    border: 3px solid rgb(255, 69, 69);
}
#linha{
    height: 4.5px;
    background-color: rgb(255, 69, 69);
    opacity: 55%;
    border-radius: 10rem;
} 
}
</style>

<div class="container text-center mt-5 mb-4">
        <h5 class="mt-4">Cadastro de Imagens no Sistema</h5>
        <hr id="title">
    </div>

    <div class="container">
        <section class="my-5">
            <form action="salva_imagem.php" class="w-50 mx-auto" method="POST" enctype="multipart/form-data">
                <label for="" class="form-label mx-2">Carregar Imagem :</label>
                <input type="file" class="form-control" id="load_img" name="load_img">
                <label for="" class="form-label  mx-2">Descrição da Imagem :</label>
                <input type="text" class="form-control" id="descri_img" name="descri_img">
                <p class="text-center">Tamanho do arquivo ou foto deve ser de 280x180px</p>
                <input type="submit" id="salvar" name="salvar" value="salvar" class="btn btn-primary">
            </form>
        </section>
    </div>


    <hr class="w-50 mx-auto  mt-4 " id = "linha">
    <div class="container  bg-light p-3 text-center">
    <div class="table">
        <form action="#" method="GET" class="mx-auto">
            <table class="table">
                <tr class="">
                    <th class="">
                        ID
                    </th>
                    <th class="">
                        Nome da Imagem
                    </th>
                    <th class="">
                        Nome do Arquivo
                    </th>
                    <th class="">
                        Ação
                    </th>
                </tr>
                <?php
                $sql = $mysqli->query("SELECT * FROM tb_img ORDER BY desc_img ASC");

                while($row = $sql->fetch_array()){
                    print   "<td width='5%'>".$row["id_img"]."</td>";
                    print   "<td width='40%'>".$row["desc_img"]."</td>";
                    print   "<td width='40%'><img class='imgtr' src='fotos/".$row["nome_img"]."' alt='".$row["desc_img"]."'</td>";
                    print   '<td width="5%">
                            <a href="excluirimg.php?idd='.$row["id_img"].'">Excluir</a>
                            </td>';
                    print '<tr>';
                }
            ?>
            </table>
        </form>
    </div>
    </div>
