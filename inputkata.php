
<?php include('../bukusaku/config/koneksi.php'); ?>

<?php
if (isset($_POST['btn_simpan'])) {
    $katakunci = $_POST['katakunci'];
    $arti = $_POST['arti'];
   

    $query = "INSERT INTO produkknowledge (`katakunci`, 'arti' ) VALUES ('$katakunci', '$arti')";
    

    if ($send_data = mysqli_query($koneksi, $query)) {
        // echo "return row" . mysqli_num_rows($send_data);
        echo "<script type='text/javascript'>alert('BERHASIL');</script>";
        echo '<script>document.location="produkknowledge.php";</script>';
    } else {
        echo "failed" . mysqli_error($koneksi);
    };
    
} 

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>E-Saku</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Googles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <!-- FontAwesome Cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  </head>
  <body>
   
   
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Input Customer</h1>
    <div class="row">
        <div class="col-md-8">
            <form class="user" method="POST" >
                <div class="form-group">
                    <label for="" "katakunci"="">katakunci</label>
                    <input type="text" name="katakunci" class="form-control" id="katakunci" placeholder="Ex:19006xxx">
                </div>
                <div class="form-group">
                    <label for="" "arti"="">arti</label>
                    <textarea name="arti" class="form-control"></textarea>
                </div>
                <div class="form-group row">
                </div>
                <button type="submit" name="btn_simpan" class="btn btn-primary">Simpan</button>
                <a href="produkknowledge.php" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>




</div>
<!-- /.container-fluid -->

<?php include('../bukusaku/template/footer.php'); ?>