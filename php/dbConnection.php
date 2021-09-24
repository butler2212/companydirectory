<?php
  $host_name = 'db5004875662.hosting-data.io';
  $database = 'dbs4086430';
  $user_name = 'dbu2253672';
  $password = '%P4xCP3YH5*vS_a';

  $link = new mysqli($host_name, $user_name, $password, $database);

  if ($link->connect_error) {
    die('<p>Failed to connect to MySQL: '. $link->connect_error .'</p>');
  } else {
    echo '<p>Connection to MySQL server successfully established.</p>';
  }
?>