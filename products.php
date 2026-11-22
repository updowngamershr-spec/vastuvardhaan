<?php include 'inc/header.php'; ?>

<div class="inner_banner" style="padding:50px 0; background:linear-gradient(135deg, #8c6508 0%, #5c4103 100%); text-align:center; color:#fff;">
    <h1 style="font-size:36px; font-weight:800; margin:0 0 8px;">वास्तू उत्पादने व ब्रेसलेट्स (Vastu Store)</h1>
    <p style="font-size:15px; color:#f3dfbe; margin:0; max-width:600px; margin:0 auto;">
        अस्सल नैसर्गिक क्रिस्टल ब्रेसलेट्स, विना तोडफोड वास्तू पिरॅमिड्स आणि शास्त्रोक्त न्यूमरोलॉजी किट्स.
    </p>
</div>

<section style="padding:60px 0; background:#fbf7ee;">
    <div class="container m-auto px-4">
        
        <!-- Category Filter Pills -->
        <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:10px; margin-bottom:40px;">
            <button class="vv-filter-btn active" onclick="filterVProducts('all', this)" style="padding:10px 22px; border-radius:30px; border:1px solid #c99320; background:#aa770d; color:#fff; font-weight:700; cursor:pointer; font-size:14px;">
                सर्व उत्पादने (All)
            </button>
            <button class="vv-filter-btn" onclick="filterVProducts('bracelets', this)" style="padding:10px 22px; border-radius:30px; border:1px solid #c99320; background:#fff; color:#6b4d04; font-weight:700; cursor:pointer; font-size:14px;">
                क्रिस्टल ब्रेसलेट्स (Bracelets)
            </button>
            <button class="vv-filter-btn" onclick="filterVProducts('pyramid', this)" style="padding:10px 22px; border-radius:30px; border:1px solid #c99320; background:#fff; color:#6b4d04; font-weight:700; cursor:pointer; font-size:14px;">
                वास्तू पिरॅमिड्स व पट्ट्या
            </button>
            <button class="vv-filter-btn" onclick="filterVProducts('numerology', this)" style="padding:10px 22px; border-radius:30px; border:1px solid #c99320; background:#fff; color:#6b4d04; font-weight:700; cursor:pointer; font-size:14px;">
                न्यूमरोलॉजी किट्स
            </button>
            <button class="vv-filter-btn" onclick="filterVProducts('cleansing', this)" style="padding:10px 22px; border-radius:30px; border:1px solid #c99320; background:#fff; color:#6b4d04; font-weight:700; cursor:pointer; font-size:14px;">
                ऑरा व घर शुद्धी किट
            </button>
        </div>

        <!-- Products Grid -->
        <div class="vv-products-grid" id="productGrid">

            <!-- Product 1: Pyrite -->
            <div class="vv-product-card" data-cat="bracelets">
                <div>
                    <span class="vv-product-badge">Money Magnet</span>
                    <div class="vv-product-img-wrap">
                        <img src="./img/product-pyrite.jpg" alt="पायराइट मनी ब्रेसलेट" style="max-height:160px; object-fit:contain;" onerror="this.src='./img/product2.png'">
                    </div>
                    <h3>नॅचरल पायराइट मनी ब्रेसलेट</h3>
                    <p>सोन्यासारखा चमकणारा अस्सल पायराइट स्टोन. व्यवसायात नवीन ग्राहक, धनप्राप्ती आणि आर्थिक स्थैर्य आकर्षित करतो.</p>
                </div>
                <div class="vv-product-bottom">
                    <span class="vv-price">₹1,199</span>
                    <a href="product_detail.php?id=1" class="vv-btn-primary" style="padding:7px 18px; font-size:13px;">ऑर्डर करा</a>
                </div>
            </div>

            <!-- Product 2: Citrine -->
            <div class="vv-product-card" data-cat="bracelets">
                <div>
                    <span class="vv-product-badge">धनलक्ष्मी स्टोन</span>
                    <div class="vv-product-img-wrap">
                        <img src="./img/product-citrine.jpg" alt="सिट्रीन धनलक्ष्मी ब्रेसलेट" style="max-height:160px; object-fit:contain;" onerror="this.src='./img/product.png'">
                    </div>
                    <h3>सिट्रीन धनलक्ष्मी क्रिस्टल ब्रेसलेट</h3>
                    <p>व्यापारी व नोकरदारांसाठी अत्यंत भाग्यशाली स्टोन. निर्णयक्षमता वाढवून पैशांची बचत आणि आवक सुधारतो.</p>
                </div>
                <div class="vv-product-bottom">
                    <span class="vv-price">₹850</span>
                    <a href="product_detail.php?id=2" class="vv-btn-primary" style="padding:7px 18px; font-size:13px;">ऑर्डर करा</a>
                </div>
            </div>

            <!-- Product 3: Tiger Eye -->
            <div class="vv-product-card" data-cat="bracelets">
                <div>
                    <span class="vv-product-badge">आत्मविश्वास व धाडस</span>
                    <div class="vv-product-img-wrap">
                        <img src="./img/product-tigereye.jpg" alt="टायगर आय ब्रेसलेट" style="max-height:160px; object-fit:contain;" onerror="this.src='./img/product3.png'">
                    </div>
                    <h3>टायगर आय पॉवर ब्रेसलेट</h3>
                    <p>भीती दूर करून आत्मविश्वास निर्माण करतो, नजर दोषापासून संरक्षण देतो आणि कामावर लक्ष केंद्रित करण्यास मदत करतो.</p>
                </div>
                <div class="vv-product-bottom">
                    <span class="vv-price">₹799</span>
                    <a href="product_detail.php?id=3" class="vv-btn-primary" style="padding:7px 18px; font-size:13px;">ऑर्डर करा</a>
                </div>
            </div>

            <!-- Product 4: Black Tourmaline -->
            <div class="vv-product-card" data-cat="bracelets">
                <div>
                    <span class="vv-product-badge">नजर सुरक्षा</span>
                    <div class="vv-product-img-wrap">
                        <img src="./img/product-tourmaline.jpg" alt="ब्लॅक टूर्मलाइन ब्रेसलेट" style="max-height:160px; object-fit:contain;" onerror="this.src='./img/product2.png'">
                    </div>
                    <h3>ब्लॅक टूर्मलाइन नजर सुरक्षा ब्रेसलेट</h3>
                    <p>वाईट नजर, ईर्ष्या आणि बाहेरील नकारात्मक ऊर्जेपासून अभेद्य सुरक्षा कवच प्रदान करणारे नैसर्गिक रत्न ब्रेसलेट.</p>
                </div>
                <div class="vv-product-bottom">
                    <span class="vv-price">₹699</span>
                    <a href="product_detail.php?id=4" class="vv-btn-primary" style="padding:7px 18px; font-size:13px;">ऑर्डर करा</a>
                </div>
            </div>

            <!-- Product 5: Vastu Pyramid -->
            <div class="vv-product-card" data-cat="pyramid">
                <div>
                    <span class="vv-product-badge">विना तोडफोड उपाय</span>
                    <div class="vv-product-img-wrap">
                        <img src="./img/product-pyramid.jpg" alt="ब्रास वास्तू पिरॅमिड ९x९" style="max-height:160px; object-fit:contain;" onerror="this.src='./img/product.png'">
                    </div>
                    <h3>ब्रास वास्तू ऊर्जा पिरॅमिड (९x९)</h3>
                    <p>घरातील किंवा कार्यालयातील दिशा दोष, कट कॉर्नर आणि मुख्य दरवाजा दोषांवर तोडफोड न करता अत्यंत प्रभावशाली उपाय.</p>
                </div>
                <div class="vv-product-bottom">
                    <span class="vv-price">₹1,499</span>
                    <a href="product_detail.php?id=5" class="vv-btn-primary" style="padding:7px 18px; font-size:13px;">ऑर्डर करा</a>
                </div>
            </div>

            <!-- Product 6: Vastu Brass & Copper Strips -->
            <div class="vv-product-card" data-cat="pyramid">
                <div>
                    <span class="vv-product-badge">पंचतत्व बॅलन्स</span>
                    <div class="vv-product-img-wrap">
                        <img src="./img/product3.png" alt="वास्तू कॉपर व ब्रास पट्ट्या" style="max-height:160px; object-fit:contain;">
                    </div>
                    <h3>पंचतत्व ब्रास व कॉपर पट्ट्या</h3>
                    <p>टॉयलेट किंवा चुकीच्या दिशेचा दरवाजा जमिनीवर उंबरठ्यावर पट्ट्या बसवून विना तोडफोड ब्लॉक करण्यासाठी विशेष पट्ट्या.</p>
                </div>
                <div class="vv-product-bottom">
                    <span class="vv-price">₹1,750</span>
                    <a href="product_detail.php?id=6" class="vv-btn-primary" style="padding:7px 18px; font-size:13px;">ऑर्डर करा</a>
                </div>
            </div>

            <!-- Product 7: Numerology Kit -->
            <div class="vv-product-card" data-cat="numerology">
                <div>
                    <span class="vv-product-badge">अंकशास्त्र रिपोर्ट</span>
                    <div class="vv-product-img-wrap">
                        <img src="./img/product-numerology.jpg" alt="पर्सनलाइझ्ड न्यूमरोलॉजी किट" style="max-height:160px; object-fit:contain;" onerror="this.src='./img/product.png'">
                    </div>
                    <h3>पर्सनलाइझ्ड न्यूमरोलॉजी किट</h3>
                    <p>तुमच्या जन्मतारखेनुसार सविस्तर अंकशास्त्र अहवाल, नेम करेक्शन स्पेलिंग, लकी नंबर आणि सही (Signature) मार्गदर्शक.</p>
                </div>
                <div class="vv-product-bottom">
                    <span class="vv-price">₹999</span>
                    <a href="product_detail.php?id=7" class="vv-btn-primary" style="padding:7px 18px; font-size:13px;">ऑर्डर करा</a>
                </div>
            </div>

            <!-- Product 8: Aura Salt Cleansing Kit -->
            <div class="vv-product-card" data-cat="cleansing">
                <div>
                    <span class="vv-product-badge">नकारात्मकता निवारण</span>
                    <div class="vv-product-img-wrap">
                        <img src="./img/product2.png" alt="वास्तू ऑरा सॉल्ट व धूप किट" style="max-height:160px; object-fit:contain;">
                    </div>
                    <h3>वास्तू ऑरा सॉल्ट व पॉझिटिव्ह एनर्जी धूप</h3>
                    <p>घरातील क्लेश, आजारपण व नकारात्मक ऊर्जा घालवण्यासाठी नैसर्गिक हिमालयीन रॉक सॉल्ट व आयुर्वेदिक धूप कापूर किट.</p>
                </div>
                <div class="vv-product-bottom">
                    <span class="vv-price">₹550</span>
                    <a href="product_detail.php?id=8" class="vv-btn-primary" style="padding:7px 18px; font-size:13px;">ऑर्डर करा</a>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
function filterVProducts(cat, btn) {
    document.querySelectorAll('.vv-filter-btn').forEach(b => {
        b.style.background = '#fff';
        b.style.color = '#6b4d04';
    });
    btn.style.background = '#aa770d';
    btn.style.color = '#fff';

    const cards = document.querySelectorAll('#productGrid .vv-product-card');
    cards.forEach(c => {
        if (cat === 'all' || c.getAttribute('data-cat') === cat) {
            c.style.display = 'flex';
        } else {
            c.style.display = 'none';
        }
    });
}
</script>

<?php include 'inc/footer.php'; ?>
