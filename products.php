<?php include 'inc/header.php'; ?>

<!-- Top Luxury Hero Banner for Vastu Products -->
<div class="vv-mountain-hero" style="padding:55px 0 45px;">
    <div class="vv-container">
        <div style="display:flex; flex-direction:column; align-items:center; text-align:center; max-width:800px; margin:0 auto;">
            <div class="vv-hero-badge" style="margin-bottom:14px;">
                <span style="width:8px; height:8px; border-radius:50%; background:#10b981; display:inline-block;"></span>
                <span>✨ १००% नैसर्गिक, मंत्रसिद्ध व ऊर्जावान साहित्य</span>
            </div>
            
            <h1 style="font-size:36px; font-weight:800; color:var(--vv-maroon-deep); margin:0 0 12px; line-height:1.25;">
                प्रमाणित वास्तू उत्पादने व <span class="gold-highlight">क्रिस्टल ब्रेसलेट्स</span>
            </h1>
            
            <p style="font-size:16px; color:var(--vv-text-muted); line-height:1.6; margin:0 0 20px;">
                घरातील किंवा व्यवसायातील नकारात्मक ऊर्जा दूर करण्यासाठी आणि सुख, समृद्धी, धन आकर्षित करण्यासाठी शास्त्रोक्त पद्धतीने अभिमंत्रित उत्पादने.
            </p>

            <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:16px; font-size:13.5px; font-weight:700; color:var(--vv-maroon-deep);">
                <div style="background:#fff; border:1px solid var(--vv-border); padding:6px 14px; border-radius:20px; display:flex; align-items:center; gap:6px;">
                    <i class="ti ti-shield-check" style="color:var(--vv-gold); font-size:18px;"></i> १००% ओरिजिनल गॅरंटी
                </div>
                <div style="background:#fff; border:1px solid var(--vv-border); padding:6px 14px; border-radius:20px; display:flex; align-items:center; gap:6px;">
                    <i class="ti ti-truck" style="color:var(--vv-gold); font-size:18px;"></i> सुरक्षित ऑल इंडिया डिलिव्हरी
                </div>
                <div style="background:#fff; border:1px solid var(--vv-border); padding:6px 14px; border-radius:20px; display:flex; align-items:center; gap:6px;">
                    <i class="ti ti-phone-call" style="color:var(--vv-gold); font-size:18px;"></i> ऑर्डर मदत: ९९२१३ १४५४१
                </div>
            </div>
        </div>
    </div>
</div>

<section style="padding:60px 0; background:var(--vv-cream-bg);">
    <div class="vv-container">
        
        <!-- Category Filter Pills -->
        <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:10px; margin-bottom:40px;">
            <button class="vv-filter-btn active" onclick="filterVProducts('all', this)" style="padding:10px 22px; border-radius:30px; border:1.5px solid var(--vv-gold); background:var(--vv-maroon-deep); color:#fff; font-weight:700; cursor:pointer; font-size:14px; transition:all 0.2s;">
                सर्व उत्पादने (All)
            </button>
            <button class="vv-filter-btn" onclick="filterVProducts('bracelets', this)" style="padding:10px 22px; border-radius:30px; border:1.5px solid var(--vv-border); background:#fff; color:var(--vv-maroon-deep); font-weight:700; cursor:pointer; font-size:14px; transition:all 0.2s;">
                क्रिस्टल ब्रेसलेट्स (Bracelets)
            </button>
            <button class="vv-filter-btn" onclick="filterVProducts('pyramid', this)" style="padding:10px 22px; border-radius:30px; border:1.5px solid var(--vv-border); background:#fff; color:var(--vv-maroon-deep); font-weight:700; cursor:pointer; font-size:14px; transition:all 0.2s;">
                वास्तू पिरॅमिड्स व पट्ट्या
            </button>
            <button class="vv-filter-btn" onclick="filterVProducts('numerology', this)" style="padding:10px 22px; border-radius:30px; border:1.5px solid var(--vv-border); background:#fff; color:var(--vv-maroon-deep); font-weight:700; cursor:pointer; font-size:14px; transition:all 0.2s;">
                न्यूमरोलॉजी किट्स
            </button>
            <button class="vv-filter-btn" onclick="filterVProducts('cleansing', this)" style="padding:10px 22px; border-radius:30px; border:1.5px solid var(--vv-border); background:#fff; color:var(--vv-maroon-deep); font-weight:700; cursor:pointer; font-size:14px; transition:all 0.2s;">
                ऑरा व घर शुद्धी किट
            </button>
        </div>

        <!-- Products Grid (With Stand Pedestal Effect) -->
        <div class="vv-products-grid" id="productGrid">

            <!-- Product 1: Pyrite -->
            <div class="vv-product-card" data-cat="bracelets">
                <div>
                    <span class="vv-product-badge">Money Magnet · धनवर्धक</span>
                    <div class="vv-product-stand">
                        <img src="./img/product-pyrite.jpg" alt="पायराइट मनी ब्रेसलेट">
                    </div>
                    <h3>नॅचरल पायराइट मनी ब्रेसलेट</h3>
                    <p>सोन्यासारखा चमकणारा अस्सल पायराइट स्टोन. व्यवसायात नवीन ग्राहक, धनप्राप्ती आणि आर्थिक स्थैर्य आकर्षित करतो.</p>
                </div>
                <div class="vv-product-bottom">
                    <span class="vv-price">₹1,199</span>
                    <a href="product_detail.php?id=1" class="vv-btn-primary" style="padding:8px 20px; font-size:13.5px;">ऑर्डर करा</a>
                </div>
            </div>

            <!-- Product 2: Citrine -->
            <div class="vv-product-card" data-cat="bracelets">
                <div>
                    <span class="vv-product-badge">धनलक्ष्मी स्टोन</span>
                    <div class="vv-product-stand">
                        <img src="./img/product-citrine.jpg" alt="सिट्रीन धनलक्ष्मी ब्रेसलेट">
                    </div>
                    <h3>सिट्रीन धनलक्ष्मी क्रिस्टल ब्रेसलेट</h3>
                    <p>व्यापारी व नोकरदारांसाठी अत्यंत भाग्यशाली स्टोन. निर्णयक्षमता वाढवून पैशांची बचत आणि आवक सुधारतो.</p>
                </div>
                <div class="vv-product-bottom">
                    <span class="vv-price">₹850</span>
                    <a href="product_detail.php?id=2" class="vv-btn-primary" style="padding:8px 20px; font-size:13.5px;">ऑर्डर करा</a>
                </div>
            </div>

            <!-- Product 3: Tiger Eye -->
            <div class="vv-product-card" data-cat="bracelets">
                <div>
                    <span class="vv-product-badge">आत्मविश्वास व धाडस</span>
                    <div class="vv-product-stand">
                        <img src="./img/product-tigereye.jpg" alt="टायगर आय ब्रेसलेट">
                    </div>
                    <h3>टायगर आय पॉवर ब्रेसलेट</h3>
                    <p>भीती दूर करून आत्मविश्वास निर्माण करतो, नजर दोषापासून संरक्षण देतो आणि कामावर लक्ष केंद्रित करण्यास मदत करतो.</p>
                </div>
                <div class="vv-product-bottom">
                    <span class="vv-price">₹799</span>
                    <a href="product_detail.php?id=3" class="vv-btn-primary" style="padding:8px 20px; font-size:13.5px;">ऑर्डर करा</a>
                </div>
            </div>

            <!-- Product 4: Black Tourmaline -->
            <div class="vv-product-card" data-cat="bracelets">
                <div>
                    <span class="vv-product-badge">नजर सुरक्षा कवच</span>
                    <div class="vv-product-stand">
                        <img src="./img/product-tourmaline.jpg" alt="ब्लॅक टूर्मलाइन ब्रेसलेट">
                    </div>
                    <h3>ब्लॅक टूर्मलाइन नजर सुरक्षा ब्रेसलेट</h3>
                    <p>वाईट नजर, ईर्ष्या आणि बाहेरील नकारात्मक ऊर्जेपासून अभेद्य सुरक्षा कवच प्रदान करणारे नैसर्गिक रत्न ब्रेसलेट.</p>
                </div>
                <div class="vv-product-bottom">
                    <span class="vv-price">₹699</span>
                    <a href="product_detail.php?id=4" class="vv-btn-primary" style="padding:8px 20px; font-size:13.5px;">ऑर्डर करा</a>
                </div>
            </div>

            <!-- Product 5: Vastu Pyramid -->
            <div class="vv-product-card" data-cat="pyramid">
                <div>
                    <span class="vv-product-badge">विना तोडफोड उपाय</span>
                    <div class="vv-product-stand">
                        <img src="./img/product-pyramid.jpg" alt="ब्रास वास्तू पिरॅमिड ९x९">
                    </div>
                    <h3>ब्रास वास्तू ऊर्जा पिरॅमिड (९x९)</h3>
                    <p>घरातील किंवा कार्यालयातील दिशा दोष, कट कॉर्नर आणि मुख्य दरवाजा दोषांवर तोडफोड न करता अत्यंत प्रभावशाली उपाय.</p>
                </div>
                <div class="vv-product-bottom">
                    <span class="vv-price">₹1,499</span>
                    <a href="product_detail.php?id=5" class="vv-btn-primary" style="padding:8px 20px; font-size:13.5px;">ऑर्डर करा</a>
                </div>
            </div>

            <!-- Product 6: Vastu Brass & Copper Strips -->
            <div class="vv-product-card" data-cat="pyramid">
                <div>
                    <span class="vv-product-badge">पंचतत्व बॅलन्स स्ट्रिप्स</span>
                    <div class="vv-product-stand">
                        <img src="./img/product-brass-strips.jpg" alt="वास्तू कॉपर व ब्रास पट्ट्या">
                    </div>
                    <h3>पंचतत्व ब्रास व कॉपर उंबरठा पट्ट्या</h3>
                    <p>चुकीच्या दिशेचा दरवाजा किंवा टॉयलेट कट उंबरठ्यावर पट्ट्या बसवून विना तोडफोड ब्लॉक करण्यासाठी विशेष सिद्ध पट्ट्या.</p>
                </div>
                <div class="vv-product-bottom">
                    <span class="vv-price">₹1,750</span>
                    <a href="product_detail.php?id=6" class="vv-btn-primary" style="padding:8px 20px; font-size:13.5px;">ऑर्डर करा</a>
                </div>
            </div>

            <!-- Product 7: Numerology Kit -->
            <div class="vv-product-card" data-cat="numerology">
                <div>
                    <span class="vv-product-badge">अंकशास्त्र रिपोर्ट</span>
                    <div class="vv-product-stand">
                        <img src="./img/product-numerology.jpg" alt="पर्सनलाइझ्ड न्यूमरोलॉजी किट">
                    </div>
                    <h3>पर्सनलाइझ्ड न्यूमरोलॉजी किट</h3>
                    <p>तुमच्या जन्मतारखेनुसार सविस्तर अंकशास्त्र अहवाल, नेम करेक्शन स्पेलिंग, लकी नंबर आणि सही (Signature) मार्गदर्शक.</p>
                </div>
                <div class="vv-product-bottom">
                    <span class="vv-price">₹999</span>
                    <a href="product_detail.php?id=7" class="vv-btn-primary" style="padding:8px 20px; font-size:13.5px;">ऑर्डर करा</a>
                </div>
            </div>

            <!-- Product 8: Aura Salt Cleansing Kit (Real Himalayan Salt & Dhoop Photo) -->
            <div class="vv-product-card" data-cat="cleansing">
                <div>
                    <span class="vv-product-badge">नकारात्मकता निवारण</span>
                    <div class="vv-product-stand">
                        <img src="./img/product-salt-dhoop.jpg" alt="वास्तू ऑरा सॉल्ट व धूप किट">
                    </div>
                    <h3>वास्तू ऑरा सॉल्ट व पॉझिटिव्ह एनर्जी धूप</h3>
                    <p>घरातील क्लेश, आजारपण व नकारात्मक ऊर्जा घालवण्यासाठी नैसर्गिक हिमालयीन रॉक सॉल्ट व आयुर्वेदिक धूप कापूर किट.</p>
                </div>
                <div class="vv-product-bottom">
                    <span class="vv-price">₹550</span>
                    <a href="product_detail.php?id=8" class="vv-btn-primary" style="padding:8px 20px; font-size:13.5px;">ऑर्डर करा</a>
                </div>
            </div>

        </div>

        <!-- Bottom Assistance Callout -->
        <div style="margin-top:55px; background:#fff; border-radius:20px; border:2px solid var(--vv-border); padding:32px; display:flex; flex-direction:column; align-items:center; text-align:center; gap:16px;">
            <h3 style="margin:0; font-size:22px; color:var(--vv-maroon-deep);">कोणते उत्पादन तुमच्यासाठी योग्य आहे हे जाणून घ्यायचे आहे का?</h3>
            <p style="margin:0; font-size:15px; color:var(--vv-text-muted); max-width:600px;">
                तुमची जन्मपत्रिका किंवा वास्तू दोषांनुसार अचूक ब्रेसलेट अथवा वास्तू उपाय निवडण्यासाठी आमच्याशी थेट संपर्क करा.
            </p>
            <div style="display:flex; flex-wrap:wrap; gap:14px; justify-content:center;">
                <a href="https://wa.me/919921314541?text=Hello%20Vastuvardhaan,%20please%20recommend%20suitable%20product" target="_blank" class="vv-btn-primary" style="display:inline-flex; align-items:center; gap:8px;">
                    <i class="ti ti-brand-whatsapp" style="font-size:18px;"></i> WhatsApp सल्ला (99213 14541)
                </a>
                <a href="tel:9921314541" class="vv-btn-outline" style="display:inline-flex; align-items:center; gap:8px;">
                    <i class="ti ti-phone-call" style="font-size:18px;"></i> थेट कॉल करा
                </a>
            </div>
        </div>

    </div>
</section>

<script>
function filterVProducts(cat, btn) {
    document.querySelectorAll('.vv-filter-btn').forEach(b => {
        b.style.background = '#fff';
        b.style.color = 'var(--vv-maroon-deep)';
        b.style.borderColor = 'var(--vv-border)';
    });
    btn.style.background = 'var(--vv-maroon-deep)';
    btn.style.color = '#fff';
    btn.style.borderColor = 'var(--vv-gold)';

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
