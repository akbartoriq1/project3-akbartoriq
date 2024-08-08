<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Upload</title>
</head>
<body>
    <h1>Test Upload</h1>
    <form action="/admin/doTestUpload" method="post" enctype="multipart/form-data">
        <label for="image">Image:</label>
        <input type="file" id="image" name="image"><br><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
