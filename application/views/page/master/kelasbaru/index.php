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
                    <a href="#">Master</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Tahun Ajaran</a>
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
                        <div class="card-title">Data Kelas T.A <?= $year->yearname ?>
                            <a href="<?= base_url('master/tahunajaran') ?>" class="btn btn-success btn-sm btn-hover float-right">Kembali</a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="bg-warning">
                                <tr>
                                    <th>#</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($classes as $c) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $c->classname ?></td>
                                        <td>
                                            <a href="<?= base_url('master/siswa/' . $c->class_id) ?>" class="btn btn-info btn-sm btn-hover">Data Siswa</a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>