<section class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Admin  </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data  Admin                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <style type="text/css">
                                tr th, tr td {text-align: center;}
                            </style>
                                                                                         
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#add"><i class="glyphicon glyphicon-plus"></i> Tambah</button><hr>
                            
                            <table class="table table-bordered table-striped table-hover" id="table">
                                <thead>
                                    <tr>
                                        <?php foreach ($columns as $column): ?>
                                            <th>
                                                <?php if ($column ==  'id_jenis_admin'): ?>
                                                    Jenis Admin
                                                <?php else: ?>
                                                    <?= ucwords(str_replace("_", " ", $column)) ?>
                                                <?php endif ?>
                                            </th>
                                        <?php endforeach; ?>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $row): ?>
                                    <tr>
                                        <?php foreach ($columns as $column): ?>
                                            <td>
                                                <?php $row = (array)$row; ?>
                                                <?php if ($column ==  'id_jenis_admin'): ?>
                                                    <?= $this->Jenis_admin_m->get_row(['id_jenis_admin' => $row[$column]])->nama_jenis_admin ?>
                                                <?php else: ?>
                                                    <?= $row[$column] ?>
                                                <?php endif ?>
                                            </td>
                                        <?php endforeach; ?>
                                        <td align="center">

                                                                                <a href="<?= base_url('super_admin/detail_admin/'.$row['username']) ?>" class="btn btn-info waves-effect"><i class="fa fa-eye"></i></a>
                                        
                                                                                <!-- <button class="btn btn-info waves-effect" data-toggle="modal" data-target="#edit" onclick="get_admin('<?= $row['username'] ?>')"><i class="fa fa-edit"></i></button> -->
                                        
                                                                                <button class="btn btn-danger waves-effect" onclick="delete_admin('<?= $row['username'] ?>')"><i class="glyphicon glyphicon-trash"></i></button>
                                        
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            
        
        <!-- Add -->
        <div class="modal fade" tabindex="-1" role="dialog" id="add">
          <div class="modal-dialog" role="document">
            <?= form_open("super_admin/admin") ?>
           <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data Super_admin</h4>
              </div>
              <div class="modal-body">
                    <?php foreach ($columns as $column): ?>
                        <div class="form-group">
                            <?php if ($column ==  'id_jenis_admin'): ?>
                                <label>Jenis Admin</label>
                                <select name="id_jenis_admin" class="form-control">
                                    <?php foreach($this->Jenis_admin_m->get() as $val): ?>
                                    <option value="<?= $val->id_jenis_admin ?>"><?= $val->nama_jenis_admin ?>"</option>
                                    <?php endforeach; ?>
                                </select>
                            <?php else: ?>
                                <label class="form-label"><?= ucwords(str_replace('_', ' ', $column)) ?></label>
                                <input type="text" id="<?= $column ?>" name="<?= $column ?>" class="form-control">
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <input type="submit" name="insert" value="Simpan" class="btn btn-primary">
              </div>
              <?= form_close() ?>            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!--/End Add -->

        
                <!-- Edit -->
        <div class="modal fade" tabindex="-1" role="dialog" id="edit">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?= form_open("super_admin/admin") ?>
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data Super_admin</h4>
              </div>
              <div class="modal-body">
                    <input type="hidden" name="edit_username" id="edit_username">
                    <?php foreach ($columns as $column): ?>
                        <div class="form-group">
                            <label class="form-label"><?= ucwords(str_replace('_', ' ', $column)) ?></label>
                            <input type="text" id="edit_<?= $column ?>" name="<?= $column ?>" class="form-control">
                        </div>
                    <?php endforeach; ?>
                    
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <input type="submit" name="edit" value="Edit" class="btn btn-primary">
              </div>
              <?= form_close() ?>            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->  
        <!--/End Edit -->
                
    </div>
</section>

<script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable({
                responsive: true
            });
        });
        
        function get_admin(username) {
            $.ajax({
                url: "<?= base_url('super_admin/admin') ?>",
                type: 'POST',
                data: {
                    username: username,
                    get: true
                },
                success: function(response) {
                    response = JSON.parse(response);
                    <?php foreach ($columns as $column): ?>
                    $('#edit_<?= $column ?>').val(response.<?= $column ?>);
                    <?php endforeach; ?>
                    <?php if (in_array("username", $columns)): ?>                    
                    $('input[class="form-control"][name="username"]').val(response.username);
                    <?php endif; ?>                }
            });
        }
        
        
        function delete_admin(username) {
            $.ajax({
                url: "<?= base_url('super_admin/admin') ?>",
                type: 'POST',
                data: {
                    username: username,
                    delete: true
                },
                success: function() {
                    window.location = "<?= base_url('super_admin/admin') ?>";
                }
            });   
        }
        </script>