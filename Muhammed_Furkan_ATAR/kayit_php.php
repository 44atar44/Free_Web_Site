
<?php
include("config.php");
if (isset($_POST['ad'], $_POST['password'], $_POST['eposta'])) {

    $adi = trim(filter_input(INPUT_POST, 'ad', FILTER_SANITIZE_STRING));
    $password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
    $eposta = trim(filter_input(INPUT_POST, 'eposta', FILTER_SANITIZE_EMAIL));

    if (empty($adi) || empty($password) || empty($eposta)) {
        die("<p>Lütfen formu eksiksiz doldurun!</p>");
    }

    if (!filter_var($eposta, FILTER_VALIDATE_EMAIL)) {
        die("<p>Lütfen geçerli bir e-posta adresin girin!</p>");
    }

    try {
            $sorgu = $db->prepare("INSERT INTO kayit(kullanici_adi,email,parola) VALUES(?, ?, ?)");
            $sorgu->bindParam(1, $adi, PDO::PARAM_STR);
            $sorgu->bindParam(2, $eposta, PDO::PARAM_STR);
            $sorgu->bindParam(3, $password, PDO::PARAM_STR);
            $sorgu->execute();
           
        echo "<p>Bilgiler başarılı bir şekilde kaydedildi.</p>";
        header("location:index.php");
       
    } 
    catch (PDOException $e) {
    die($e->getMessage());
    }

    $db = null;
}

?>