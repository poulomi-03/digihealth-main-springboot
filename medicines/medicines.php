<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigiHealth</title>

    <!-- title icon -->
    <link rel="icon" href="../assets/images/home-section/logo/logo-main.png" type="image/x-icon" />
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
                <i class="fa-solid fa-cart-plus" style="color: #75E6DA; font-size: 24px;"></i>

                <?php
                session_start();
                if (isset($_SESSION['email'])) {
                    echo    
                        '<p style="cursor:pointer;">' . htmlspecialchars($_SESSION['username']) . '</p>';
                    }
                ?>

            </div>

            <div class="content-change">

                <div class="product-outer" id="analgesicsLog">
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Paracetamol</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Ibuprofen</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Aspirin</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Naproxen</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Tramadol</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Oxycodone</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Hydrocodone</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Celebrex</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Voltaren Gel</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Codeine</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                </div>



                <div class="product-outer" id="antibioticsLog">
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Penicillin</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Erythromycin</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Cephalexin</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Azithromycin</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Moxifloxacin</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Ciprofloxacin</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Colistin</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Ceftazidime</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Aztreonam</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
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
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Sertraline</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Escitalopram</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Amitriptyline</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Paroxetine </h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Escitalopram </h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Phenelzine</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
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
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Bupropion </h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
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
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Loratadine </h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Cetirizine </h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Cyproheptadine</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Meclizine</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Cinnarizine</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Oxatomide</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Ketotifen</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Fexofenadine/</h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
                        </div>
                        <div class="content">
                            <h2>Olopatadine </h2>
                            <button class="add-to-cart">Add to Cart</button>
                            <button class="buy-now">Buy Now</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="img">
                            <img src="../assets/images/medicines/tablet.jpg" alt="">
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
<!-- <script src="../../scripts/medicines/medicines.js"></script> -->
<!-- all linked scripts -->


</body>

</html>