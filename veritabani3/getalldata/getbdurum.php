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

 $ogrenci_ad="";
 $ogrenci_durum = "";
 $id=$_GET['id'] ;
 $query = $conn->query("SELECT * FROM ogrenci where durum_id= ".$id." limit 1");
 while ($row = $query->fetch()) {
    $ogrenci_ad=$row['ogr_ad'];
    $ogrenci_durum=$row['ogr_durum'];
 }


echo json_encode(array('a' => $ogrenci_ad ,'z' => $ogrenci_durum ,'e'=>$id)); 