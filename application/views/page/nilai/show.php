<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Siswa</h4>
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

            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table-data">
                    <div class="card-header">
                        <div class="card-title">Siswa Kelas <?= $classes->classname ?> T.A. <?= $year->yearname ?>

                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="bg-warning text-white">
                                <tr>
                                    <th>#</th>
                                    <th>Nama Siswa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($siswa as $s) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $s->namasiswa ?></td>
                                        <td>
                                            <a href="<?= base_url('nilai/semester/' . $s->siswa_id . '/' . $classes->class_id . '/' . $year->year_id) ?>" class="btn btn-info btn-sm btn-hover">Nilai</a>
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