<?php 
$host='localhost';
$db = 'ehliyet';
$username = 'postgres';
$password = '123456';
 
$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
try{
  $conn = new PDO($dsn);
 
  if($conn){
  
  }
 }catch (PDOException $e){
     header ('404.php');
 }

 $kayitli_ad="";

 $id=$_GET['id'] ;
 $query = $conn->query("SELECT * FROM yazili where yazili_id = ".$id." limit 1");
 while ($row = $query->fetch()) {
    $kayitli_ad=$row['yazili_ad'];
 }


echo json_encode(array('a' => $kayitli_ad ,'e'=>$id)); 