<?php

session_start();

require_once 'connect.php';

$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

if($polaczenie->connect_error!=0){
    $_SESSION['e_blad'] = "Błąd łączenia z bazą danych, spróbuj później";
    header('Location: index.php');
}
else{
    $rezultat = mysqli_query($polaczenie, "SELECT * FROM cytaty ORDER BY RAND() LIMIT 1;");
    $number = mysqli_num_rows($rezultat);
    if($number > 0){
        $wiersz = $rezultat->fetch_assoc();
        $_SESSION['cytat'] = $wiersz['cytat'];
        $_SESSION['autor'] = $wiersz['autor'];
        header('Location: index.php');
    }
    else{
        $_SESSION['brak'] = "Brak cytatów";
        header('Location: index.php');
    }
}
mysqli_close($polaczenie);

?>