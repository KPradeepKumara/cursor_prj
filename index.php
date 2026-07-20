<?php
/**
 * index.php — Financial Liberty University landing page.
 * Composed from includes/header.php, includes/navigation.php and includes/footer.php.
 */
require_once __DIR__ . '/includes/config.php';

$pageTitle   = $site['name'] . ' — ' . $site['tagline'];
$currentPage = 'home';

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/navigation.php';
?>

<span id="top"></span>

<!-- ============================ HERO ============================ -->
<header class="flu-hero">
    <div class="flu-hero-overlay"></div>
    <div class="container position-relative">
        <div class="row align-items-center min-vh-100 py-5">
            <div class="col-lg-6 text-center text-lg-start flu-hero-copy">
                <div class="flu-crest mb-4 mx-auto mx-lg-0">
                    <span>FLU</span>
                </div>
                <h1 class="flu-hero-title">
                    FINANCIAL<br>
                    <span class="text-gold">LIBERTY</span><br>
                    <span class="flu-hero-sub">UNIVERSITY</span>
                </h1>
                <p class="flu-motto"><?= htmlspecialchars($site['motto']) ?></p>
                <p class="flu-script"><?= htmlspecialchars($site['tagline']) ?></p>

                <div class="d-flex flex-column flex-sm-row align-items-center gap-3 mt-4 justify-content-center justify-content-lg-start">
                    <a href="#enroll" class="btn btn-gold btn-lg flu-journey-btn">
                        <i class="bi bi-mortarboard-fill me-2"></i>
                        <span class="d-block text-start lh-1">
                            <small class="d-block">YOUR JOURNEY TO FINANCIAL FREEDOM</small>
                            <strong>STARTS HERE</strong>
                        </span>
                    </a>
                    <a href="#intro" class="d-flex align-items-center gap-2 text-decoration-none text-light watch-link">
                        <span class="watch-play"><i class="bi bi-play-fill"></i></span>
                        <span class="text-uppercase small fw-semibold">Watch<br>Intro Video</span>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 text-center mt-5 mt-lg-0">
                <div class="flu-founder-frame">
                    <i class="bi bi-person-bounding-box"></i>
                    <p class="flu-founder-name mb-0"><?= htmlspecialchars($site['founder']) ?></p>
                    <p class="flu-founder-role"><?= htmlspecialchars($site['founder_title']) ?></p>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ============================ PROGRAMS ============================ -->
<section id="programs" class="flu-section">
    <div class="container">
        <p class="section-eyebrow text-center">
            <span class="text-gold">•</span> TRANSFORM YOUR FINANCES
            <span class="text-gold">•</span> TRANSFORM YOUR FUTURE
        </p>
        <div class="row g-4 mt-2">
            <?php foreach ($programs as $p): ?>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="flu-program-card h-100 text-center">
                        <div class="flu-program-icon"><i class="bi <?= $p['icon'] ?>"></i></div>
                        <h3 class="flu-program-title"><?= $p['title'] ?></h3>
                        <p class="flu-program-desc"><?= $p['desc'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================ WHY FLU ============================ -->
<section id="courses" class="flu-section pt-0">
    <div class="container">
        <h2 class="section-title text-center">WHY FINANCIAL LIBERTY UNIVERSITY?</h2>
        <div class="row g-4 mt-2 justify-content-center">
            <?php foreach ($features as $f): ?>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="flu-feature text-center">
                        <div class="flu-feature-icon"><i class="bi <?= $f['icon'] ?>"></i></div>
                        <p class="flu-feature-title"><?= $f['title'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================ QUOTE ============================ -->
<section class="flu-quote" id="events">
    <div class="container text-center text-lg-start">
        <blockquote class="mb-2">
            <i class="bi bi-quote flu-quote-mark"></i>
            Wealth is a <span class="text-gold fst-italic">LAW</span> before
            it becomes a <span class="text-gold">BANK ACCOUNT</span>
        </blockquote>
        <cite class="flu-quote-author">&mdash; <?= htmlspecialchars($site['founder']) ?>, <?= htmlspecialchars($site['founder_title']) ?></cite>
    </div>
</section>

<!-- ============================ STATS ============================ -->
<section class="flu-stats">
    <div class="container">
        <div class="row text-center g-4">
            <?php foreach ($stats as $stat): ?>
                <div class="col-6 col-md-3">
                    <div class="flu-stat">
                        <span class="flu-stat-value"><?= $stat['value'] ?></span>
                        <span class="flu-stat-label"><?= $stat['label'] ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================ ABOUT FOUNDER ============================ -->
<section id="about" class="flu-about">
    <span id="enroll"></span>
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-4 text-center">
                <div class="flu-about-photo"><i class="bi bi-person-video3"></i></div>
            </div>
            <div class="col-md-5 text-center text-md-start">
                <p class="section-eyebrow mb-1">ABOUT OUR FOUNDER</p>
                <h3 class="flu-about-name"><?= htmlspecialchars($site['founder']) ?>
                    <small class="text-secondary-gold"><?= htmlspecialchars($site['founder_title']) ?></small>
                </h3>
                <p class="flu-about-text">
                    A global voice on Financial Freedom, Kingdom Wealth and Strategic Empowerment.
                    Author, Educator, Entrepreneur and Mentor to thousands worldwide.
                </p>
                <a href="#" class="btn btn-outline-gold">READ MORE</a>
            </div>
            <div class="col-md-3 text-center" id="login">
                <p class="footer-signature huge">Jerome Fernando</p>
                <span class="text-secondary-gold small"><?= htmlspecialchars($site['founder_title']) ?></span>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
