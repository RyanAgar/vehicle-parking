<?php
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, 'DigiCertGlobalRootCA.crt.pem', NULL, NULL);
mysqli_real_connect($conn, "ryan-assignment2.mysql.database.azure.com", "ryan", "tG046250@", "vehicle-parking-db", 3306, MYSQLI_CLIENT_SSL);
  ?>