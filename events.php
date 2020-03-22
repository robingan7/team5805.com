<!DOCTYPE html>
<html>
    <head>
        <title>EVENTS | FRC5805</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./style/main.css">
        <link rel="stylesheet" type="text/css" href="./style/robots.css">
        <link rel="stylesheet" type="text/css" href="./style/events.css">
        <script src="./javascript/index.js" defer></script>
        <script src="./javascript/main.js" defer></script>
        <script src="./javascript/robots.js" defer></script>
        <script src="./javascript/events.js" defer></script>
        <meta name="description" content="Witness the history we've assembled since 2015...">
        <link rel="icon" href="./img/ricon.png" type="image/png">
    </head>
    <body>
        <?php
        include_once 'component/menu.php';
        printMenu('events');
        ?>
        <main class="home">
            <h1>Events</h1>
            <p class="pAddLine">Check our events...</p>
            <div class="grid-container events-grid">
                <div class="event card">
                        <div class=" event-club-rush-19 phot"></div>
                        <div class="grid-item">
                            <h1>Club Rush</h1>
                            <p>Come check out our club at club rush in the gym during lunch!  We'll be discussing some of the events and activites in our club.</p>
                        </div>  
                        <div class="grid-item">
                            <p style="font-family: 'Roboto Mono' ">[8/29/19]</p>
                        </div>
                </div>

                <a href="google.com" class="cardwraper">
                <div class="event card">
                        <div class="phot"></div>
                        <div class="grid-item">
                            <h1>First Club Meeting</h1>
                            <p>Coming soon ...</p>
                        </div>  
                        <div class="grid-item">
                            <p style="font-family: 'Roboto Mono' ">[TBD]</p>
                    </div>
                </div>
            </a>
            </div>
        </main>  

    </body>
</html>