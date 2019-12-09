<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Create</h4>
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
                    <a href="#">Create</a>
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
                        <form action="<?= base_url('master/storesiswa') ?>" method="POST">
                            <input type="hidden" name="class_id" value="<?= $classes->class_id ?>">
                            <input type="hidden" name="year_id" value="<?= $year->year_id ?>">
                            <input type="hidden" name="thn" value="<?= $tahun ?>">
                            <small>Nama Siswa</small>
                            <div class="form-group row">
                                <div class="col-md-8 mt-2">
                                    <div class="input-box-grey">
                                        <input type="text" name="namasiswa" class="form-control" placeholder="Nama Lengkap" required>
                                    </div>
                                    <small class="text-success namasiswa-success"></small>
                                    <small class="text-danger namasiswa-danger"></small>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <div class="input-box-grey">
                                        <input type="text" name="namapgln" class="form-control" placeholder="Nama Panggilan" required>
                                    </div>
                                </div>
                            </div>
                            <small>Data Siswa</small>
                            <div class="form-group row">
                                <div class="col-md-8 mt-2">
                                    <div class="input-box-grey">
                                        <input type="text" name="noinduk" class="form-control" value="<?= $noinduk ?>" placeholder="No. Induk" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-2">
                                    <div class="input-box-grey">
                                        <select name="jk" class="form-control" required>
                                            <option value="">-Jenis Kelamin-</option>
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <div class="input-box-grey">
                                        <input type="text" name="tgllahir" class="form-control" placeholder="Tempat Tgl Lahir" required>
                                    </div>
                                    <small class="text-success tgllahir-success"></small>
                                    <small class="text-danger tgllahir-danger"></small>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <div class="input-box-grey">
                                        <input type="text" name="agama" class="form-control" placeholder="Agama" required>
                                    </div>
                                </div>
                                <div class="col-md-3 mt-2">
                                    <div class="input-box-grey">
                                        <input type="number" name="anakke" class="form-control" placeholder="Anak Ke" required>
                                    </div>
                                </div>
                            </div>
                            <small>Orang Tua</small>
                            <div class="form-group row">
                                <div class="col-md-6 mt-2">
                                    <div class="input-box-grey">
                                        <input type="text" name="ayah" class="form-control" placeholder="Ayah" required>
                                    </div>
                                    <small class="text-warning ayah-warning"></small>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <div class="input-box-grey">
                                        <input type="text" name="ibu" class="form-control" placeholder="Ibu" required>
                                    </div>
                                    <small class="text-warning ibu-warning"></small>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <div class="input-box-grey">
                                        <input type="text" name="pekerjaanayah" class="form-control" placeholder="Pekerjaan Ayah" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <div class="input-box-grey">
                                        <input type="text" name="pekerjaanibu" class="form-control" placeholder="Pekerjaan Ibu" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="input-box-grey">
                                        <textarea type="text" name="alamatortu" class="form-control" placeholder="Alamat Orang Tua" required></textarea>
                                    </div>
                                    <small class="text-warning alamatortu-warning"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info btn-create-siswa">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>