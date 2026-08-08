#!/bin/bash
set -e

echo "🚀 Starting AdmissionsDekho Production Deployment..."

# 1. Pull latest code (if using git)
# git pull origin main

# 2. Install PHP production dependencies
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader

# 3. Install NPM dependencies & Build production assets
echo "⚡ Building frontend assets..."
npm ci || npm install
npm run build

# 4. Run database migrations
echo "🗄️ Running database migrations..."
php artisan migrate --force

# 5. Create storage symlink if not already created
echo "🔗 Creating storage symlink..."
php artisan storage:link || true

# 6. Optimize Laravel performance caches
echo "🧹 Clearing and rebuilding production caches..."
php artisan config:cache
php artisan event:cache
php artisan route:cache
php artisan view:cache

# 7. Restart queue workers (if using queues)
# php artisan queue:restart

echo "✅ AdmissionsDekho deployment completed successfully!"
