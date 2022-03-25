<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SisTA | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <?php
        include_once './header.php'
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include_once "./sidemenu.php"
        ?>
        <!-- End Sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Kelola Seminar Mahasiswa</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Kelola Seminar Mahasiswa</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="./form-seminar.html" class="btn btn-primary mb-5">Tambah Seminar Baru</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>
                                                No
                                            </th>
                                            <th>
                                                NIM
                                            </th>
                                            <th>
                                                Mahasiswa/i
                                            </th>
                                            <th>
                                                Seminar
                                            </th>
                                            <th>
                                                Waktu
                                            </th>
                                            <th>
                                                Ruang
                                            </th>
                                            <th>
                                                Peserta
                                            </th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="table">
                                            <td>
                                                1
                                            </td>
                                            <td>
                                                00000001
                                            </td>
                                            <td>
                                                Arif Fadillah
                                            </td>
                                            <td>
                                                Proposal
                                            </td>
                                            <td>
                                                10.00 21-01-2022
                                            </td>
                                            <td>
                                                Online
                                            </td>
                                            <td>
                                                10 (view)
                                            </td>
                                            <td>
                                                <a href="#">Edit</a> | <a href="#">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="table">
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                00000002
                                            </td>
                                            <td>
                                                Fatimah Aznur
                                            </td>
                                            <td>
                                                Seminar Hasil
                                            </td>
                                            <td>
                                                10.00 22-01-2022
                                            </td>
                                            <td>
                                                Online
                                            </td>
                                            <td>
                                                10 (view)
                                            </td>
                                            <td>
                                                <a href="#">Edit</a> | <a href="#">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="table">
                                            <td>
                                                3
                                            </td>
                                            <td>
                                                00000003
                                            </td>
                                            <td>
                                                Muhammad Fikri
                                            </td>
                                            <td>
                                                Seminar Akhir
                                            </td>
                                            <td>
                                                10.00 23-01-2022
                                            </td>
                                            <td>
                                                B2304
                                            </td>
                                            <td>
                                                0 (view)
                                            </td>
                                            <td>
                                                <a href="#">Edit</a> | <a href="#">Delete</a>
                                            </td>
                                        </tr>
                                        <tr class="table">
                                            <td>
                                                4
                                            </td>
                                            <td>
                                                00000004
                                            </td>
                                            <td>
                                                Piscki F. Pratama
                                            </td>
                                            <td>
                                                Proposal
                                            </td>
                                            <td>
                                                10.00 24-01-2022
                                            </td>
                                            <td>
                                                B2305
                                            </td>
                                            <td>
                                                0 (view)
                                            </td>
                                            <td>
                                                <a href="#">Edit</a> | <a href="#">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <?php include_once "./footer.php" ?>
        <!-- End Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
</body>

</html>