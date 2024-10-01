<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicines</title>

    <!-- title icon -->
    <link rel="icon" href="../assets/icons/medicines_icon.png" type="image/x-icon" />
    <!-- title icon -->

    <!-- all linked css -->
    <link rel="stylesheet" href="../styles/universal-css-design/universal-css-design.css">
    <link rel="stylesheet" href="medicines.css">
    <!-- all linked css -->

    <!-- universal google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <!-- universal google fonts -->

    <!-- logo font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
    <!-- logo font -->
</head>

<body>
    <div class="outer-main">
        <div class="left-nav">
            <div class="nav-items logo" style="pointer-events: none;">
                <img src="../assets/images/home-section/logo/logo-main.png" alt="">
                <p>Digi<span>Health</span></p>
            </div>
            <div onclick="show()" class="nav-items" id="allMedicines" style="background-color: #75E6DA;">
                <p>All Medicines</p>
            </div>
            <div class="nav-items" id="analgesics">
                <p>Analgesics (Pain Relievers)</p>
            </div>
            <div class="nav-items" id="antibiotics">
                <p>Antibiotics</p>
            </div>
            <div class="nav-items" id="antidepressants">
                <p>Antidepressants</p>
            </div>
            <div class="nav-items" id="antihistamines">
                <p>Antihistamines (Allergy Relief)</p>
            </div>
            <div class="nav-items" id="diabetesMedications">
                <p>Diabetes Medications</p>
            </div>
            <div class="nav-items" id="bronchodilators">
                <p>Bronchodilators (Asthma Medications)</p>
            </div>
            <div class="nav-items" id="vitaminsAndSupplements">
                <p>Vitamins and Supplements</p>
            </div>
            <div class="nav-items" id="eyeCare">
                <p>Eye Care</p>
            </div>
        </div>

        <div class="right-nav">
            <div class="top-nav">
                <div class="search-box top-nav-search">
                    <input type="text" placeholder="Search Medicines">
                    <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                </div>
                <select name="" id="" aria-placeholder="Sort-By">
                    <option value="type">All</option>
                    <option value="type">Low Price</option>
                    <option value="type">High Price</option>
                    <option value="type">Brands</option>
                    <option value="type">Offers</option>
                </select>
                <select name="" id="" aria-placeholder="Filter-By">
                    <option value="type">All</option>
                    <option value="type">Low Price</option>
                    <option value="type">High Price</option>
                    <option value="type">Brands</option>
                    <option value="type">Offers</option>
                </select>
                <i class="fa-solid fa-cart-plus" id="cart-icon" style="color: #75E6DA; font-size: 24px;"></i>

                <?php
                session_start();
                if (isset($_SESSION['email'])) {
                    echo
                        '<p style="cursor:pointer;">' . htmlspecialchars($_SESSION['username']) . '</p>';
                }
                ?>
            </div>


            <!-- On-Click Content starts -->


            <!-- for user-cart -->
            <?php

            // Assuming user_id is stored in session
            $user_id = $_SESSION['user_id'];

            $servername = "localhost";
            $username = "root"; // Change this to your database username
            $password = ""; // Change this to your database password
            $dbname = "digihealth_medicines_products";

            // Create a connection to the database
            $conn = new mysqli($servername, $username, $password, $dbname);

            $sql = "SELECT * FROM cart WHERE user_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();
            $products = $result->fetch_all(MYSQLI_ASSOC);

            ?>

            <div class="user-cart content-change">
                <div class="cart-title">
                    <i id="back-icon" class="fa-solid fa-circle-arrow-left" style="color: #05445E;"></i>
                    <h1>MY CART</h1>
                </div>
                <div class="fetched-products">
                    <?php foreach ($products as $product): ?>
                        <div class="product">
                            <div class="img">
                                <img src="<?php echo htmlspecialchars($product['product_image']); ?>" alt="Product Image">
                            </div>
                            <div class="content">
                                <h2><?php echo htmlspecialchars($product['product_name']); ?></h2>
                                <div class="price-tag">
                                    <p>Rs <span><?php echo htmlspecialchars($product['product_price']); ?></span>/-</p>
                                </div>
                                <button class="remove-from-cart"
                                    data-product-id="<?php echo htmlspecialchars($product['product_id']); ?>">Remove</button>
                                <button class="buy-now">Buy Now</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- for user-cart ends-->

            <div class="order-form">
                <div class="order-form-title">
                    <h2>Order Details</h2>
                    <p class="order-form-product-name"></p>
                </div>
                <div class="form-container" id="form1">
                    <form action="" method="POST">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter your email for delivery">

                        <label for="text">Phone Number</label>
                        <div class="phone-number">
                            <input type="" placeholder="Enter your phone number">
                            <a href="#">Verify</a>
                        </div>

                        <label for="delivery-address">Delivery Address</label>
                        <input style="border: 1px solid #189AB4;" type="text" placeholder="Enter adress for delivery">

                        <label for="text">Quantity</label>
                        <div class="phone-number quantity">
                            <input style="border: 1px solid #189AB4;width:300px;" type="number"
                                placeholder="Enter quantity">
                            <a href="#">4</a>
                        </div>

                        <div class="order-form-button">
                            <button style="background-color:#189AB4;" type="button" id="proceedButton"
                                onclick="showSecondForm()">Proceed</button>
                            <button style="background-color:red;" type="button" id="closeOrderForm"
                                onclick="closeOrderForm()">Cancel</button>
                        </div>

                    </form>
                </div>

                <div class="form-container hidden" id="form2">
                    <div class="order-form-button">
                        <button type="button" onclick="submitOrder()">Place Order</button>
                        <button style="background-color:red;" type="button" id="closeOrderForm"
                            onclick="closeOrderForm()">Cancel</button>
                    </div>
                </div>
            </div>


            <!-- On-Click Content ends -->



            <div class="content-change">

                <div class="product-outer" id="analgesicsLog">
                    <div class="product">

                        <div class="img">
                            <img src="../assets/images/medicines/analgesicsLog/paracetamol.jpg" alt=""
                                name="product_image">
                        </div>
                        <div class="content">
                            <h2 name="product_name" class="">Paracetamol</h2>
                            <div class="price-tag">
                                <p>Rs <span>55</span>/-</p>
                            </div>
                            <button class="add-to-cart" name="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>

                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/analgesicsLog/ibuprofen.jpeg" alt="">
                        </div>
                        <div class="content">
                            <h2>Ibuprofen</h2>
                            <div class="price-tag">
                                <p>Rs <span>55</span>/-</p>
                            </div>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/analgesicsLog/aspirin.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Aspirin</h2>
                            <div class="price-tag">
                                <p>Rs <span>55</span>/-</p>
                            </div>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/analgesicsLog/naproxen.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Naproxen</h2>
                            <div class="price-tag">
                                <p>Rs <span>55</span>/-</p>
                            </div>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/analgesicsLog/tramadol.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tramadol</h2>
                            <div class="price-tag">
                                <p>Rs <span>55</span>/-</p>
                            </div>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/analgesicsLog/oxycodone.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Oxycodone</h2>
                            <div class="price-tag">
                                <p>Rs <span>55</span>/-</p>
                            </div>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/analgesicsLog/hydrocodone.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Hydrocodone</h2>
                            <div class="price-tag">
                                <p>Rs <span>55</span>/-</p>
                            </div>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/analgesicsLog/celebrex.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Celebrex</h2>
                            <div class="price-tag">
                                <p>Rs <span>55</span>/-</p>
                            </div>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/analgesicsLog/voltarengel.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Voltaren Gel</h2>
                            <div class="price-tag">
                                <p>Rs <span>55</span>/-</p>
                            </div>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/analgesicsLog/codeine.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Codeine</h2>
                            <div class="price-tag">
                                <p>Rs <span>55</span>/-</p>
                            </div>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="product-outer" id="antibioticsLog">
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antibioticsLog/penicilin.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Penicillin</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antibioticsLog/erythromycin.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Erythromycin</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antibioticsLog/cephalexin.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Cephalexin</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antibioticsLog/azithromycin.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Azithromycin</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antibioticsLog/moxifloxacin.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Moxifloxacin</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antibioticsLog/ciprofloxacin.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Ciprofloxacin</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antibioticsLog/colistin.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Colistin</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antibioticsLog/ceftazidime.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Ceftazidime</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antibioticsLog/aztreonam.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Aztreonam</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antibioticsLog/rfampin.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Rifampin</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="product-outer" id="antidepressantsLog">
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antidepressantsLog/setraline.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Sertraline</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antidepressantsLog/escitalopram.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Escitalopram</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antidepressantsLog/amitriptyline .jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Amitriptyline</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antidepressantsLog/paroxetine.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Paroxetine </h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antidepressantsLog/citalopram.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Citalopram </h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antidepressantsLog/phenelzine.png" alt="">
                        </div>
                        <div class="content">
                            <h2>Phenelzine</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antidepressantsLog/fluvoxamine .jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Fluvoxamine</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Imipramine</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antidepressantsLog/bupropion.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Bupropion </h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antidepressantsLog/agomelatine .jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Agomelatine</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>

                </div>

                <div class="product-outer" id="antihistaminesLog">
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antihistaminesLog/loratadine.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Loratadine </h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antihistaminesLog/cetirizine.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Cetirizine </h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antihistaminesLog/cyproheptadine.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Cyproheptadine</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antihistaminesLog/meclizine.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Meclizine</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antihistaminesLog/cinnarizine.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Cinnarizine</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antihistaminesLog/oxatomide.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Oxatomide</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antihistaminesLog/ketotifen.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Ketotifen</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antihistaminesLog/fexofenadine.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Fexofenadine</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antihistaminesLog/olopatadine .jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Olopatadine </h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/antihistaminesLog/bilastine .jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Bilastine</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="product-outer" id="diabetesMedicationsLog">
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="product-outer" id="bronchodilatorsLog">
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="product-outer" id="vitaminsAndSupplementsLog">
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                </div>

                <div class="product-outer" id="eyeCareLog">
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tablet</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</body>

<!-- font awasome -->
<script src="https://kit.fontawesome.com/cf9f264ee5.js" crossorigin="anonymous"></script>
<!-- font awasome -->

<!-- all linked scripts -->
<script src="medicines.js"></script>
<script src="cart/cart.js"></script>
<!-- <script src="../../scripts/medicines/medicines.js"></script> -->
<!-- all linked scripts -->


</body>

</html>