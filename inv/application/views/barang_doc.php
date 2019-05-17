<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Barang List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        <th>Id Barang</th>
		<th>Nama barang</th>
		<th>Stok</th>
		<th>Ket tempat</th>
		<th>Ket Kondisi</th>
        <th>Ket Pemilik</th>
		<th>Tanggal Masuk</th>
		
            </tr><?php
            foreach ($barang_data as $barang)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
              <td><?php echo $barang->IdBarang ?></td>
		      <td><?php echo $barang->NamaBarang ?></td>
		      <td><?php echo $barang->Stok ?></td>
		      <td><?php echo $barang->KetTempat ?></td>
		      <td><?php echo $barang->KetKondisi ?></td>
              <td><?php echo $barang->KetPemilik ?></td>
		      <td><?php echo $barang->TanggalMasuk ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>