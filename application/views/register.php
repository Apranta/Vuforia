<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=base_url('assets/vendor/metisMenu/metisMenu.min.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url('assets/dist/css/sb-admin-2.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url('assets/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Pendaftaran Anggota KPU</h3>
                    </div>
                    <div class="panel-body">
                        <?=form_open_multipart('register')?>
                            <fieldset>
                              <?= $this->session->flashdata('msg') ?>
                                <h4 class="title" align="center">Data Diri</h4><hr>
                                <div class="form-group">
                                    <label for="">Foto Diri : </label>
                                    <input class="form-control"  name="foto" type="file" autofocus required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama : </label>
                                    <input class="form-control"  name="nama" type="text" autofocus required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Lahir : </label>
                                    <input class="datepicker form-control"  name="tanggal" type="date" autofocus required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin : </label>
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Nomor Pengenal : </label>
                                    <input class="form-control"  name="nomor" type="text" autofocus required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat : </label>
                                    <textarea name="alamat" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Email : </label>
                                    <input class="form-control"  name="email" type="email" autofocus required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Pendidikan : </label>
                                    <input class="form-control"  name="pendidikan" type="text" autofocus required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Nomor Telepon : </label>
                                    <input class="form-control"  name="telepon" type="text" autofocus required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Formasi : </label>
                                    <select name="formasi" class="form-control">
                                        <option value="PPK">Panitia Pemilihan Kecamatan</option>
                                        <option value="PPS">Panitia Pemungutan Suara</option>
                                    </select>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <span>*Username dan password digunakan untuk login selanjutnya</span>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="">Username : </label>
                                    <input class="form-control"  name="username" type="text" autofocus required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Password : </label>
                                    <input class="form-control"  name="password" type="password" autofocus required="">
                                </div>
                                <div class="form-group">
                                    <label for="">Ulangi Password : </label>
                                    <input class="form-control"  name="repassword" type="password" autofocus required="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <div class="form-group">
                                    <input type="submit" class="btn btn-lg btn-primary btn-block" name="daftar" value="Daftar">
                                </div>
                                
                            </fieldset>
                        <?=form_close()?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?=base_url('assets/vendor/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url('assets/vendor/metisMenu/metisMenu.min.js')?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url('assets/dist/js/sb-admin-2.js')?>"></script>

</body>

</html>
