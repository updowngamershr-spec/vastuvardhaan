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
    <!-- Top Navigation (Clean, no overlapping) -->
    <header class="navigation">
        <div class="nav-container">
            <div class="logo">
                <a href="index.php" title="वास्तुवर्धन वास्तुशास्त्र व न्यूमरोलॉजी">
                    <img src="./img/logo.jpg" alt="वास्तुवर्धन">
                </a>
            </div>

            <!-- Desktop Menu (Single clean row) -->
            <ul class="desktop-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="products.php">Vastu Products</a></li>
                <li><a href="awards.php">Awards & Recognition</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>

            <!-- Right Actions -->
            <div class="nav-actions">
                <a href="cart.php" title="View Cart" style="color:var(--vv-maroon-deep); text-decoration:none; font-size:22px; display:flex; align-items:center;">
                    <i class="ti ti-shopping-cart"></i>
                </a>
                <a href="consultation.php" class="vv-btn-primary" style="display:none; padding:8px 20px; font-size:13.5px;" id="deskNavBtn">
                    Book Consultation
                </a>
                <!-- Mobile Hamburger Toggle -->
                <div class="menu-toggle lg:hidden" id="menuToggle" style="cursor:pointer; display:flex; flex-direction:column; gap:5px;">
                    <span style="display:block; width:22px; height:2px; background:var(--vv-maroon-deep);"></span>
                    <span style="display:block; width:22px; height:2px; background:var(--vv-maroon-deep);"></span>
                    <span style="display:block; width:22px; height:2px; background:var(--vv-maroon-deep);"></span>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Slide-out Drawer -->
    <nav class="menus" id="mobileMenu">
        <div class="top-mobile-menu">
            <div class="left">
                <a href="consultation.php" class="vv-btn-primary" style="padding:6px 16px; font-size:13px;">सल्ला बुक करा</a>
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
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>
    <div class="overlay" id="overlay"></div>

    <style>
    @media (min-width: 1024px) {
        #deskNavBtn {
            display: inline-flex !important;
        }
        #menuToggle {
            display: none !important;
        }
        #mobileMenu, .menus, .overlay, #overlay {
            display: none !important;
            visibility: hidden !important;
        }
    }
    @media (max-width: 1023px) {
        #mobileMenu:not(.open), .menus:not(.open) {
            display: none !important;
        }
    }
    </style>
