<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    login sebagai : <?php echo $this->session->userdata('auth')['name']; ?>
    <a href="<?php echo base_url('index.php/auth/logout')?>">Logout</a>
    <br>
    <a href="<?php echo base_url('index.php/siswa/tambah')?>"><button>Tambah Siswa</button></a>
    <form action="" method="get">
        <input type="text" name="nama" placeholder="masukkan nama siswa"><button type="submit">Cari</button>
    </form>
    <?php if(!empty($data)):?>
        <table border="1">
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tgl Lahir</th>
                <th>
                    Action
                </th>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($data AS $key => $value):?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $value['nama'] ?></td>
                    <td><?php echo $value['jk'] ?></td>
                    <td><?php echo $value['tgl_lahir'] ?></td>
                    <td>
                        <a href="<?php echo base_url('index.php/siswa/edit/'.$value['id'])?>">Edit</a>
                        <a href="<?php echo base_url('index.php/siswa/delete/'.$value['id'])?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    <?php endif?>
</body>
</html>