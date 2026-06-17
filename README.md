# Betagimano Bik Foundation — Website

WordPress-based website for the Betagi Manobik Foundation, built on the GeneratePress theme with a custom child theme.

---

## Tech Stack

| Layer         | Technology                                |
| ------------- | ----------------------------------------- |
| CMS           | WordPress 7.0                             |
| Language      | PHP 7.4+ (8.3+ recommended)               |
| Database      | MySQL / MariaDB 5.5.5+ (8.0+ recommended) |
| Parent Theme  | GeneratePress 2.x                         |
| Custom Fields | Meta Box                                  |
| Local Dev     | Laragon                                   |

---

## Requirements

- PHP 7.4 or higher (8.3+ recommended)
- MySQL 5.5.5+ or MariaDB (8.0+ recommended)
- Apache with `mod_rewrite` enabled
- [Laragon](https://laragon.org/) for local development

---

## Local Development Setup

### 1. Clone the repository

```bash
git clone <repo-url> betagimanobikfoundation.org
```

Place it inside your Laragon `www/` directory.

### 2. Download WordPress core

This repository excludes WordPress core files (`wp-admin/`, `wp-includes/`, root `*.php` except tracked files). Download WordPress 7.0 and copy its contents into the project root so core files are present.

> Only `wp-content/themes/generatepress-child/` and selected plugin folders are tracked in git.

### 3. Create the database

```sql
CREATE DATABASE betagimanobikfoundation CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 4. Configure wp-config.php

Copy `wp-config-sample.php` to `wp-config.php` (if starting fresh) or update the existing `wp-config.php` with your local credentials:

```php
define( 'DB_NAME',     'betagimanobikfoundation' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
```

The table prefix is `wp8b_`.

### 5. Import a database snapshot

Obtain a database export from another team member and import it:

```bash
mysql -u root betagimanobikfoundation < snapshot.sql
```

### 6. Install plugins

Download and place the following plugins under `wp-content/plugins/` (not tracked in git):

| Plugin               | Purpose                                 |
| -------------------- | --------------------------------------- |
| SpeedyCache / Pro    | Caching, minification                   |
| Backuply / Pro       | Database & file backups                 |
| Loginizer / Security | Brute-force protection                  |
| WP Activity Log      | Security audit log                      |
| GoSMTP / Pro         | Outgoing email (SMTP)                   |
| CookieAdmin / Pro    | GDPR/CCPA cookie consent                |
| SeedProd             | Coming-soon & landing pages             |
| Meta Box             | Custom fields (required by child theme) |

### 7. Access the site

Start Laragon and visit: `http://betagimanobikfoundation.org`
Admin panel: `http://betagimanobikfoundation.org/wp-admin`

---

## Project Structure

```
betagimanobikfoundation.org/
├── wp-content/
│   ├── themes/
│   │   ├── generatepress/           # Parent theme (not tracked)
│   │   └── generatepress-child/     # Custom child theme (tracked)
│   │       ├── functions.php
│   │       ├── style.css
│   │       └── templates/
│   │           ├── blank.php        # Full-width, no header/footer
│   │           └── full-width.php   # Full-width with header/footer
│   ├── plugins/                     # Plugins (mostly not tracked)
│   └── uploads/                     # Media (not tracked)
├── wp-config.php                    # Local config (not tracked)
├── .gitignore
└── README.md
```

---

## Custom Child Theme

Located at `wp-content/themes/generatepress-child/`.

**Custom page templates:**

- **Blank** (`templates/blank.php`) — No header or footer; used for Meta Box-driven full-screen pages.
- **Full Width** (`templates/full-width.php`) — Site header and footer with a full-width content area.

Add custom CSS to `style.css` and PHP customizations to `functions.php`. Avoid modifying the GeneratePress parent theme directly.

---

## Git Tracking Policy

WordPress core, standard plugins, uploads, cache, and logs are excluded via `.gitignore`. Only the following are tracked:

- `wp-content/themes/generatepress-child/` — custom child theme
- `wp-content/plugins/botlab-sections/` — custom plugin (when present)
- `.gitignore`, `README.md`

Do not commit `wp-config.php`, credentials, or generated cache files.

---

## Debug Mode

`WP_DEBUG` is enabled in the current `wp-config.php`. Disable it before deploying to production:

```php
define( 'WP_DEBUG', false );
```

---

## License

WordPress core is licensed under [GPL v2+](https://www.gnu.org/licenses/gpl-2.0.html). Theme and custom code follow the same license unless otherwise noted.
