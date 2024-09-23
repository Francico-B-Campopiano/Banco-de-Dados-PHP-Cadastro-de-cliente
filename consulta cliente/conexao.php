<?php
   $hostname="localhost";
   $username="root";
   $password="";
   $dbrname="turma_A";

   $conexao= mysqli_connect($hostname, $username, $password, $dbrname);
   if(mysqli_connect_errno()){
       echo "Falha na conexão";
       exit();
   }
   else
     echo "Conectado";
?>
