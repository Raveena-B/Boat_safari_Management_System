<?php
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','boat_safari');
// Establish database connection.

$dbh = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

// Check connection
if ($dbh -> connect_errno) {
    echo "Failed to connect to MySQL: " . $dbh -> connect_error;
    exit();
  }

/*try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}*/
?>  