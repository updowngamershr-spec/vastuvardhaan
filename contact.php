<?php include 'inc/header.php'; ?>

<div class="inner_banner py-16 bg-gradient-to-r from-amber-700 to-amber-900 text-white text-center">
    <h1 class="text-3xl md:text-5xl font-bold mb-2">संपर्क साधा (Contact Us)</h1>
    <p class="text-amber-200 text-sm md:text-base max-w-xl mx-auto">
        वास्तू, न्यूमरोलॉजी किंवा ज्योतिष मार्गदर्शनासाठी आम्ही सदैव आपल्या सेवेत आहोत.
    </p>
</div>

<!-- Contact Section -->
<section class="contact-section main-contact py-16">
    <div class="container m-auto px-4">
        <div class="contact-wrapper grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <!-- Left Side: Contact Info -->
            <div class="contact-info bg-white p-8 rounded-2xl shadow-lg border border-amber-100">
                <div class="section-title mb-6">
                    <span class="mini-title text-xs font-semibold text-amber-600 uppercase">
                        ✨ वास्तुवर्धन संपर्क केंद्र
                    </span>
                    <h2 class="text-3xl font-bold text-gray-900">
                        आम्हाला संपर्क करा
                    </h2>
                    <div class="divider">
                        ☸
                    </div>
                </div>
                <p class="contact-desc text-gray-600 mb-8 leading-relaxed">
                    आपल्या घराच्या वास्तू तपासणीसाठी, नवीन प्लॉट/फ्लॅटच्या नकाशा परीक्षणासाठी, किंवा नाव शुद्धीकरण (न्यूमरोलॉजी) संदर्भात थेट चर्चा करा.
                </p>

                <div class="space-y-6">
                    <div class="info-card flex items-start gap-4 p-4 rounded-xl bg-amber-50/60 border border-amber-100">
                        <div class="icon w-12 h-12 rounded-full bg-amber-600 text-white flex items-center justify-center text-xl flex-shrink-0">
                            <i class="ti ti-phone-call"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-base text-gray-900">मोबाईल व WhatsApp</h4>
                            <p class="text-sm text-gray-600 mt-1">+91 98765 43210 / +91 91234 56789</p>
                            <p class="text-xs text-amber-700 mt-1 font-semibold">सोमवार ते शनिवार: सकाळी १०:०० ते संध्याकाळी ७:००</p>
                        </div>
                    </div>

                    <div class="info-card flex items-start gap-4 p-4 rounded-xl bg-amber-50/60 border border-amber-100">
                        <div class="icon w-12 h-12 rounded-full bg-amber-600 text-white flex items-center justify-center text-xl flex-shrink-0">
                            <i class="ti ti-mail"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-base text-gray-900">ईमेल संपर्क</h4>
                            <p class="text-sm text-gray-600 mt-1">contact@vastuvardhaan.com</p>
                            <p class="text-xs text-gray-500 mt-1">२४ तासांच्या आत प्रतिसाद दिला जाईल</p>
                        </div>
                    </div>

                    <div class="info-card flex items-start gap-4 p-4 rounded-xl bg-amber-50/60 border border-amber-100">
                        <div class="icon w-12 h-12 rounded-full bg-amber-600 text-white flex items-center justify-center text-xl flex-shrink-0">
                            <i class="ti ti-award"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-base text-gray-900">प्रमाणित व सन्मानित केंद्र</h4>
                            <p class="text-sm text-gray-600 mt-1">वेदऋषी फाउंडेशन व संशोधन केंद्र, पुणे तर्फे सन्मानित</p>
                            <p class="text-xs text-gray-500 mt-1">ISO 9001:2015 प्रमाणित पद्धती</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Contact / Inquiry Form -->
            <div class="contact-form-box bg-white p-8 md:p-10 rounded-2xl shadow-xl border border-amber-100">
                <h3 class="text-2xl font-bold text-gray-900 mb-2">संदेश पाठवा (Send Message)</h3>
                <p class="text-xs text-gray-500 mb-6">खालील फॉर्म भरा, आमचे प्रतिनिधी त्वरित आपल्याशी संपर्क साधतील.</p>

                <form action="#" method="POST" class="space-y-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1">आपले पूर्ण नाव *</label>
                        <input type="text" name="name" required placeholder="नाव लिहा" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-amber-500 outline-none text-sm">
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1">मोबाईल नंबर *</label>
                            <input type="tel" name="phone" required placeholder="१० अंकी नंबर" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-amber-500 outline-none text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1">ईमेल</label>
                            <input type="email" name="email" placeholder="ईमेल आयडी" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-amber-500 outline-none text-sm">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1">विषय / चौकशी प्रकार *</label>
                        <select name="subject" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-amber-500 outline-none text-sm">
                            <option value="vastu">वास्तुशास्त्र सल्ला (Residential / Commercial)</option>
                            <option value="numerology">न्यूमरोलॉजी व नाव शुद्धीकरण</option>
                            <option value="astrology">जन्मकुंडली मार्गदर्शन</option>
                            <option value="products">वास्तू प्रॉडक्ट्स खरेदी</option>
                            <option value="general">इतर चौकशी</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-700 mb-1">आपला संदेश</label>
                        <textarea name="message" rows="4" placeholder="आपली समस्या किंवा विचारणा येथे लिहा..." class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-amber-500 outline-none text-sm"></textarea>
                    </div>
                    <button type="submit" class="big_btn w-full text-center py-3 text-base">
                        संदेश पाठवा →
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>
