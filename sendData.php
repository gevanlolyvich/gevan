<?php
 
    //Variabel database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "manajemen";
 
    $conn = mysqli_connect("$servername", "$username", "$password","$dbname");
 
    $var1 = $_GET['iduser'];
    $var2 = $_GET['nama'];
    $var3 = $_GET['suhu'];
    $var4 = $_GET['access'];
	$result = mysqli_query($conn, "INSERT INTO masuk(id_user,nama,suhu,access) VALUES('$var1','$var2','$var3','$var4')");

    if ($result) 
        {
           echo"done";
        }