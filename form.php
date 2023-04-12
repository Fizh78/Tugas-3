<?php
  session_start();
  $msg = '';

  // jika tombol submit ditekan
  if (isset($_POST['submit'])) {
    // simpan data dari form ke dalam session
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['jenis'] = $_POST['jenis'];
    $_SESSION['ttl'] = $_POST['ttl'];
    $_SESSION['agama'] = $_POST['agama'];
    $_SESSION['alamat'] = $_POST['alamat'];

    // redirect ke halaman profil
    header('Location: profile.php');
    exit();
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Biodata</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    body {
      background-color: #f6f7fb;
    }

    .form-container {
      position: absolute;
      top: 50%;
      left: 50%;
      height: 600px;
      width: 400px;
      transform: translate(-50%, -50%);
      border-radius: 15px;
      box-shadow: 3px 3px 10px 0px #000;
      padding: 30px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <?php if ($msg) : ?>
      <div class="alert alert-danger"><?php echo $msg ?></div>
    <?php endif; ?>
    <form method="post" class="form-container">
    <h3 class="mb-3 ">Biodata</h3>
      <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama" required placeholder="Nama Lengkap">
      </div>
      <div class="form-group">
    <label for="Jenis">Jenis Kelamin</label>
    <select class="form-control" id="jenis" name="jenis">
        <option disabled selected hidden>Jenis Kelamin</option>
        <option>Laki-Laki</option>
        <option>Perempuan</option>
    </select>
  </div>
      <div class="form-group">
        <label for="ttl">Tempat Tanggal Lahir</label>
        <input type="text" class="form-control" name="ttl" required placeholder="Tempat Tanggal Lahir">
      </div>
      <div class="form-group">
        <label for="agama">Agama</label>
        <select class="form-control" id="agama" name="agama">
        <option disabled selected hidden>Agama</option>
        <option>Islam</option>
        <option>Hindu</option>
        <option>Buddha</option>
        <option>Kristen</option>
    </select>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" required placeholder="Alamat">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>
</html>
