<?php
// Connection File
include('connection.php');
// Insert data into the database
if (isset($_POST['Save'])) {
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $QUANTITY = $_POST['quantity'];
    $DES = $_POST['des'];

    echo $UPDATE_TIME;
    $query = "INSERT INTO `items_tb` (`id`, `name`, `price`, `quantity`, `descryption`) 
    VALUES (NULL, '$NAME', '$PRICE', '$QUANTITY','$DES')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script language="javascript"> alert("Data saved."); </script>';
    } else {
        echo '<script> alert("Data Not saved."); </script>';
    }
}
?>
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
        .contact {
            background-color: black;
            color:crimson;
        }

        .contact .title::after {
            content: "Input Form";
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




    <!-- Add New Item  Section-->
    <section class="contact" id="add">
        <div class="max-width">
            <h2 class="title">Add New Item</h2>
            <div class="contact-content">

                <div class="column right">
                    <form action="AddNewItem.php" method="POST">
                        <div class="fields">
                            <div class="field">
                                <input type="text" name="name" placeholder="Item Name" required>
                            </div>
                            <div class="field email">
                                <input type="number" name="price" placeholder="Item Price" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="number" name="quantity" placeholder="Item Quantity" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="15" name="des" name="text" placeholder="Description.." required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" name="Save">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- footer section start -->
    <footer>
        <span>Created By <a href="#">GuruTech</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                // sticky navbar on scroll script
                if (this.scrollY > 20) {
                    $('.navbar').addClass("sticky");
                } else {
                    $('.navbar').removeClass("sticky");
                }

                // scroll-up button show/hide script
                if (this.scrollY > 500) {
                    $('.scroll-up-btn').addClass("show");
                } else {
                    $('.scroll-up-btn').removeClass("show");
                }
            });

            // slide-up script
            $('.scroll-up-btn').click(function() {
                $('html').animate({
                    scrollTop: 0
                });
                // removing smooth scroll on slide-up button click
                $('html').css("scrollBehavior", "auto");
            });

            $('.navbar .menu li a').click(function() {
                // applying again smooth scroll on menu items click
                $('html').css("scrollBehavior", "smooth");
            });

            // toggle menu/navbar script
            $('.menu-btn').click(function() {
                $('.navbar .menu').toggleClass("active");
                $('.menu-btn i').toggleClass("active");
            });

            // typing text animation script
            var typed = new Typed(".typing", {
                strings: ["  Grossary Items", " Packed Items ", " Unpacked Items"],
                typeSpeed: 100,
                backSpeed: 60,
                loop: true
            });

        });
    </script>
</body>

</html>