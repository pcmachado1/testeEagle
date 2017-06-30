<?php

mysqli_report(MYSQLI_REPORT_STRICT);

function open_database() 
{
    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $conn;
    } catch (Exception $e) {
        echo $e->getMessage();
        return null;
    }
}

function close_database($conn) 
{
    try {
        mysqli_close($conn);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function find( $table = null, $id = null ) 
{  
    $database = open_database();
    $found = null;
    try {
        if ($id) {
            $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }
        } else {
            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $numRows = $result->num_rows;
                for ($i=0; $i < $numRows; $i++) { 
                    $found[$i] = $result->fetch_assoc();
                }
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
    
    return $found;
}

function find_all( $table ) 
{
    return find($table);
}

/*
 * Preencha as funções abaixo;
*/
//Fiz esta função para ser executada com jquery mas vi que voce utilizou outra forma e segui a sua forma.

function save1($name,$cnpj_cpf,$birthdate,$phone,$address,$zip_code,$city,$state) 
{
    
    $database = open_database();
    
    try {
        $sql = "INSERT INTO customers (name,cpf_cnpj,birthdate,phone,address,zip_code,city,state) VALUES ('$name','$cnpj_cpf','$birthdate',$phone,'$address',$zip_code,'$city','$state');";
        $database->query($sql);
        }
     catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
    
    
}
function save($table, $customer) 
{
    
    $database = open_database();
    
    try {
        $data = str_split($customer["'birthdate'"]);
        //print_r($data);
        $dia = $data[0].$data[1];
        $mes = $data[3].$data[4];
        $ano = $data[6].$data[7].$data[8].$data[9];
        $dataCompleta = $ano."-".$mes."-".$dia;
        
        
        $sql = "INSERT INTO ".$table." (name,cpf_cnpj,birthdate,phone,address,zip_code,city,state) VALUES ('".$customer["'name'"]."','".$customer["'cpf_cnpj'"]."','".$dataCompleta."',".$customer["'phone'"].",'".$customer["'address'"]."',".$customer["'zip_code'"].",'".$customer["'city'"]."','".$customer["'state'"]."');";
        echo $sql;
        $database->query($sql);
        }
     catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
    
    
}
//update('customers', $id, $customer);
function update($table = null, $id = 0, $data = null) 
{
    $database = open_database();
     
    try{
        $data1 = str_split($data["'birthdate'"]);
        //print_r($data);
        $dia = $data1[0].$data1[1];
        $mes = $data1[3].$data1[4];
        $ano = $data1[6].$data1[7].$data1[8].$data1[9];
        $dataCompleta = $ano."-".$mes."-".$dia;
        
        //print_r($data);
        $sql = "UPDATE customer SET name= '".$data["'name'"]."',cpf_cnpj= '".$data["'cpf_cnpj'"]."',birthdate= '".$dataCompleta."',"
                . "phone= ".$data["'phone'"].",address= '".$data["'address'"]."',zip_code= ".$data["'zip_code'"].",city= '".$data["'city'"]."',state= '".$data["'state'"]."'"
                . " WHERE id = $id;";
        echo $sql;
        
        $database->query($sql);
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
    
    close_database($database);
    
}

function remove( $table = null, $id = null ) 
{
    // stuff    
}
