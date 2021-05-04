<?php
session_start();
if(!isset($_SESSION['id_user']))
{
    header("location:index.php");
    exit;
}
    
    include_once ("head.php");
    include_once ("footer.php");
    include_once ("conexao.php");
    include_once ("navbar.php")  
?>

<style>
    
.container{
    border-radius: 15px;
}

@media (max-width: 575.98px) 
{
    #title{
    width: 95%;
    height: 4.5px;
    background-color: rgb(255, 69, 69);
    opacity: 55%;
    border-radius: 10rem;
}
#cadastrar{
        color: #fff;
        background-color: rgb(255, 69, 69);
        width: 65%;
        padding-top: 11px;
        padding-bottom: 11px;
        border-radius: 2rem;
        border: 3px solid #000;
}
#cadastrar:hover{
        color: #000;
        background-color: #fff;
        border: 3px solid rgb(255, 69, 69);
}
.form{
width: 65%;
margin-left: auto;
margin-right: auto;
}

#buscar{
background-color:  rgb(255, 69, 69);
border-radius: 0px 25px 25px 0px;
height: 45px;
width: 45%;
color: #fff;
border: 3px solid #000;
}

#buscar:hover{
color: #000;
box-shadow: 0px 0px 7px 0px #000;
border: 3px solid #0d6efd;
background-color:  #fff;
}

#pesquisa{
border-radius: 25px 0px 0px 25px;
height: 45px;
border: 3px solid #000;
}

#pesquisa:hover{
color: #000;
box-shadow: 0px 0px 7px 0px #000;
border: 3px solid #0d6efd;
background-color:  #fff;
}
}

/*Small devices (landscape phones, 576px and up)*/
@media (min-width: 576px) and (max-width: 767.98px)
{
    #title{
    width: 95%;
    height: 4.5px;
    background-color: rgb(255, 69, 69);
    opacity: 55%;
    border-radius: 10rem;
}
#cadastrar{
        color: #fff;
        background-color: rgb(255, 69, 69);
        width: 65%;
        padding-top: 11px;
        padding-bottom: 11px;
        border-radius: 2rem;
        border: 3px solid #000;
}
#cadastrar:hover{
        color: #000;
        background-color: #fff;
        border: 3px solid rgb(255, 69, 69);
}
.form{
width: 65%;
margin-left: auto;
margin-right: auto;
}

#buscar{
background-color:  rgb(255, 69, 69);
border-radius: 0px 25px 25px 0px;
height: 45px;
width: 45%;
color: #fff;
border: 3px solid #000;
}

#buscar:hover{
color: #000;
box-shadow: 0px 0px 7px 0px #000;
border: 3px solid #0d6efd;
background-color:  #fff;
}

#pesquisa{
border-radius: 25px 0px 0px 25px;
height: 45px;
border: 3px solid #000;
}

#pesquisa:hover{
color: #000;
box-shadow: 0px 0px 7px 0px #000;
border: 3px solid #0d6efd;
background-color:  #fff;
}
}

/*Medium devices (tablets, 768px and up)*/
@media (min-width: 768px) and (max-width: 991.98px) 
{
    #title{
    width: 75%;
    height: 4.5px;
    background-color: rgb(255, 69, 69);
    opacity: 55%;
    border-radius: 10rem;
}
#cadastrar{
        color: #fff;
        background-color: rgb(255, 69, 69);
        width: 55%;
        padding-top: 11px;
        padding-bottom: 11px;
        border-radius: 2rem;
        border: 3px solid #000;
}
#cadastrar:hover{
        color: #000;
        background-color: #fff;
        border: 3px solid rgb(255, 69, 69);
}
.form{
width: 55%;
margin-left: auto;
margin-right: auto;
}

#buscar{
background-color:  rgb(255, 69, 69);
border-radius: 0px 25px 25px 0px;
height: 45px;
width: 55%;
color: #fff;
border: 3px solid #000;
}

#buscar:hover{
color: #000;
box-shadow: 0px 0px 7px 0px #000;
border: 3px solid rgb(255, 69, 69);
background-color:  #fff;
}

#pesquisa{
border-radius: 25px 0px 0px 25px;
height: 45px;
border: 3px solid #000;
}

#pesquisa:hover{
color: #000;
box-shadow: 0px 0px 7px 0px #000;
border: 3px solid rgb(255, 69, 69);
background-color:  #fff;
}
}

/*Large devices (desktops, 992px and up)*/
@media (min-width: 992px) and (max-width: 1199.98px) 
{
    #title{
    width: 65%;
    height: 4.5px;
    background-color: rgb(255, 69, 69);
    opacity: 55%;
    border-radius: 10rem;
}
#cadastrar{
        color: #fff;
        background-color: rgb(255, 69, 69);
        width: 45%;
        padding-top: 11px;
        padding-bottom: 11px;
        border-radius: 2rem;
        border: 3px solid #000;
}
#cadastrar:hover{
        color: #000;
        background-color: #fff;
        border: 3px solid rgb(255, 69, 69);
}
.form{
width: 45%;
margin-left: auto;
margin-right: auto;
}

#buscar{
background-color:  rgb(255, 69, 69);
border-radius: 0px 25px 25px 0px;
height: 45px;
width: 48%;
color: #fff;
border: 3px solid #000;
}

#buscar:hover{
color: #000;
box-shadow: 0px 0px 7px 0px #000;
border: 3px solid rgb(255, 69, 69);
background-color:  #fff;
}

#pesquisa{
border-radius: 25px 0px 0px 25px;
height: 45px;
border: 3px solid #000;
}

#pesquisa:hover{
color: #000;
box-shadow: 0px 0px 7px 0px #000;
border: 3px solid rgb(255, 69, 69);
background-color:  #fff;
}
}

/*Extra large devices (large desktops, 1200px and up)*/
@media (min-width: 1200px) 
{
#title{
    width: 55%;
    height: 4.5px;
    background-color: rgb(255, 69, 69);
    opacity: 55%;
    border-radius: 10rem;
}
#cadastrar{
        color: #fff;
        background-color: rgb(255, 69, 69);
        width: 30%;
        padding-top: 11px;
        padding-bottom: 11px;
        border-radius: 2rem;
        border: 3px solid #000;
}
#cadastrar:hover{
        color: #000;
        background-color: #fff;
        border: 3px solid rgb(255, 69, 69);
}
.form{
width: 29.5%;
margin-left: auto;
margin-right: auto;
}

#buscar{
background-color:  rgb(255, 69, 69);
border-radius: 0px 25px 25px 0px;
height: 45px;
width: 42%;
color: #fff;
border: 3px solid #000;
}

#buscar:hover{
color: #000;
box-shadow: 0px 0px 7px 0px #000;
border: 3px solid rgb(255, 69, 69);
background-color:  #fff;
}

#pesquisa{
border-radius: 25px 0px 0px 25px;
height: 45px;
border: 3px solid #000;
}

#pesquisa:hover{
color: #000;
box-shadow: 0px 0px 7px 0px #000;
border: 3px solid rgb(255, 69, 69);
background-color:  #fff;
}


}
</style>

    <div class="container text-center mt-5 mb-5">
        <h5 class="mt-4">Usuários Cadastrados no Sistema</h5>
        <hr class="mx-auto" id="title">
    </div>

    <div class="container-fluid  text-center mt-5 mb-5">
        <a href="cad_user.php"><button class="btn" id="cadastrar" type="button">Adicionar Usuário</button></a>
    </div>

    <div class="container-fluid   mt-4 mb-5" >
        <form method="POST" action="#" class="d-flex form">
            <input class="form-control" id="pesquisa" name="pesquisa" type="text" placeholder="Localizar" aria-label="Search">
            <button class="btn" id="buscar" name="buscar" type="submit">Buscar</button>
        
    </div>

   <div class="container  bg-light p-3">
       <table class="table text-center ">
           <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Senha</th>
                <th>Ação</th>
           </tr>
       <?php
                       
            $busca = $_POST['pesquisa'];
            $results = $mysqli->query("SELECT * FROM bd_cadastro WHERE nome LIKE '%$busca%' ORDER BY nome ASC");
            while($row = $results->fetch_array()){
                $id = $row["id_user"];
                print '<tr>';
                    print '<td>'.$row["id_user"].'</td>';
                    print '<td>'.$row["nome"].'</td>';
                    print '<td>'.$row["email"].'</td>';
                    print '<td>*****</td>';
                    print '<td>
                             <a href="editar.php?ide='.$row["id_user"].'">Editar | </a>
                             <a href="excluir.php?idd='.$row["id_user"].'">Excluir</a>
                    </td>';
                print '</tr>';
            }    
       ?>
        </table>
   </div>
   
<?php
   echo '<div class="text-center mt-3"> Registros encontrados: '.$results->num_rows.'</div>';

   $results->free();
   $mysqli->close();
?>
   </form>