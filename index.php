<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Store</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <style>
        .home {
            padding-top: 16%;
        }
    </style>
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>

    <!--Navbar-->
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Guru<span>Tech</span></a></div>
            <ul class="menu">
                <li><a href="index.php" class="menu-btn"> Home</a></li>
                <li><a href="SeeItem.php" class="menu-btn">See Items</a></li>
                <li><a href="AddNewItem.php" class="menu-btn"> Add Items</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- Home section  -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content ">

                <div class="text-2 ">Inventory System</div>
                <div class="text-3 ">Item Types : <span class="typing"></span></div>
                <a href="AddNewItem.php">Add New Item</a>
            </div>
        </div>
    </section>






    <!-- footer section start -->
    <footer>
        <span>Created By <a href="#">GuruTech</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

    <script src="script.js"> </script>
</body>

</html>