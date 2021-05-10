<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "";
  $koneksi = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error());
  function tambah($nama, $email, $score){
      $sql = "INSERT INTO tabel_game (id, nama, email, score) VALUES(NULL, '".$nama."','".$score."')";
      if (mysqli_query($GLOBALS["koneksi"], $sql)) {
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($GLOBALS["koneksi"]);
        }
      mysqli_close($GLOBALS["koneksi"]);
  }
?> 