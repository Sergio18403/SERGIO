<?php
$conn = new mysqli("bqj8rv2f9dbjrnp1a9q2-mysql.services.clever-cloud.com", "urqpzztkbmlo8u8u", "Mb0KomVYdlkkY5FGjN30", "bqj8rv2f9dbjrnp1a9q2");
  
  if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
  } 
?>