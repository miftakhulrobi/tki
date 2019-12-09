<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Profile Saya</h4>
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
                    <a href="#">Profile</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-profile card-table-data">
                    <div class="card-header" style="background-image: url('<?= base_url('admin') ?>/assets/img/blogpost.jpg')">
                        <div class="profile-picture">
                            <div class="avatar avatar-xl avatar-hover">
                                <img src="<?= base_url('admin') ?>/assets/file/admin.jpg" alt="..." class="avatar-img rounded-circle">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-profile text-center">
                            <div class="name"><?= $this->auths->user()->nama ?></div>
                            <div class="job">Guru</div>
                            <hr>
                            <div class="desc">Pengampu : <?= $this->auths->user()->pengampu ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-profile-user card-table-data">
                    <div class="card-body">
                        <form action="<?= base_url('master/updateprofile') ?>" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-8 mt-2">
                                    <small>Nama Lengkap</small>
                                    <div class="input-box-grey">
                                        <input type="text" name="nama" class="form-control" value="<?= $this->auths->user()->nama ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-2">
                                    <small>Nama Panggilan</small>
                                    <div class="input-box-grey">
                                        <input type="text" name="username" class="form-control" value="<?= $this->auths->user()->username ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-2">
                                    <small>Alamat</small>
                                    <div class="input-box-grey">
                                        <textarea type="text" name="alamat" class="form-control" required><?= $this->auths->user()->alamat ?></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <small>Tmp Tgl Lahir</small>
                                    <div class="input-box-grey">
                                        <input type="text" name="tgllahir" class="form-control" value="<?= $this->auths->user()->tgllahir ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <small>Pendidikan Terakhir</small>
                                    <div class="input-box-grey">
                                        <input type="text" name="pendidikanterakhir" class="form-control" value="<?= $this->auths->user()->pendidikanterakhir ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <small>Pengampu</small>
                                    <div class="input-box-grey">
                                        <input type="text" name="pengampu" class="form-control" value="<?= $this->auths->user()->pengampu ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 mt-2">
                                    <small>Telepon</small>
                                    <div class="input-box-grey">
                                        <input type="text" name="telepon" class="form-control" value="<?= $this->auths->user()->telepon ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info float-right btn-hover">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>