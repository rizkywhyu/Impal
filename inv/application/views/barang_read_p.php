
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Barang Read</h3>
        <table class="table table-bordered">
	    <tr><td>Nama Barang</td><td><?php echo $NamaBarang; ?></td></tr>
	    <tr><td>Stok</td><td><?php echo $Stok; ?></td></tr>
	    <tr><td>Ket Tempat</td><td><?php echo $KetTempat; ?></td></tr>
      <tr><td>Ket Kondisi</td><td><?php echo $KetKondisi; ?></td></tr>
	    <tr><td>Ket Pemilik</td><td><?php echo $KetPemilik; ?></td></tr>
      <tr><td>Tanggal Masuk</td><td><?php echo $TanggalMasuk; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('barang_p') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->