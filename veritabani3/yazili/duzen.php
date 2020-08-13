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
  $yaziliid=$_POST['id'];
  $yaziliad=$_POST['gad'];
 
  if($yaziliid!="" && $yaziliad!=""){
    $sonuc = $conn->exec("UPDATE yazili SET  yazili_ad ='$yaziliad' WHERE yazili_id='$yaziliid'");
  }else{
  header ('Location:duzen.php?sonuc=not');
}

if($sonuc){
header ('Location:duzen.php?sonuc=basarı');
}
else	{
header ('Location:duzen.php?sonuc=not');
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
                        <h1 class="h3 mb-0 text-gray-800">Yazili Düzenle</h1>
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
  <tr ><th style='text-align:center;'>Yazili Ad</th>
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
 $query = $conn->query("SELECT * FROM yazili ");

 while ($row = $query->fetch()) {
  echo "<tr ><td style='text-align:center;'>".$row['yazili_ad']."</td>";
    echo "<td style='text-align:center;'> <button class='yaziliduzen' id=".$row['yazili_id'].">Düzenle</button>";
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
        <h5 class="modal-title">yazili duzenle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="duzen.php" method="post">
    <input type="hidden" value="" id="yaziliid" name="id">
    <label for="fname">Urun adı</label>
    <input type="text" id="fname" name="gad"  placeholder="Basvuran adı">
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