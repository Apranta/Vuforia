<section class="content">
    <div class="container-fluid">
<!-- Bordered Table -->
        <div class="row ">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                         <h2>
                            Detail berita                        </h2>                   
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td colspan="2" align="center">
                                        <img src="<?= base_url('assets/img/img_berita/'.$id_berita.'.jpg') ?>" class="img img-thumbnail">
                                    </td>
                                </tr>
                                <?php foreach ($columns as $column): ?>
                                    <tr>
                                        <td><?= ucwords(str_replace("_", " ", $column)); ?></td>
                                        <td>
                                            <?php $data = (array)$data; ?>
                                            <?= $data[$column] ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>                    
                    </div>                    
                </div>
            </div>
        </div>
        <!-- #END# Bordered Table -->
    </div>
</section>