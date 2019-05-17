
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-md-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>BARANG LIST <?php echo anchor('barang_t/create/','Create',array('class'=>'btn btn-danger btn-sm'));?></h3>
		
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
            
		    <th>Namabarang</th>
		    <th>Stok</th>
		    <th>KetTempat</th>
		    
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($barang_data as $barang)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $barang->NamaBarang ?></td>
		    <td><?php echo $barang->Stok ?></td>
		    <td><?php echo $barang->KetTempat ?></td>
		    
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('Barang_t/read/'.$barang->IdBarang),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->