<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Kelas</h4>
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
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table-data">
                    <div class="card-header">
                        <div class="card-title">Tahun Ajaran Sekarang
                            <a href="<?= base_url('siswa/prevyear') ?>" class="btn btn-success btn-sm btn-hover float-right">Tahun Ajaran Sebelumnya</a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <div class="row justify-content-center">
                            <?php if ($cyear) : ?>
                                <?php foreach ($classes as $c) : ?>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="card card-stats card-round card-table-data">
                                            <div class="card-body ">
                                                <div class="row align-items-center">
                                                    <div class="col-icon">
                                                        <div class="icon-big text-center icon-warning bubble-shadow-small">
                                                            <i class="flaticon-users"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col col-stats ml-3 ml-sm-0">
                                                        <div class="numbers">
                                                            <p class="card-category"><b><?= $c->classname ?></b></p>
                                                            <h4 class="card-title">
                                                                <a href="<?= base_url('siswa/show/' . $c->class_id) ?>" class="btn btn-info btn-sm btn-hover">Data Siswa</a>
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>