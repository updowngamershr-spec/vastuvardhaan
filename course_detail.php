<?php
include 'inc/header.php';

// Course data dictionary
$courses = [
    'energy-engineering' => [
        'id' => 'CRS-EE-001',
        'title' => 'Energy Engineering in Spiritual 7 Chakras',
        'subtitle' => 'Activate, balance, and align your seven sacred energy vortexes for holistic healing, supreme clarity, and spiritual power.',
        'eyebrow' => 'Flagship Sadhna Program',
        'badge' => 'Bestseller',
        'rating' => '4.9',
        'reviews' => '1,420+ Seekers',
        'price' => '11,999',
        'price_num' => 11999,
        'original_price' => '24,999',
        'discount' => '52% OFF',
        'duration' => '7 Days Guided Sadhna',
        'hours' => '21+ Hours On-Demand',
        'language' => 'Hindi & English',
        'level' => 'All Levels Welcome',
        'access' => 'Lifetime Access',
        'certificate' => 'Certified by Sadhgurudev',
        'image' => './img/prgram.png',
        'banner' => './img/memberbanner1.JPG',
        'description' => [
            'Energy Engineering in Spiritual 7 Chakras is a transformative initiation into your subtle energetic anatomy. Rooted in ancient Vedic and Tantric scriptures, this course bridges the esoteric teachings of the Rishis with practical daily inner technology.',
            'Under the direct spiritual guidance of Shri Sadhgurudev, you will learn how each chakra governs specific emotional patterns, physical vitality, and spiritual awareness. Through authentic breathwork (Pranayama), sacred Beej Mantras, specific mudras, and guided meditations, you systematically unlock and cleanse blocks stored across all 7 energy centers.'
        ],
        'what_you_learn' => [
            'Systematic activation and harmonization of all 7 Chakras from Muladhara to Sahasrara',
            'Authentic Vedic Beej Mantras with precise Sanskrit intonation and tonal frequencies',
            'Prana Kriya and sacred breathwork to clear blocked subtle Nadis (Ida, Pingala, Sushumna)',
            'Diagnose dominant energy blocks and realign your aura against draining influences',
            'Sacred Mudra seals to channel divine shakti throughout meditation and daily routines',
            'Daily morning and evening sadhna protocols for sustained vitality, calm, and laser focus'
        ],
        'curriculum' => [
            [
                'day' => 'Day 1',
                'chakra' => 'Muladhara — The Root Center',
                'title' => 'Grounding, Earth Element & Fear Dissolution',
                'duration' => '32 Mins',
                'preview' => true,
                'desc' => 'Foundational grounding sadhna. Understanding the Earth element, clearing inherited survival fears, and anchoring your energy securely to cosmic stability.'
            ],
            [
                'day' => 'Day 2',
                'chakra' => 'Svadhisthana — The Sacral Center',
                'title' => 'Emotional Flow, Water Element & Creative Awakening',
                'duration' => '35 Mins',
                'preview' => true,
                'desc' => 'Purification of stored guilt and emotional suppression. Water element kriyas to restore fluid creative joy, healthy relationships, and sensory vitality.'
            ],
            [
                'day' => 'Day 3',
                'chakra' => 'Manipura — The Solar Plexus',
                'title' => 'Agni Awakening, Willpower & Karmic Action',
                'duration' => '38 Mins',
                'preview' => false,
                'desc' => 'Activating your inner solar fire. Dissolving procrastination, building unwavering self-discipline, inner confidence, and metabolic digestive prana.'
            ],
            [
                'day' => 'Day 4',
                'chakra' => 'Anahata — The Heart Center',
                'title' => 'Unconditional Love, Air Element & Deep Healing',
                'duration' => '40 Mins',
                'preview' => false,
                'desc' => 'Melting armor around the emotional heart. Air element pranayama, forgiveness rituals, and tuning into the sacred frequency of universal compassion.'
            ],
            [
                'day' => 'Day 5',
                'chakra' => 'Vishuddha — The Throat Center',
                'title' => 'Truth, Space Element & Voice Empowerment',
                'duration' => '30 Mins',
                'preview' => false,
                'desc' => 'Liberating your divine voice and expressive truth. Clearing vocal resonance channels and conscious speech (Satya).'
            ],
            [
                'day' => 'Day 6',
                'chakra' => 'Ajna — The Third Eye',
                'title' => 'Inner Sight, Intuition & Mind Mastery',
                'duration' => '45 Mins',
                'preview' => false,
                'desc' => 'Trataka (flame gazing), pineal gland activation, and quietening mental chatter to perceive subtler dimensions of reality.'
            ],
            [
                'day' => 'Day 7',
                'chakra' => 'Sahasrara — The Crown Center',
                'title' => 'Divine Union, Silence & Cosmic Consciousness',
                'duration' => '50 Mins',
                'preview' => false,
                'desc' => 'The ultimate synthesis. Surrendering individual ego into cosmic consciousness. Sealing the 7-day sadhna with the Maha Shanti Blessing.'
            ]
        ],
        'includes' => [
            '21+ Hours of guided HD video sadhna sessions',
            'Lossless Sanskrit Beej Mantra audio files (downloadable)',
            'Sacred 7 Chakras Yantra digital reference manual (PDF)',
            'Daily Sadhna Tracker & spiritual workbook',
            'Direct access to Sadhgurudev private community portal',
            'Certificate of Completion signed by Shri Sadhgurudev'
        ]
    ],

    'surya-sadhna' => [
        'id' => 'CRS-SS-002',
        'title' => 'Surya Sadhna: Solar Prana & Vitality Awakening',
        'subtitle' => 'Connect directly with the life-giving solar consciousness for radiant health, willpower, success, and spiritual effulgence.',
        'eyebrow' => 'Ancient Vedic Kriya',
        'badge' => 'Popular',
        'rating' => '4.9',
        'reviews' => '980+ Seekers',
        'price' => '8,999',
        'price_num' => 8999,
        'original_price' => '18,999',
        'discount' => '53% OFF',
        'duration' => '21 Days Morning Practice',
        'hours' => '18+ Hours Guided',
        'language' => 'Hindi & English',
        'level' => 'All Levels Welcome',
        'access' => 'Lifetime Access',
        'certificate' => 'Certified by Sadhgurudev',
        'image' => './img/memberbanner2.JPG',
        'banner' => './img/memberbanner2.JPG',
        'description' => [
            'Surya Sadhna is an ancient solar science practiced by the Vedic Seers to tap directly into the primordial source of light, vitality, and health. The Sun (Surya) is the physical manifestation of the Divine Brahman visible to the human eye.',
            'This 21-day guided course teaches the authentic method of Arghya offering, Surya Gayatri invocation, Adityahridayam Stotra recitation, and the 12 sacred solar mudras practiced during sunrise to charge your nervous system.'
        ],
        'what_you_learn' => [
            'Ritual science of Surya Arghya (water offering) with copper vessel geometry',
            'Authentic Surya Gayatri Mantra chanting with correct Sanskrit meter and intonation',
            'The 12 Sacred Names of Lord Surya with corresponding physical mudras and affirmations',
            'Adityahridayam Stotra breakdown — the battle-winning mantra given to Lord Rama',
            'Techniques to draw solar prana into the Manipura chakra for sustained daily stamina',
            'Remedies for Surya Mahadasha and strengthening your natural confidence and authority'
        ],
        'curriculum' => [
            [
                'day' => 'Module 1',
                'chakra' => 'Foundations',
                'title' => 'Philosophy of the Vedic Sun & Cosmic Light',
                'duration' => '40 Mins',
                'preview' => true,
                'desc' => 'Understanding Surya as the Soul of the Universe. Setting up your sacred morning sadhna space.'
            ],
            [
                'day' => 'Module 2',
                'chakra' => 'Ritual Science',
                'title' => 'Arghya Science, Copper Alchemy & Morning Alignments',
                'duration' => '35 Mins',
                'preview' => true,
                'desc' => 'Step-by-step practical demonstration of offering water to the rising sun, focusing solar rays onto your third eye.'
            ],
            [
                'day' => 'Module 3',
                'chakra' => 'Mantra Sadhna',
                'title' => 'The 12 Aditya Mantras & Energetic Mudras',
                'duration' => '45 Mins',
                'preview' => false,
                'desc' => 'Learning Om Mitraya Namah to Om Bhaskaraya Namah, pairing each with the ancient hand mudra to stimulate specific nadis.'
            ],
            [
                'day' => 'Module 4',
                'chakra' => 'Deep Scripture',
                'title' => 'Adityahridayam: The Invincible Solar Shield',
                'duration' => '50 Mins',
                'preview' => false,
                'desc' => 'Word-by-word chanting, meaning, and application of the Adityahridayam Stotra to conquer doubts, obstacles, and illnesses.'
            ]
        ],
        'includes' => [
            '18+ Hours of sunrise video demonstrations and guided sadhna',
            'Vedic Surya Mantras chanted by Shri Sadhgurudev (Studio Audio)',
            'Comprehensive Surya Sadhna ritual handbook (PDF)',
            'Solar timing calculator and muhurta chart',
            'Dedicated seekers discussion circle',
            'Official Certificate of Completion'
        ]
    ],

    'mudra-therapy' => [
        'id' => 'CRS-MT-003',
        'title' => 'Mudra Therapy Premium: Sacred Hand Healing',
        'subtitle' => 'Harness the five elemental cosmic powers in your hands to heal illnesses, calm anxiety, and awaken dormant energy pathways.',
        'eyebrow' => 'Holistic Healing Masterclass',
        'badge' => 'Premium',
        'rating' => '4.9',
        'reviews' => '860+ Seekers',
        'price' => '14,999',
        'price_num' => 14999,
        'original_price' => '29,999',
        'discount' => '50% OFF',
        'duration' => 'Self-Paced Guided Masterclass',
        'hours' => '24+ Hours of Lessons',
        'language' => 'Hindi & English',
        'level' => 'Beginner to Advanced',
        'access' => 'Lifetime Access',
        'certificate' => 'Certified Mudra Practitioner',
        'image' => './img/about2.jpg',
        'banner' => './img/memberbanner3.JPG',
        'description' => [
            'Our fingers are precise electromagnetic antennas connected directly to the five fundamental cosmic elements: Fire, Air, Space, Earth, and Water.',
            'In this premium therapy masterclass, Shri Sadhgurudev reveals the secret gestures used by ancient Yogis to instantly alter neuro-electrical circuitry, rebalance hormones, soothe the nervous system, and dissolve physical ailments.'
        ],
        'what_you_learn' => [
            'Mastery over 40+ ancient therapeutic mudras for physical and psychological wellness',
            'How to balance the 5 Elements (Pancha Mahabhutas) within 15 minutes of practice',
            'Specific mudra sequences for heart health, hypertension, digestion, and chronic insomnia',
            'Mudra combinations to boost memory, concentration, and psychic intuition during sadhna',
            'How to conduct mudra healing therapy sessions for family and clients safely',
            'Certification as a Recognized Sadhgurudev Mudra Therapy Practitioner'
        ],
        'curriculum' => [
            [
                'day' => 'Level 1',
                'chakra' => 'Elements',
                'title' => 'The Science of 5 Elemental Fingers & Bio-Circuits',
                'duration' => '45 Mins',
                'preview' => true,
                'desc' => 'How nerve endings in fingertips directly stimulate brain hemispheres. The physics of mudras and measuring pranic field changes.'
            ],
            [
                'day' => 'Level 2',
                'chakra' => 'Physical Health',
                'title' => 'Therapeutic Mudras for Vital Organs & Immunity',
                'duration' => '60 Mins',
                'preview' => true,
                'desc' => 'Apana Vayu Mudra for heart health, Prana Mudra for extreme vitality, and Varun Mudra for cellular hydration.'
            ],
            [
                'day' => 'Level 3',
                'chakra' => 'Mental Peace',
                'title' => 'Psychological & Stress Relief Mudras',
                'duration' => '50 Mins',
                'preview' => false,
                'desc' => 'Vayu Mudra to relieve restlessness, Hakini Mudra for laser memory integration, and Shunya Mudra for inner emotional stillness.'
            ],
            [
                'day' => 'Level 4',
                'chakra' => 'Spiritual Ascension',
                'title' => 'Higher Yogic & Tantric Sealing Mudras',
                'duration' => '65 Mins',
                'preview' => false,
                'desc' => 'Yoni Mudra, Khechari fundamentals, Shambhavi Mudra, and Mahamudra for awakening kundalini and deep meditation.'
            ]
        ],
        'includes' => [
            '24+ Hours comprehensive video masterclass modules',
            'Full-color 120-page Mudra Therapy Illustrated Encyclopedia (PDF)',
            'Quick-reference pocket cheat sheets for 40+ health conditions',
            'Interactive practitioner community and case study reviews',
            'Monthly live practitioner clinics with Sadhgurudev',
            'Official Practitioner Certification'
        ]
    ],

    'hanuman-protection' => [
        'id' => 'CRS-HP-004',
        'title' => 'Hanuman Protection Rituals & Kavach Sadhna',
        'subtitle' => 'Secret sadhna recordings, potent mantra kavach, and sacred sankalpas to shield your home, family, and aura from negative energies.',
        'eyebrow' => 'Sacred Tantra & Raksha Vidya',
        'badge' => 'High Demand',
        'rating' => '5.0',
        'reviews' => '1,890+ Seekers',
        'price' => '9,999',
        'price_num' => 9999,
        'original_price' => '19,999',
        'discount' => '50% OFF',
        'duration' => '11 Days Secret Sadhna',
        'hours' => '16+ Hours Recorded',
        'language' => 'Hindi with English Guide',
        'level' => 'Dedicated Seekers',
        'access' => 'Lifetime Access',
        'certificate' => 'Diksha Blessing Certificate',
        'image' => './img/hanuman.webp',
        'banner' => './img/memberbanner4.JPG',
        'description' => [
            'Lord Hanuman is the Chiranjeevi (Immortal) deity of supreme devotion, invincible strength, and ultimate protection. Wherever there is fear, planetary affliction, or psychic disturbance, the energy of Hanuman brings instantaneous liberation.',
            'In this consecrated sadhna, Shri Sadhgurudev imparts the authentic, confidential ritual practices preserved in traditional lineages, including consecrated yantra energization and the rare Panchamukhi Hanuman Kavach.'
        ],
        'what_you_learn' => [
            'Authentic Tantric invocation of Panchamukhi (Five-Faced) Hanuman',
            'Consecration and correct placement of the Hanuman Yantra in the household',
            'Siddha Hanuman Chalisa practice: understanding secret Beej Mantras hidden within verses',
            'Bajrang Baan sadhna rules — when, how, and why it must be chanted with strict discipline',
            'Creating an energetic Raksha Kavach (protection shield) for your physical aura',
            'Special remedies to nullify severe Sade Sati, Shani Dhaiya, and Rahu afflictions'
        ],
        'curriculum' => [
            [
                'day' => 'Step 1',
                'chakra' => 'Initiation',
                'title' => 'Sankalpa Vidhi & Inner Purity Protocol',
                'duration' => '35 Mins',
                'preview' => true,
                'desc' => 'Taking the sacred oath (Sankalpa), understanding mental purity required for intense Hanuman sadhna.'
            ],
            [
                'day' => 'Step 2',
                'chakra' => 'Invocation',
                'title' => 'Panchamukhi Hanuman Kavach: Chanting & Visualization',
                'duration' => '45 Mins',
                'preview' => true,
                'desc' => 'Invoking the five faces (Vanara, Garuda, Varaha, Narasimha, Hayagriva) to neutralize all five directions of danger.'
            ],
            [
                'day' => 'Step 3',
                'chakra' => 'Raksha',
                'title' => 'Creating the Raksha Rekha: Home & Family Shielding',
                'duration' => '40 Mins',
                'preview' => false,
                'desc' => 'How to energize water, mustard seeds, and sacred ashes (Bhasma) to seal the perimeter of your house against negativity.'
            ],
            [
                'day' => 'Step 4',
                'chakra' => 'Culmination',
                'title' => 'Havan, Aarti & Sealing the Divine Grace',
                'duration' => '50 Mins',
                'preview' => false,
                'desc' => 'Conducting the concluding micro-havan at home, offering ahutis, and permanently anchoring the protective presence.'
            ]
        ],
        'includes' => [
            '16+ Hours of confidential sacred sadhna recordings',
            'High-definition printable Panchamukhi Hanuman Yantra (consecrated geometry)',
            'Full text of rare Kavach with Hindi and English phonetics',
            'Aura shielding guided meditation audio track',
            'Emergency protection mantra cheat sheet',
            'Blessed Certificate of Sadhna Completion'
        ]
    ]
];

// Determine selected course from GET parameter or default to energy-engineering
$course_key = isset($_GET['course']) && array_key_exists($_GET['course'], $courses) 
    ? $_GET['course'] 
    : 'energy-engineering';

$c = $courses[$course_key];
?>


<!-- HERO BANNER SECTION (Course Poster LEFT + Details RIGHT) -->
<section class="course-detail-hero">
    <div class="container m-auto px-4 course-detail-hero__container">
        
        <!-- Left: Course Poster Image with Yantra Behind -->
        <div class="course-hero-visual">
            <div class="course-hero-yantra-wrap">
                <img src="./img/rotating-yantra.png" alt="Sacred Sri Yantra" class="course-hero-yantra-img">
            </div>
            <div class="course-hero-poster">
                <img src="<?php echo htmlspecialchars($c['image']); ?>" alt="<?php echo htmlspecialchars($c['title']); ?>">
            </div>
        </div>

        <!-- Right: Course Details -->
        <div class="course-detail-hero__content">
            <div class="course-hero-badge-row">
                <span class="hero-badge-pill"><span class="badge-sparkle">✨</span> <?php echo htmlspecialchars($c['eyebrow']); ?></span>
                <span class="hero-badge-tag"><?php echo htmlspecialchars($c['badge']); ?></span>
                <div class="hero-rating">
                    <span class="stars">★★★★★</span>
                    <strong><?php echo htmlspecialchars($c['rating']); ?></strong>
                    <span>(<?php echo htmlspecialchars($c['reviews']); ?>)</span>
                </div>
            </div>

            <h1 class="course-hero-main-title"><?php echo htmlspecialchars($c['title']); ?></h1>
            <p class="course-hero-main-subtitle"><?php echo htmlspecialchars($c['subtitle']); ?></p>

            <div class="course-hero-meta-chips">
                <span class="meta-chip"><i class="ti ti-clock"></i> <?php echo htmlspecialchars($c['duration']); ?></span>
                <span class="meta-chip"><i class="ti ti-language"></i> <?php echo htmlspecialchars($c['language']); ?></span>
                <span class="meta-chip"><i class="ti ti-device-laptop"></i> <?php echo htmlspecialchars($c['level']); ?></span>
                <span class="meta-chip"><i class="ti ti-infinity"></i> <?php echo htmlspecialchars($c['access']); ?></span>
            </div>

            <div class="course-hero-top-cta">
                <div class="hero-price-wrap">
                    <span class="currency">₹</span>
                    <span class="amount"><?php echo htmlspecialchars($c['price']); ?></span>
                    <span class="original-amount">₹<?php echo htmlspecialchars($c['original_price']); ?></span>
                    <span class="discount-pill"><?php echo htmlspecialchars($c['discount']); ?></span>
                </div>
                <div class="hero-btn-group">
                    <button type="button" class="btn-buy-hero" onclick="buyNow('<?php echo $c['id']; ?>', '<?php echo addslashes($c['title']); ?>', <?php echo $c['price_num']; ?>, '<?php echo $c['image']; ?>')">
                        Buy Now
                    </button>
                    <button type="button" class="btn-cart-hero" onclick="addToCart('<?php echo $c['id']; ?>', '<?php echo addslashes($c['title']); ?>', <?php echo $c['price_num']; ?>, '<?php echo $c['image']; ?>')">
                        <i class="ti ti-shopping-cart"></i> Add to Cart
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- MAIN CONTENT + SIDEBAR LAYOUT -->
<section class="course-detail-body-section">
    <div class="container m-auto px-4">
        <div class="course-body-grid">
            
            <!-- LEFT COLUMN: CURRICULUM, LEARNING OUTCOMES & DETAILS -->
            <div class="course-body-left">

                <!-- 1. WHAT YOU'LL LEARN -->
                <div class="course-panel what-you-learn-panel">
                    <div class="panel-header">
                        <div class="panel-icon">
                            <i class="ti ti-circle-check"></i>
                        </div>
                        <div>
                            <span class="mini-tag">Transformational Benefits</span>
                            <h2 class="panel-title">What You Will Learn &amp; Master</h2>
                        </div>
                    </div>
                    <div class="divider left">☸</div>
                    <div class="learn-grid">
                        <?php foreach ($c['what_you_learn'] as $item): ?>
                            <div class="learn-item">
                                <span class="check-icon"><i class="ti ti-check"></i></span>
                                <p><?php echo htmlspecialchars($item); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- 2. COURSE DESCRIPTION & SPIRITUAL WISDOM -->
                <div class="course-panel course-desc-panel">
                    <div class="panel-header">
                        <div class="panel-icon">
                            <i class="ti ti-book"></i>
                        </div>
                        <div>
                            <span class="mini-tag">Sacred Vedic Context</span>
                            <h2 class="panel-title">Course Overview &amp; Sacred Science</h2>
                        </div>
                    </div>
                    <div class="divider left">☸</div>
                    <div class="desc-content">
                        <?php foreach ($c['description'] as $p): ?>
                            <p><?php echo htmlspecialchars($p); ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- 3. DAY-WISE / MODULE CURRICULUM -->
                <div class="course-panel curriculum-panel">
                    <div class="panel-header flex justify-between items-center flex-wrap gap-2">
                        <div class="flex items-center gap-3">
                            <div class="panel-icon">
                                <i class="ti ti-list-details"></i>
                            </div>
                            <div>
                                <span class="mini-tag">Step-by-Step Sadhna</span>
                                <h2 class="panel-title">Course Curriculum &amp; Modules</h2>
                            </div>
                        </div>
                        <span class="curriculum-summary-pill"><?php echo count($c['curriculum']); ?> Modules · <?php echo htmlspecialchars($c['hours']); ?></span>
                    </div>
                    <div class="divider left">☸</div>
                    <p class="curriculum-sub-note">Click any module to view the practices and sadhna exercises covered.</p>

                    <div class="curriculum-accordion" id="curriculumAccordion">
                        <?php foreach ($c['curriculum'] as $idx => $mod): ?>
                            <div class="accordion-item <?php echo $idx === 0 ? 'is-active' : ''; ?>">
                                <button type="button" class="accordion-trigger">
                                    <div class="trigger-left">
                                        <span class="day-badge"><?php echo htmlspecialchars($mod['day']); ?></span>
                                        <div class="title-group">
                                            <span class="chakra-name"><?php echo htmlspecialchars($mod['chakra']); ?></span>
                                            <h4 class="module-title"><?php echo htmlspecialchars($mod['title']); ?></h4>
                                        </div>
                                    </div>
                                    <div class="trigger-right">
                                        <?php if (!empty($mod['preview'])): ?>
                                            <span class="preview-badge"><i class="ti ti-player-play"></i> Preview</span>
                                        <?php endif; ?>
                                        <span class="duration-text"><i class="ti ti-clock"></i> <?php echo htmlspecialchars($mod['duration']); ?></span>
                                        <i class="ti ti-chevron-down accordion-chev"></i>
                                    </div>
                                </button>
                                <div class="accordion-content" style="<?php echo $idx === 0 ? 'display:block;' : 'display:none;'; ?>">
                                    <div class="accordion-inner">
                                        <p><?php echo htmlspecialchars($mod['desc']); ?></p>
                                        <div class="module-perks">
                                            <span><i class="ti ti-sparkles"></i> Pranayama Video</span>
                                            <span><i class="ti ti-volume"></i> Sanskrit Mantra Audio</span>
                                            <span><i class="ti ti-notes"></i> Sadhna Notes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- 4. MENTOR SECTION: SHRI SADHGURUDEV -->
                <div class="course-panel mentor-panel">
                    <div class="mentor-layout">
                        <div class="mentor-avatar-wrap">
                            <img src="./img/about.jpg" alt="Shri Sadhgurudev" class="mentor-img">
                            <span class="mentor-verified-badge"><i class="ti ti-badge-check"></i> Master Guide</span>
                        </div>
                        <div class="mentor-info">
                            <span class="mini-tag">Your Spiritual Guide</span>
                            <h3 class="mentor-name">Introducing Shri Sadhgurudev</h3>
                            <p class="mentor-bio">
                                Under the divine blessings of ancient lineages and powered by Mantra Sharanam, Shri Sadhgurudev has initiated thousands of seekers into the living wisdom of Mantra, Yantra, Tantra, and Sacred Healing.
                            </p>
                            <div class="mentor-stats">
                                <div><strong>25,000+</strong><span>Seekers</span></div>
                                <div><strong>18+ Years</strong><span>Sadhna</span></div>
                                <div><strong>100% Authentic</strong><span>Vedic</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN: STICKY ENROLLMENT SIDEBAR (Clean Poster - No Video Icon) -->
            <aside class="course-body-sidebar">
                <div class="sticky-enroll-card" id="enrollCard">
                    <!-- Clean Poster Image (No video play overlay) -->
                    <div class="card-poster-thumb">
                        <img src="<?php echo htmlspecialchars($c['image']); ?>" alt="<?php echo htmlspecialchars($c['title']); ?>">
                    </div>

                    <div class="card-pricing-block">
                        <div class="price-row">
                            <span class="current-price">&#8377;<?php echo htmlspecialchars($c['price']); ?></span>
                            <span class="original-price">&#8377;<?php echo htmlspecialchars($c['original_price']); ?></span>
                            <span class="discount-badge"><?php echo htmlspecialchars($c['discount']); ?></span>
                        </div>
                        <p class="urgency-text"><i class="ti ti-flame"></i> Consecrated batch filling fast — Limited seats</p>
                    </div>

                    <div class="card-buttons">
                        <button type="button" class="btn-buy-sidebar" onclick="buyNow('<?php echo $c['id']; ?>', '<?php echo addslashes($c['title']); ?>', <?php echo $c['price_num']; ?>, '<?php echo $c['image']; ?>')">
                            Buy Now · ₹<?php echo htmlspecialchars($c['price']); ?>
                        </button>
                        <button type="button" class="btn-cart-sidebar" id="sidebarCartBtn" onclick="addToCart('<?php echo $c['id']; ?>', '<?php echo addslashes($c['title']); ?>', <?php echo $c['price_num']; ?>, '<?php echo $c['image']; ?>')">
                            <i class="ti ti-shopping-cart"></i> Add to Cart
                        </button>
                    </div>

                    <div class="card-guarantee-note">
                        <i class="ti ti-shield-check"></i>
                        <span>100% Authentic Vedic Guidance · Instant Access</span>
                    </div>

                    <div class="card-features-list">
                        <h4>This Sacred Course Includes:</h4>
                        <ul>
                            <li><i class="ti ti-video"></i> <?php echo htmlspecialchars($c['hours']); ?> HD Video</li>
                            <li><i class="ti ti-music"></i> Sanskrit Mantra Audio (MP3)</li>
                            <li><i class="ti ti-file-text"></i> Printable Yantra Manual (PDF)</li>
                            <li><i class="ti ti-calendar-event"></i> Weekly Sadhna Darshan &amp; Q&amp;A</li>
                            <li><i class="ti ti-device-mobile"></i> Mobile &amp; PC Lifetime Access</li>
                            <li><i class="ti ti-certificate"></i> Consecrated Certificate</li>
                        </ul>
                    </div>

                    <div class="card-share-row">
                        <span>Share with Seekers:</span>
                        <div class="share-icons">
                            <a href="https://api.whatsapp.com/send?text=Check%20out%20this%20sacred%20course:%20<?php echo urlencode($c['title']); ?>" target="_blank"><i class="ti ti-brand-whatsapp"></i></a>
                            <a href="#" onclick="navigator.clipboard.writeText(window.location.href); alert('Link copied to clipboard!'); return false;"><i class="ti ti-link"></i></a>
                        </div>
                    </div>
                </div>
            </aside>

        </div>
    </div>
</section>

<!-- RELATED COURSES SECTION (Properly aligned 3-Card Grid matching Home Page) -->
<section class="related-courses-section">
    <div class="container m-auto px-4">
        <div class="section-title text-center">
            <span class="mini-title">✨ Divine Wisdom Continues</span>
            <h2>Seekers Also Explored</h2>
            <div class="divider">☸</div>
        </div>

        <div class="related-cards-grid">
            <?php 
            $count = 0;
            foreach ($courses as $other_key => $other_course): 
                if ($other_key === $course_key) continue;
                if ($count >= 3) break;
                $count++;
            ?>
                <div class="related-card">
                    <div class="related-card__img">
                        <img src="<?php echo htmlspecialchars($other_course['image']); ?>" alt="<?php echo htmlspecialchars($other_course['title']); ?>">
                    </div>
                    <div class="related-card__content">
                        <h3 class="related-card__title"><?php echo htmlspecialchars($other_course['title']); ?></h3>
                        <p class="related-card__desc"><?php echo htmlspecialchars(substr($other_course['subtitle'], 0, 95)) . '...'; ?></p>
                        <div class="related-card__price">
                            <span class="currency-sign">₹</span>
                            <span class="price-val"><?php echo htmlspecialchars($other_course['price']); ?></span>
                        </div>
                        <a href="course_detail.php?course=<?php echo urlencode($other_key); ?>" class="big_btn text-center d-block m-auto">Explore Now →</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Floating Toast Notification -->
<div id="cartToast" class="cart-toast" style="display:none;">
    <div class="toast-content">
        <i class="ti ti-circle-check"></i>
        <span id="cartToastMsg">Course successfully added to your cart!</span>
    </div>
    <a href="cart.php" class="toast-cart-link">View Cart &rarr;</a>
</div>

<!-- INLINE CLIENT SCRIPT FOR CART & ACCORDION -->
<script>
// Accordion Toggle
document.addEventListener('DOMContentLoaded', function() {
    const accordionTriggers = document.querySelectorAll('.curriculum-accordion .accordion-trigger');
    accordionTriggers.forEach(btn => {
        btn.addEventListener('click', function() {
            const item = this.parentElement;
            const content = item.querySelector('.accordion-content');
            const isActive = item.classList.contains('is-active');

            // Close all
            document.querySelectorAll('.curriculum-accordion .accordion-item').forEach(other => {
                other.classList.remove('is-active');
                const otherContent = other.querySelector('.accordion-content');
                if (otherContent) otherContent.style.display = 'none';
            });

            // Toggle current
            if (!isActive) {
                item.classList.add('is-active');
                content.style.display = 'block';
            }
        });
    });

    updateNavCartBadge();
});

// Add to Cart
function addToCart(courseId, courseTitle, price, image) {
    let cart = JSON.parse(localStorage.getItem('sg_cart') || '[]');
    
    const existingIndex = cart.findIndex(item => item.id === courseId);
    if (existingIndex > -1) {
        cart[existingIndex].qty += 1;
    } else {
        cart.push({
            id: courseId,
            name: courseTitle,
            price: price,
            image: image,
            qty: 1
        });
    }

    localStorage.setItem('sg_cart', JSON.stringify(cart));
    updateNavCartBadge();

    showToast('✨ "' + courseTitle + '" added to cart!');

    const btn = document.getElementById('sidebarCartBtn');
    if (btn) {
        const originalText = btn.innerHTML;
        btn.innerHTML = '<i class="ti ti-check"></i> Added to Cart!';
        btn.style.background = '#27ae60';
        btn.style.borderColor = '#27ae60';
        btn.style.color = '#fff';
        setTimeout(() => {
            btn.innerHTML = originalText;
            btn.style.background = '';
            btn.style.borderColor = '';
            btn.style.color = '';
        }, 2200);
    }
}

// Buy Now
function buyNow(courseId, courseTitle, price, image) {
    addToCart(courseId, courseTitle, price, image);
    window.location.href = 'cart.php';
}

// Update Cart Badge in Header
function updateNavCartBadge() {
    const cart = JSON.parse(localStorage.getItem('sg_cart') || '[]');
    const totalItems = cart.reduce((sum, item) => sum + (item.qty || 1), 0);
    const badge = document.getElementById('navCartBadge');
    if (badge) {
        if (totalItems > 0) {
            badge.textContent = totalItems;
            badge.style.display = 'inline-flex';
        } else {
            badge.style.display = 'none';
        }
    }
}

// Toast Display
function showToast(message) {
    const toast = document.getElementById('cartToast');
    const msg = document.getElementById('cartToastMsg');
    if (!toast || !msg) return;

    msg.textContent = message;
    toast.style.display = 'flex';
    toast.classList.add('show');

    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => {
            toast.style.display = 'none';
        }, 300);
    }, 3500);
}
</script>

<?php include 'inc/footer.php'; ?>