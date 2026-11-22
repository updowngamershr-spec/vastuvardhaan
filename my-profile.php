<?php include 'inc/header.php'; ?>
 <main class="account-profile">

    <!-- PROFILE HEADER -->
    <section class="account-profile__hero">
      <div class="container m-auto">
        <div class="account-profile__hero-card">

          <div class="account-profile__identity">
            <div class="account-avatar account-avatar--large">U</div>

            <div>
              <span class="account-eyebrow">MY ACCOUNT</span>
              <h1>Welcome back</h1>
              <p class="account-email">user@example.com</p>
              <p class="account-member">
                <i class="ti ti-calendar"></i>
                Member since 2026
              </p>
            </div>
          </div>

          <a href="#settings" class="big_btn account-edit-btn">
            <i class="ti ti-edit"></i>
            Edit Profile
          </a>

        </div>
      </div>
    </section>

    <!-- MAIN PROFILE AREA -->
    <section class="account-profile__body">
      <div class="container m-auto">
        <div class="account-layout">

          <!-- SIDEBAR -->
          <aside class="account-sidebar">
            <div class="account-sidebar__card">

              <div class="account-sidebar__title">
                <span>ACCOUNT</span>
                <i class="ti ti-user"></i>
              </div>

              <nav class="account-sidebar__nav">
                <a href="#overview" class="is-active">
                  <i class="ti ti-layout-dashboard"></i>
                  <span>Overview</span>
                </a>

                <a href="#courses">
                  <i class="ti ti-book"></i>
                  <span>My Courses</span>
                  <b>03</b>
                </a>

                <a href="#certificates">
                  <i class="ti ti-certificate"></i>
                  <span>Certificates</span>
                </a>

             <a href="#orders">
    <i class="ti ti-receipt"></i>
    <span>My Orders</span>
</a>

                <a href="#settings">
                  <i class="ti ti-settings"></i>
                  <span>Settings</span>
                </a>

                <a href="logout.html" class="account-logout">
                  <i class="ti ti-logout"></i>
                  <span>Logout</span>
                </a>
              </nav>

            </div>
          </aside>

          <!-- CONTENT -->
          <div class="account-content">

            <!-- STATS -->
            <section id="overview" class="account-stats">
              <div class="account-stat-card">
                <div class="account-stat-icon"><i class="ti ti-book"></i></div>
                <div>
                  <span>Enrolled Courses</span>
                  <strong>03</strong>
                </div>
              </div>

              <div class="account-stat-card">
                <div class="account-stat-icon"><i class="ti ti-circle-check"></i></div>
                <div>
                  <span>Completed</span>
                  <strong>01</strong>
                </div>
              </div>

              <div class="account-stat-card">
                <div class="account-stat-icon"><i class="ti ti-certificate"></i></div>
                <div>
                  <span>Certificates</span>
                  <strong>01</strong>
                </div>
              </div>
            </section>

            <!-- PERSONAL INFORMATION -->
            <section class="account-panel">
              <div class="account-panel__heading">
                <div>
                  <span class="account-section-label">PROFILE</span>
                  <h2>Personal Information</h2>
                </div>
                <a href="#settings" class="account-text-btn">
                  <i class="ti ti-edit"></i> Edit
                </a>
              </div>

              <div class="account-info-grid">
                <div class="account-info-item">
                  <span>Full Name</span>
                  <strong>Your Name</strong>
                </div>

                <div class="account-info-item">
                  <span>Email Address</span>
                  <strong>user@example.com</strong>
                </div>

                <div class="account-info-item">
                  <span>Phone Number</span>
                  <strong>+91 XXXXX XXXXX</strong>
                </div>

                <div class="account-info-item">
                  <span>Location</span>
                  <strong>India</strong>
                </div>
              </div>
            </section>

            <!-- MY COURSES -->
            <section id="courses" class="account-panel">
              <div class="account-panel__heading">
                <div>
                  <span class="account-section-label">LEARNING</span>
                  <h2>My Courses</h2>
                </div>
                <a href="courses.html" class="account-text-btn">View All</a>
              </div>

              <div class="account-course-list">

                <article class="account-course-card">
                  <div class="account-course-card__visual">
                    <i class="ti ti-yin-yang"></i>
                  </div>
                  <div class="account-course-card__body">
                    <span>SPIRITUAL GROWTH</span>
                    <h3>Energy Engineering</h3>
                    <p>Continue your learning journey and explore the next module.</p>

                    <div class="account-progress">
                      <div class="account-progress__top">
                        <span>Progress</span>
                        <strong>72%</strong>
                      </div>
                      <div class="account-progress__track">
                        <span style="width:72%"></span>
                      </div>
                    </div>

                    <a href="course-detail.html" class="detail-btn account-course-btn">
                      Continue Course
                    </a>
                  </div>
                </article>

                <article class="account-course-card">
                  <div class="account-course-card__visual account-course-card__visual--second">
                    <i class="ti ti-flame"></i>
                  </div>
                  <div class="account-course-card__body">
                    <span>SPIRITUAL GROWTH</span>
                    <h3>Inner Healing Journey</h3>
                    <p>Reconnect with yourself through guided spiritual practices.</p>

                    <div class="account-progress">
                      <div class="account-progress__top">
                        <span>Progress</span>
                        <strong>38%</strong>
                      </div>
                      <div class="account-progress__track">
                        <span style="width:38%"></span>
                      </div>
                    </div>

                    <a href="course-detail.html" class="detail-btn account-course-btn">
                      Continue Course
                    </a>
                  </div>
                </article>

                <article class="account-course-card">
                  <div class="account-course-card__visual account-course-card__visual--third">
                    <i class="ti ti-moon"></i>
                  </div>
                  <div class="account-course-card__body">
                    <span>SPIRITUAL GROWTH</span>
                    <h3>Chakra Awareness</h3>
                    <p>Build a deeper understanding of your inner energy system.</p>

                    <div class="account-progress">
                      <div class="account-progress__top">
                        <span>Progress</span>
                        <strong>100%</strong>
                      </div>
                      <div class="account-progress__track">
                        <span style="width:100%"></span>
                      </div>
                    </div>

                    <a href="certificate.html" class="detail-btn account-course-btn">
                      View Certificate
                    </a>
                  </div>
                </article>

              </div>
            </section>

            <!-- CERTIFICATE -->
            <section id="certificates" class="account-panel account-certificate-panel">
              <div class="account-panel__heading">
                <div>
                  <span class="account-section-label">ACHIEVEMENT</span>
                  <h2>Your Certificate</h2>
                </div>
              </div>

              <div class="account-certificate">
                <div class="account-certificate__icon">
                  <i class="ti ti-certificate"></i>
                </div>
                <div>
                  <span>COMPLETED PROGRAM</span>
                  <h3>Chakra Awareness</h3>
                  <p>Congratulations on completing this spiritual growth program.</p>
                </div>
                <a href="certificate.html" class="big_btn">View Certificate</a>
              </div>
            </section>
            <!-- MY ORDERS -->
<section id="orders" class="account-panel account-orders-panel">

    <div class="account-panel__heading">
        <div>
            <span class="account-section-label">PURCHASE HISTORY</span>
            <h2>My Orders</h2>
        </div>

        <span class="account-orders-count">03 Orders</span>
    </div>


    <div class="account-orders-list">

        <!-- ORDER 1 -->
        <article class="account-order-card">

            <div class="account-order-card__top">
                <div>
                    <span class="account-order-label">ORDER ID</span>
                    <strong>#ORD-2026-001</strong>
                </div>

                <span class="account-order-status account-order-status--completed">
                    Completed
                </span>
            </div>


            <div class="account-order-card__details">

                <div>
                    <span>Order Date</span>
                    <strong>24 Aug 2026</strong>
                </div>

                <div>
                    <span>Items</span>
                    <strong>1 Course</strong>
                </div>

                <div>
                    <span>Total</span>
                    <strong>₹21,000</strong>
                </div>

            </div>


   

        </article>


        <!-- ORDER 2 -->
        <article class="account-order-card">

            <div class="account-order-card__top">
                <div>
                    <span class="account-order-label">ORDER ID</span>
                    <strong>#ORD-2026-002</strong>
                </div>

                <span class="account-order-status account-order-status--processing">
                    Processing
                </span>
            </div>


            <div class="account-order-card__details">

                <div>
                    <span>Order Date</span>
                    <strong>20 Aug 2026</strong>
                </div>

                <div>
                    <span>Items</span>
                    <strong>1 Course</strong>
                </div>

                <div>
                    <span>Total</span>
                    <strong>₹15,000</strong>
                </div>

            </div>


        

        </article>


        <!-- ORDER 3 -->
        <article class="account-order-card">

            <div class="account-order-card__top">
                <div>
                    <span class="account-order-label">ORDER ID</span>
                    <strong>#ORD-2026-003</strong>
                </div>

                <span class="account-order-status account-order-status--completed">
                    Completed
                </span>
            </div>


            <div class="account-order-card__details">

                <div>
                    <span>Order Date</span>
                    <strong>12 Aug 2026</strong>
                </div>

                <div>
                    <span>Items</span>
                    <strong>1 Course</strong>
                </div>

                <div>
                    <span>Total</span>
                    <strong>₹12,500</strong>
                </div>

            </div>



        </article>

    </div>

</section>

            <!-- SETTINGS -->
            <section id="settings" class="account-panel">
              <div class="account-panel__heading">
                <div>
                  <span class="account-section-label">ACCOUNT</span>
                  <h2>Account Settings</h2>
                </div>
              </div>

              <form class="account-form">
                <div class="account-form__row">
                  <div class="form-group">
                    <input type="text" id="profile-name" value="Your Name" required>
                    <label for="profile-name">Full Name</label>
                  </div>

                  <div class="form-group">
                    <input type="email" id="profile-email" value="user@example.com" required>
                    <label for="profile-email">Email Address</label>
                  </div>
                </div>

                <div class="account-form__row">
                  <div class="form-group">
                    <input type="tel" id="profile-phone" value="+91 XXXXX XXXXX">
                    <label for="profile-phone">Phone Number</label>
                  </div>

                  <div class="form-group">
                    <input type="text" id="profile-location" value="India">
                    <label for="profile-location">Location</label>
                  </div>
                </div>

                <button type="submit" class="detail-btn account-save-btn">
                  Save Changes
                </button>
              </form>
            </section>

          </div>
        </div>
      </div>
    </section>

  </main>
<?php include 'inc/footer.php'; ?>

