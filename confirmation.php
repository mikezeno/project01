<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Metadata -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" contect="IE=edge">
        <meta name="viewport" content="width = device-width, initial-scale = 1">

        <!-- Tab in tab -->
        <title>Zeno's Chicago Grill</title>

        <!-- Bootstrap 4.0 CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">

        <style>
            #resFooter {
                font-size: xs;
            }
        </style>

        <!-- Set favicon -->
        <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

    </head>
    <body>
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <!-- Logo -->
            <img src="images/ZenosLogo.png" alt="Zeno's Chicago Grill" class="navbar-brand" loading="lazy">

            <!-- Button for small screens -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarLinks" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="navbarLinks">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="menu.html" class="nav-link">Menu</a>
                    </li>
                    <li class="nav-item active">
                        <a href="reservation.html" class="nav-link">Reservation</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="jumbotron">
                        <h2 class="display-4">Rerservation has been confirmed!</h2>
                        <p class="lead">Congraulations <b><?php echo $_GET["firstName"]; ?> <?php echo $_GET["lastName"]; ?></b>, your reservation for <b><?php echo $_GET["partySelect"]; ?></b> people on <b><?php echo $_GET["resDate"]; ?></b> at <b><?php echo $_GET["resTime"]; ?></b> has been made.</p>
                        <p id="resFooter">*Please arrive 15 minutes prior to your reservation time.</p>
                        <hr class="my-4">
                        <p>A confirmation email sent to <b><?php echo $_GET["email"]; ?></b>.</p>
                        <p>Requested: <?php echo $_GET["wheelchairCheck"]; ?> <?php echo $_GET["highchairCheck"]; ?> <?php echo $_GET["strollerCheck"]; ?> <?php echo $_GET["outdoorCheck"]; ?></p>
                        <p>Special Instructions: <?php echo $_GET["specInstructionText"]; ?></p>
                    </div>
                </div>
            </div>
            <h5>Raw Results</h5>
            <p>First Name: <?php echo $_GET["firstName"]; ?></p>
            <p>Last Name: <?php echo $_GET["lastName"]; ?></p>
            <p>Email: <?php echo $_GET["email"]; ?></p>
            <p>Phone: <?php echo $_GET["phone"]; ?></p>
            <p>Reservation Date: <?php echo $_GET["resDate"]; ?></p>
            <p>Reservatoin Time: <?php echo $_GET["resTime"]; ?></p>
            <p>Party Size: <?php echo $_GET["partySelect"]; ?></p>
            <p>Wheelchair: <?php echo $_GET["wheelchairCheck"]; ?></p>
            <p>Highchair: <?php echo $_GET["highchairCheck"]; ?></p>
            <p>Stroller: <?php echo $_GET["strollerCheck"]; ?></p>
            <p>Outdoor Seating: <?php echo $_GET["outdoorCheck"]; ?></p>
            <p>Outdoor Seating: <?php echo $_GET["specInstructionText"]; ?></p>
        </div>

    </body>
</html>