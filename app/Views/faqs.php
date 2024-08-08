<?= $this->extend('layouts/template-home'); ?>
<?= $this->section('content'); ?>

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">Pertanyaan</h1>
            <!-- <p class="col-md-8 fs-4">di laman portal berita</p> -->
            <!-- <button class="btn btn-primary btn-sm" type="button">Read more</button> -->
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Apa itu web kesehatan?</h5>
                <p>Web kesehatan adalah situs yang menyediakan informasi, sumber daya, dan layanan terkait kesehatan, termasuk artikel, panduan, dan forum diskusi. <p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Bagaimana cara memastikan informasi kesehatan yang saya baca akurat?</h5>
                <p>Pastikan untuk memeriksa sumber informasi, mencari referensi dari organisasi kesehatan terpercaya, dan memperhatikan tanggal publikasi. <p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>