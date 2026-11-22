<?php
$products = [
    1 => [
        'name' => 'नॅचरल पायराइट मनी ब्रेसलेट (Raw Pyrite Bracelet)',
        'category' => 'क्रिस्टल ब्रेसलेट',
        'price' => '1,199',
        'image' => './img/product-pyrite.jpg',
        'desc' => 'सोन्यासारखा चमकणारा अस्सल पायराइट स्टोन हा धनाचे चुंबक (Money Magnet) मानला जातो. व्यवसायात नवीन ग्राहक मिळवण्यासाठी, अडकलेले पैसे मोकळे करण्यासाठी आणि आत्मविश्वास वाढवण्यासाठी हे ब्रेसलेट अत्यंत प्रभावशाली आहे.',
        'sku' => 'VV-BR-001'
    ],
    2 => [
        'name' => 'सिट्रीन धनलक्ष्मी क्रिस्टल ब्रेसलेट (Natural Citrine)',
        'category' => 'क्रिस्टल ब्रेसलेट',
        'price' => '850',
        'image' => './img/product-citrine.jpg',
        'desc' => 'सिट्रीन स्टोनला व्यापाऱ्यांचा लकी स्टोन (Merchant Stone) म्हटले जाते. हे ब्रेसलेट घातल्याने पैशांची अनावश्यक गळती थांबते, निर्णयक्षमता सुधारते आणि कार्यक्षेत्रात नवीन यश मिळते.',
        'sku' => 'VV-BR-002'
    ],
    3 => [
        'name' => 'टायगर आय पॉवर ब्रेसलेट (Tiger Eye Protection)',
        'category' => 'क्रिस्टल ब्रेसलेट',
        'price' => '799',
        'image' => './img/product-tigereye.jpg',
        'desc' => 'टायगर आय हा साहस, धैर्य आणि नजर सुरक्षा देणारा स्टोन आहे. मनातील भीती, नैराश्य दूर करून कामामध्ये लक्ष केंद्रित करण्यासाठी हे ब्रेसलेट परिधान केले जाते.',
        'sku' => 'VV-BR-003'
    ],
    4 => [
        'name' => 'ब्लॅक टूर्मलाइन नजर सुरक्षा ब्रेसलेट (Black Tourmaline)',
        'category' => 'क्रिस्टल ब्रेसलेट',
        'price' => '699',
        'image' => './img/product-tourmaline.jpg',
        'desc' => 'वाईट नजर, मत्सर आणि बाहेरील नकारात्मक ऊर्जेपासून १००% संरक्षण देणारे सिद्ध ब्लॅक टूर्मलाइन ब्रेसलेट. घरात किंवा प्रवासात नकारात्मकतेचा प्रभाव रोखण्यासाठी सर्वोत्तम.',
        'sku' => 'VV-BR-004'
    ],
    5 => [
        'name' => 'ब्रास वास्तू ऊर्जा पिरॅमिड ९x९ (Brass Vastu Pyramid)',
        'category' => 'वास्तू पिरॅमिड',
        'price' => '1,499',
        'image' => './img/product-pyramid.jpg',
        'desc' => 'घरातील किंवा दुकानातील दिशा दोष, कट कॉर्नर आणि मुख्य दरवाजा दोषावर एकही भिंत न पाडता विना तोडफोड ऊर्जा समतोल साधणारा बहुस्तरीय ब्रास पिरॅमिड.',
        'sku' => 'VV-VP-005'
    ],
    6 => [
        'name' => 'पंचतत्व ब्रास व कॉपर उंबरठा पट्ट्या (Vastu Metal Strips)',
        'category' => 'विना तोडफोड उपाय',
        'price' => '1,750',
        'image' => './img/product-brass-strips.jpg',
        'desc' => 'टॉयलेट किंवा चुकीच्या दिशेचा दरवाजा जमिनीवर उंबरठ्यावर पट्ट्या बसवून विना तोडफोड ब्लॉक करण्यासाठी विशेष सिद्ध ऊर्जा पट्ट्या.',
        'sku' => 'VV-MS-006'
    ],
    7 => [
        'name' => 'पर्सनलाइझ्ड न्यूमरोलॉजी किट (Name Correction Kit)',
        'category' => 'न्यूमरोलॉजी',
        'price' => '999',
        'image' => './img/product-numerology.jpg',
        'desc' => 'तुमच्या जन्मतारखेनुसार सविस्तर अंकशास्त्र अहवाल, नेम स्पेलिंग दुरुस्ती, लकी मोबाईल नंबर, लकी रंग आणि भाग्योदय घडवणारी सही (Signature) नमुना गाइड.',
        'sku' => 'VV-NK-007'
    ],
    8 => [
        'name' => 'वास्तू ऑरा सॉल्ट व पॉझिटिव्ह एनर्जी धूप किट',
        'category' => 'ऑरा व शुद्धी किट',
        'price' => '550',
        'image' => './img/product-salt-dhoop.jpg',
        'desc' => 'घरातील क्लेश, आजारपण व नकारात्मक ऊर्जा घालवण्यासाठी नैसर्गिक हिमालयीन रॉक सॉल्ट व आयुर्वेदिक धूप कापूर किट.',
        'sku' => 'VV-AS-008'
    ],
];

$id = isset($_GET['id']) && isset($products[$_GET['id']]) ? (int)$_GET['id'] : 1;
$item = $products[$id];
include 'inc/header.php';
?>

<div class="vv-inner-banner">
    <div class="vv-container">
        <h1 style="font-size:28px !important;"><?php echo htmlspecialchars($item['name']); ?></h1>
        <p>वास्तुवर्धन प्रमाणित सिद्ध वास्तू उत्पादन · १००% नैसर्गिक व मंत्रसिद्ध</p>
    </div>
</div>

<section style="padding:60px 0; background:var(--vv-cream-bg);">
    <div class="vv-container">
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:48px; align-items:start;">
            
            <!-- Product Image Stage with Pedestal -->
            <div style="background:#ffffff; border-radius:24px; padding:36px; border:1.5px solid var(--vv-border); box-shadow:0 10px 30px rgba(84, 12, 22, 0.06); text-align:center;">
                <div class="vv-product-stand" style="height:320px; margin-bottom:20px;">
                    <img id="stageImg" src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" style="max-height:280px; width:auto; max-width:100%; object-fit:contain; margin:0 auto;">
                </div>
                <div style="font-size:13.5px; color:var(--vv-gold); font-weight:700;">
                    ✨ १००% ओरिजिनल व शास्त्रोक्त मंत्रोच्चाराने सिद्ध केलेले
                </div>
            </div>

            <!-- Product Info Card -->
            <div style="background:#ffffff; border-radius:24px; padding:36px; border:1.5px solid var(--vv-border); box-shadow:0 10px 30px rgba(84, 12, 22, 0.06);">
                <span class="vv-product-badge" style="margin-bottom:12px;">
                    <?php echo htmlspecialchars($item['category']); ?>
                </span>
                
                <h1 style="font-size:28px; font-weight:800; color:var(--vv-maroon-deep); margin:0 0 14px; line-height:1.3;">
                    <?php echo htmlspecialchars($item['name']); ?>
                </h1>

                <div style="display:flex; align-items:baseline; gap:12px; margin-bottom:14px;">
                    <span style="font-size:34px; font-weight:800; color:var(--vv-maroon);">₹<?php echo htmlspecialchars($item['price']); ?></span>
                    <span style="font-size:13px; color:#888;">(सर्व कर व विधी समाविष्ट)</span>
                </div>
                <p style="font-size:12.5px; color:#666; margin-bottom:20px;">SKU कोड: <strong><?php echo htmlspecialchars($item['sku']); ?></strong></p>

                <div style="background:#fdf6ec; border:1px solid #f2dfc2; border-radius:12px; padding:12px 16px; font-size:13.5px; color:var(--vv-maroon-deep); font-weight:600; margin-bottom:24px; display:flex; align-items:center; gap:8px;">
                    <span style="width:8px; height:8px; border-radius:50%; background:#10b981;"></span>
                    स्टॉकमध्ये उपलब्ध · संपूर्ण भारतात सुरक्षित कुरिअर डिलिव्हरी
                </div>

                <div style="display:flex; flex-direction:column; gap:12px; font-size:14px; color:var(--vv-text-muted); margin-bottom:28px;">
                    <div style="display:flex; align-items:center; gap:10px;">
                        <i class="ti ti-truck" style="color:var(--vv-gold); font-size:18px;"></i> सुरक्षित व फास्ट पॅकिंगसह घरपोच डिलिव्हरी
                    </div>
                    <div style="display:flex; align-items:center; gap:10px;">
                        <i class="ti ti-shield-check" style="color:var(--vv-gold); font-size:18px;"></i> ओरिजिनल व शास्त्रोक्त शुद्धीकरणाची १००% हमी
                    </div>
                    <div style="display:flex; align-items:center; gap:10px;">
                        <i class="ti ti-phone-call" style="color:var(--vv-gold); font-size:18px;"></i> फोन सपोर्ट: ९९२१३ १४५४१
                    </div>
                </div>

                <p style="font-size:15px; line-height:1.75; color:var(--vv-text-muted); margin-bottom:28px; padding-top:16px; border-top:1px solid var(--vv-border);">
                    <?php echo htmlspecialchars($item['desc']); ?>
                </p>

                <!-- Order Action Buttons -->
                <div style="display:flex; flex-wrap:wrap; gap:14px;">
                    <a href="https://wa.me/919921314541?text=Hello%20Vastuvardhaan,%20I%20want%20to%20order:%20<?php echo urlencode($item['name']); ?>%20(Price:%20INR%20<?php echo $item['price']; ?>)" target="_blank" class="vv-btn-primary" style="flex:1; text-align:center; display:flex; align-items:center; justify-content:center; gap:8px; padding:14px;">
                        <i class="ti ti-brand-whatsapp" style="font-size:20px;"></i> WhatsApp द्वारे ऑर्डर करा
                    </a>
                    <a href="tel:9921314541" class="vv-btn-outline" style="padding:14px 20px; display:flex; align-items:center; justify-content:center; gap:6px;">
                        <i class="ti ti-phone-call" style="font-size:18px;"></i> कॉल करा
                    </a>
                </div>

            </div>

        </div>

        <div style="margin-top:40px; text-align:center;">
            <a href="products.php" style="color:var(--vv-maroon); font-weight:700; text-decoration:none; font-size:15px;">
                ← सर्व उत्पादने पाहण्यासाठी परत जा
            </a>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>
