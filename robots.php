<!DOCTYPE html>
<html>
    <head>
        <title>ROBOTS | FRC5805</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./style/main.css">
        <link rel="stylesheet" type="text/css" href="./style/robots.css">
        <script src="./javascript/index.js" defer></script>
        <script src="./javascript/main.js" defer></script>
        <script src="./javascript/robots.js" defer></script>
        <meta name="description" content="Witness the history we've assembled since 2015...">
        <link rel="icon" href="./img/ricon.png" type="image/png">
    </head>
    <body>
        <?php
        include_once 'component/menu.php';
        printMenu('robots');
        ?>
        <main class="home">
            <h1>Robots</h1>
            <p class="pAddLine">Witness the history we've assembled since 2015...</p>
            <div class="people-grid" id="pastRobots">
                <div class="profile card">
                    <div class="profile-pic" 
                        style="background: white;
                        background-repeat: no-repeat;
                        background-blend-mode: multiply;
                        background-position: center;">
                    </div>
                    <div class="profile-desc">
                        <h3 class="pAddLine">Loading</h3>
                    </div>
                </div>
            </div>
            <?php
            include_once 'component/footer.php';
            ?>
        </main>
    </body>
</html>