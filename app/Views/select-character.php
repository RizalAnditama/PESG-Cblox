<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Selection</title>
    <link rel="stylesheet" href="<?= base_url("css/style2.css") ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <form method="post">
            <div class="selection-box">
                <h2>CHOOSE YOUR CHARACTER</h2>
                <div class="characters">
                    <div class="character">
                        <label for="boy">
                            <input type="radio" name="gender" value="boy" id="boy">
                            <img src="<?= base_url("images/karakter1.jpg") ?>" alt="Character 1" aria-required="true" required>
                        </label>
                    </div>
                    <span>OR</span>
                    <div class="character">
                        <label for="girl">
                            <input type="radio" name="gender" value="girl" id="girl">
                            <img src="<?= base_url("images/character2.jpg") ?>" alt="Character 2" aria-required="true" required>
                        </label>
                    </div>
                </div>
                <label for="name">Enter Your Name</label>
                <input type="text" name="name" id="name" placeholder="Your name" required>
                <button type="submit">Confirm</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>