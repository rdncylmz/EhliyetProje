<?php include('../head.php')?>
<?php 
error_reporting(0);
if($_POST){
$bdurum=$_POST['ad'];
$durum = $_POST['durum'];
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
 if($bdurum!="" ){
$query=$conn->exec("insert into ogrenci (ogr_ad,ogr_durum )VALUES('$bdurum','$durum')");
if($query)
header ('Location:ekle.php?sonuc=basarı');
else	
header ('Location:ekle.php?sonuc=not');
}
else
header ('Location:ekle.php?sonuc=not');
}

?>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include('../sidebar.php')?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

                    <!-- Topbar Search -->
                   
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                       

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Başarı Durumu Ekle</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                    
<div class="container"> 
<?php
if($_GET['sonuc']=="basarı" ){

  echo  '<div class="succ-alert" id="alert">';
  echo  '<span class="closebtn" onclick="this.parentElement.style.display=/"none"/;">&times;</span> ';
  echo  '<strong>Başarılı!</strong> Kayıt başarıyla eklendi..';
  echo  '</div>';
 
 }
 if($_GET['sonuc']=="not"){
 
   echo  '<div class="danger-alert" id="alert">';
   echo  '<span class="closebtn" onclick="this.parentElement.style.display=/"none"/;">&times;</span> ';
   echo  '<strong>Başarısız!!!</strong> Kayıt eklenirken hatayla karşılaşıldı lütfen alanları doğru doldurduğuza emin olunuz veya serverin aktif olduğunu doğrulayınız..';
   echo  '</div>';
  
  }
?>
  <form action="ekle.php" method="post">

    <label for="fname">Ogrenci Ad</label>
    <input type="text" id="ad" name="ad"  placeholder="ad">
    <select class="form-control" name="durum">
    <option >Geçti</option>
    <option >Kaldı</option>
    </select>
    <div style="display: flex;  justify-content: center;  align-items: center;;">
    <input type="submit" value="Ekle" style="width:50%;">
</div>
  </form>
  </div>
                      
  </div>
                    <!-- Content Row -->

                    
                        
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('../footer.php')?>
</body>

</html>