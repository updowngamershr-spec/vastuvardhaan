<?php include 'inc/header.php'; ?>

<div class="inner_banner py-16 bg-gradient-to-r from-amber-700 to-amber-900 text-white text-center">
    <h1 class="text-3xl md:text-5xl font-bold mb-2">वास्तू प्रॉडक्ट्स (Vastu Store)</h1>
    <p class="text-amber-200 text-sm md:text-base max-w-xl mx-auto">
        दोष निवारण, आर्थिक उन्नती आणि घराच्या ऊर्जेचे संतुलन करण्यासाठी सिद्ध व अभिमंत्रित वास्तू उत्पादने.
    </p>
</div>

<section class="shop-section py-16">
    <div class="container m-auto flex flex-col md:flex-row items-start justify-between px-4 gap-8">
        <!-- Sidebar Categories -->
        <aside class="sidebar w-full md:w-1/4 bg-white p-5 rounded-2xl shadow border border-amber-100">
            <h3 class="font-bold text-lg text-gray-800 mb-4 pb-2 border-b border-gray-100 flex items-center gap-2">
                <i class="ti ti-category text-amber-600"></i> कॅटेगरी निवडा
            </h3>
            <ul class="category-list space-y-2">
                <li class="active cursor-pointer p-3 rounded-lg flex items-center justify-between transition-all" data-category="all">
                    <h4 class="font-medium text-sm m-0">सर्व प्रॉडक्ट्स (All Products)</h4>
                    <span class="bg-amber-100 text-amber-800 text-xs px-2 py-0.5 rounded-full font-bold">10</span>
                </li>
                <li class="cursor-pointer p-3 rounded-lg flex items-center justify-between transition-all" data-category="yantra">
                    <h4 class="font-medium text-sm m-0">सिद्ध यंत्र (Energized Yantras)</h4>
                    <span class="bg-amber-100 text-amber-800 text-xs px-2 py-0.5 rounded-full font-bold">2</span>
                </li>
                <li class="cursor-pointer p-3 rounded-lg flex items-center justify-between transition-all" data-category="pyramid">
                    <h4 class="font-medium text-sm m-0">वास्तू पिरॅमिड्स व पट्ट्या</h4>
                    <span class="bg-amber-100 text-amber-800 text-xs px-2 py-0.5 rounded-full font-bold">2</span>
                </li>
                <li class="cursor-pointer p-3 rounded-lg flex items-center justify-between transition-all" data-category="crystals">
                    <h4 class="font-medium text-sm m-0">पायराइट व क्रिस्टल्स</h4>
                    <span class="bg-amber-100 text-amber-800 text-xs px-2 py-0.5 rounded-full font-bold">3</span>
                </li>
                <li class="cursor-pointer p-3 rounded-lg flex items-center justify-between transition-all" data-category="rudraksha">
                    <h4 class="font-medium text-sm m-0">रुद्राक्ष व जपमाळा</h4>
                    <span class="bg-amber-100 text-amber-800 text-xs px-2 py-0.5 rounded-full font-bold">1</span>
                </li>
                <li class="cursor-pointer p-3 rounded-lg flex items-center justify-between transition-all" data-category="protection">
                    <h4 class="font-medium text-sm m-0">नजर सुरक्षा व शुद्धी किट</h4>
                    <span class="bg-amber-100 text-amber-800 text-xs px-2 py-0.5 rounded-full font-bold">2</span>
                </li>
            </ul>

            <div class="mt-8 p-4 bg-amber-50 rounded-xl border border-amber-200">
                <h4 class="font-bold text-sm text-amber-900 mb-1 flex items-center gap-1">
                    <i class="ti ti-certificate"></i> १००% सिद्ध खात्री
                </h4>
                <p class="text-xs text-gray-600 leading-relaxed">
                    सर्व प्रॉडक्ट्स योग्य मुहूर्तावर मंत्रोच्चाराने अभिमंत्रित करूनच पाठवले जातात.
                </p>
            </div>
        </aside>

        <!-- Main Product Grid -->
        <div class="main-content w-full md:w-3/4">
            <div class="top-content flex items-center justify-between mb-8 pb-4 border-b border-gray-200">
                <div class="section-title">
                    <span class="mini-title">✨ सिद्ध साधना व उपाय</span>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800">सर्व प्रॉडक्ट्स (All Products)</h2>
                </div>
                <div class="item-count">
                    <h2 class="small-btn">10 Items</h2>
                </div>
            </div>

            <div class="product-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Product 1 -->
                <div class="product-card bg-white rounded-xl p-4 shadow border border-amber-100 flex flex-col justify-between" data-category="yantra">
                    <div>
                        <span class="badge bg-amber-600 text-white text-xs px-2 py-1 rounded">अभिमंत्रित</span>
                        <div class="product-image my-4 text-center">
                            <img src="img/yantra.png" alt="सिद्ध श्रीयंत्र" class="h-44 mx-auto object-contain">
                        </div>
                        <div class="product-info">
                            <h3 class="font-bold text-base text-gray-800 mb-1">सिद्ध श्रीयंत्र (Brass Frame)</h3>
                            <p class="text-xs text-gray-500 mb-3">घरातील धन-समृद्धी, लक्ष्मी आकर्षण आणि सकारात्मक ऊर्जेच्या निरंतर प्रवाहासाठी सर्वोत्तम.</p>
                        </div>
                    </div>
                    <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                        <span class="font-bold text-lg text-amber-700">₹2,100</span>
                        <a href="product_detail.php?id=1" class="small-btn">ऑर्डर करा</a>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card bg-white rounded-xl p-4 shadow border border-amber-100 flex flex-col justify-between" data-category="yantra">
                    <div>
                        <span class="badge bg-amber-600 text-white text-xs px-2 py-1 rounded">धनप्राप्ती</span>
                        <div class="product-image my-4 text-center">
                            <img src="img/rotating-yantra.png" alt="श्री कुबेर यंत्र प्लेट" class="h-44 mx-auto object-contain">
                        </div>
                        <div class="product-info">
                            <h3 class="font-bold text-base text-gray-800 mb-1">श्री कुबेर धन यंत्र प्लेट</h3>
                            <p class="text-xs text-gray-500 mb-3">दुकान, गल्ला किंवा तिजोरीमध्ये ठेवण्यासाठी अत्यंत शुभ व व्यापार वृद्धीकारक.</p>
                        </div>
                    </div>
                    <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                        <span class="font-bold text-lg text-amber-700">₹1,250</span>
                        <a href="product_detail.php?id=2" class="small-btn">ऑर्डर करा</a>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card bg-white rounded-xl p-4 shadow border border-amber-100 flex flex-col justify-between" data-category="pyramid">
                    <div>
                        <span class="badge bg-amber-600 text-white text-xs px-2 py-1 rounded">वास्तू दोष निवारक</span>
                        <div class="product-image my-4 text-center">
                            <img src="img/product.png" alt="ब्रास वास्तू पिरॅमिड 9x9" class="h-44 mx-auto object-contain">
                        </div>
                        <div class="product-info">
                            <h3 class="font-bold text-base text-gray-800 mb-1">ब्रास वास्तू पिरॅमिड (9x9)</h3>
                            <p class="text-xs text-gray-500 mb-3">दिशा दोष, कट कॉर्नर किंवा वास्तूतील अयोग्य बांधकामाचा प्रभाव निष्प्रभ करण्यासाठी.</p>
                        </div>
                    </div>
                    <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                        <span class="font-bold text-lg text-amber-700">₹1,499</span>
                        <a href="product_detail.php?id=3" class="small-btn">ऑर्डर करा</a>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card bg-white rounded-xl p-4 shadow border border-amber-100 flex flex-col justify-between" data-category="pyramid">
                    <div>
                        <span class="badge bg-amber-600 text-white text-xs px-2 py-1 rounded">पंचतत्व बॅलन्स</span>
                        <div class="product-image my-4 text-center">
                            <img src="img/product3.png" alt="पंचतत्व कॉपर व ब्रास पट्ट्या" class="h-44 mx-auto object-contain">
                        </div>
                        <div class="product-info">
                            <h3 class="font-bold text-base text-gray-800 mb-1">पंचतत्व ब्रास व कॉपर पट्ट्या</h3>
                            <p class="text-xs text-gray-500 mb-3">टॉयलेट किंवा मुख्य दरवाजा दोषावर फरशी न फोडता फ्लोअरिंग ब्लॉक करण्यासाठी विशेष पट्ट्या.</p>
                        </div>
                    </div>
                    <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                        <span class="font-bold text-lg text-amber-700">₹1,750</span>
                        <a href="product_detail.php?id=4" class="small-btn">ऑर्डर करा</a>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="product-card bg-white rounded-xl p-4 shadow border border-amber-100 flex flex-col justify-between" data-category="crystals">
                    <div>
                        <span class="badge bg-purple-600 text-white text-xs px-2 py-1 rounded">Money Magnet</span>
                        <div class="product-image my-4 text-center">
                            <img src="img/product2.png" alt="ओरिजिनल पायराइट स्टोन" class="h-44 mx-auto object-contain">
                        </div>
                        <div class="product-info">
                            <h3 class="font-bold text-base text-gray-800 mb-1">ओरिजिनल रॉ पायराइट क्लस्टर</h3>
                            <p class="text-xs text-gray-500 mb-3">सोन्यासारखा चमकणारा नैसर्गिक दगड जो व्यवसायात नवीन ग्राहक व संधी खेचून आणतो.</p>
                        </div>
                    </div>
                    <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                        <span class="font-bold text-lg text-amber-700">₹1,199</span>
                        <a href="product_detail.php?id=5" class="small-btn">ऑर्डर करा</a>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="product-card bg-white rounded-xl p-4 shadow border border-amber-100 flex flex-col justify-between" data-category="crystals">
                    <div>
                        <span class="badge bg-purple-600 text-white text-xs px-2 py-1 rounded">धनवृद्धी</span>
                        <div class="product-image my-4 text-center">
                            <img src="img/product.png" alt="सिट्रीन धनलक्ष्मी ब्रेसलेट" class="h-44 mx-auto object-contain">
                        </div>
                        <div class="product-info">
                            <h3 class="font-bold text-base text-gray-800 mb-1">सिट्रीन धनलक्ष्मी ब्रेसलेट</h3>
                            <p class="text-xs text-gray-500 mb-3">हातामध्ये परिधान केल्याने आत्मविश्वास, निर्णयक्षमता आणि पैशांची आवक सुधारते.</p>
                        </div>
                    </div>
                    <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                        <span class="font-bold text-lg text-amber-700">₹850</span>
                        <a href="product_detail.php?id=6" class="small-btn">ऑर्डर करा</a>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="product-card bg-white rounded-xl p-4 shadow border border-amber-100 flex flex-col justify-between" data-category="crystals">
                    <div>
                        <span class="badge bg-purple-600 text-white text-xs px-2 py-1 rounded">ऊर्जा शुद्धीकरण</span>
                        <div class="product-image my-4 text-center">
                            <img src="img/product2.png" alt="सेलेनाइट ऑरा क्लिनर स्टिक" class="h-44 mx-auto object-contain">
                        </div>
                        <div class="product-info">
                            <h3 class="font-bold text-base text-gray-800 mb-1">सेलेनाइट ऑरा क्लिनर स्टिक</h3>
                            <p class="text-xs text-gray-500 mb-3">घरातील आणि शरीराची नकारात्मक ऊर्जा काढून टाकण्यासाठी दिव्य पांढरा क्रिस्टल.</p>
                        </div>
                    </div>
                    <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                        <span class="font-bold text-lg text-amber-700">₹650</span>
                        <a href="product_detail.php?id=7" class="small-btn">ऑर्डर करा</a>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="product-card bg-white rounded-xl p-4 shadow border border-amber-100 flex flex-col justify-between" data-category="rudraksha">
                    <div>
                        <span class="badge bg-amber-600 text-white text-xs px-2 py-1 rounded">शिव कृपा</span>
                        <div class="product-image my-4 text-center">
                            <img src="img/product3.png" alt="सिद्ध पंचमुखी रुद्राक्ष माळा" class="h-44 mx-auto object-contain">
                        </div>
                        <div class="product-info">
                            <h3 class="font-bold text-base text-gray-800 mb-1">सिद्ध पंचमुखी रुद्राक्ष माळा (108 मणी)</h3>
                            <p class="text-xs text-gray-500 mb-3">मंत्रजप आणि दैनंदिन धारणेसाठी सर्वोत्तम. मनाची एकाग्रता व रक्तदाब नियंत्रणासाठी पूरक.</p>
                        </div>
                    </div>
                    <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                        <span class="font-bold text-lg text-amber-700">₹999</span>
                        <a href="product_detail.php?id=8" class="small-btn">ऑर्डर करा</a>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="product-card bg-white rounded-xl p-4 shadow border border-amber-100 flex flex-col justify-between" data-category="protection">
                    <div>
                        <span class="badge bg-rose-600 text-white text-xs px-2 py-1 rounded">नजर सुरक्षा</span>
                        <div class="product-image my-4 text-center">
                            <img src="img/product.png" alt="ब्लॅक टूर्मलाइन नजर सुरक्षा ब्रेसलेट" class="h-44 mx-auto object-contain">
                        </div>
                        <div class="product-info">
                            <h3 class="font-bold text-base text-gray-800 mb-1">ब्लॅक टूर्मलाइन नजर सुरक्षा ब्रेसलेट</h3>
                            <p class="text-xs text-gray-500 mb-3">वाईट नजर, ईर्ष्या आणि बाहेरील नकारात्मक प्रभावांपासून संपूर्ण संरक्षण देणारे नैसर्गिक रत्न.</p>
                        </div>
                    </div>
                    <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                        <span class="font-bold text-lg text-amber-700">₹699</span>
                        <a href="product_detail.php?id=9" class="small-btn">ऑर्डर करा</a>
                    </div>
                </div>

                <!-- Product 10 -->
                <div class="product-card bg-white rounded-xl p-4 shadow border border-amber-100 flex flex-col justify-between" data-category="protection">
                    <div>
                        <span class="badge bg-rose-600 text-white text-xs px-2 py-1 rounded">वास्तू शुद्धी</span>
                        <div class="product-image my-4 text-center">
                            <img src="img/product2.png" alt="वास्तू ऑरा सॉल्ट व धूप शुद्धी किट" class="h-44 mx-auto object-contain">
                        </div>
                        <div class="product-info">
                            <h3 class="font-bold text-base text-gray-800 mb-1">वास्तू ऑरा सॉल्ट व धूप किट</h3>
                            <p class="text-xs text-gray-500 mb-3">घरातील क्लेश, आजारपण व नकारात्मक ऊर्जा घालवण्यासाठी नैसर्गिक खडे मीठ व आयुर्वेदिक धूप.</p>
                        </div>
                    </div>
                    <div class="pt-3 border-t border-gray-100 flex items-center justify-between">
                        <span class="font-bold text-lg text-amber-700">₹550</span>
                        <a href="product_detail.php?id=10" class="small-btn">ऑर्डर करा</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>
