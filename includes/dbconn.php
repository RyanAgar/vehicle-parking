<?php
    $con=mysqli_connect("ryan-assignment2-sql.mysql.database.azure.com", "ryan", "tG046250@", "vehicle-parking-db");
    if(mysqli_connect_errno()){
    echo "Connection Fail".mysqli_connect_error();
    }
  ?>