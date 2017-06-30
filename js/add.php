<?php 
    require_once('../config.php');require_once(DBAPI);
    
    //echo $_POST['name'];
    save($_POST['name'],$_POST['cnpj_cpf'],$_POST['birthdate'],$_POST['phone'],$_POST['address'],$_POST['zip_code'],$_POST['city'],$_POST['state']);
  
?>