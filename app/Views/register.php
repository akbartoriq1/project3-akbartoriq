<?= $this->extend('layouts/template-home'); ?>
<?= $this->section('content'); ?>
<div class="p-5 mb-4 bg-light rounded-3">
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script type="text/javascript">
        function showAlert(message) {
            if (message) {
                alert(message);
            }
        }
    </script>
</head>
<body onload="showAlert('<?= session()->getFlashdata('message') ?>')">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">Silahkan daftar akun</h1>
    </div>
    <form method="post" action="<?= base_url('register/do_register'); ?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="text" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="Password" placeholder="Password">
        </div>
        <div class="mb-3">
            <input type="submit" value="Register" class="btn btn-primary">
        </div>
    </form>
</body>
</html>
<?= $this->endSection(); ?>