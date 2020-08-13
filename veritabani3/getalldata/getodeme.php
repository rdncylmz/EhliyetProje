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

 $odeme_ad="";
 $odeme_toplam="";
 $id=$_GET['id'] ;
 $query = $conn->query("SELECT * FROM odeme where odeme_id = ".$id." limit 1");
 while ($row = $query->fetch()) {
    $odeme_ad=$row['odeme_ad'];
    $odeme_toplam=$row['odeme_toplam'];
 }


echo json_encode(array('a' => $odeme_ad ,'z' => $odeme_toplam ,'e'=>$id)); 