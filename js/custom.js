document.addEventListener("DOMContentLoaded", function () {
  initSlider();
  initStickyNavbar();
  initVideo();
  initDropdown();
  initMobileMenu();
  initTabs();
  filterPrice();
  changeProduct();
  initGalleryLightbox();
  changeDetailProduct();
  cartNumber();
  courseDetail();
  profleView();
  myProfile();
  updateGlobalCartBadge();
});

function updateGlobalCartBadge() {
  try {
    var cart = JSON.parse(localStorage.getItem('sg_cart') || '[]');
    var totalItems = cart.reduce(function(sum, item) { return sum + (item.qty || 1); }, 0);
    var badge = document.getElementById('navCartBadge');
    if (badge) {
      if (totalItems > 0) {
        badge.textContent = totalItems;
        badge.style.display = 'inline-flex';
      } else {
        badge.style.display = 'none';
      }
    }
  } catch (e) {}
}
/* ==========================================
   HERO SLIDER
========================================== */
function initSlider() {
  const slides = document.querySelectorAll(".slide");
  const dots = document.querySelectorAll(".dot");

  if (!slides.length || !dots.length) return;

  let current = 0;

  function showSlide(index) {
    slides.forEach((slide) => slide.classList.remove("active"));
    dots.forEach((dot) => dot.classList.remove("active"));

    slides[index].classList.add("active");
    dots[index].classList.add("active");

    current = index;
  }

  function nextSlide() {
    current = (current + 1) % slides.length;
    showSlide(current);
  }

  showSlide(0);

  setInterval(nextSlide, 4000);

  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => showSlide(index));
  });
}
/* ==========================================
   STICKY NAVBAR
========================================== */

function initStickyNavbar() {
  const navbar = document.querySelector(".navigation");

  if (!navbar) return;

  window.addEventListener("scroll", function () {
    navbar.classList.toggle("sticky", window.scrollY > 50);
  });
}
/* ==========================================
   VIDEO
========================================== */
function initVideo() {
  const playButton = document.getElementById("playButton");
  const thumbnail = document.getElementById("thumbnail");
  const youtubeVideo = document.getElementById("youtubeVideo");

  if (!playButton || !thumbnail || !youtubeVideo) return;

  playButton.addEventListener("click", function () {
    youtubeVideo.src = "https://www.youtube.com/embed/EaxVsBqS_0w?autoplay=1";

    thumbnail.style.display = "none";
    playButton.style.display = "none";
    youtubeVideo.style.display = "block";
  });
}
/* ==========================================
   CUSTOM DROPDOWN
========================================== */
function initDropdown() {
  const dropdowns = document.querySelectorAll(".dd-container");

  if (!dropdowns.length) return;

  dropdowns.forEach((container) => {
    const trigger = container.querySelector(".dd-trigger");
    const menu = container.querySelector(".dd-menu");

    trigger.addEventListener("click", function (e) {
      e.stopPropagation();

      document.querySelectorAll(".dd-container.open").forEach((other) => {
        if (other !== container) other.classList.remove("open");
      });

      container.classList.toggle("open");
    });

    menu.querySelectorAll(".dd-item").forEach((item) => {
      item.addEventListener("click", function () {
        menu
          .querySelectorAll(".dd-item")
          .forEach((i) => i.classList.remove("active"));

        item.classList.add("active");

        trigger.querySelector(".dd-trigger-label").textContent =
          item.dataset.label;

        trigger.querySelector(".dd-trigger-icon").className =
          "ti " + item.dataset.icon + " dd-trigger-icon";

        container.classList.remove("open");
      });
    });
  });

  document.addEventListener("click", function () {
    document.querySelectorAll(".dd-container.open").forEach((container) => {
      container.classList.remove("open");
    });
  });
}
/* ==========================================
   TABS
========================================== */
function initTabs() {
  const tabs = document.querySelectorAll(".tabs li");
  const courses = document.querySelectorAll(".course-child");

  if (!tabs.length || !courses.length) return;

  tabs.forEach((tab) => {
    tab.addEventListener("click", function (e) {
      e.preventDefault();

      tabs.forEach((item) => item.classList.remove("active"));
      tab.classList.add("active");

      const category = tab.dataset.category;

      courses.forEach((course) => {
        course.style.display =
          category === "all" || course.dataset.category === category
            ? "block"
            : "none";
      });
    });
  });
}

function filterPrice() {
  const tabs = document.querySelectorAll(".tabs li");
  const courses = document.querySelectorAll(".course-child");
  const dd = document.getElementById("dd-price");
  if (!dd || !tabs.length || !courses.length) return;

  let ranges = [];

  const filter = () => {
    const cat =
      document.querySelector(".tabs li.active")?.dataset.category || "all";
    courses.forEach((c) => {
      const price = +c.dataset.price || 0;
      const okCat = cat === "all" || c.dataset.category === cat;
      const okPrice =
        !ranges.length ||
        ranges.some(([min, max]) => price >= min && price <= max);
      c.style.display = okCat && okPrice ? "block" : "none";
    });
  };

  tabs.forEach((tab) =>
    tab.addEventListener("click", (e) => {
      e.preventDefault();
      tabs.forEach((t) => t.classList.remove("active"));
      tab.classList.add("active");
      filter();
    }),
  );

  dd.querySelector(".hf-btn").addEventListener("click", (e) => {
    e.stopPropagation();
    dd.classList.toggle("open");
  });
  document.addEventListener(
    "click",
    (e) => !dd.contains(e.target) && dd.classList.remove("open"),
  );

  dd.querySelectorAll(".hf-menu-item").forEach((item) =>
    item.addEventListener("click", () => item.classList.toggle("checked")),
  );

  dd.querySelector(".btn-sm.outline").addEventListener("click", (e) => {
    e.preventDefault();
    dd.querySelectorAll(".checked").forEach((i) =>
      i.classList.remove("checked"),
    );
    ranges = [];
    filter();
  });

  dd.querySelector(".btn-sm.solid").addEventListener("click", (e) => {
    e.preventDefault();
    ranges = [...dd.querySelectorAll(".checked")].map((i) =>
      i.dataset.val.split("-").map(Number),
    );
    filter();
    dd.classList.remove("open");
  });

  filter();
}
// change product
function changeProduct() {
  const categoryItems = document.querySelectorAll(".category-list li");
  const productCards = document.querySelectorAll(".product-card");
  const sectionTitle = document.querySelector(".section-title h2");
  const itemCount = document.querySelector(".item-count h2");

  categoryItems.forEach((item) => {
    item.addEventListener("click", () => {
      categoryItems.forEach((li) => li.classList.remove("active"));
      item.classList.add("active");

      const category = item.dataset.category;

      // Fade all cards
      productCards.forEach((card) => {
        card.classList.add("hide");
      });

      setTimeout(() => {
        let count = 0;

        productCards.forEach((card) => {
          if (card.dataset.category === category || category === "all") {
            card.style.display = "block";

            // Little delay for each card
            setTimeout(() => {
              card.classList.remove("hide");
            }, count * 100);

            count++;
          } else {
            card.style.display = "none";
          }
        });

        sectionTitle.textContent = item.querySelector("h4").textContent;
        itemCount.textContent = `${count} Item${count > 1 ? "s" : ""}`;
      }, 250);
    });
  });
}
function changeDetailProduct() {
  // Gallery thumbnail switching
  const thumbs = document.querySelectorAll(".gallery__thumb");
  const stageImg = document.getElementById("stageImg");
  thumbs.forEach((thumb) => {
    thumb.addEventListener("click", () => {
      thumbs.forEach((t) => t.classList.remove("is-active"));
      thumb.classList.add("is-active");
      stageImg.src = thumb.dataset.full;
    });
  });
}
/* ==========================================
   MOBILE MENU
========================================== */
function initMobileMenu() {
  const menuToggle = document.getElementById("menuToggle");
  const mobileMenu = document.getElementById("mobileMenu");
  const closeMenu = document.getElementById("closeMobile");
  const overlay = document.getElementById("overlay");

  if (!menuToggle || !mobileMenu || !closeMenu || !overlay) return;

  menuToggle.addEventListener("click", function () {
    mobileMenu.classList.add("open");
    overlay.classList.add("show");
  });

  function closeNav() {
    mobileMenu.classList.remove("open");
    overlay.classList.remove("show");
  }

  closeMenu.addEventListener("click", function (e) {
    e.stopPropagation();
    closeNav();
  });

  overlay.addEventListener("click", closeNav);
}

function initGalleryLightbox() {
  const lightbox = document.getElementById("galleryLightbox");
  if (!lightbox) return; // page guard, same pattern as your other functions

  const galleryData = {
    "yantra-miracle": {
      title: "Yantra Miracle Event",
      photos: [
        "img/gallery/gallery1.jpg",
        "img/gallery/gallery2.jpg",
        "img/gallery/gallery3.jpg",
      ],
    },
    "sacred-bhoomi": {
      title: "Sacred Bhoomi Poojan",
      photos: [
        "img/gallery/gallery1.jpg",
        "img/gallery/gallery2.jpg",
        "img/gallery/gallery3.jpg",
      ],
    },
    "rishikesh-spiritual": {
      title: "Haridwar Retreat",
      photos: [
        "img/gallery/gallery1.jpg",
        "img/gallery/gallery2.jpg",
        "img/gallery/gallery3.jpg",
      ],
    },
    meditation: {
      title: "Meditation Program",
      photos: [
        "img/gallery/gallery1.jpg",
        "img/gallery/gallery2.jpg",
        "img/gallery/gallery3.jpg",
      ],
    },
  };

  const glImage = document.getElementById("glImage");
  const glTitle = document.getElementById("glTitle");
  const glCounter = document.getElementById("glCounter");
  const glClose = document.getElementById("glClose");
  const glPrev = document.getElementById("glPrev");
  const glNext = document.getElementById("glNext");
  const glBackdrop = document.getElementById("glBackdrop");

  let currentPhotos = [];
  let currentIndex = 0;
  let currentTitle = "";

  document
    .querySelectorAll(".gallery-overlay a[data-gallery]")
    .forEach((link) => {
      link.addEventListener("click", (e) => {
        e.preventDefault();
        const key = link.getAttribute("data-gallery");
        const entry = galleryData[key];
        if (!entry) return;

        currentPhotos = entry.photos;
        currentTitle = entry.title;
        currentIndex = 0;
        renderSlide();
        lightbox.classList.add("active");
        document.body.style.overflow = "hidden";
      });
    });

  function renderSlide() {
    glImage.src = currentPhotos[currentIndex];
    glTitle.textContent = currentTitle;
    glCounter.textContent = `${currentIndex + 1} / ${currentPhotos.length}`;
  }

  function closeLightbox() {
    lightbox.classList.remove("active");
    document.body.style.overflow = "";
  }

  glClose.addEventListener("click", closeLightbox);
  glBackdrop.addEventListener("click", closeLightbox);

  glPrev.addEventListener("click", () => {
    currentIndex =
      (currentIndex - 1 + currentPhotos.length) % currentPhotos.length;
    renderSlide();
  });

  glNext.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % currentPhotos.length;
    renderSlide();
  });

  document.addEventListener("keydown", (e) => {
    if (!lightbox.classList.contains("active")) return;
    if (e.key === "Escape") closeLightbox();
    if (e.key === "ArrowLeft") glPrev.click();
    if (e.key === "ArrowRight") glNext.click();
  });
}

function cartNumber() {
  var root = document.getElementById("syCart");
  if (!root) return;

  var itemsBody = root.querySelector("#syCartItems");

  function formatRs(n) {
    return "Rs. " + n.toFixed(2);
  }

  function recalc() {
    var subtotal = 0;
    itemsBody.querySelectorAll(".sy-cart__row").forEach(function (row) {
      var price = parseFloat(row.dataset.price);
      var qty =
        parseInt(row.querySelector(".sy-cart__qty-input").value, 10) || 1;
      var rowTotal = price * qty;
      row.querySelector('[data-role="row-total"]').textContent =
        formatRs(rowTotal);
      subtotal += rowTotal;
    });
    root.querySelector('[data-role="subtotal"]').textContent =
      formatRs(subtotal);
    root.querySelector('[data-role="grand-total"]').textContent =
      formatRs(subtotal);
  }

  // Quantity +/-
  itemsBody.addEventListener("click", function (e) {
    var btn = e.target.closest("[data-action]");
    if (!btn) return;
    var row = btn.closest(".sy-cart__row");
    var input = row.querySelector(".sy-cart__qty-input");

    if (btn.dataset.action === "inc") {
      input.value = (parseInt(input.value, 10) || 1) + 1;
      recalc();
    } else if (btn.dataset.action === "dec") {
      var current = parseInt(input.value, 10) || 1;
      if (current > 1) {
        input.value = current - 1;
        recalc();
      }
    } else if (btn.dataset.action === "remove") {
      row.remove();
      recalc();
    }
  });

  // Coupon apply (placeholder — wire this up to your backend / discount logic)
  var couponBtn = root.querySelector("#syCouponApply");
  var couponInput = root.querySelector("#syCouponInput");
  couponBtn.addEventListener("click", function () {
    var code = couponInput.value.trim();
    if (!code) return;
    alert(
      'Coupon "' + code + '" submitted. Hook this up to your discount logic.',
    );
  });

  // "You may also like" add buttons (placeholder — wire this up to your cart backend)
  root.querySelectorAll(".sy-cart__also-add").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var card = btn.closest(".sy-cart__also-card");
      var name = card.querySelector(".sy-cart__also-name").textContent;
      alert('"' + name + '" added. Hook this up to your cart backend.');
    });
  });

  recalc();
}

function courseDetail() {
  const list = document.getElementById("dayList");
  if (!list) return; // page guard — exit if this page has no course-detail list

  const days = [
    {
      n: 1,
      chakra: "Muladhara — Root",
      title: "Grounding & Stability",
      dur: "22 min",
      done: true,
      desc: "Foundational breathwork and a grounding mantra to settle the nervous system and connect with the earth element before the deeper work begins.",
    },
    {
      n: 2,
      chakra: "Svadhisthana — Sacral",
      title: "Flow & Creativity",
      dur: "26 min",
      done: true,
      desc: "Water-element practices to release stored emotion and open creative energy, paired with a guided visualization at the sacral center.",
    },
    {
      n: 3,
      chakra: "Manipura — Solar Plexus",
      title: "Will & Inner Fire",
      dur: "24 min",
      done: false,
      desc: "Kriyas to awaken personal will and confidence, using breath-of-fire technique to activate the solar plexus.",
    },
    {
      n: 4,
      chakra: "Anahata — Heart",
      title: "Compassion & Balance",
      dur: "25 min",
      done: false,
      desc: "Heart-opening pranayama and a loving-kindness meditation to soften old armor and restore emotional balance.",
    },
    {
      n: 5,
      chakra: "Vishuddha — Throat",
      title: "Voice & Truth",
      dur: "20 min",
      done: false,
      desc: "Chanting practice and throat-opening asanas to release blocked expression and speak from truth.",
    },
    {
      n: 6,
      chakra: "Ajna — Third Eye",
      title: "Clarity & Intuition",
      dur: "27 min",
      done: false,
      desc: "Trataka (candle-gazing) and stillness meditation to sharpen intuition and quiet the fluctuations of the mind.",
    },
    {
      n: 7,
      chakra: "Sahasrara — Crown",
      title: "Union & Stillness",
      dur: "30 min",
      done: false,
      desc: "A closing silent sit that draws all seven days together, dedicated to surrender and connection beyond the self.",
    },
    {
      n: 8,
      chakra: "Sahasrara — Crown",
      title: "Union & Stillness",
      dur: "30 min",
      done: false,
      desc: "A closing silent sit that draws all seven days together, dedicated to surrender and connection beyond the self.",
    },
    {
      n: 9,
      chakra: "Sahasrara — Crown",
      title: "Union & Stillness",
      dur: "30 min",
      done: false,
      desc: "A closing silent sit that draws all seven days together, dedicated to surrender and connection beyond the self.",
    },
    {
      n: 10,
      chakra: "Sahasrara — Crown",
      title: "Union & Stillness",
      dur: "30 min",
      done: false,
      desc: "A closing silent sit that draws all seven days together, dedicated to surrender and connection beyond the self.",
    },
  ];

  list.innerHTML = days
    .map(
      (d, i) => `
  <div class="day-card ${d.done ? "is-done" : ""}" data-i="${i}">
    <div class="day-card__thumb">
      <div class="day-card__num">${String(d.n).padStart(2, "0")}</div>
      <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.2"><circle cx="12" cy="12" r="8"/><circle cx="12" cy="12" r="3"/><path d="M12 4v2M12 18v2M4 12h2M18 12h2"/></svg>
      <div class="day-card__duration">${d.dur}</div>
    </div>
    <div class="day-card__info">
      <h3><span class="day-card__chakra">${d.chakra}</span>${d.title}</h3>
      <p class="day-card__desc">${d.desc}</p>
    </div>
    <div class="day-card__status">
      <div class="day-card__circle">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M6 9l6 6 6-6"/></svg>
      </div>
      <span>${d.done ? "Done" : "Preview"}</span>
    </div>
  </div>
`,
    )
    .join("");

  list.querySelectorAll(".day-card").forEach((row) => {
    row.addEventListener("click", () => row.classList.toggle("is-expanded"));
  });
}

function profleView() {
  const profileMenu = document.querySelector(".profile-menu");
  if (!profileMenu) return;

  const profileLink = profileMenu.querySelector(".profile-link");

  // Toggle dropdown on click
  profileLink.addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation();
    profileMenu.classList.toggle("active");
  });

  // Close dropdown when clicking anywhere else
  document.addEventListener("click", function (e) {
    if (!profileMenu.contains(e.target)) {
      profileMenu.classList.remove("active");
    }
  });

  // Close on Escape key
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      profileMenu.classList.remove("active");
    }
  });
}

// my pfofile js
/* =========================================================
   USER PROFILE PAGE JS
   ========================================================= */
function myProfile() {
  /* =========================================
       SIDEBAR ACTIVE STATE
    ========================================= */

  const sidebarLinks = document.querySelectorAll(
    ".account-sidebar__nav a[href^='#']",
  );

  sidebarLinks.forEach((link) => {
    link.addEventListener("click", function () {
      sidebarLinks.forEach((item) => {
        item.classList.remove("is-active");
      });

      this.classList.add("is-active");
    });
  });

  /* =========================================
       SMOOTH SCROLL
    ========================================= */

  document.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener("click", function (e) {
      const targetId = this.getAttribute("href");

      if (!targetId || targetId === "#" || !document.querySelector(targetId)) {
        return;
      }

      e.preventDefault();

      const target = document.querySelector(targetId);

      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    });
  });

  /* =========================================
       ACTIVE SIDEBAR WHILE SCROLLING
    ========================================= */

  const sections = document.querySelectorAll(".account-content > section[id]");

  const observer = new IntersectionObserver(
    function (entries) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const id = entry.target.getAttribute("id");

          sidebarLinks.forEach((link) => {
            link.classList.remove("is-active");

            if (link.getAttribute("href") === "#" + id) {
              link.classList.add("is-active");
            }
          });
        }
      });
    },
    {
      rootMargin: "-20% 0px -65% 0px",
      threshold: 0,
    },
  );

  sections.forEach((section) => {
    observer.observe(section);
  });

  /* =========================================
       EDIT PROFILE BUTTON
    ========================================= */

  const editButtons = document.querySelectorAll(
    ".account-edit-btn, .account-text-btn",
  );

  editButtons.forEach((button) => {
    const href = button.getAttribute("href");

    if (href === "#settings") {
      button.addEventListener("click", function (e) {
        const settings = document.querySelector("#settings");

        if (settings) {
          e.preventDefault();

          settings.scrollIntoView({
            behavior: "smooth",
            block: "start",
          });

          setTimeout(() => {
            const firstInput = settings.querySelector("input");

            if (firstInput) {
              firstInput.focus();
            }
          }, 600);
        }
      });
    }
  });

  /* =========================================
       PROFILE FORM
    ========================================= */

  const profileForm = document.querySelector(".account-form");

  if (profileForm) {
    profileForm.addEventListener("submit", function (e) {
      e.preventDefault();

      const name = document.querySelector("#profile-name");

      const email = document.querySelector("#profile-email");

      const phone = document.querySelector("#profile-phone");

      const location = document.querySelector("#profile-location");

      /* Update profile header */

      const profileName = document.querySelector(
        ".account-profile__identity h1",
      );

      const profileEmail = document.querySelector(
        ".account-profile__identity .account-email",
      );

      if (profileName && name) {
        profileName.textContent = "Welcome back, " + name.value;
      }

      if (profileEmail && email) {
        profileEmail.textContent = email.value;
      }

      /* Update personal information */

      const infoItems = document.querySelectorAll(".account-info-item strong");

      if (infoItems.length >= 4) {
        infoItems[0].textContent = name.value;

        infoItems[1].textContent = email.value;

        infoItems[2].textContent = phone.value;

        infoItems[3].textContent = location.value;
      }

      /* Button feedback */

      const saveButton = profileForm.querySelector(".account-save-btn");

      if (saveButton) {
        const originalText = saveButton.textContent;

        saveButton.textContent = "Changes Saved ✓";

        saveButton.disabled = true;

        setTimeout(() => {
          saveButton.textContent = originalText;

          saveButton.disabled = false;
        }, 2000);
      }
    });
  }

  /* =========================================
       COURSE PROGRESS
       ========================================= */

  const progressBars = document.querySelectorAll(
    ".account-progress__track span",
  );

  progressBars.forEach((bar) => {
    const width = bar.style.width;

    bar.style.width = "0";

    setTimeout(() => {
      bar.style.width = width;
    }, 300);
  });

  /* =========================================
       LOGOUT
       ========================================= */

  const logoutLinks = document.querySelectorAll(".account-logout");

  logoutLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      const confirmLogout = confirm("Are you sure you want to logout?");

      if (!confirmLogout) {
        e.preventDefault();
      }
    });
  });
}
