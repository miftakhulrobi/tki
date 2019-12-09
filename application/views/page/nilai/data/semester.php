<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Semester</h4>
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
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table-data">
                    <div class="card-header">
                        <div class="card-title"><?= $classes->classname ?> T.A. <?= $year->yearname ?>
                            <span class="float-right"><?= $siswa->namasiswa ?></span>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-table-data">
                                    <div class="card-header bg-success">
                                        <div class="card-title text-white">Semester I</div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item"><a href="<?= base_url('nilai/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/7') ?>">Juli</a></li>
                                            <li class="list-group-item"><a href="<?= base_url('nilai/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/8') ?>">Agustus</a></li>
                                            <li class="list-group-item"><a href="<?= base_url('nilai/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/9') ?>">September</a></li>
                                            <li class="list-group-item"><a href="<?= base_url('nilai/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/10') ?>">Oktober</a></li>
                                            <li class="list-group-item"><a href="<?= base_url('nilai/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/11') ?>">November</a></li>
                                            <li class="list-group-item"><a href="<?= base_url('nilai/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/12') ?>">Desember</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card card-table-data">
                                    <div class="card-header bg-success">
                                        <div class="card-title text-white">Semester II</div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item"><a href="<?= base_url('nilai/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/2/1') ?>">Januari</a></li>
                                            <li class="list-group-item"><a href="<?= base_url('nilai/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/2/2') ?>">Februari</a></li>
                                            <li class="list-group-item"><a href="<?= base_url('nilai/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/2/3') ?>">Maret</a></li>
                                            <li class="list-group-item"><a href="<?= base_url('nilai/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/2/4') ?>">April</a></li>
                                            <li class="list-group-item"><a href="<?= base_url('nilai/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/2/5') ?>">Mei</a></li>
                                            <li class="list-group-item"><a href="<?= base_url('nilai/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/2/6') ?>">Juni</a></li>
                                        </ul>
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