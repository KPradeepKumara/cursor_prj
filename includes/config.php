<?php
/**
 * Global site configuration & content data for Financial Liberty University.
 * Centralising this data keeps the templates clean and easy to maintain.
 */

$site = [
    'name'        => 'Financial Liberty University',
    'short'       => 'FLU',
    'tagline'     => 'Where Wisdom Creates Wealth and Purpose Creates Legacy',
    'motto'       => 'EDUCATE • EQUIP • EMPOWER • EXCEED',
    'founder'     => 'Prophet Jerome Fernando',
    'founder_title' => 'PhD, DD',
    'email'       => 'info@financiallibertyuniversity.com',
    'website'     => 'www.financiallibertyuniversity.com',
    'year'        => date('Y'),
];

/* Primary navigation links. `active` is matched against $currentPage in navigation.php */
$navItems = [
    ['label' => 'Home',      'href' => 'index.php',     'key' => 'home'],
    ['label' => 'About',     'href' => '#about',        'key' => 'about'],
    ['label' => 'Programs',  'href' => '#programs',     'key' => 'programs'],
    ['label' => 'Courses',   'href' => '#courses',      'key' => 'courses'],
    ['label' => 'Events',    'href' => '#events',       'key' => 'events'],
    ['label' => 'Resources', 'href' => '#resources',    'key' => 'resources'],
    ['label' => 'Login',     'href' => '#login',        'key' => 'login'],
];

/* Program cards ("Transform your finances") */
$programs = [
    ['icon' => 'bi-tree-fill',        'title' => 'Wealth Creation',            'desc' => 'Build, Multiply &amp; Preserve'],
    ['icon' => 'bi-trophy-fill',      'title' => 'Financial Strategy',         'desc' => 'Think, Plan &amp; Win'],
    ['icon' => 'bi-coin',             'title' => 'Investing Mastery',          'desc' => 'Smart Money Works for You'],
    ['icon' => 'bi-shield-lock-fill', 'title' => 'Financial Protection',       'desc' => 'Secure, Insure &amp; Safeguard'],
    ['icon' => 'bi-buildings-fill',   'title' => 'Business &amp; Entrepreneurship', 'desc' => 'Build Empire, Not Just Income'],
    ['icon' => 'bi-globe2',           'title' => 'Kingdom Finance',            'desc' => 'Stewardship. Generosity. Impact.'],
];

/* "Why Financial Liberty University?" features */
$features = [
    ['icon' => 'bi-book-fill',        'title' => 'Biblical Foundation'],
    ['icon' => 'bi-globe-americas',   'title' => 'Practical Application'],
    ['icon' => 'bi-graph-up-arrow',   'title' => 'Proven Strategies'],
    ['icon' => 'bi-people-fill',      'title' => 'World Class Mentorship'],
    ['icon' => 'bi-infinity',         'title' => 'Lifetime Access'],
    ['icon' => 'bi-person-arms-up',   'title' => 'Global Community'],
];

/* Headline statistics */
$stats = [
    ['value' => '100K+', 'label' => 'Students Worldwide'],
    ['value' => '120+',  'label' => 'Courses &amp; Trainings'],
    ['value' => '50+',   'label' => 'Nations Impacted'],
    ['value' => '1',     'label' => 'Vision: Financial Freedom'],
];

/* Social links */
$socials = [
    ['icon' => 'bi-facebook',  'href' => '#', 'label' => 'Facebook'],
    ['icon' => 'bi-instagram', 'href' => '#', 'label' => 'Instagram'],
    ['icon' => 'bi-youtube',   'href' => '#', 'label' => 'YouTube'],
    ['icon' => 'bi-linkedin',  'href' => '#', 'label' => 'LinkedIn'],
    ['icon' => 'bi-twitter-x', 'href' => '#', 'label' => 'X'],
];
