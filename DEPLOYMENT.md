# AdmissionsDekho Deployment Guide

This guide details the steps to deploy **AdmissionsDekho** to production (Shared Hosting / cPanel, VPS, Forge, Cloud).

---

## 1. Pre-Deployment Preparation (Completed)

1. **Production Assets Compiled**: Assets compiled into `public/build/` via `npm run build`.
2. **Storage Link**: Linked via `php artisan storage:link`.
3. **Deployment Script**: Included [`deploy.sh`](file:///c:/xampp/htdocs/admissionsdekho/deploy.sh).

---

## 2. Environment Configuration (`.env`)

Create/update `.env` on your production server with production settings:

```ini
APP_NAME="AdmissionsDekho"
APP_ENV=production
APP_DEBUG=false
APP_KEY=base64:your_generated_app_key_here
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql # or sqlite / pgsql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_production_db
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password

SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailgun.org # or SMTP provider
MAIL_PORT=587
MAIL_USERNAME=your_smtp_user
MAIL_PASSWORD=your_smtp_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="info@yourdomain.com"
MAIL_FROM_NAME="${APP_NAME}"
```

Generate production key:
```bash
php artisan key:generate
```

---

## 3. Production Deployment Commands

Run the following commands on your production server (or execute `./deploy.sh`):

```bash
# 1. Install PHP dependencies without dev packages
composer install --no-dev --optimize-autoloader

# 2. Build production assets (if building on server)
npm ci && npm run build

# 3. Run database migrations
php artisan migrate --force

# 4. Create public storage symlink
php artisan storage:link

# 5. Optimize configuration, routes, and views cache
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## 4. Web Server Setup

### Nginx Configuration
Ensure document root points to `/path/to/admissionsdekho/public`:

```nginx
server {
    listen 80;
    server_name yourdomain.com www.yourdomain.com;
    root /var/www/admissionsdekho/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

### Apache / cPanel Setup
- Ensure DocumentRoot points to the `/public` directory.
- Verify `public/.htaccess` is present.
