        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Admin Museum Pos Indonesia</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php echo $_SESSION[username] ?>
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php" onclick="return confirm('Apakah anda yakin ?');"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li >
                            <a href="?module=home"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="?module=modulhighlight"><i class="fa fa-file fa-fw"></i>Kelola Highlight</a>
                        </li>
                        <!--
                        <li>
                            <a href="?module=modulsejarah"><i class="fa fa-file fa-fw"></i>Kelola Sejarah Museum</a>
                        </li>
                       
                        <li>
                            <a href="?module=modulsubsejarah"><i class="fa fa-file fa-fw"></i>Kelola Sub Sejarah Museum</a>
                        </li>
                         <li>
                            <a href="?module=modulsejarahptt"><i class="fa fa-file fa-fw"></i>Kelola Sejarah PTT</a>
                        </li>

                        <li>
                            <a href="?module=modulformnarasi"><i class="fa fa-file fa-fw"></i>Kelola Form Narasi</a>
                        </li>
                        -->
                         <li>
                            <a href="?module=modulkoleksisejarah"><i class="fa fa-file fa-fw"></i>Kelola Koleksi Sejarah </a>
                        </li>

                        <li>
                            <a href="?module=modulkoleksiprangko"><i class="fa fa-file fa-fw"></i>Kelola Koleksi Prangko</a>
                        </li>

                        <li>
                            <a href="?module=modulkoleksiperalatan"><i class="fa fa-file fa-fw"></i>Kelola Koleksi Peralatan</a>
                        </li>

                        <li>
                            <a href="?module=modulpengelolamuseum"><i class="fa fa-file fa-fw"></i>Kelola Pengelola Museum</a>
                        </li>
                        <li>
                            <a href="?module=modulpimpinan"><i class="fa fa-file fa-fw"></i>Kelola Pimpinan PTT</a>
                        </li>

                        <li>
                            <a href="?module=kritikdansaran"><i class="fa fa-file fa-fw"></i>Kritik dan Saran </a>
                        </li>

                        <li>
                            <a href="?module=modulinformasimuseum"><i class="fa fa-file fa-fw"></i>Kelola Informasi Museum</a>
                        </li>

                         <li>
                            <a href="?module=reservasi"><i class="fa fa-file fa-fw"></i>Lihat Reservasi Kunjungan Museum</a>
                        </li>



                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
