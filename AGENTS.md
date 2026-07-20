# cursor_prj — Financial Liberty University

Static, server-rendered landing page built with **PHP includes + Bootstrap 5.3** (loaded via CDN).

## Structure
- `index.php` — landing page; composes the includes and holds all page sections.
- `includes/header.php` — `<head>`, CDN assets (Bootstrap, Bootstrap Icons, Google Fonts), opens `<body>`.
- `includes/navigation.php` — sticky top navbar.
- `includes/footer.php` — footer + closes `<body>`/`<html>` and loads Bootstrap JS bundle.
- `includes/config.php` — content data (nav, programs, features, stats, socials). Edit content here.
- `assets/css/style.css` — custom gold/black theme. `assets/js/main.js` — scroll effects.

## Cursor Cloud specific instructions
- Runtime is **PHP CLI only** (`php -S`); there is no `composer.json`, no database, and no build step. The update script installs PHP via apt.
- Run the dev server from the repo root so relative asset paths (`assets/...`) resolve: `php -S 0.0.0.0:8000 -t /workspace`. Then open `http://localhost:8000/`.
- Front-end libraries load from CDN, so rendering the page fully requires outbound network access. Offline, only the custom CSS/JS in `assets/` will apply.
- Lint PHP with `php -l <file>` (no test suite exists).
