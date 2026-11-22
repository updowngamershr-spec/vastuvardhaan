<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>वास्तुवर्धन - वास्तुशास्त्र व न्यूमरोलॉजी | Vastuvardhaan</title>
    <link rel="icon" type="image/jpeg" href="img/logo.jpg">
    <!-- Tabler Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
    <!-- Google Fonts: Mukta (Devanagari) & Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Base Styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Dedicated Theme & Mobile Responsive Stylesheet -->
    <link rel="stylesheet" href="css/vastu-custom.css">
</head>

<body>
    <!-- Top Navigation -->
    <header class="navigation">
        <div class="container m-auto flex items-center justify-between px-4">
            <div class="logo">
                <a href="index.php" title="वास्तुवर्धन वास्तुशास्त्र व न्यूमरोलॉजी" class="flex items-center gap-2">
                    <img src="./img/logo.jpg" alt="वास्तुवर्धन" class="h-12 w-auto object-contain">
                </a>
            </div>

            <nav class="menus" id="mobileMenu">
                <div class="top-mobile-menu">
                    <div class="left">
                        <a href="consultation.php" class="vv-btn-primary py-1 px-4 text-sm">सल्ला बुक करा</a>
                    </div>
                    <div class="right" id="closeMobile">
                        <img src="./img/cross.png" alt="Close">
                    </div>
                </div>

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="products.php">Vastu Products</a></li>
                    <li><a href="awards.php">Awards & Recognition</a></li>
                    <li><a href="blogs.php">Blog & Tips</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </nav>

            <div class="login_signup">
                <ul>
                    <li id="cart">
                        <a href="cart.php" title="View Cart">
                            <i class="ti ti-shopping-cart text-xl"></i>
                            <span class="cart-badge" id="navCartBadge" style="display:none;">0</span>
                        </a>
                    </li>
                    <li class="hidden md:block">
                        <a href="consultation.php" class="vv-btn-primary py-2 px-5 text-sm">Book Consultation</a>
                    </li>
                </ul>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="menu-toggle lg:hidden" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
    <div class="overlay" id="overlay"></div>
