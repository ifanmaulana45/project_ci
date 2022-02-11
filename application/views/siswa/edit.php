<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit siswa</title>
</head>
<body>
    <h1>Form Edit Siswa</h1>
    login sebagai : <?php echo $this->session->userdata('auth')['name']; ?>
    <a href="<?php echo base_url('index.php/auth/logout')?>">Logout</a>
    <br>
    <a href="<?php echo base_url('index.php/siswa')?>"><button>Data Siswa</button></a>
    <form action="<?php echo base_url('index.php/siswa/action_edit/'.$data['id']) ?>" method="post">
        <label for="">Nama</label><br>
        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" required><br>
        <label for="">Jenis Kelamin</label><br>
        <select name="jk">
            <option value="1" <?php echo $data['jk'] == 1 ? 'selected' : '' ?> >laki-laki</option>
            <option value="2" <?php echo $data['jk'] == 2 ? 'selected' : '' ?> >perempuan</option>
        </select><br>
        <label for="">Tgl Lahir</label><br>
        <input type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>"required><br>
        <button type="submit">Simpan</button>

    
    </form>
</body>
</html>