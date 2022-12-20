<?php
    try{
        $host = "localhost";
        $dbname = "int_programciligi";  // veritabanı adı
        $username = "root"; // veritabanı kullanıcıadı
        $password = ""; // veritabanı kullanıcı şifresi
        $db = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8","$username","$password");
    }
    catch(PDOException $message){
        echo $message->getMessage();
    }
?>