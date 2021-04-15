<?php
// Connection File
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Inventory Store</title>
      <link rel="stylesheet" href="style.css">
      <!-- CSS only -->

      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

      
      <style>
      
      
            table {
                  font-family: arial, sans-serif;
                  border-collapse: collapse;
                  margin: 10%;
            }

            td,
            th {
                  border: 1px solid #dddddd;
                  text-align: center;
                  padding: 12px;
            }

            td.a {
                  text-align: right;
                  font-weight: bold;
            }

            #btn {
                  background-color: white;
                  /* Green */
                  border-radius: 3px;
                  color: black;
                  padding: 12px;
                  width: auto;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                  font-size: 16px;
            }

            .teams .title::after {
                  content: "Item List";
            }

            .contact .title::after {
                  content: "Input Form";
            }

            .home {
                  padding-top: 16%;
            }
            .teams{
                background-color:black;
                color:white;
            }
            .title{
                color:crimson;
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




      <!-- See Item  section  -->
      <section class="teams" id="item">
            <div class="max-width">
                  <h2 class="title">Our Best items</h2>
                  <table  class="table-responsive" width='80%'>
                        <tr>
                              <th>ID</th>
                              <th>Item Name</th>
                              <th>Quantity </th>
                              <th>Price</th>
                              <th>Description</th>
                        </tr>
                        <?php

                        $sql = "SELECT * FROM items_tb";

                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_row($result)) {
                        ?>
                              <tr>
                                    <td><?php echo $row[0]
                                          ?></td>
                                    <td><?php echo $row[1]
                                          ?></td>
                                    <td><?php echo $row[2]
                                          ?></td>
                                    <td><?php echo $row[3]
                                          ?></td>
                                    <td><?php echo $row[4]
                                          ?></td>
                              </tr>


                        <?php

                        }
                        ?>
                  </table>
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