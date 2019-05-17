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
        <h2>Tanah List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        <th>Id Tanah</th>
		<th>Luas</th>
	    <th>Ket Pemilik</th>
		<th>Ket Tempat</th>
		<th>Ket Kondisi</th>
        
		<th>Tanggal Masuk</th>
		
            </tr><?php
            foreach ($tanah_data as $tanah)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
              <td><?php echo $tanah->IdTanah ?></td>
		      <td><?php echo $tanah->Luas ?></td>
		      <td><?php echo $tanah->KetPemilik ?></td>
		      <td><?php echo $tanah->KetTempat ?></td>
		      <td><?php echo $tanah->KetKondisi ?></td>
              
		      <td><?php echo $tanah->TanggalMasuk ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>