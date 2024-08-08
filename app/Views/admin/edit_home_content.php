<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Home Content</title>
</head>
<body>
    <h1>Edit Home Content</h1>

    <form action="<?= site_url('admin/updateHomeContent'); ?>" method="post">
        <?php foreach ($content as $item): ?>
            <input type="hidden" name="id" value="<?= esc($item['id']); ?>">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?= esc($item['title']); ?>" required>
            <br>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required><?= esc($item['description']); ?></textarea>
            <br>
            <label for="image">Image:</label>
            <input type="text" id="image" name="image" value="<?= esc($item['image']); ?>">
            <br>
            <button type="submit">Update Content</button>
        <?php endforeach; ?>
    </form>

    <!-- Jika Anda ingin menambahkan form untuk menambah konten baru -->
    <h2>Add New Content</h2>
    <form action="<?= site_url('admin/updateHomeContent'); ?>" method="post">
        <input type="hidden" name="id" value="">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        <br>
        <label for="image">Image:</label>
        <input type="text" id="image" name="image">
        <br>
        <button type="submit">Add Content</button>
    </form>
</body>
</html>
