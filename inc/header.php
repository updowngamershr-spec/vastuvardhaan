<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>वास्तुवर्धन - वास्तुशास्त्र व न्यूमरोलॉजी | Vastuvardhaan</title>
    <link rel="icon" type="image/jpeg" href="img/logo.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/tailwind.css">
    <style>
        .navigation .logo {
            width: auto;
            max-width: 180px;
        }
        .navigation .logo img {
            height: 52px;
            width: auto;
            object-fit: contain;
        }
        .hero-foreground-img {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero-portrait-frame {
            width: 340px;
            height: 430px;
            border-radius: 200px 200px 35px 35px;
            overflow: hidden;
            border: 4px solid #b88947;
            box-shadow: 0 15px 40px rgba(184, 137, 71, 0.4);
            background: linear-gradient(180deg, #fff6eb 0%, #ecd4b5 100%);
            position: relative;
        }
        .hero-portrait-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
        }
        .hero-portrait-badge {
            position: absolute;
            bottom: 12px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(184, 137, 71, 0.95);
            color: #fff;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
            white-space: nowrap;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        @media (max-width: 768px) {
            .hero-portrait-frame {
                width: 250px;
                height: 320px;
            }
        }
    </style>
</head>
<body>
    <div class="navigation">
        <div class="container m-auto flex items-center justify-between px-4">
            <div class="logo">
                <a href="index.php" title="वास्तुवर्धन वास्तुशास्त्र व न्यूमरोलॉजी">
                    <img src="./img/logo.jpg" alt="वास्तुवर्धन">
                </a>
            </div>
            <div class="menus" id="mobileMenu">
                <div class="top-mobile-menu">
                    <div class="left">
                        <a href="consultation.php" class="text-amber-700 font-semibold">सल्ला बुक करा</a>
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
                    <li><a href="blogs.php">Blog</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="login_signup">
                <ul>
                    <li id="cart"><a href="cart.php" title="View Cart"><i class="ti ti-shopping-cart"></i><span class="cart-badge" id="navCartBadge" style="display:none;">0</span></a></li>
                    <li class="hidden md:block"><a href="consultation.php" class="small-btn">Book Consultation</a></li>
                </ul>
            </div>
            <!-- Hamburger: visible on mobile only -->
            <div class="menu-toggle lg:hidden" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>
