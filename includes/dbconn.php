<?php 
// DB credentials.
define('DB_HOST','ryan-assignment2-sql.mysql.database.azure.com');
define('DB_USER','ryan');
define('DB_PASS','tG046250@');
define('DB_NAME','vehicle-parking-db');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",PDO::MYSQL_ATTR_SSL_CA => 'DigiCertGlobalRootCA.crt.pem',PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>