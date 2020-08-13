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

 $basvuru_ad="";
 $fiyat="";
 $urun_ad="";

 $id=$_GET['id'] ;
 $query = $conn->query("SELECT * FROM basvuru where basvuru_id = ".$id." limit 1");
 while ($row = $query->fetch()) {
    $basvuru_ad=$row['basvuru_ad'];
    $fiyat=$row['basvuru_fiyat'];
 }


echo json_encode(array('a' => $basvuru_ad ,'e'=>$id,'z'=>$fiyat)); 