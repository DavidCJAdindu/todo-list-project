 
<?php 

$sName = "localhost";
$uName = "adindu-1";
$pass = "adinduxvi";
$db_name = "todo-list";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
} 






