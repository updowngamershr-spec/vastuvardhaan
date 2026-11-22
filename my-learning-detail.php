<?php include 'inc/header-login.php'; ?>

<style>
/* PROFESSIONAL LMS LAYOUT */
.lms-wrapper {
    background-color: #fbf3e6; /* Match site theme */
    padding: 40px 0;
    min-height: 100vh;
}
.lms-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: 1fr 400px;
    gap: 30px;
    align-items: start;
}

/* LEFT: Main Content */
.lms-main {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(46, 28, 16, 0.05);
    border: 1px solid #ebd9c2;
}
.lms-video-container {
    width: 100%;
    aspect-ratio: 16 / 9;
    background: #000;
}
.lms-video-container video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Tabs Area */
.lms-content-area {
    padding: 30px;
}
.lms-header {
    margin-bottom: 25px;
}
.lms-header h1 {
    font-size: 26px;
    font-weight: 700;
    color: #2e1c10;
    margin-bottom: 12px;
}
.lms-meta {
    display: flex;
    gap: 15px;
    color: #5c4b3c;
    font-size: 14px;
}
.lms-meta span {
    display: flex;
    align-items: center;
    gap: 5px;
}
.lms-meta i {
    color: #e48800;
}

/* Section Tabs */
.lms-tabs {
    display: flex;
    gap: 20px;
    border-bottom: 1px solid #ebd9c2;
    margin-bottom: 25px;
}
.lms-tab {
    padding: 12px 0;
    font-size: 16px;
    font-weight: 600;
    color: #795548;
    cursor: pointer;
    border-bottom: 3px solid transparent;
    transition: 0.2s;
}
.lms-tab.active {
    color: #e48800;
    border-color: #e48800;
}
.lms-tab-content {
    display: none;
    animation: fadeIn 0.3s;
}
.lms-tab-content.active {
    display: block;
}

/* Resources & Bonuses styling */
.resource-box, .bonus-box {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 20px;
    border: 1px solid #ebd9c2;
    background: #fdf8ef;
    border-radius: 8px;
    margin-bottom: 15px;
    transition: 0.2s;
}
.resource-box:hover, .bonus-box:hover {
    border-color: #e48800;
    box-shadow: 0 4px 12px rgba(228, 136, 0, 0.1);
    background: #fff;
}
.resource-info, .bonus-info {
    display: flex;
    align-items: center;
    gap: 15px;
}
.resource-icon {
    font-size: 32px;
}
.resource-text h4, .bonus-text h4 {
    margin: 0 0 5px;
    font-size: 16px;
    color: #2e1c10;
}
.resource-text p, .bonus-text p {
    margin: 0;
    font-size: 13px;
    color: #795548;
}
.lms-btn {
    background: #e48800;
    color: #fff;
    padding: 10px 20px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}
.lms-btn:hover {
    background: #cc7a00;
}

/* RIGHT: Sidebar */
.lms-sidebar {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(46, 28, 16, 0.05);
    border: 1px solid #ebd9c2;
    position: sticky;
    top: 20px;
}
.lms-sidebar-header {
    padding: 20px;
    border-bottom: 1px solid #ebd9c2;
    background: #fdf8ef;
    border-radius: 12px 12px 0 0;
}
.lms-sidebar-header h3 {
    margin: 0 0 5px;
    font-size: 18px;
    color: #2e1c10;
}
.lms-sidebar-header p {
    margin: 0;
    font-size: 13px;
    color: #795548;
}

/* Accordion */
.lms-accordion {
    max-height: 700px;
    overflow-y: auto;
}
.lms-accordion-item {
    border-bottom: 1px solid #ebd9c2;
}
.lms-accordion-header {
    padding: 16px 20px;
    background: #fff;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-weight: 600;
    color: #2e1c10;
    font-size: 15px;
    transition: 0.2s;
}
.lms-accordion-header:hover {
    background: #faf4eb;
}
.lms-accordion-body {
    display: none;
    background: #fbf9f6;
}
.lms-lesson {
    padding: 14px 20px;
    display: flex;
    gap: 12px;
    align-items: center;
    text-decoration: none;
    color: #5c4b3c;
    transition: 0.2s;
    font-size: 14px;
    border-bottom: 1px solid #eee;
}
.lms-lesson:last-child {
    border-bottom: none;
}
.lms-lesson:hover {
    background: #fdf8ef;
}
.lms-lesson.active {
    background: rgba(228, 136, 0, 0.08);
    border-left: 4px solid #e48800;
}
.lms-lesson-thumb {
    position: relative;
    width: 64px;
    height: 36px;
    border-radius: 4px;
    overflow: hidden;
    flex-shrink: 0;
    box-shadow: 0 1px 4px rgba(0,0,0,0.1);
}
.lms-lesson-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.lms-lesson-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #fff;
    font-size: 16px;
    text-shadow: 0 1px 3px rgba(0,0,0,0.8);
    display: flex;
    align-items: center;
    justify-content: center;
}
.lms-lesson-icon.pdf-i { color: #ef4444; }
.lms-lesson-icon.img-i { color: #3b82f6; }
.lms-lesson-icon.doc-i { color: #22c55e; }

/* Up Next Banner (YouTube Style) */
.up-next-banner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #fdf8ef;
    border: 1px solid #ebd9c2;
    padding: 12px 20px;
    border-radius: 8px;
    margin-bottom: 25px;
    transition: 0.2s;
}
.up-next-banner:hover {
    box-shadow: 0 4px 12px rgba(228, 136, 0, 0.1);
    background: #fff;
}
.up-next-info {
    display: flex;
    align-items: center;
    gap: 15px;
}
.up-next-thumb {
    width: 90px;
    height: 50px;
    border-radius: 6px;
    object-fit: cover;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}
.up-next-text .label {
    font-size: 11px;
    font-weight: 700;
    color: #e48800;
    letter-spacing: 0.5px;
    margin-bottom: 4px;
    display: block;
}
.up-next-text h4 {
    margin: 0;
    font-size: 15px;
    color: #2e1c10;
    font-weight: 600;
}

/* Mobile Responsive */
@media (max-width: 1024px) {
    .lms-container {
        grid-template-columns: 1fr;
    }
    .lms-sidebar {
        position: static;
    }
}
@media (max-width: 768px) {
    .lms-content-area {
        padding: 20px;
    }
    .lms-tabs {
        overflow-x: auto;
        white-space: nowrap;
        padding-bottom: 5px;
    }
    .resource-box, .bonus-box {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }
    .lms-btn {
        width: 100%;
        justify-content: center;
    }
}
</style>

<section class="lms-wrapper">
    <div class="lms-container">
        
        <!-- LEFT: Video & Content -->
        <div class="lms-main">
            <!-- Video Player -->
            <div class="lms-video-container">
                <video id="courseMainVideo" controls poster="./img/memberbanner2.JPG">
                    <source src="./video/mantra-magic-course.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            
            <div class="lms-content-area">
                <div class="lms-header">
                    <h1>Module 3: Awakening the Manipura Chakra</h1>
                    <div class="lms-meta">
                        <span><i class="ti ti-folder"></i> Module 3 of 7</span>
                        <span><i class="ti ti-clock"></i> 10 min</span>
                        <span><i class="ti ti-user"></i> Shri Sadhgurudev</span>
                    </div>
                </div>

                <!-- Up Next Banner (YouTube Style) -->
                <div class="up-next-banner">
                    <div class="up-next-info">
                        <img src="./img/memberbanner3.JPG" alt="Next Video" class="up-next-thumb">
                        <div class="up-next-text">
                            <span class="label">UP NEXT</span>
                            <h4>Day 4: Anahata Chakra - Heart Center</h4>
                        </div>
                    </div>
                    <a href="#" class="lms-btn"><i class="ti ti-player-skip-forward"></i> Play Next</a>
                </div>

                <!-- Tabs -->
                <div class="lms-tabs">
                    <div class="lms-tab active" onclick="openLmsTab('overview', this)">Overview</div>
                    <div class="lms-tab" onclick="openLmsTab('resources', this)">Resources (PDFs & Photos)</div>
                    <div class="lms-tab" onclick="openLmsTab('bonuses', this)">Bonus Materials</div>
                </div>

                <!-- Tab Contents -->
                <!-- Overview -->
                <div id="overview" class="lms-tab-content active">
                    <p style="color:#5c4b3c; line-height:1.6; margin-bottom:15px;">
                        In this lesson, you will learn three practical techniques to activate and strengthen your Manipura chakra, the center of personal power, confidence and transformation.
                    </p>
                    <p style="color:#5c4b3c; line-height:1.6; margin-bottom:15px;">
                        We begin with a short breath-of-fire practice to build inner heat, move into a guided visualization at the navel, and close with a simple standing posture that anchors the energy in the body.
                    </p>
                    <h3 style="font-size:16px; margin:20px 0 10px; color:#2e1c10;">What you'll need</h3>
                    <ul style="list-style:none; padding:0; color:#5c4b3c;">
                        <li style="margin-bottom:8px;"><i class="ti ti-point" style="color:#e48800;"></i> A quiet space with room to stand</li>
                        <li style="margin-bottom:8px;"><i class="ti ti-point" style="color:#e48800;"></i> 10 minutes, uninterrupted</li>
                        <li style="margin-bottom:8px;"><i class="ti ti-point" style="color:#e48800;"></i> Your practice journal</li>
                    </ul>
                </div>

                <!-- Resources -->
                <div id="resources" class="lms-tab-content">
                    <h3 style="font-size:16px; margin-bottom:15px; color:#2e1c10;">Downloadable Materials</h3>
                    
                    <!-- PDF -->
                    <div class="resource-box">
                        <div class="resource-info">
                            <i class="ti ti-file-type-pdf resource-icon" style="color: #ef4444;"></i>
                            <div class="resource-text">
                                <h4>Chakra Alignment Guide</h4>
                                <p>PDF Document • 2.4 MB</p>
                            </div>
                        </div>
                        <a href="#" class="lms-btn"><i class="ti ti-download"></i> Download PDF</a>
                    </div>
                    
                    <!-- Photo / Image -->
                    <div class="resource-box">
                        <div class="resource-info">
                            <i class="ti ti-photo resource-icon" style="color: #3b82f6;"></i>
                            <div class="resource-text">
                                <h4>Manipura Yantra (High Res)</h4>
                                <p>Photo / Image (PNG) • 1.1 MB</p>
                            </div>
                        </div>
                        <a href="#" class="lms-btn"><i class="ti ti-download"></i> Download Photo</a>
                    </div>

                    <!-- Doc -->
                    <div class="resource-box">
                        <div class="resource-info">
                            <i class="ti ti-file-text resource-icon" style="color: #22c55e;"></i>
                            <div class="resource-text">
                                <h4>Practice Journal Template</h4>
                                <p>Word Doc • 500 KB</p>
                            </div>
                        </div>
                        <a href="#" class="lms-btn"><i class="ti ti-download"></i> Download Doc</a>
                    </div>
                </div>

                <!-- Bonuses -->
                <div id="bonuses" class="lms-tab-content">
                    <h3 style="font-size:16px; margin-bottom:15px; color:#2e1c10;">Unlocked Bonus Courses</h3>
                    
                    <div class="bonus-box">
                        <div class="bonus-info">
                            <img src="./img/memberbanner1.JPG" alt="Bonus" style="width:120px; height:75px; object-fit:cover; border-radius:6px;">
                            <div class="bonus-text">
                                <h4>Morning Surya Sadhana</h4>
                                <p>Bonus Video Course • 15 mins</p>
                            </div>
                        </div>
                        <a href="#" class="lms-btn"><i class="ti ti-player-play"></i> Watch Now</a>
                    </div>

                    <div class="bonus-box">
                        <div class="bonus-info">
                            <img src="./img/prgram.png" alt="Bonus" style="width:120px; height:75px; object-fit:cover; border-radius:6px;">
                            <div class="bonus-text">
                                <h4>Advanced Chanting Audio</h4>
                                <p>Bonus Audio & Lyrics PDF</p>
                            </div>
                        </div>
                        <a href="#" class="lms-btn"><i class="ti ti-folder"></i> Open Material</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- RIGHT: Sidebar / Playlist -->
        <div class="lms-sidebar">
            <div class="lms-sidebar-header">
                <h3>Course Content</h3>
                <p>7 Modules • 15 Lessons</p>
            </div>
            
            <div class="lms-accordion">
                <!-- Module 1 -->
                <div class="lms-accordion-item">
                    <div class="lms-accordion-header" onclick="toggleLmsAccordion(this)">
                        <span>Day 1: Muladhara</span>
                        <i class="ti ti-chevron-down"></i>
                    </div>
                    <div class="lms-accordion-body">
                        <a href="#" class="lms-lesson">
                            <div class="lms-lesson-thumb">
                                <img src="./img/memberbanner2.JPG" alt="Thumb">
                                <div class="lms-lesson-icon"><i class="ti ti-player-play-filled"></i></div>
                            </div>
                            <div style="flex: 1;">
                                <div style="font-weight:600;">Introduction & Grounding</div>
                                <div style="font-size:12px; color:#888; display:flex; gap:8px; align-items:center; margin-top:4px;">
                                    <span>Video • 5:20</span>
                                    <span style="display:flex; align-items:center; gap:3px; background:#fee2e2; color:#ef4444; padding:2px 6px; border-radius:4px; font-weight:700; font-size:10px; letter-spacing:0.5px;">
                                        <i class="ti ti-file-type-pdf" style="font-size:12px; color:#ef4444;"></i> +1 PDF
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Module 2 -->
                <div class="lms-accordion-item">
                    <div class="lms-accordion-header" onclick="toggleLmsAccordion(this)">
                        <span>Day 2: Swadhisthana</span>
                        <i class="ti ti-chevron-down"></i>
                    </div>
                    <div class="lms-accordion-body">
                        <a href="#" class="lms-lesson">
                            <div class="lms-lesson-thumb">
                                <img src="./img/memberbanner1.JPG" alt="Thumb">
                                <div class="lms-lesson-icon"><i class="ti ti-player-play-filled"></i></div>
                            </div>
                            <div style="flex: 1;">
                                <div style="font-weight:600;">Sacral Chakra & Water Visuals</div>
                                <div style="font-size:12px; color:#888; display:flex; gap:8px; align-items:center; margin-top:4px;">
                                    <span>Video • 12:30</span>
                                    <span style="display:flex; align-items:center; gap:3px; background:#eff6ff; color:#3b82f6; padding:2px 6px; border-radius:4px; font-weight:700; font-size:10px; letter-spacing:0.5px;">
                                        <i class="ti ti-photo" style="font-size:12px; color:#3b82f6;"></i> Images
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Module 3 -->
                <div class="lms-accordion-item">
                    <div class="lms-accordion-header" onclick="toggleLmsAccordion(this)">
                        <span>Day 3: Manipura</span>
                        <i class="ti ti-chevron-up"></i>
                    </div>
                    <div class="lms-accordion-body" style="display:block;">
                        <a href="#" class="lms-lesson active">
                            <div class="lms-lesson-thumb">
                                <img src="./img/memberbanner3.JPG" alt="Thumb">
                                <div class="lms-lesson-icon"><i class="ti ti-player-play-filled" style="color:#e48800;"></i></div>
                            </div>
                            <div style="flex: 1;">
                                <div style="font-weight:600;">Awakening the Manipura</div>
                                <div style="font-size:12px; color:#888; display:flex; gap:8px; align-items:center; margin-top:4px;">
                                    <span>Video • 10:00</span>
                                    <span style="display:flex; align-items:center; gap:3px; background:#f0fdf4; color:#22c55e; padding:2px 6px; border-radius:4px; font-weight:700; font-size:10px; letter-spacing:0.5px;">
                                        <i class="ti ti-file-text" style="font-size:12px; color:#22c55e;"></i> +1 Doc
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
function openLmsTab(tabId, el) {
    document.querySelectorAll('.lms-tab-content').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.lms-tab').forEach(t => t.classList.remove('active'));
    document.getElementById(tabId).classList.add('active');
    el.classList.add('active');
}

function toggleLmsAccordion(el) {
    let body = el.nextElementSibling;
    let icon = el.querySelector('i');
    if (body.style.display === 'block') {
        body.style.display = 'none';
        icon.classList.remove('ti-chevron-up');
        icon.classList.add('ti-chevron-down');
    } else {
        body.style.display = 'block';
        icon.classList.remove('ti-chevron-down');
        icon.classList.add('ti-chevron-up');
    }
}
</script>

<?php include 'inc/footer.php'; ?>
