<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $this->auths->app()['website'] ?></title>
    <link rel="icon" href="<?= base_url('admin') ?>/assets/file/LOGOTK.png" type="image/x-icon" />
    <link rel="stylesheet" href="<?= base_url('admin') ?>/assets/file/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            background-color: #FA8BFF;
            background-image: linear-gradient(45deg, #FA8BFF 0%, #2BD2FF 52%, #2BFF88 90%);
        }

        .card-login {
            box-shadow: 0px 16px 7px -8px rgba(0, 0, 0, .25);
        }

        .text-title {
            text-shadow: 0px 5px 5px rgba(0, 0, 0, .45);
        }

        .img-logo {
            animation: imgLogo 7s ease 2;
        }

        .btn-hover:hover {
            transform: scale(1.04);
            box-shadow: 0px 10px 8px -5px rgba(0, 0, 0, .50);
        }

        .input-box {
            border: 1px solid lime;
        }

        @keyframes imgLogo {
            0% {
                opacity: 1;
            }

            100% {
                transform: rotateY(360deg);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="text-center mt-3">
            <img src="<?= base_url('admin') ?>/assets/file/LOGOTK.png" alt="" width="80" class="img-logo">
        </div>
        <h2 class="text-white text-center text-title mt-1">
            TK ISLAM MIFTAAHUL JANNAH
        </h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-login mt-3">
                    <div class="card-header">
                        <div class="card-title">
                            <b>LOGIN</b>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('auth/postlogin') ?>" method="POST" class="">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary float-right btn-hover mt-1 mb-3">Sign In</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer fixed-bottom">
            <div class="text-center">
                <p>Copyright 2019 - by <span style="color:darkorange"><?= $this->auths->app()['by'] ?></span></p>
            </div>
        </div>
    </div>

    <script src="<?= base_url('admin') ?>/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        const success = '<?= $this->session->flashdata('success') ?>';
        const error = '<?= $this->session->flashdata('error') ?>';
        if (success) {
            toastr.success("<?= $this->session->flashdata('success') ?>")
        }
        if (error) {
            toastr.error("<?= $this->session->flashdata('error') ?>")
        }
    </script>
</body>

</html>