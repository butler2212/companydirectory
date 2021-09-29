<?php
  $host_name = 'db5004875662.hosting-data.io';
  $database = 'dbs4086430';
  $user_name = 'dbu2253672';
  $password = '%P4xCP3YH5*vS_a';

  $conn = new mysqli($host_name, $user_name, $password, $database);

  if ($conn->connect_error) {
    die('<p>Failed to connect to MySQL: '. $conn->connect_error .'</p>');
  } 
?>