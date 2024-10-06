<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload UI</title>
    <link rel="stylesheet" href="<?= base_url("css/style3.css") ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="header">
        <img src="ombakContoh.png" alt="Header Image" style="width: 100%; height: 200px; object-fit: cover;">
    </div>
    <div class="container">
        <div class="input-group">
            <label for="name-guider"><?= $speaker ?></label>
        </div>
        <div class="input-group">
            <label for="story-content"> <?= $message ?> </label>
        </div>
        <div class="button-container">
            <form action="<?= base_url("story/skip") ?>" method="post">
                <button class="btn btn-primary">SKIP</button>
            </form>
            <a href="<?= base_url("story/" + (request()->uri->getSegment(2)) + 1) ?>" class="btn btn-warning">NEXT</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>