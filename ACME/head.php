<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="imagens/acmefavicon.ico">
    <!-- Bootstrap CSS -->
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>
    <title>ACME - Comércio Eletrônico SA</title>
  </head>
  <body>
  <style>
    body{
    background-color: rgb(255, 69, 69);
}

@media (max-width: 575.98px) 
{
.navbar-nav{
  margin-left: 1%;
  margin-right: 1%;
  margin-top: 2%;
}

#line {
    height: 4px;
    margin: .5rem 0;
    overflow: hidden;
    background-color: rgb(255, 69, 69);
}

.nav-item{
  text-align: center;
}

.dropdown-menu{
  text-align: center;
}
@keyframes anima_menu {

0%{
  background: linear-gradient(45deg, rgba(73, 73, 73, 0.205),rgb(255, 69, 69));
}

100%{
  background:linear-gradient(-45deg, rgba(73, 73, 73, 0.205),rgb(255, 69, 69));
}

}

#home{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#home:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#register{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#register:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#users{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#users:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#student{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#student:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#teacher{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#teacher:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}


#report{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#report:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#info{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#info:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#contact{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#contact:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#name{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#name:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#profile{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#profile:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#password{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#password:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top:  2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#exit{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#exit:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top:  2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}
}

/*Small devices (landscape phones, 576px and up)*/
@media (min-width: 576px) and (max-width: 767.98px)
{
  .navbar-nav{
  margin-top: 2%;
}

#line {
    height: 4px;
    margin: .5rem 0;
    overflow: hidden;
    background-color: rgb(255, 69, 69);
}

.nav-item{
  text-align: center;
}

.dropdown-menu{
  text-align: center;
}
@keyframes anima_menu {

0%{
  background: linear-gradient(45deg, rgba(73, 73, 73, 0.205),rgb(255, 69, 69));
}

100%{
  background:linear-gradient(-45deg, rgba(73, 73, 73, 0.205),rgb(255, 69, 69));
}

}

#home{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#home:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#register{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#register:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#users{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#users:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#student{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#student:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#teacher{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#teacher:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}


#report{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#report:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#info{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#info:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#contact{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#contact:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#name{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#name:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#profile{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#profile:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#password{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#password:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top:  2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#exit{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#exit:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top:  2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

}

/*Medium devices (tablets, 768px and up)*/
@media (min-width: 768px) and (max-width: 991.98px) 
{
  .navbar-nav{
  margin-top: 2%;
}

#line {
    height: 4px;
    margin: .5rem 0;
    overflow: hidden;
    background-color: rgb(255, 69, 69);
}

.nav-item{
  text-align: center;
}

.dropdown-menu{
  text-align: center;
}
@keyframes anima_menu {

0%{
  background: linear-gradient(45deg, rgba(73, 73, 73, 0.205),rgb(255, 69, 69));
}

100%{
  background:linear-gradient(-45deg, rgba(73, 73, 73, 0.205),rgb(255, 69, 69));
}

}

#home{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#home:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#register{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#register:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#users{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#users:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#student{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#student:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#teacher{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#teacher:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}


#report{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#report:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#info{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#info:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#contact{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#contact:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#name{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#name:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#profile{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#profile:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#password{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#password:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top:  2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#exit{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#exit:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top:  2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

}

/*Large devices (desktops, 992px and up)*/
@media (min-width: 992px) and (max-width: 1199.98px) 
{
  .navbar-nav{
  margin-left: auto;
  margin-right: auto;
}

#line {
    height: 4px;
    margin: .5rem 0;
    overflow: hidden;
    background-color: rgb(255, 69, 69);
}
.nav-item{
  width: 130px;
  text-align: center;
  font-size: 18px;
}

.dropdown-menu{
  font-size: 15.5px;
  margin-left:-30px ;
}

.navbar-brand{
font-size: 19px;
}
@keyframes anima_menu {

0%{
  background: linear-gradient(45deg, rgba(73, 73, 73, 0.205),rgb(255, 69, 69));
}

100%{
  background:linear-gradient(-45deg, rgba(73, 73, 73, 0.205),rgb(255, 69, 69));
}

}

#home{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#home:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#register{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#register:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#users{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#users:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#student{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#student:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#teacher{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#teacher:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}


#report{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#report:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#info{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#info:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#contact{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#contact:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#name{
color:rgb(255, 69, 69);
border: 2.5px solid transparent;
border-radius: 2rem;
}

#name:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#profile{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#profile:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#password{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#password:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top:  2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#exit{
color:rgb(255, 69, 69);
border-top: 2.5px solid transparent;
border-bottom: 2.5px solid transparent;
}

#exit:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top:  2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}
}

/*Extra large devices (large desktops, 1200px and up)*/
@media (min-width: 1200px) 
{
  .navbar-nav{
  margin-left: auto;
  margin-right: auto;
}

#line {
    height: 4px;
    margin: .5rem 0;
    overflow: hidden;
    background-color: rgb(255, 69, 69);
}
.nav-item{
  width: 135px;
  text-align: center;
  font-size: 20px;
 
}

.navbar-brand{
font-size: 22.5px;
}

@keyframes anima_menu {

  0%{
    background: linear-gradient(45deg, rgba(73, 73, 73, 0.205),rgb(255, 69, 69));
  }

  100%{
    background:linear-gradient(-45deg, rgba(73, 73, 73, 0.205),rgb(255, 69, 69));
  }

}

.dropdown-menu{
  font-size: 17px;
}
#home{
  color:rgb(255, 69, 69);
  border: 2.5px solid transparent;
  border-radius: 2rem;
}

#home:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#register{
  color:rgb(255, 69, 69);
  border: 2.5px solid transparent;
  border-radius: 2rem;
}

#register:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#users{
  color:rgb(255, 69, 69);
  border-top: 2.5px solid transparent;
  border-bottom: 2.5px solid transparent;
}

#users:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#student{
  color:rgb(255, 69, 69);
  border-top: 2.5px solid transparent;
  border-bottom: 2.5px solid transparent;
}

#student:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#teacher{
  color:rgb(255, 69, 69);
  border-top: 2.5px solid transparent;
  border-bottom: 2.5px solid transparent;
}

#teacher:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}


#report{
  color:rgb(255, 69, 69);
  border: 2.5px solid transparent;
  border-radius: 2rem;
}

#report:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#info{
  color:rgb(255, 69, 69);
  border: 2.5px solid transparent;
  border-radius: 2rem;
}

#info:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#contact{
  color:rgb(255, 69, 69);
  border: 2.5px solid transparent;
  border-radius: 2rem;
}

#contact:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#name{
  color:rgb(255, 69, 69);
  border: 2.5px solid transparent;
  border-radius: 2rem;
}

#name:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
box-shadow: 0px 0px 11px 0px #000;
border: 2.5px solid #000;
transition: 0.5s;
}

#profile{
  color:rgb(255, 69, 69);
  border-top: 2.5px solid transparent;
  border-bottom: 2.5px solid transparent;
}

#profile:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top: 2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#password{
  color:rgb(255, 69, 69);
  border-top: 2.5px solid transparent;
  border-bottom: 2.5px solid transparent;
}

#password:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top:  2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}

#exit{
  color:rgb(255, 69, 69);
  border-top: 2.5px solid transparent;
  border-bottom: 2.5px solid transparent;
}

#exit:hover{
color:#000;
animation: anima_menu 1s 1.05s both;
border-top:  2.5px solid #000;
border-bottom: 2.5px solid #000;
transition: 0.5s;
}
}
  </style>