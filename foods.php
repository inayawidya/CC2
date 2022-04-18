<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/Logo-tera.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="foods.php">Foods</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/salted.jpeg" alt="Salted Egg" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Salted Egg</h4>
                    <p class="food-price">28 k</p>
                    <p class="food-detail">
                        Chicke popcorn with special sauce salted egg tera
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/skin.jpeg" alt="skin" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Crispy Chicken Skin With Blackpepper Sauce</h4>
                    <p class="food-price">28 k</p>
                    <p class="food-detail">
                        Made with blackpepper Sauce, Chicken skin, and organice vegetables.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/cumi.jpeg" alt="cumi" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Baby Cumi</h4>
                    <p class="food-price">28 k</p>
                    <p class="food-detail">
                        Made with rica-rica sauce and baby cumi
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/fillet.jpeg" alt="fillet" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicken Fillet Cheesy Spicy</h4>
                    <p class="food-price">28 k</p>
                    <p class="food-detail">
                        Made with Chicken Fillet Sauce Spicy Cheesy
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Menu Tera</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/taro tera.png" alt="Taro Tera" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Taro Tera</h4>
                    <p class="food-price">15 k</p>
                    <p class="food-detail">
                        Taro tera is a refreshing beverage made
                        with taro powder and your choice of milk and 
                        sweetener. 
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/sugardaddy.png" alt="Sugar Daddy" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Sugar Daddy</h4>
                    <p class="food-price">15 k</p>
                    <p class="food-detail">
                        Sugar Daddy is a refreshing beverage made
                        with special syrup and your choice of milk and 
                        sweetener.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/matcha-tera.png" alt="Chicke Hawain Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Matcha Tera</h4>
                    <p class="food-price">15 k</p>
                    <p class="food-detail">
                        Matcha tera is a refreshing beverage made
                        with matcha powder and your choice of milk and 
                        sweetener.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/kiwi tea.png" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Kiwi Tea</h4>
                    <p class="food-price">15 k</p>
                    <p class="food-detail">
                        Kiwi tea is a refreshing beverage made
                        with kiwi fresh and tea homemade special tera
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            
            <div class="clearfix"></div>   

        </div>

        <p class="text-center">
            <a href="#">See All Menu</a>
        </p>
    </section>
    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved.</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>