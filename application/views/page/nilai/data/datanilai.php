<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data Nilai</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Nilai</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Kelas</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Siswa</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Semester</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Data Nilai</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table-data">
                    <div class="card-header">
                        <div class="card-title"><?= $classes->classname ?> T.A. <?= $year->yearname ?> Bulan : <?= $bulan ?>
                            <span class="float-right"><?= $siswa->namasiswa ?></span>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-table-data">
                                    <div class="card-body table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead class="bg-warning text-white">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Aspek Pengembangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="<?= base_url('nilai/inputnilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/' . $semester . '/' . $bulan . '/agamadanmoral/t_agamadanmoral') ?>">Agama dan Moral</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <a href="<?= base_url('nilai/inputnilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/' . $semester . '/' . $bulan . '/bahasa/t_bahasa') ?>">Bahasa</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <a href="<?= base_url('nilai/inputnilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/' . $semester . '/' . $bulan . '/kognitif/t_kognitif') ?>">Kognitif</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <a href="<?= base_url('nilai/inputnilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/' . $semester . '/' . $bulan . '/motorik/t_motorik') ?>">Motorik</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <a href="<?= base_url('nilai/inputnilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/' . $semester . '/' . $bulan . '/seni/t_seni') ?>">Seni</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>
                                                        <a href="<?= base_url('nilai/inputnilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/' . $semester . '/' . $bulan . '/sosialemosional/t_sosialemosional') ?>">Sosial Emosional</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-table-data">
                                    <div class="card-body table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead class="bg-warning text-white">
                                                <tr>
                                                    <th>#</th>
                                                    <th>EkstraKulikuler</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="<?= base_url('nilai/inputnilaiekstra/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/' . $semester . '/' . $bulan . '/ekstraagama/t_ekstraagama') ?>">Agama</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <a href="<?= base_url('nilai/inputnilaiekstra/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/' . $semester . '/' . $bulan . '/ekstrabahasajawa/t_ekstrabahasajawa') ?>">Bahasa Jawa</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <a href="<?= base_url('nilai/inputnilaiekstra/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/' . $semester . '/' . $bulan . '/ekstradrumbband/t_ekstradrumbband') ?>">Drumb Band</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>
                                                        <a href="<?= base_url('nilai/inputnilaiekstra/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/' . $semester . '/' . $bulan . '/ekstramenari/t_ekstramenari') ?>">Menari</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>
                                                        <a href="<?= base_url('nilai/inputnilaiekstra/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/' . $semester . '/' . $bulan . '/ekstramenggambar/t_ekstramenggambar') ?>">Menggambar</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>