<?php
session_start();
include "../../includes/config.php";
if(!isset($_SESSION['logged_in'])) {
    
    header('location:../../login.php');
} 
include "../../Auth/middleware.php";

    isStore();

?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SMS</title>
    <link rel="stylesheet" href="../../includes/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../includes/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?= include "../include/Layout/navbar.php"?>
        <?= include "../include/Layout/Layout.inc.php"?>
        <div class="content-wrapper">

            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-info">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="nav-icon fas fa-copy"></i>
                                    Statistics
                                </h3>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="content">
                    <div class="row">
                        <div style="align:center" class="small-box bg-warning">
                            <div class="inner">
                                <?php
                                       
                                        $query=$dbh->prepare("SELECT id From BorrowedMaterials WHERE Status='Borrowed'  ORDER BY id ");
                                         $query->execute();
                                        $row=$query->rowCount();
                                        echo '<h1>'.$row.'</h1>';

                                        ?>
                                <p>Total Materials Borrowed </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="BorrowedMaterials.php" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <?php
  include('../include/footer.php');
  include('../include/notify.php');
  ?>
    </div><script src="../../includes/plugins/jquery/jquery.min.js"></script>
<script src="../../includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../includes/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../includes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../includes/dist/js/adminlte.min.js"></script>

<script src="../../includes/dist/js/demo.js"></script>

    <?= include "../include/script.php"?>
</body>




</html>