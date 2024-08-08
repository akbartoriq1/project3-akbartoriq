<?= $this->extend('layouts/template-home'); ?>
<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .content-wrapper {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-bottom: 30px;
            background-color: #f9f9f9;
        }
        .content-wrapper h2 {
            margin-top: 20px;
            font-size: 24px;
            color: #333;
        }
        .content-wrapper p {
            margin: 15px 0;
            font-size: 16px;
            color: #555;
        }
        .center-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Welcome to the Home Page!</h1>

    <?php if (isset($content)): ?>
        <?php foreach ($content as $item): ?>
            <div class="content-wrapper">
                <h2><?= esc($item['title']); ?></h2>
                <p><?= esc($item['description']); ?></p>
                <?php if (!empty($item['image'])): ?>
                    <img src="<?= esc(base_url('uploads/' . $item['image'])); ?>" alt="Image" class="center-image">
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p style="text-align: center;">No content available.</p>
    <?php endif; ?>
</body>
</html>


    <?= $this->endSection(); ?>

