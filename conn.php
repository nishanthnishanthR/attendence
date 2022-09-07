<?php
    $host = '127.0.0.1';
    $db = 'attendence_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';


    //Reomote database connection
//     $host = 'remotemysql.com';
//     $db = 'qSw4K8oMcX';
//     $user = 'qSw4K8oMcX';
//     $pass = 'lcpv7OopJI';
//     $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        // echo "<h1 class='text-danger'>No Database Found</h1>";
        throw new PDOException($e->getMessage());
    }


    require_once 'crud.php';
    $crud = new crud($pdo);



?>
