<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>BARANG</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
        <tr><td>IdBarang <?php echo form_error('Idbarang') ?></td>
            <td><input type="text" class="form-control" name="IdBarang" id="IdBarang" placeholder="IdBarang" value="<?php echo $IdBarang; ?>" / >
        </td>
	    <tr><td>Nama Barang <?php echo form_error('NamaBarang') ?></td>
            <td><input type="text" class="form-control" name="NamaBarang" id="NamaBarang" placeholder="NamaBarang" value="<?php echo $NamaBarang; ?>" />
        </td>
	    <tr><td>Stok <?php echo form_error('Stok') ?></td>
            <td><input type="text" class="form-control" name="Stok" id="Stok" placeholder="Stok" value="<?php echo $Stok; ?>" />
        </td>
	    <tr><td>Ket Tempat <?php echo form_error('KetTempat') ?></td>
            <!-- <td><input type="text"  class="form-control" name="KetTempat" id="KetTempat" placeholder="KetTempat" value="<?php echo $KetTempat; ?>" /> -->
            <td><select class="form-control" name="KetTempat" id="KetTempat" value="Pilih">
              <option value="Gd. Bangkit">Gd. Bangkit</option>
              <option value="Gd. Lingian">Gd. Lingian</option>
              <option value="Gd. Panehan">Gd. Panehan</option>
              <option value="Gd. Barung">Gd. Barung</option>
               <option value="Gd. Panambulai">Gd. Panambulai</option>
              <option value="Gd. Kultubai Utara">Gd. Kultubai Utara</option>
              <option value="Gd. Deli">Gd. Deli</option>
              <option value="Gd. Kultubai Selatan">Gd. Kultubai Selatan</option>
            </select></td>
            
                
        </td>
	    <tr><td>Ket Kondisi <?php echo form_error('KetKondisi') ?></td>
            <td><input type="text" class="form-control" name="KetKondisi" id="KetKondisi" placeholder="KetKondisi" value="<?php echo $KetKondisi; ?>" />
        </td>
        <tr><td>Ket Pemilik <?php echo form_error('KetPemilik') ?></td>
           <!--  <td><input type="text" class="form-control" name="KetPemilik" id="KetPemilik" placeholder="KetPemilik" value="<?php echo $KetPemilik; ?>" />
        </td> -->
            <td><select class="form-control" name="KetPemilik" id="KetPemilik" value="Pilih">
                  <option value="Fakultas Teknik Informatika">Fakultas Teknik Informatika</option>
                  <option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
                  <option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option>
                  <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
                   <option value="Fakultas Komunikasi dan Bisnis">Fakultas Komunikasi dan Bisnis</option>
                  <option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
                  <option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
                
                </select></td>
	    <tr><td>Tanggal Masuk <?php echo form_error('TanggalMasuk') ?></td>
            <td><input type="Date" class="form-control" name="TanggalMasuk" id="TanggalMasuk" placeholder="TanggalMasuk" value="<?php echo $TanggalMasuk; ?>" />
        </td>
<!--	    <input type="hidden" name="Id_buku" value="<?php echo $Id_buku; ?>" /> -->
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('barang_t') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    <!-- <script>
            $(document).ready(function () {
                $(".select2").select2({
                    placeholder: "Please Select"
                });
            });
        </script> -->
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->