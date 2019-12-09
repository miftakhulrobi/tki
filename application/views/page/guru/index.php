<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data Guru</h4>
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
                    <a href="#">Guru</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Data Guru</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table-data">
                    <div class="card-header">
                        <div class="card-title">Semua Guru
                            <a href="<?= base_url('pdf/guruall') ?>" target="_blank" class="btn btn-success btn-hover btn-sm float-right">Cetak Data Guru</a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="bg-warning">
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($guru as $g) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $g->nama ?></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#show" data-guru="<?= $g->user_id ?>" class="btn btn-info btn-sm btn-hover show-guru">Detail</a>
                                            <a href="<?= base_url('pdf/guruid/' . $g->user_id) ?>" target="_blank" class="btn btn-info btn-sm btn-hover">Cetak</a>
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

<div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showLabel">Biodata Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="target">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-hover" data-dismiss="modal" aria-label="Close">Okay</button>
            </div>
        </div>
    </div>
</div>