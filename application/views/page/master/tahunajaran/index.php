<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Tahun Ajaran</h4>
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
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-table-data">
                    <div class="card-header">
                        <div class="card-title">Tahun Ajaran
                            <a href="#" data-toggle="modal" data-target="#create" class="btn btn-success btn-sm btn-hover float-right">Tambah Tahun Ajaran</a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="bg-warning">
                                <tr>
                                    <th>Tahun Ajaran</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($year as $y) : ?>
                                    <tr>
                                        <td><?= $y->yearname ?></td>
                                        <td>
                                            <?php if ($y->status == 'Baru') : ?>
                                                <a href="#" data-toggle="modal" data-target="#status" class="badge badge-primary btn-sm btn-hover badge-update-status" year_id="<?= $y->year_id ?>" status="<?= $y->status ?>"><?= $y->status ?></a>
                                            <?php elseif ($y->status == 'Aktif') : ?>
                                                <a href="#" data-toggle="modal" data-target="#status" class="badge badge-success btn-sm btn-hover badge-update-status" year_id="<?= $y->year_id ?>" status="<?= $y->status ?>"><?= $y->status ?></a>
                                            <?php else : ?>
                                                <a href="#" class="badge badge-danger btn-sm btn-hover" disabled><?= $y->status ?></a>
                                            <?php endif ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('master/kelas/' . $y->year_id) ?>" class="btn btn-info btn-sm btn-hover">Data Kelas</a>
                                            <a href="#" class="btn btn-info btn-sm btn-hover edit" data-toggle="modal" data-target="#edit" year_id="<?= $y->year_id ?>" yearname="<?= $y->yearname ?>">Edit</a>
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

<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabel">Tambah Tahun Ajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('master/storetahunajaran') ?>" method="POST">
                    <div class="form-group">
                        <div class="input-box">
                            <input type="text" name="yearname" class="form-control" placeholder="Tahun Ajaran" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-hover">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editLabel">Edit Tahun Ajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('master/updatetahunajaran') ?>" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="year_id">
                        <div class="input-box">
                            <input type="text" name="yearname" class="form-control" placeholder="Tahun Ajaran" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-hover">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="status" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="statusLabel">Warning!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-3 text-danger">Status Baru tidak bisa di ubah ke status Selesai, hanya bisa di ubah ke status Aktif. Ketika status Aktif di ubah ke status Selesai maka tidak bisa di kembalikan lagi ke status Aktif.. Mohon lebih teliti!</p>
                <form action="<?= base_url('master/updatestatustahunajaran') ?>" method="POST" id="target">


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-hover">Ubah</button>
                </form>
            </div>
        </div>
    </div>
</div>