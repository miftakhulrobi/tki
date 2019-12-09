<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Detail Nilai</h4>
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
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Data Nilai</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Detail Nilai</a>
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
                        <?php if ($caspek) : ?>
                            <table class="table table-bordered table-striped table-hover mt-2">
                                <thead class="bg-warning text-white">
                                    <tr>
                                        <th>#</th>
                                        <th>Kemampuan</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                        $t = 1;
                                        foreach ($aspek as $a) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $a->kemampuan ?></td>
                                            <td data-nilai="<?= $a->nilai ?>">
                                                <?= $a->nilai ?>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <div class="data-catatan card-table-data mt-4">
                                <p>Di input Oleh : <?= $catatan->penginput ?></p>
                                <hr>
                                <strong>Catatan :</strong>
                                <p><?= $catatan->catatan ?></p>
                                <hr>
                                Nilai Akhir :
                                <b>MB :</b> <span class="badge badge-success btn-hover data-mb"></span>
                                <b>BB :</b> <span class="badge badge-success btn-hover data-bb"></span>
                                <b>BSH :</b> <span class="badge badge-success btn-hover data-bsh"></span>
                                <b>BSB :</b> <span class="badge badge-success btn-hover data-bsb"></span>
                                <a target="_blank" href="<?= base_url('pdf/nilaiaspek/' . $siswa->siswa_id . '/' . $classes->class_id . '/' . $year->year_id . '/' . $semester . '/' . $bulan . '/' . $table . '/' . $join) ?>" class=" btn btn-warning btn-sm btn-hover float-right">Cetak Nilai</a>
                            </div>
                        <?php else : ?>
                            <h1 class="text-warning text-center">Nilai Belum Di input!</h1>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>