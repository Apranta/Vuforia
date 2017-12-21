<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url('')?>">Objek WIsata KOta Palembang</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?=base_url('logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <?php if ($this->session->userdata('id_role') == 1): ?>
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?= base_url('') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= base_url('super_admin/admin') ?>"><i class="fa fa-user fa-fw"></i> Data User</a>
                        </li>
                        <li>
                            <a href="<?= base_url('super_admin/berita') ?>"><i class="fa fa-edit fa-fw"></i> Data Berita</a>
                        </li>
                        <li>
                            <a href="<?= base_url('super_admin/objek_wisata') ?>"><i class="fa fa-edit fa-fw"></i> Data Objek WIsata</a>
                        </li>
                        <li>
                            <a href="<?= base_url('super_admin/testimoni') ?>"><i class="fa fa-edit fa-fw"></i> Data Testimoni</a>
                        </li>
                        
                    </ul>
                <?php elseif ($this->session->userdata('id_role') == 2): ?>
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?= base_url('') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/berita') ?>"><i class="fa fa-edit fa-fw"></i> Data Berita</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/objek_wisata') ?>"><i class="fa fa-edit fa-fw"></i> Data Objek WIsata</a>
                        </li>
                    </ul>
                <?php endif; ?>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">