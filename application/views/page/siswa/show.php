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
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table-data">
                    <div class="card-header">
                        <div class="card-title">Siswa Kelas <?= $classes->classname ?> T.A. <?= $year->yearname ?>
                            <a href="<?= base_url('pdf/siswaall/' . $classes->class_id) ?>" target="_blank" class="btn btn-success btn-sm float-right btn-hover">Cetak Data Siswa</a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="bg-warning">
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
                                            <a href="#" class="btn btn-info btn-sm btn-hover detail" siswa_id="<?= $s->siswa_id ?>" data-toggle="modal" data-target="#detail">Detail</a>
                                            <a href="<?= base_url('siswa/semester/' . $s->siswa_id . '/' . $classes->class_id . '/' . $year->year_id) ?>" class="btn btn-info btn-sm btn-hover">Nilai</a>
                                            <a href="<?= base_url('pdf/siswaid/' . $s->siswa_id) ?>" target="_blank" class="btn btn-info btn-sm btn-hover">Cetak</a>
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

<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailLabel">Detail Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="target">

            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" aria-label="Close" class="btn btn-success btn-hover">Okay</button>
            </div>
        </div>
    </div>
</div>