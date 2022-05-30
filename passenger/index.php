<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Responsive bottom navigation</title>
</head>

<body>


    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo">Guzo</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link active-link ">
                            <i class='bx bx-home-alt nav__icon'></i>
                            <span class="nav__name">Home</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="station.php" class="nav__link ">
                            <i class='bx  bx-map nav__icon'></i>
                            <span class="nav__name">Stations</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="route.php" class="nav__link">
                            <i class='bx bxs-direction-right nav__icon'></i>
                            <span class="nav__name">Routes</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="bus.php" class="nav__link ">
                            <i class='bx bx-bus nav__icon'></i>
                            <span class="nav__name">Bus</span>
                        </a>
                    </li>


                    <li class="nav__item">
                        <a href="wallet.php" class="nav__link">
                            <i class='bx bx-briefcase-alt nav__icon'></i>
                            <span class="nav__name">Wallet</span>
                        </a>
                    </li>
                </ul>
            </div>

            <img src="assets/img/perfil.png" alt="" class="nav__img">
        </nav>
    </header>

    <style>
    .search {
        position: absolute;
        left: 120px;
        bottom: 0;
        height: 50%;
    }
    </style>
    <style>
    .anbessa {
        position: absolute;
        top: 0;
        width: 100%;
        height: 60%;
    }
    </style>




    <div class="anbessa">
        <img src="assets/img/anbessa1.png" alt="anbessabus">
    </div>

    <div class="search">

        <div class="col-lg-12">
            <div class="col-lg-3"></div>
            <div class="col-lg-12">


                <h2 style="margin-top: 100px;">Where you want to go!</h2>
                <br>
                <form action="book/search.php" method="POST">
                    <center>
                        <label>Search your current station</label>
                    </center>
                    <br><br>
                    <input type="text" id="searchBox" name="searchBox" class="form-control" autocomplete="off"
                        placeholder="Enter your current station..." required="required">

                    <div id="result"></div>

                    <center>
                        <button type="submit" name="submit" class="btn btn-primary">Search</button>
                    </center>
                </form>
                <div class="success"></div>

            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>


    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>
