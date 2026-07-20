<?php
/**
 * navigation.php
 * Sticky top navigation bar built with Bootstrap 5's navbar component.
 * Relies on $site, $navItems and $currentPage (from config.php / header.php).
 */
require_once __DIR__ . '/config.php';
$currentPage = $currentPage ?? 'home';
?>
<nav id="mainNav" class="navbar navbar-expand-lg navbar-dark flu-navbar fixed-top">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
            <span class="flu-brand-mark">FLU</span>
            <span class="flu-brand-text d-none d-sm-inline">
                Financial Liberty<br><small>UNIVERSITY</small>
            </span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#fluNavMenu" aria-controls="fluNavMenu"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="fluNavMenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                <?php foreach ($navItems as $item): ?>
                    <li class="nav-item">
                        <a class="nav-link<?= $currentPage === $item['key'] ? ' active' : '' ?>"
                           href="<?= htmlspecialchars($item['href']) ?>">
                            <?= htmlspecialchars($item['label']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a class="btn btn-gold btn-enroll" href="#enroll">ENROLL NOW</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
