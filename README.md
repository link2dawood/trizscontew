# Trizscontew Platform

## Overview
The Trizscontew codebase powers a trading and investment dashboard built with PHP, MySQL, and bundled JavaScript. The project supports both customer-facing workflows (account registration, deposits, withdrawals) and administrative tooling (platform configuration, theme management, user oversight). Recent work removed hard dependencies on external authentication or data providers so the application now relies exclusively on the local database and provides resilient fallbacks when third-party APIs are unavailable.

## Key Features
- Local email/password authentication with `password_verify` support for modern password hashes and legacy plaintext records.
- Admin configuration pages that surface platform settings, user information, and account balances directly from MySQL.
- Wallet management, including deposit address generation and transaction history, with graceful handling when crypto price feeds are offline.
- Modular PHP endpoints under `user/bundle/connect` that expose database-backed JSON payloads for the frontend.
- Minified/obfuscated JavaScript bundles inside `user/AppScripts500` that drive dynamic UI updates.

## Directory Structure
- `user/login.php` – Public login page that renders a traditional HTML form posting to the server-side handler.
- `user/bundle/login/login.php` – Primary login controller responsible for validating credentials and starting sessions.
- `user/bundle/auth/` – AJAX authentication endpoints (`login-user.php`, email checkers, and mailing utilities) used by the frontend UX.
- `user/bundle/connect/` – PHP endpoints that query the database for platform, theme, and user information. Each script now includes `../db/config.php` via an absolute path so it loads correctly regardless of the calling context.
- `user/AppScripts500/` – JavaScript bundles powering dashboards. Notable files:
  - `ajax.js` – Centralized fetch helpers (`getCrypto`, `getPlatformData`) with retry/fallback logic.
  - `adminSetup.js` – Admin page controller that consumes both platform data and crypto snapshots and includes defensive checks for optional fields.
  - `wallet/deposit.js` – Wallet deposit flow that tolerates missing crypto metadata.
- `user/db/config.php` – Database connection bootstrap shared across backend scripts.

## Data Flow
1. **Authentication**: `user/login.php` posts credentials to `user/bundle/login/login.php`. Users logging in via AJAX hit `user/bundle/auth/login-user.php`. Both handlers use prepared statements against the `users` table and establish session state on success.
2. **Admin dashboards**: The admin UI calls into the PHP endpoints in `user/bundle/connect/` which return JSON encoded data for platform settings, user accounts, and theme configuration. JavaScript controllers in `user/AppScripts500` update the DOM based on the response.
3. **Crypto market data**: `getCrypto()` attempts to fetch remote market data but now returns a structured fallback object (with zero-values) when the external API fails so downstream code never throws.

## Local Development
1. Install PHP (8.x recommended) and MySQL locally. Import the provided `db/u737097028_testbit.sql` into your MySQL instance.
2. Configure database credentials in `user/db/config.php`.
3. Serve the project through Apache (`httpd.conf`/virtual host) or the bundled XAMPP environment pointing to `C:\xampp\htdocs\trizscontew`.
4. Navigate to `/user/login.php` to access the login flow or `/user/admin/setup` once authenticated as an admin.

## Testing Recommendations
- Validate login with both hashed and legacy plaintext password records to confirm `password_verify` and `hash_equals` fallbacks.
- Disconnect external network access to confirm admin and wallet pages continue to render using local database data and crypto fallbacks.
- Confirm each admin page loads its respective PHP endpoint without PHP warnings (check Apache/PHP error logs).

## Deployment Notes
- Keep `config.php` out of version control by storing environment-specific credentials separately.
- Run `composer install` if backend dependencies are added; at present there is no Composer manifest.
- Minified JavaScript files should be regenerated using the original source or build pipeline if further changes are made to `AppScripts500`.

## Git Workflow
1. Stage changes: `git add .`
2. Review status: `git status`
3. Commit with a descriptive message: `git commit -m "Describe the change"`
4. Push to your Git remote: `git push origin <branch>`

> Note: This environment does not have direct access to push changes to GitHub. After reviewing the README and any other modifications, execute the commands above from your local terminal to publish to your repository.
