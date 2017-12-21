<section class="content">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Testimoni  </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data  Testimoni                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <style type="text/css">
                                tr th, tr td {text-align: center;}
                            </style>
                            
                            <table class="table table-bordered table-striped table-hover" id="table">
                                <thead>
                                    <tr>
                                        <?php foreach ($columns as $column): ?>
                                            <th>
                                                <?= ucwords(str_replace("_", " ", $column)) ?>
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
                                                <?= $row[$column] ?>
                                            </td>
                                        <?php endforeach; ?>
                                        <td align="center">

                                                                                <a href="<?= base_url('admin/detail_testimoni/'.$row['id_testimoni']) ?>" class="btn btn-info waves-effect"><i class="fa fa-eye"></i></a>
                                        
                                        
                                                                                <button class="btn btn-danger waves-effect" onclick="delete_testimoni(<?= $row['id_testimoni'] ?>)"><i class="glyphicon glyphicon-trash"></i></button>
                                        
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

            
        
                
    </div>
</section>

<script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable({
                responsive: true
            });
        });
        
        function get_testimoni(id_testimoni) {
            $.ajax({
                url: "<?= base_url('admin/testimoni') ?>",
                type: 'POST',
                data: {
                    id_testimoni: id_testimoni,
                    get: true
                },
                success: function(response) {
                    response = JSON.parse(response);
                    <?php foreach ($columns as $column): ?>
                    $('#edit_<?= $column ?>').val(response.<?= $column ?>);
                    <?php endforeach; ?>
                    <?php if (in_array("id_testimoni", $columns)): ?>                    
                    $('input[class="form-control"][name="id_testimoni"]').val(response.id_testimoni);
                    <?php endif; ?>                }
            });
        }
        
        
        function delete_testimoni(id_testimoni) {
            $.ajax({
                url: "<?= base_url('admin/testimoni') ?>",
                type: 'POST',
                data: {
                    id_testimoni: id_testimoni,
                    delete: true
                },
                success: function() {
                    window.location = "<?= base_url('admin/testimoni') ?>";
                }
            });   
        }
        </script>