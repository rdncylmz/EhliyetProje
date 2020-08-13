<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" style="background-color: #beb8af !important ;
    background-image: linear-gradient(180deg, #343434 10%, #343434 100%) !important;" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-address-card"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Sürücü Kursu Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href=<?php echo "http://$_SERVER[HTTP_HOST]/veritabani3/index.php"?>>
        <i class="fas fa-fw fa-align-left"></i>
        <span>Anasayfa</span></a>
</li>



<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-align-left"></i>
        <span>Başvuru Yapanlar</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Başvuru Yapanlar:</h6>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani3/basvuru/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani3/basvuru/duzen.php"?>">Düzenle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani3/basvuru/sil.php"?>">Sil</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-align-left"></i>
        <span>Kursa Kayıtlı Olanlar</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kursa Kayıtlı Olanlar:</h6>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani3/kayitli/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani3/kayitli/duzen.php"?>">Düzenle</a>
            <a class="collapse-item" href="<?php echo "http://$_SERVER[HTTP_HOST]/veritabani3/kayitli/sil.php"?>">Sil</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Stok" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-align-left"></i>
        <span>Yazılı Sınava Giricekler</span>
    </a>
    <div id="Stok" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Yazılı Sınava Giricekler:</h6>
            <a class="collapse-item" href=<?php echo "http://$_SERVER[HTTP_HOST]/veritabani3/yazili/ekle.php"?>>Ekle</a>
            <a class="collapse-item" href=<?php echo"http://$_SERVER[HTTP_HOST]/veritabani3/yazili/duzen.php"?>>Düzenle</a>
            <a class="collapse-item" href=<?php echo"http://$_SERVER[HTTP_HOST]/veritabani3/yazili/sil.php"?>>Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sulama" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-align-left"></i>
        <span>Direksiyon Sınavına Giricekler</span>
    </a>
    <div id="sulama" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Direksiyon Sınavına Giricekler:</h6>
            <a class="collapse-item" href=<?php echo "http://$_SERVER[HTTP_HOST]/veritabani3/direksiyon/ekle.php"?>>Ekle</a>
            <a class="collapse-item" href=<?php echo"http://$_SERVER[HTTP_HOST]/veritabani3/direksiyon/duzen.php"?>>Düzenle</a>
            <a class="collapse-item" href=<?php echo"http://$_SERVER[HTTP_HOST]/veritabani3/direksiyon/sil.php"?>>Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Firma" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-align-left"></i>
        <span>Ödeme Bilgileri</span>
    </a>
    <div id="Firma" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ödeme Bilgileriı:</h6>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/veritabani3/odeme/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/veritabani3/odeme/duzen.php"?>">Düzenle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/veritabani3/odeme/sil.php"?>">Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#İade" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-align-left"></i>
        <span>Sınav Başarı Durumları</span>
    </a>
    <div id="İade" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sınav Başarı Durumları:</h6>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/veritabani3/bdurum/ekle.php"?>">Ekle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/veritabani3/bdurum/duzen.php"?>">Düzenle</a>
            <a class="collapse-item" href="<?php echo"http://$_SERVER[HTTP_HOST]/veritabani3/bdurum/sil.php"?>">Sil</a>
        </div>
    </div>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo"http://$_SERVER[HTTP_HOST]/veritabani3/cari.php"?>"  aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-align-left"></i> 
        <span>CARİ</span>
        </a>
</li>
<!-- Divider -->



</ul>