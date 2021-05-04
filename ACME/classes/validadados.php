<?php


Class Usuario{

    private $pdo;
    public $msgerro;

    //Metodo para Conectar o banco ao sistema de login.
    public function conectar($nome, $host, $id_user, $senha)
    {
        global $pdo;
        try
        {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $id_user, $senha);
        }
        catch(PDOException $e){
            $msgerro = $e->getMessage();
        }
    }
    //Metodo para cadastrar novo usuario

    public function cadastrar($nome, $email, $senha)
    {
        global $pdo;

        // verificar se o usuario ja esta cadastrado no banco
        $sql = $pdo->prepare("SELECT id_user FROM tb_usuario WHERE email = :u");
        $sql->bindValue(":u",$email);
        $sql->execute();

        if($sql->rowCount() > 0)
        {
            return false; //porque usuario ja esta cadastrado
        }
        else
        {
            $sql = $pdo->prepare("INSERT INTO tb_acme (nome, email, senha)
            VALUES (:u, :n, :s)");
            $sql->bindValue(":u",$nome);
            $sql->bindValue(":n",$email);
            $sql->bindValue(":s",sha1($senha));
            $sql->execute();

            return true; //Usuario foi inserido no banco com sucesso
        }
    }

    public function logar($email, $senha)
    {
        global $pdo;
        $sql = $pdo->prepare("SELECT * FROM tb_usuario WHERE email = :n AND senha = :s");
        $sql->bindValue(":n",$email);
        $sql->bindValue(":s",sha1($senha));
        $sql->execute();

        if($sql->rowCount()>0)
        {
            //criar uma sessão de usuarios
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_user'] = $dado['id_user'];
            $_SESSION['nome'] = $dado['nome'];
            
            return true; //o usuario esta logado no sistema.
        }
        else
        {
            return false; //usuario nao esta logado
        }
    }

    public function atualizar($nome, $email, $senha)
    {
        global $pdo;

        // verificar se o usuario ja esta cadastrado no banco
        $sql = $pdo->prepare("SELECT * FROM tb_acme WHERE nome = :nu AND email = :n AND senha = :s");
        $sql->bindValue(":nu",$nome);
        $sql->bindValue(":n",$email);
        $sql->bindValue(":s",sha1($senha));
        $sql->execute();

        if($sql->rowCount() > 0)
        {
            return false; //porque usuario ja esta cadastrado
        }
        else
        {
            $sql = $pdo->prepare("UPDATE tb_acme SET nome = :nu AND email = :e AND senha = :s");
            $sql->bindValue(":nu",$nome);
            $sql->bindValue(":e",$email);
            $sql->bindValue(":s",$senha);
            $sql->execute();

            return true; //Usuario foi
}
}
}
 ?>
