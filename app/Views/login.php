<?= $this->extend('layouts/template-home'); ?>
<?= $this->section('content'); ?>
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">Silahkan login</h1>
    </div>
</div>

<!-- Form login -->
<form method="post" action="<?= base_url('login'); ?>">
    <div class="form-group">
        <label for="email">Email address</label>
        <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
        <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="Password">Password</label>
        <input name="password" type="password" class="form-control" id="Password" placeholder="Password">
    </div>
    <div class="mb-3"><input type="submit" value="Login" class="btn btn-primary"></div>
</form>

<!-- Modal for displaying error messages -->
<?php if (isset($error)): ?>
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Login Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?= $error ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var errorModal = new bootstrap.Modal(document.getElementById('errorModal'), {
            keyboard: false
        });
        errorModal.show();
    </script>
<?php endif; ?>

<?= $this->endSection(); ?>
