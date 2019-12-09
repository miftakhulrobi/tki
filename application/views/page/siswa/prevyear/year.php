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
                    <a href="#">Siswa</a>
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
                        <div class="card-title">Data Tahun Ajaran

                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <?php if ($cyear) : ?>
                            <table class="table table-striped table-hover">
                                <thead class="bg-warning text-white">
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
                                                <a href="#" class="badge badge-danger btn-sm btn-hover" disabled><?= $y->status ?></a>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('siswa/classesprevyear/' . $y->year_id) ?>" class="btn btn-info btn-sm btn-hover">Kelas</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        <?php else : ?>
                            <h3 class="text-center m-5">Tidak Ada Data!</h3>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>