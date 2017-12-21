
<style type="text/css" media="screen">
    ul.horizontal-slide {
        margin: 0;
        padding: 0;
        width: 100%;
        white-space: nowrap;
        overflow-x: auto;
    }

    ul.horizontal-slide li[class*="col"] {
        display: inline-block;
        float: none;
    }

    ul.horizontal-slide li[class*="col"]:first-child {
        margin-left: 0;
    }
</style>

<section class="content">
    <div class="container-fluid">
<!-- Bordered Table -->
    <div class="page-header">
        <h2>Detail Objek Wisata</h2>
    </div>
        <div class="row ">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <button class="btn btn-default" data-toggle="modal" data-target="#add">Tambah Foto</button>
                    </div>
                    <div class="panel-body" style="max-height: 250px; overflow-x: scroll;">
                        <ul class="horizontal-slide">
                            <?php foreach ($this->Foto_m->get(['id_objek_wisata' => $id_objek_wisata]) as $val): ?>
                               <li class="col-md-2"><img style="width:150px; " class="thumbnail" src="<?= base_url('assets/img/objek_wisata/'.$val->id_foto.'.jpg') ?>"/>
                               <center>
                                    <button class="btn btn-danger" onclick="hapus(<?= $val->id_foto ?>);"><i class="fa fa-trash"></i></button>
                                </center></li> 
                            <?php endforeach; ?>
                        </ul>              
                    </div>                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><?= $data->nama_objek_wisata ?></h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-responsive" style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td>Jenis Wisata</td>
                                    <td><?= $this->Jenis_objek_wisata_m->get_row(['id_jenis_objek_wisata' => $data->id_jenis_objek_wisata])->nama_jenis_objek_wisata ?></td>
                                </tr>
                                <tr>
                                    <td>Lokasi</td>
                                    <td><?= $data->lokasi_objek_wisata ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <h6>On Gmaps : <?= $data->latlong_objek_wisata ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Detail Objek Wisata</h4>
                    </div>
                    <div class="panel-body">
                        <p align="justify"><?= $data->detail_objek_wisata ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Bordered Table -->
    </div>
</section>


<div class="modal fade" tabindex="-1" role="dialog" id="add">
    <div class="modal-dialog" role="document">
    <?= form_open_multipart("admin/objek_wisata") ?>
        <div class="modal-content">
            
            <div class="modal-body" align="center">
                <input type="hidden" name="id_objek_wisata" value="<?= $id_objek_wisata ?>">
                <div class="form-group" id="foto">
                    <input type="file" name="foto[]" class="form-control" multiple>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <input type="submit" name="insert_foto" value="Upload" class="btn btn-danger">
            </div>          
        </div><!-- /.modal-content -->
    <?= form_close() ?>  
    </div><!-- /.modal-dialog -->
</div>

<script type="text/javascript">
    function add() {
        $('#foto').append('<input type="file" name="foto[]" class="form-control">');
    }
    function hapus(id) {
            $.ajax({
                url: "<?= base_url('admin/objek_wisata') ?>",
                type: 'POST',
                data: {
                    id: id,
                    foto: true
                },
                success: function() {
                    window.location = "<?= base_url('admin/detail_objek_wisata/'.$id_objek_wisata) ?>";
                }
            });   
        }
</script>