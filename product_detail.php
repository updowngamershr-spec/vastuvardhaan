<?php
$products = [
    1 => [
        'name' => 'सिद्ध श्रीयंत्र (Brass Energized Shree Yantra Frame)',
        'category' => 'सिद्ध यंत्र',
        'price' => '2,100',
        'image' => 'img/yantra.png',
        'desc' => 'श्रीयंत्र हे विश्वातील सर्वोच्च सकारात्मक ऊर्जेचे प्रतीक मानले जाते. योग्य वैदिक मुहूर्तावर मंत्रोच्चाराने सिद्ध केलेले हे श्रीयंत्र घराच्या ईशान्य किंवा उत्तर दिशेला स्थापन केल्याने आर्थिक स्थैर्य, कर्जमुक्ती आणि घरात सुख-शांती कायम राहते.',
        'sku' => 'VV-SY-001'
    ],
    2 => [
        'name' => 'श्री कुबेर धन यंत्र प्लेट (Energized Kuber Plate)',
        'category' => 'सिद्ध यंत्र',
        'price' => '1,250',
        'image' => 'img/rotating-yantra.png',
        'desc' => 'भगवान कुबेरांचे हे प्रभावी यंत्र व्यावसायिक आस्थापने, दुकान किंवा घरातील तिजोरीमध्ये ठेवल्यास धनाची आवक सुधारते व अकारण होणारे नुकसान थांबते.',
        'sku' => 'VV-KY-002'
    ],
    3 => [
        'name' => 'ब्रास वास्तू पिरॅमिड (9x9 Energy Pyramid)',
        'category' => 'वास्तू पिरॅमिड्स',
        'price' => '1,499',
        'image' => 'img/product.png',
        'desc' => 'वास्तूतील कट कॉर्नर, दक्षिण किंवा नैऋत्य दरवाजा, अथवा चुकीच्या जागेवरील टॉयलेटचा दोष निष्प्रभ करण्यासाठी विना तोडफोड वापरला जाणारा सर्वोत्तम ऊर्जा पिरॅमिड.',
        'sku' => 'VV-VP-003'
    ],
    4 => [
        'name' => 'पंचतत्व कॉपर व ब्रास पट्ट्या (Vastu Energy Strips)',
        'category' => 'वास्तू पिरॅमिड्स',
        'price' => '1,750',
        'image' => 'img/product3.png',
        'desc' => 'फरशी न तोडता चुकीच्या दिशेचा टॉयलेट किंवा मुख्य दरवाजा ब्लॉक करण्यासाठी जमिनीवर किंवा उंबरठ्यावर वापरल्या जाणाऱ्या सिद्ध पंचतत्व पट्ट्या.',
        'sku' => 'VV-ST-004'
    ],
    5 => [
        'name' => 'ओरिजिनल रॉ पायराइट क्लस्टर (Golden Money Magnet)',
        'category' => 'पायराइट व क्रिस्टल्स',
        'price' => '1,199',
        'image' => 'img/product2.png',
        'desc' => 'सोन्यासारखा लखलखणारा हा नैसर्गिक मिनरल स्टोन पैशांची नवीन संधी, व्यवसायात वाढ आणि आत्मविश्वास खेचून आणण्यासाठी अत्यंत प्रभावी मानला जातो.',
        'sku' => 'VV-PY-005'
    ],
    6 => [
        'name' => 'सिट्रीन धनलक्ष्मी ब्रेसलेट (Natural Citrine Crystal)',
        'category' => 'पायराइट व क्रिस्टल्स',
        'price' => '850',
        'image' => 'img/product.png',
        'desc' => 'नॅचरल सिट्रीन मण्यांनी बनवलेले हे ब्रेसलेट हातामध्ये परिधान केल्याने निर्णयक्षमता सुधारते आणि व्यवसायात सतत प्रगती होते.',
        'sku' => 'VV-CT-006'
    ],
];

$id = isset($_GET['id']) && isset($products[$_GET['id']]) ? (int)$_GET['id'] : 1;
$item = $products[$id];
include 'inc/header.php';
?>

<div class="inner_banner py-12 bg-gradient-to-r from-amber-700 to-amber-900 text-white text-center">
    <h1 class="text-2xl md:text-4xl font-bold"><?php echo htmlspecialchars($item['name']); ?></h1>
    <p class="text-amber-200 text-xs md:text-sm mt-1">वास्तुवर्धन प्रमाणित सिद्ध वास्तू उत्पादने</p>
</div>

<section class="product_detail py-16">
  <div class="container m-auto px-4 flex flex-col md:flex-row gap-12 items-start">
    <!-- Gallery -->
    <div class="gallery w-full md:w-1/2 flex flex-col items-center">
      <div class="gallery__stage bg-white p-6 rounded-2xl shadow-lg border border-amber-100 max-w-md w-full text-center">
        <img id="stageImg" src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" class="max-h-80 mx-auto object-contain">
      </div>
    </div>

    <!-- Info -->
    <div class="info w-full md:w-1/2 bg-white p-8 rounded-2xl shadow-lg border border-amber-100">
      <p class="info__eyebrow text-xs font-bold text-amber-700 uppercase tracking-widest mb-1">
        <?php echo htmlspecialchars($item['category']); ?>
      </p>
      <h1 class="info__title text-2xl md:text-3xl font-bold text-gray-900 mb-3">
        <?php echo htmlspecialchars($item['name']); ?>
      </h1>

      <div class="info__price-row flex items-baseline gap-3 mb-2">
        <span class="info__price text-3xl font-bold text-amber-700">₹<?php echo htmlspecialchars($item['price']); ?></span>
        <span class="info__price-note text-xs text-gray-500">(सर्व कर व ऊर्जा सिद्धी समाविष्ट)</span>
      </div>
      <p class="info__sku text-xs text-gray-500 mb-4">SKU: <strong><?php echo htmlspecialchars($item['sku']); ?></strong></p>

      <div class="urgency bg-amber-50 p-3 rounded-lg text-xs text-amber-900 font-semibold mb-6 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
        स्टॉकमध्ये उपलब्ध · मंत्रोच्चाराने सिद्ध केलेले ओरिजिनल प्रॉडक्ट
      </div>

      <div class="perks space-y-2 text-xs text-gray-700 mb-6">
        <div class="perks__item flex items-center gap-2">
          <i class="ti ti-truck text-amber-600 text-base"></i>
          महाराष्ट्र व संपूर्ण भारतात सुरक्षित व जलद कुरिअर डिलिव्हरी
        </div>
        <div class="perks__item flex items-center gap-2">
          <i class="ti ti-shield-check text-amber-600 text-base"></i>
          १००% अस्सल व सिद्ध असल्याबाबत वास्तुवर्धनची हमी
        </div>
        <div class="perks__item flex items-center gap-2">
          <i class="ti ti-map-pin text-amber-600 text-base"></i>
          योग्य दिशा व स्थापना विधी संदर्भात मोफत मार्गदर्शन पत्रक सोबत
        </div>
      </div>

      <div class="cta-row flex flex-wrap gap-4 mb-8">
        <a href="cart.php?add=<?php echo $id; ?>" class="big_btn flex-1 text-center">Add to Cart · ₹<?php echo htmlspecialchars($item['price']); ?></a>
        <a href="https://wa.me/919876543210?text=I%20want%20to%20order%20<?php echo urlencode($item['name']); ?>" target="_blank" class="hero-secondary-btn flex-1 text-center flex items-center justify-center gap-2">
            <i class="ti ti-brand-whatsapp text-lg"></i> WhatsApp वर ऑर्डर करा
        </a>
      </div>

      <h2 class="desc__title text-lg font-bold text-gray-900 mb-2 border-b pb-2">सविस्तर वर्णन (Description)</h2>
      <div class="desc__body text-sm text-gray-600 leading-relaxed">
        <p><?php echo htmlspecialchars($item['desc']); ?></p>
      </div>
    </div>
  </div>
</section>

<?php include 'inc/footer.php'; ?>
