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

 $direksiyon_ad="";

 $id=$_GET['id'] ;
 $query = $conn->query("SELECT * FROM direksiyon where direksiyon_id = ".$id." limit 1");
 while ($row = $query->fetch()) {
    $direksiyon_ad=$row['direksiyon_ad'];
 }


echo json_encode(array('a' => $direksiyon_ad ,'e'=>$id)); 