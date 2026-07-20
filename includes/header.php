<?php
/**
 * header.php
 * Opens the HTML document, loads Bootstrap 5 (latest), Bootstrap Icons,
 * Google Fonts and the site's custom stylesheet.
 *
 * Expects (optional) variables set before inclusion:
 *   $pageTitle   - <title> text
 *   $currentPage - key of the active nav item (see includes/config.php)
 */

require_once __DIR__ . '/config.php';

$pageTitle   = $pageTitle   ?? $site['name'];
$currentPage = $currentPage ?? 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($site['name']) ?> — <?= htmlspecialchars($site['tagline']) ?>">
    <title><?= htmlspecialchars($pageTitle) ?></title>

    <!-- Bootstrap 5.3 (latest) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts: luxury serif + script signature + clean body -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;900&family=Great+Vibes&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom theme -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="90" tabindex="0">
