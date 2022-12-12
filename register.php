<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buku Saku Digital - Register</title>

    <!-- gambar title -->
    <link rel="icon" type= "image/png" href="assets/asset/img/logotelkom.png">

    <!-- Custom fonts for this template-->
    <link href="assets/asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i, 300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/asset/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-secondary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Tambah Data Baru</h1>
                                    </div>
                                    <form class="user" action="registrasi_control.php" method="POST">

                                        <div class="form-group">
                                            <label for= "nama">Nama</label>
                                            <input type="text"  name="nama" class="form-control"
                                                id="nama" 
                                                placeholder="Username">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label for ="tempat_Lahir">Tempat Lahir</label>
                                            <input type="text"  name="tempat_lahir" class="form-control"
                                                id="tempat_lahir" 
                                                placeholder="Tempat Lahir">
                                            </div>
                                            <div class="col-md-6">
                                            <label for ="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date"  name="tanggal_lahir" class="form-control"
                                                id="tanggal_lahir" 
                                                placeholder="Tanggal Lahir">
                                            </div>
</div>                                  
<div class="form-group row">
                                            <div class="col-md-6">
                                            <label for= "jenis_kelamin">Jenis Kelamin</label>
                                                    <div class = "form-check">
                                                        <input type="radio"  name="jenis_kelamin" value="L" class="form-check-input"
                                                        id="Laki">
                                                        <label for="laki" class="form-check-label">Laki-laki</label>
</div>
<div class = "form-check">
                                                        <input type="radio"  name="jenis_kelamin" value="P" class="form-check-input"
                                                        id="perempuan">
                                                        <label for="perempuan" class="form-check-label">Perempuan</label>
                                                    </div>                                
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                            <label for ="username">Username</label>
                                            <input type="text"  name="username" class="form-control"
                                                id="username" 
                                                placeholder="Username">
                                            </div>
                                            <div class="col-md-6">
                                            <label for ="password">Password</label>
                                            <input type="password"  name="password" class="form-control"
                                                id="password" 
                                                placeholder="password">
                                                
                                            </div>
</div>                                  
                                        <button name="btn_registrasi" value="simpan" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/asset/vendor/jquery/jquery.min.js"></script>
    <script src="assets/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


</body>

</html>