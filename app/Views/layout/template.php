<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Site Title -->
    <title>Dashboard  | Library Manager</title>
    <!-- Favicon -->
    <link rel="icon" href="/img/favicon.svg" type="image/svg+xml">
    <!-- Bootstrap CSS -->
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c5011ec83e.js" crossorigin="anonymous"></script>   
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <!-- Custom Css -->
    <link rel="stylesheet" href="css/library_manager.css">
    <link rel="stylesheet" href="css/library_manager_media.css">
</head>
<body class="" id="body"> 

    <!-- Side Navigation -->
    <aside >
        <!-- Logo -->
        <div class="lm-info">
            <i class="fa-solid fa-book-open"></i>
            <h3 class="lm-info-title ">Library Manager</h3>
        </div>
        <hr>
        <nav>
            <ul>
                <li><a href=""><span><i class="fa-solid fa-bookmark"></i></span>Dashboard</a></li>
                <li class="active"><a href=""><span><i class="fa-solid fa-swatchbook"></i></span>Books</a></li>
                <li><a href=""><span><i class="fa-solid fa-list-check"></i></span>Books In - Out</a></li>
                <li><a href=""><span><i class="fa-solid fa-money-check"></i></span>Catalog</a></li>
                <li><a href=""><span><i class="fa-solid fa-table-list"></i></span>Report</a></li>
            </ul>
        </nav>
    </aside>
    <!-- Main Body -->
    <main>
        <!-- Header -->
        <header class="d-flex justify-content-between active" id="header">
            <!--        Left Section-->
            <div class="left">
                <button id="menu_toggle"><i class="fa-solid fa-bars"></i></button>       
                <input type="text" placeholder="Enter book name">
            </div>
            <!--        Right Section-->
            <div class="right">
                <button class="btn"><i class="fa-solid fa-bell"></i></button>
                <button class="btn"><i class="fa-solid fa-ellipsis-vertical"></i></button>
            </div>
        </header>

        <!-- Main Content -->

        <div class="main-content">
            <div class="page-header">
                <button class="btn btn-primary">Add Book</button>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <p>Created with <span><i class="fa-solid fa-heart"></i></span> by <a href="https://vijayv123.github.io/portfolio/" target="_blank">Vijay V</a></p>
            <span class="boost-up" onclick="scroll_to_top()""><i class="fa-brands fa-space-awesome"></i></span>
        </footer>
    </main>


    <!-- Jquery -->
    <script src="assets/jQuery/jQuery.min.js"></script>
    <script src="assets/jQuery/jQuery_validator.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/bootstrap/bootstrap.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Custom JS -->
    <script src="js/library_manger.js"></script>
</body>
</html>