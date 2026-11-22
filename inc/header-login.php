<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shri sadhguru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/tailwind.css">
</head>

<body>
    <div class="navigation">
        <div class="container m-auto flex items-center justify-between px-4">
            <div class="logo">
                <img src="./img/logo.jpg" alt="">
            </div>
            <div class="menus" id="mobileMenu">
                <div class="top-mobile-menu">
                    <div class="left">
                        <a href="#">Logout</a>
                    </div>
                    <div class="right" id="closeMobile">
                        <img src="./img/cross.png" alt="">
                    </div>
                </div>

                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="consultation.php">Consultation</a></li>
                    <li><a href="programs.php">Our Program</a></li>
                    <li><a href="shreeshop.php">Shree Shop</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="membership.php">life time membership</a></li>
                </ul>
            </div>

            <div class="login_signup">
                <ul>
                    <li id="cart"><a href="#"><i class="ti ti-shopping-cart"></i></a></li>

                    <li class="profile-menu">
                        <a href="#" class="profile-link">
                            <img src="./img/male-avatar.png" alt="profile" class="profile-avatar">
                            <span class="profile-name">John Doe</span>
                            <i class="ti ti-chevron-down"></i>
                        </a>
                        <ul class="profile-dropdown">
                            <li><a href="#"><i class="ti ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti ti-package"></i> My Orders</a></li>
                            <li><a href="#"><i class="ti ti-logout"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Hamburger: visible on mobile only -->
            <div class="menu-toggle  lg:hidden" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>
</body>

</html>