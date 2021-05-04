<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <div class="container-fluid">
    <a class="navbar-brand text-primary mx-2" href="paginalogada.php"><strong>ACME</strong> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav  mb-2" >
        <li class="nav-item m-1">
          <a class="nav-link " aria-current="page" href="paginalogada.php" id="home">Início</a>
        </li>
        <li class="nav-item dropdown m-1">
          <a class="nav-link dropdown-toggle  " href="#" id="register" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastrar
          </a>
          <ul class="dropdown-menu" aria-labelledby="register">
            <li><a class="dropdown-item  "  href="usuarios.php" id="users">Usuários</a></li>
            <li><a class="dropdown-item  "  href="cadimg.php" id="teacher">Imagens</a></li>
          </ul>
        </li>
        </li>
        <li class="nav-item m-1">
          <a class="nav-link " href="#" tabindex="-1" id="contact">Contato</a>
        </li>
        <li class="nav-item dropdown m-1">
          <a class="nav-link dropdown-toggle  " href="#" id="name" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          </a>
          <ul class="dropdown-menu" aria-labelledby="name">
            <li><a class="dropdown-item   " href="#" id="profile">Perfil</a></li>
            <li><a class="dropdown-item " href="#" id="password">Trocar Senha</a></li>
            <li><a class="dropdown-item  " href="sair.php" id="exit">Sair</a></li>
          </ul>
        </li>
      </ul> 
    </div>
  </div>
</nav>
<style>
.card{
    border-radius: 15px;
    box-shadow: 0px 20px 15px 0px #00000054;
    border: 3.5px solid rgb(255, 69, 69);
}
.img{
    cursor: pointer;
    width: 10%;
    margin-top: 3%;
}

.img:hover{
transform: scale(1.1);
}

hr:not([size]) {
    height: 3.5px;
    background-color: rgb(255, 69, 69);
    opacity: 55%;
    border-radius: 10rem;

}

/*Extra small devices (portrait phones, less than 576px)*/
@media (max-width: 575.98px) {
    .card{
    width: 25%;
    margin-left: auto;
    margin-right: auto;
}
}

/*Small devices (landscape phones, 576px and up)*/
@media (min-width: 576px) and (max-width: 767.98px) {

}

/*Medium devices (tablets, 768px and up)*/
@media (min-width: 768px) and (max-width: 991.98px) {
   #ssd{
        width: 31%;
        margin-left: auto;
        margin-right: auto;
    }
}

/*Large devices (desktops, 992px and up)*/
@media (min-width: 992px) and (max-width: 1199.98px) {
 
}

/*Extra large devices (large desktops, 1200px and up)*/
@media (min-width: 1200px) {

}

</style>