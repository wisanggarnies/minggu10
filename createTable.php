<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databese = "web_db";

    $connect = mysqli_connect($hostname, $username, $password, $databese);

    if($connect){
        echo "Koneksi ke MySQL berhasil <br>";
    }
    else{
        echo "Koneksi ke MySQL gagal". mysqli_connect_error();
    }

    $query = "CREATE TABLE student(
                id INT PRIMARY KEY AUTO_INCREMENT,
                name VARCHAR(30) NOT NULL,
                address VARCHAR(100))";
    
    if(mysqli_query($connect, $query)){
        echo "Tabel student berhasil dibuat";
    }
    else{
        echo "Tabel student gagal dibuat <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>