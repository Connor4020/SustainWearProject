<!DOCTYPE html>
<html lang="en">
<?php include 'header-footer.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SustainWear upload</title>
    <link rel="stylesheet" href="styles/desktop.css" media="screen and (min-width: 769px)">
    <link rel="stylesheet" href="styles/mobile.css" media="screen and (max-width: 768px)">
    <script src="/scripts/script.js"></script>
</head>

<body>
    <?php render_header(); ?>
    <main>
        <section>
            <h2>Upload Page</h2>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </form>
        </section>


        <?php render_footer(); ?>
    </main>
</body>

</html>