
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>BARANG LIST 
		<?php echo anchor(site_url('barang/word'), ' <i class="fa fa-file-word-o"></i> Word', 'class="btn btn-primary btn-sm"'); ?>
		
		</h3><br><br>
    <h3 class='box-title'>TANAH LIST 
    <?php echo anchor(site_url('tanah/word'), ' <i class="fa fa-file-word-o"></i> Word', 'class="btn btn-primary btn-sm"'); ?>
    
    </h3>
                </div><!-- /.box-header -->
               
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