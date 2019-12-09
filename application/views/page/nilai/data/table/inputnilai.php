<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Input Nilai</h4>
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
                    <a href="#">Input Nilai</a>
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
                        <?php if (!$countselesai) : ?>
                            <form action="<?= base_url('nilai/store' . $table) ?>" method="POST">
                                <h4 class="text-info float-right"><?= strtoupper($table) ?></h4>
                                <input type="hidden" name="siswa_id" value="<?= $siswa->siswa_id ?>">
                                <input type="hidden" name="class_id" value="<?= $classes->class_id ?>">
                                <input type="hidden" name="year_id" value="<?= $year->year_id ?>">
                                <input type="hidden" name="semester" value="<?= $semester ?>">
                                <input type="hidden" name="bulan" value="<?= $bulan ?>">
                                <input type="hidden" name="table" value="<?= $table ?>">
                                <input type="hidden" name="join" value="<?= $join ?>">
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
                                            foreach ($aspekpengembangan as $a) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $a->kemampuan ?></td>
                                                <td class="text-center">
                                                    <div class="form-group">
                                                        <div class="input-box">
                                                            <select name="<?= $t++ ?>" class="form-control" required>
                                                                <option value="">-Pilih-</option>
                                                                <option value="MB">MB</option>
                                                                <option value="BB">BB</option>
                                                                <option value="BSH">BSH</option>
                                                                <option value="BSB">BSB</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                                <div class="form-group">
                                    <label for="">Catatan :</label>
                                    <div class="input-box">
                                        <textarea name="catatan" cols="30" rows="7" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info float-right btn-hover btn-create-catatan">Simpan Nilai</button>
                                </div>
                            </form>
                        <?php else : ?>
                            <h1 class="text-center text-warning">Selesai!</h1>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>