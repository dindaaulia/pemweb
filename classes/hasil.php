<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../../css/stylepage2.css">
 </head>

<body>
    <?php
$extension = strtolower(pathinfo($file['pic']['name'], PATHINFO_EXTENSION));
$photo = "images/uploaded." . $extension;
if (file_exists($photo)) {
    unlink($photo);
}
move_uploaded_file($file['pic']['tmp_name'], $photo);
$namadepan= $data['namadepan'];
$namabelakang= $data['namabelakang'];
$hari = $data['hari'];
$bulan = $data['bulan'];
$tahun= $data['tahun'];
?>
<nav class="navbar navbar-default navbar-fixed-top">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" ><img class="img-responsive" src="../../gambar/logo.png" alt="logo" width="152" height="38"> </a>
    </div></div></nav></nav>


  <div class="container">
    <div class="row">
      <div class="col-sm-12 SPASI"></div>
    </div>
  </div>

<div class="container" >
  <div class="row thumbnail" style="margin-left: 20%;margin-right: 20%" >
      <div class="none">
   <p style="text-align: left;" > Halo <?php echo "$namadepan" ?> , Selamat Datang di Tokopedia<br>
   Anda memasukkan data diri anda dengan informasi sebagai berikut:
    </p>
    <div class="row thumbnail" style="margin-left: 2%;margin-right: 10%">
    <div class="col-sm-6" style="margin-left: -15px" >
    <p ><strong>Nama Lengkap</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo "$namadepan $namabelakang"; ?></p>
    <p> <strong>Hari Lahir</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp : <?php echo "$hari $bulan $tahun"; ?> </p>
    <p> <strong>Jenis Kelamin</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $data['gender']; ?>
  </p>
    <p><strong>Alamat</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $data['alamat']; ?> </p>
    <p> <strong>Nama Pengguna</strong>&nbsp&nbsp&nbsp: <?php echo $data['namapengguna']; ?></p>
    <p><strong>Alamat Email</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $data['email']; ?></p>
    <p> <strong>Nomor Telepon</strong>&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $data['nomortelepon']; ?></p>
    <p> <strong>Kata Sandi</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $data['password']; ?></p></div>
    <div class="col-sm-6" >
    <p style="margin-left: 150px">Gambar Profile:</p>
    <img  src="<?php echo "../../$photo" ?>" alt="Pas Foto" style="position: right; width: 40%;margin-left: 150px;">
    </div></div></div>
    <p style="margin-top: -5px">Apabila informasi yang tertera di atas sudah benar maka konfirmasi akun dengan cara masukkan kode verivikasi yang telah dikirim ke nomor telepon anda di bawah ini. Sedangkan bila informasi anda yang tertera di atas salah maka silahkan kembali pada halaman daftar: </p>
    <input type="text" name="verivikasi" value="078965"> <br><br>
     <div class="col-sm-3" style="margin-left: -2%"><form name="kembali" action="page1.php">
    <input type="submit" value="Kembali"> </form></div>
    <div class="col-sm-3" style="margin-left: -13%">
    <input type="submit" value="Menyerahkan"> 
  </div>
    <br>
    </div>

 <div class="container-fluid">
      <div class="row">
      <p><br></p>
      <div class="garis" style="margin-left: -15%"></div>
      <div class="col-sm-6">
      <img src="../../gambar/logobawah.jpg" alt="logobawah" style="width: 8%;margin-left: -30%"></div>
      <div class="col-sm-6"><p style="margin-left: -125%;margin-top: 3%;font-size: 11px">© 2009-2018, PT. Tokopedia</p></div>
      </div> </div></div></div></div>

    <!-- <div class="form-box">
        <div>
            <div>
                <img class="pas-foto" src="<?php echo "../../$photo" ?>" alt="Pas Foto">
            </div>
            <label for="nama">Nama Lengkap</label>
            <div><?php echo "$namadepan $namabelakang"?></div>
            <label for="harilahir">Hari Lahir</label>
            <div><?php echo "$hari $bulan $tahun" ?></div>
            <label for="email">Email</label>
            <div><?php echo $data['email']; ?></div>
            <label for="gender">Jenis Kelamin</label>
            <div><?php echo $data['gender']; ?></div>

            <label for="alamat">Alamat</label>
            <div><?php echo $data['alamat']; ?></div>

             <label for="nomortelepon">Nomortelepon</label>
            <div><?php echo $data['nomortelepon']; ?></div>  
            <label for="password">Password</label>
            <div><?php echo $data['password']; ?></div>
        </div>
    </div> -->
</body>
</html>
