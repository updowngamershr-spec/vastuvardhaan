<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Shri Gurudev</title>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- Tabler Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/login-signup.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

    <section class="login-page">

        <div class="container">
            <!-- Background Decoration -->

            <div class="bg-pattern"></div>


            <div class="login-wrapper">

                <!--============================
                LEFT PANEL
        ============================-->

                <div class="login-left">


                    <div class="left-content">
                        <img src="./img/log-tran.png" class="guru-image" alt="Guru">
                        <div class="section-title">

                            <span class="mini-title">
                                ✨ Spiritual Wisdom
                            </span>

                            <h1>

                                Begin Your
                                <span>Spiritual Journey</span>

                            </h1>

                            <div class="divider">
                                ☸
                            </div>

                        </div>
                        <!-- Heading -->



                        <p>

                            Access your courses, yantras,
                            rituals, workshops and exclusive
                            spiritual guidance.

                        </p>


                    </div>



                </div>

                <!--============================
                RIGHT PANEL
        ============================-->

                <div class="login-right">

                    <div class="login-card">
                        <img src="./img/log-tran.png" alt="" class="login-logo">

                        <h2>

                            Login to Your Account

                        </h2>

                        <p class="subtitle">

                            Continue your spiritual growth
                            with Shri Gurudev.

                        </p>

                        <!--============================
                        LOGIN FORM
                ============================-->

                        <form class="login-form">

                            <!-- Email -->

                            <div class="form-group">

                                <label>Email Address</label>

                                <div class="input-box">

                                    <i class="ti ti-mail"></i>

                                    <input type="email" placeholder="Enter your email">

                                </div>

                            </div>

                            <!-- Password -->

                            <div class="form-group">

                                <label>Password</label>

                                <div class="input-box">

                                    <i class="ti ti-lock"></i>

                                    <input type="password" id="password" placeholder="Enter your password">

                                    <button type="button" class="password-toggle">

                                        <i class="ti ti-eye"></i>

                                    </button>

                                </div>

                            </div>

                            <!-- Options -->

                            <div class="form-options">

                                <label class="remember-me">

                                    <input type="checkbox">

                                    Remember Me

                                </label>

                                <a href="#">

                                    Forgot Password?

                                </a>

                            </div>

                            <!-- Login Button -->

                            <button class="login-btn" type="submit">

                                Login Now

                                <i class="ti ti-arrow-right"></i>

                            </button>

                        </form>

                        <!-- Divider -->

                        <div class="divider">

                            <span></span>

                            OR

                            <span></span>

                        </div>

                        <!-- Google -->

                        <button class="google-btn">

                            <img src="./img/google-symbol.png" alt="Google">

                            Continue with Google

                        </button>

                        <!-- Signup -->

                        <div class="signup-text">

                            Don't have an account?

                            <a href="#">

                                Create Account

                            </a>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section>

    <script src="login.js"></script>

</body>

</html>