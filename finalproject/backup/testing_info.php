<?php
    include("config.php");
    $query = mysqli_query($connect, "SELECT * FROM tb_oli ORDER BY id_oli ASC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active">
                            <a href="admin.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="data_user.php">
                                <i class="fas  fa-table"></i>Data User</a>
                        </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-table"></i>Laporan</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="laporan_harian.php">
                                            <i class="fas fa-table"></i>Laporan Harian</a>
                                    </li>
                                    <li>
                                        <a href="laporan_bulanan.php">
                                            <i class="fas fa-table"></i>Laporan Bulanan</a>
                                    </li>
                                </ul>  
                            </li>
                        <li>
                            <a href="data_barang.php">
                                <i class="fas fa-table"></i>Data Barang</a>
                        </li>
                        <li>
                            <a href="data_hasil.php">
                                <i class="fas fa-chart-bar"></i>Data Hasil</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a href="admin.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="data_user.php">
                                <i class="fas  fa-table"></i>Data User</a>
                        </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-table"></i>Laporan</a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="laporan_harian.php">
                                            <i class="fas fa-table"></i>Laporan Harian</a>
                                    </li>
                                    <li>
                                        <a href="laporan_bulanan.php">
                                            <i class="fas fa-table"></i>Laporan Bulanan</a>
                                    </li>
                                </ul>  
                            </li>
                        <li>
                            <a href="data_barang.php">
                                <i class="fas fa-table"></i>Data Barang</a>
                        </li>
                        <li>
                            <a href="data_hasil.php">
                                <i class="fas fa-chart-bar"></i>Data Hasil</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                <a href="logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">data table</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small"type="button"  data-toggle="modal" data-target="#smallmodal">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small"type="button"  data-toggle="modal" data-target="#smallmodal2">
                                            <i class="zmdi zmdi-plus"></i>add stok</button>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <!-- <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th> -->
                                                <th>ID</th>
                                                <th>Nama oli</th>
                                                <th>Harga</th>
                                                <th>Stok</th>
                                                <th>Kategori</th>
                                                <th>Foto</th>
                                            </tr>
                                        </thead>

                                        <tbody><?php
  // Load file koneksi.php
  include "config.php";
  
  $query = "SELECT * FROM tb_oli"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql




                                            
                                                echo "<tr>";
                                                echo "<td>".$data['id_oli']."</td>";
                                                    echo "<td>".$data['nama_oli']."</td>";
                                                    echo "<td>".$data['harga']."</td>";
                                                    echo "<td>".$data['stok']."</td>";
                                                    echo "<td>".$data['tipe']."</td>";
    echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
?>

                                                    <td> <div class="table-data-feature">
                                                            <?php
                                                            echo "<a href='form_ubah.php?id_oli=".$data['id_oli']."'>"
                                                            ?>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Ubah">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                            <?php
                                                            echo "<a href='proses_hapus.php?id_oli=".$data['id_oli']."'>"
                                                            ?>
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Hapus">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </div>
                                                    </td>

                                                    </tr>
<?php
}
  ?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- modal scroll -->
            <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true" method="post">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="smallmodalLabel">Tambah Info Oli dan Sparepart</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

<form method="post" action="proses_simpan.php" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="name_oli" class=" form-control-label">Nama Barang</label>
                                    <input type="text" id="nama_oli" name="nama_oli" placeholder="Nama Barang" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="harga" class=" form-control-label">Harga</label>
                                    <input type="integer" id="harga" name="harga" placeholder="Harga" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="stok" class=" form-control-label">Stok</label>
                                    <input type="integer" id="stok" name="stok" placeholder="Stok" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="tipe" class="form-control-label">Kategori</label>
                                    <div class="rs-select2--light rs-select2--md">
                                    <select class="js-select2" name="tipe">
                                        <option selected="selected" disabled="disabled">--pilih--</option>
                                        <option>Oli</option>
                                        <option>Sparepart</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi" class="form-control-label">Deskripsi</label>
                                    <textarea type="text" id="deskripsi" name="deskripsi" placeholder="Deskripsi Service" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="foto" class="form-control-label">Gambar</label>
                                    <input type="file" id="foto" name="foto" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <br>
                                <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
                                <!-- <input type="submit" class="btn btn-primary" data-dismiss="modal" name="tambah"> -->
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal scroll -->



            <!-- modal scroll -->
            <div class="modal fade" id="smallmodal2" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true" method="post">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="smallmodalLabel">Tambah Stok Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="insert_det_barang.php" method="post" >
                                <div class="form-group">
                                    <label for="nama_info" class=" form-control-label">Nama Barang</label>
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="info">
                                            <option selected="selected" disabled="disabled">--pilih--</option>
                                            <?php
                                            $q = mysqli_query($connect, "SELECT id_info, nama_info FROM tb_info");
                                             while ($val = mysqli_fetch_array($q)){
                                                ?>     
                                            <option name="id" value="<?php echo $val['id_info'] ?>">
                                                <?php
                                                    echo $val["nama_info"];
                                                ?>                
                                            </option>
                                            <?php
                                                }
                                            ?>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <!-- <input type="nama_info" id="nama_info" name="nama_info" placeholder="Nama Barang" class="form-control"> -->
                                    <!-- <span class="help-block"></span> -->
                                </div>
                                <!-- <div class="form-group">
                                    <label for="jumlah_stok" class="form-control-label
                                    "> Jumlah stok yang tersedia</label>
                                    <span class="help-block"></span>
                                    <input type="text" name="jumlah_stok" class="form-control" disabled="disabled"/>
                                </div> -->
                                <div class="form-group">
                                    <label for="stok" class=" form-control-label">Stok</label>
                                    <span class="help-block"></span>
                                    <input type="text" id="stok" name="stok" placeholder="Stok" class="form-control">
                                </div>

                            <button type="submit" class="btn btn-primary" name="tambah">Confirm</button>
                            <!-- <input type="submit" class="btn btn-primary" data-dismiss="modal" name="tambah"> -->
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal scroll -->
            <!-- end modal scroll -->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php
mysqli_close($connect);
ob_end_flush();
?>