document.addEventListener("DOMContentLoaded", function () {
  initSlider();
  initStickyNavbar();
  initVideo();
  initTabs();
  initDropdown();
  initMobileMenu();
  changeProduct();
  changeDetailProduct();
});
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
   TABS
========================================== */
function initTabs() {
  const tabs = document.querySelectorAll(".tabs li");
  const courses = document.querySelectorAll(".course-box");

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
          if (card.dataset.category === category) {
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

// membership contact form select box
// function customSelect() {
//   document.querySelectorAll(".custom-select").forEach((select) => {
//     const selected = select.querySelector(".selected");
//     const options = select.querySelector(".options");
//     const optionItems = options.querySelectorAll("div");
//     const hiddenInput = select.querySelector("input[type='hidden']");

//     // Open / Close dropdown
//     selected.addEventListener("click", function (e) {
//       e.stopPropagation();

//       document.querySelectorAll(".custom-select").forEach((item) => {
//         if (item !== select) item.classList.remove("active");
//       });

//       select.classList.toggle("active");
//     });

//     // Select option
//     optionItems.forEach((option) => {
//       option.addEventListener("click", function () {
//         selected.querySelector("span").textContent = this.textContent;

//         if (hiddenInput) {
//           hiddenInput.value = this.dataset.value || this.textContent;
//         }

//         select.classList.remove("active");
//       });
//     });
//   });
// }

// // Close when clicking outside
// document.addEventListener("click", () => {
//   document.querySelectorAll(".custom-select").forEach((select) => {
//     select.classList.remove("active");
//   });
// });

// document.addEventListener("DOMContentLoaded", function () {
//   // ---- Your photo data: add real image paths per event here ----
//   var galleryData = {
//     "yantra-miracle": {
//       title: "Yantra Miracle Event",
//       photos: [
//         "img/gallery/gallery1.jpg",
//         "img/gallery/gallery2.jpg",
//         "img/gallery/gallery3.jpg",
//         // add remaining paths...
//       ],
//     },
//     "sacred-bhoomi": {
//       title: "Sacred Bhoomi Poojan",
//       photos: ["img/gallery/gallery4.jpg", "img/gallery/gallery1.jpg"],
//     },
//     // add entries for the remaining cards using the same data-gallery slugs
//   };

//   var lightbox = document.getElementById("galleryLightbox");
//   var glImage = document.getElementById("glImage");
//   var glTitle = document.getElementById("glTitle");
//   var glCounter = document.getElementById("glCounter");
//   var glClose = document.getElementById("glClose");
//   var glPrev = document.getElementById("glPrev");
//   var glNext = document.getElementById("glNext");
//   var glBackdrop = document.getElementById("glBackdrop");

//   var currentPhotos = [];
//   var currentIndex = 0;
//   var currentTitle = "";

//   document
//     .querySelectorAll(".gallery-overlay a[data-gallery]")
//     .forEach(function (link) {
//       link.addEventListener("click", function (e) {
//         e.preventDefault();
//         var key = link.getAttribute("data-gallery");
//         var entry = galleryData[key];
//         if (!entry) return;
//         currentPhotos = entry.photos;
//         currentTitle = entry.title;
//         currentIndex = 0;
//         renderSlide();
//         lightbox.classList.add("active");
//         document.body.style.overflow = "hidden";
//       });
//     });

//   function renderSlide() {
//     glImage.src = currentPhotos[currentIndex];
//     glTitle.textContent = currentTitle;
//     glCounter.textContent = currentIndex + 1 + " / " + currentPhotos.length;
//   }

//   function closeLightbox() {
//     lightbox.classList.remove("active");
//     document.body.style.overflow = "";
//   }

//   glClose.addEventListener("click", closeLightbox);
//   glBackdrop.addEventListener("click", closeLightbox);

//   glPrev.addEventListener("click", function () {
//     currentIndex =
//       (currentIndex - 1 + currentPhotos.length) % currentPhotos.length;
//     renderSlide();
//   });

//   glNext.addEventListener("click", function () {
//     currentIndex = (currentIndex + 1) % currentPhotos.length;
//     renderSlide();
//   });

//   document.addEventListener("keydown", function (e) {
//     if (!lightbox.classList.contains("active")) return;
//     if (e.key === "Escape") closeLightbox();
//     if (e.key === "ArrowLeft") glPrev.click();
//     if (e.key === "ArrowRight") glNext.click();
//   });
// });
