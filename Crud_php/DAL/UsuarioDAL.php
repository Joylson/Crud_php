
<?php

    $sql = "";
    function GetAll(){
        $db = open_database();
        $sql = "SELECT * FROM usuario";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        close_database($db);
        return $result->fetch_all();

    }

    function Get($id){
        $db = open_database();
        $sql = "SELECT * FROM usuario WHERE Id =" . $id;
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        close_database($db);
        return $result->fetch_assoc();
    }

    function Insert($nome,$senha,$email){
        $db = open_database();
        $sql = "INSERT INTO usuario(Nome,Senha,Email) VALUES(?,?,?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('sss',$nome,$senha,$email);
        $stmt->execute();
        close_database($db);
    }

    function Update($id,$nome,$senha,$email){
        $db = open_database();
        $sql = "UPDATE usuario SET Nome = ? ,Senha = ?,Email = ? WHERE Id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param('sssi',$nome,$senha,$email,$id);
        $stmt->execute();
        close_database($db);
    }

    function Delete($id){
        $db = open_database();
        $sql = "DELETE FROM Usuario WHERE Id = ". $id;
        $stmt = $db->prepare($sql);
        $stmt->execute();
        close_database($db);
    }
?>
