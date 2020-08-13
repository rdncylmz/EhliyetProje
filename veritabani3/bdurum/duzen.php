<?php include('../head.php')?>
<?php
error_reporting(0);
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
 if($_POST){
  $bdurum_ogrenci_id=$_POST['id'];
  $ogr_ad=$_POST['gad'];
  $ogr_durum=$_POST['durum'];

 
  if($ogr_ad!="" && $bdurum_ogrenci_id!="" && $ogr_durum!=""){
    $sonuc = $conn->exec("UPDATE ogrenci SET  ogr_ad ='$ogr_ad', ogr_durum='$ogr_durum' WHERE durum_id='$bdurum_ogrenci_id'");
  }else{
  header ('Location:duzen.php?sonuc=not2');
}

if($sonuc){
header ('Location:duzen.php?sonuc=basarı');
}
else	{
header ('Location:duzen.php?sonuc=not1');
}
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
                        <h1 class="h3 mb-0 text-gray-800">Başarı Durum Düzenle</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                    <?php
if($_GET['sonuc']=="basarı" ){

  echo  '<div class="succ-alert" id="alert">';
  echo  '<span class="closebtn" onclick="this.parentElement.style.display=/"none"/;">&times;</span> ';
  echo  '<strong>Başarılı!</strong> Kayıt başarıyla düzenlendi..';
  echo  '</div>';
 
 }
 if($_GET['sonuc']=="not"){
 
   echo  '<div class="danger-alert" id="alert">';
   echo  '<span class="closebtn" onclick="this.parentElement.style.display=/"none"/;">&times;</span> ';
   echo  '<strong>Başarısız!!!</strong> Kayıt düzenlenirken hatayla karşılaşıldı lütfen alanları doğru doldurduğuza emin olunuz veya serverin aktif olduğunu doğrulayınız..';
   echo  '</div>';
  
  }
?>
<div class="table-responsive">
  <table class="table table-bordered dataTable">
  <tr ><th style='text-align:center;'>Ogrenci Ad</th>
  <th style='text-align:center;'>Ogrenci Durumu</th>
    <th style='text-align:center;'> Düzenle</th>
    </tr>

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
 $query = $conn->query("SELECT * FROM ogrenci ");

 while ($row = $query->fetch()) {
  echo "<tr ><td style='text-align:center;'>".$row['ogr_ad']."</td>";
  echo "<td style='text-align:center;'>".$row['ogr_durum']."</td>";
  echo "<td style='text-align:center;'> <button class='bdurumduzen' id=".$row['durum_id'].">Düzenle</button></td></tr>";
}

    ?>
</table>
</div>
                    <!-- Content Row -->

                <!-- /.container-fluid -->
                </div>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('../footer.php')?>

<div class="modal"  id="exampleModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Başarı Durumu Düzenle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="duzen.php" method="post">
    <input type="hidden" value="" id="bdurum_ogrenci_id" name="id">
    <label for="fname">Ogrenci Adı</label>
    <input type="text" id="fname" name="gad"  placeholder="Kayit adı">
    <label for="fdurum">Ogrenci Durumu</label>
    <select class="form-control" id="fdurum" name="durum">
    <option >Geçti</option>
    <option >Kaldı</option>
    </select>
    <div style="display: flex;  justify-content: center;  align-items: center;;">
    <input type="submit" value="Düzenle" style="width:50%;">
</div>
  </form>
      </div>
    </div>
  </div>
</div>
</body>

</html>