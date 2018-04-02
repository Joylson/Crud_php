<?php require_once 'Config.php'; ?>
<?php require_once DBAPI; ?>
<?php require_once 'DAL/UsuarioDAL.php' ?>


<?php
$db = open_database();
if ($db) {
    echo '<h1>Banco de Dados Conectado!</h1>';
    Insert('Joylson', '45455', 'joylsont@gmail.com');
    Update(1, 'JJ','125454','joylsont@gmail.com');
    Delete(1);

    foreach (GetAll() as $item){
        echo 'Id: ' . $item[0] . ' Nome: ' . $item[1] . ' Senha: ' . $item[2] . ' Email: ' . $item[3] . '<br />';
    }
} else {
    echo '<h1>ERRO: Não foi possível Conectar!</h1>';
}


?>