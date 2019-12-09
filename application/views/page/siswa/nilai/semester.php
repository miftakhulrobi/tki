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
                    <a href="#">Siswa</a>
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
                                <div class="card">
                                    <div class="card-header bg-warning">
                                        <div class="card-title text-white">Semester I</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="card p-3 card-table-data">
                                                    <div class="d-flex align-items-center">
                                                        <span class="stamp stamp-md bg-success mr-3">
                                                            <i class="fa fa-book-open"></i>
                                                        </span>
                                                        <div>
                                                            <h5 class="mb-1"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/7') ?>">Juli</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="card p-3 card-table-data">
                                                    <div class="d-flex align-items-center">
                                                        <span class="stamp stamp-md bg-success mr-3">
                                                            <i class="fa fa-book-open"></i>
                                                        </span>
                                                        <div>
                                                            <h5 class="mb-1"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/8') ?>">Agustus</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="card p-3 card-table-data">
                                                    <div class="d-flex align-items-center">
                                                        <span class="stamp stamp-md bg-success mr-3">
                                                            <i class="fa fa-book-open"></i>
                                                        </span>
                                                        <div>
                                                            <h5 class="mb-1"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/9') ?>">September</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="card p-3 card-table-data">
                                                    <div class="d-flex align-items-center">
                                                        <span class="stamp stamp-md bg-success mr-3">
                                                            <i class="fa fa-book-open"></i>
                                                        </span>
                                                        <div>
                                                            <h5 class="mb-1"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/10') ?>">Oktober</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="card p-3 card-table-data">
                                                    <div class="d-flex align-items-center">
                                                        <span class="stamp stamp-md bg-success mr-3">
                                                            <i class="fa fa-book-open"></i>
                                                        </span>
                                                        <div>
                                                            <h5 class="mb-1"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/11') ?>">November</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="card p-3 card-table-data">
                                                    <div class="d-flex align-items-center">
                                                        <span class="stamp stamp-md bg-success mr-3">
                                                            <i class="fa fa-book-open"></i>
                                                        </span>
                                                        <div>
                                                            <h5 class="mb-1"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/12') ?>">Desember</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-warning">
                                        <div class="card-title text-white">Semester II</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="card p-3 card-table-data">
                                                    <div class="d-flex align-items-center">
                                                        <span class="stamp stamp-md bg-success mr-3">
                                                            <i class="fa fa-book-open"></i>
                                                        </span>
                                                        <div>
                                                            <h5 class="mb-1"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/1') ?>">Januari</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="card p-3 card-table-data">
                                                    <div class="d-flex align-items-center">
                                                        <span class="stamp stamp-md bg-success mr-3">
                                                            <i class="fa fa-book-open"></i>
                                                        </span>
                                                        <div>
                                                            <h5 class="mb-1"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/2') ?>">Februari</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="card p-3 card-table-data">
                                                    <div class="d-flex align-items-center">
                                                        <span class="stamp stamp-md bg-success mr-3">
                                                            <i class="fa fa-book-open"></i>
                                                        </span>
                                                        <div>
                                                            <h5 class="mb-1"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/3') ?>">Maret</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="card p-3 card-table-data">
                                                    <div class="d-flex align-items-center">
                                                        <span class="stamp stamp-md bg-success mr-3">
                                                            <i class="fa fa-book-open"></i>
                                                        </span>
                                                        <div>
                                                            <h5 class="mb-1"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/4') ?>">April</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="card p-3 card-table-data">
                                                    <div class="d-flex align-items-center">
                                                        <span class="stamp stamp-md bg-success mr-3">
                                                            <i class="fa fa-book-open"></i>
                                                        </span>
                                                        <div>
                                                            <h5 class="mb-1"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/5') ?>">Mei</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="card p-3 card-table-data">
                                                    <div class="d-flex align-items-center">
                                                        <span class="stamp stamp-md bg-success mr-3">
                                                            <i class="fa fa-book-open"></i>
                                                        </span>
                                                        <div>
                                                            <h5 class="mb-1"><a href="<?= base_url('siswa/datanilai/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/1/6') ?>">Juni</a></h5>
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
                </div>
            </div>
        </div>
    </div>
</div>