<?php
  $conn = mysqli_connect("127.0.0.1", "root", "", "pglife");

  if(mysqli_connect_errno()) {
       
    echo "failed to connect to Mysql! Please contact the Admin.";
    return;
  }