<?php

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

$tables = [
    'users',
    'password_reset_tokens',
    'sessions',
    'pages',
    'seo_metadata',
    'streams',
    'courses',
    'colleges',
    'posts',
    'leads',
    'settings'
];

$sqlDump = "-- AdmissionsDekho Live Database Export\n";
$sqlDump .= "-- Created for cPanel phpMyAdmin Import\n\n";
$sqlDump .= "USE `admissio_db`;\n\n";
$sqlDump .= "SET FOREIGN_KEY_CHECKS=0;\n\n";

// Drop all tables upfront to clean old schemas
foreach ($tables as $table) {
    $sqlDump .= "DROP TABLE IF EXISTS `{$table}`;\n";
}
$sqlDump .= "\n";

foreach ($tables as $table) {
    if (!Schema::hasTable($table)) {
        continue;
    }

    $sqlDump .= "-- Table structure for {$table}\n";

    // Build MySQL CREATE TABLE statements
    if ($table === 'users') {
        $sqlDump .= "CREATE TABLE `users` (
          `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
          `name` varchar(255) NOT NULL,
          `email` varchar(255) NOT NULL,
          `email_verified_at` timestamp NULL DEFAULT NULL,
          `password` varchar(255) NOT NULL,
          `remember_token` varchar(100) DEFAULT NULL,
          `created_at` timestamp NULL DEFAULT NULL,
          `updated_at` timestamp NULL DEFAULT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `users_email_unique` (`email`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;\n\n";
    } elseif ($table === 'password_reset_tokens') {
        $sqlDump .= "CREATE TABLE `password_reset_tokens` (
          `email` varchar(255) NOT NULL,
          `token` varchar(255) NOT NULL,
          `created_at` timestamp NULL DEFAULT NULL,
          PRIMARY KEY (`email`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;\n\n";
    } elseif ($table === 'sessions') {
        $sqlDump .= "CREATE TABLE `sessions` (
          `id` varchar(255) NOT NULL,
          `user_id` bigint(20) UNSIGNED DEFAULT NULL,
          `ip_address` varchar(45) DEFAULT NULL,
          `user_agent` text DEFAULT NULL,
          `payload` longtext NOT NULL,
          `last_activity` int(11) NOT NULL,
          PRIMARY KEY (`id`),
          KEY `sessions_user_id_index` (`user_id`),
          KEY `sessions_last_activity_index` (`last_activity`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;\n\n";
    } elseif ($table === 'pages') {
        $sqlDump .= "CREATE TABLE `pages` (
          `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
          `slug` varchar(255) DEFAULT NULL,
          `title` varchar(255) NOT NULL,
          `template_name` varchar(255) NOT NULL DEFAULT 'default',
          `content` longtext DEFAULT NULL,
          `created_at` timestamp NULL DEFAULT NULL,
          `updated_at` timestamp NULL DEFAULT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `pages_slug_unique` (`slug`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;\n\n";
    } elseif ($table === 'seo_metadata') {
        $sqlDump .= "CREATE TABLE `seo_metadata` (
          `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
          `model_type` varchar(255) NOT NULL,
          `model_id` bigint(20) UNSIGNED NOT NULL,
          `meta_title` varchar(255) DEFAULT NULL,
          `meta_description` text DEFAULT NULL,
          `canonical_url` varchar(255) DEFAULT NULL,
          `og_image` varchar(255) DEFAULT NULL,
          `schema_type` varchar(255) DEFAULT NULL,
          `created_at` timestamp NULL DEFAULT NULL,
          `updated_at` timestamp NULL DEFAULT NULL,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;\n\n";
    } elseif ($table === 'streams') {
        $sqlDump .= "CREATE TABLE `streams` (
          `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
          `name` varchar(255) NOT NULL,
          `slug` varchar(255) NOT NULL,
          `description` text DEFAULT NULL,
          `created_at` timestamp NULL DEFAULT NULL,
          `updated_at` timestamp NULL DEFAULT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `streams_slug_unique` (`slug`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;\n\n";
    } elseif ($table === 'courses') {
        $sqlDump .= "CREATE TABLE `courses` (
          `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
          `stream_id` bigint(20) UNSIGNED DEFAULT NULL,
          `title` varchar(255) NOT NULL,
          `slug` varchar(255) NOT NULL,
          `level` varchar(255) DEFAULT 'UG',
          `duration` varchar(255) DEFAULT NULL,
          `eligibility` text DEFAULT NULL,
          `average_fee` varchar(255) DEFAULT NULL,
          `career_prospects` text DEFAULT NULL,
          `content` longtext DEFAULT NULL,
          `is_published` tinyint(1) NOT NULL DEFAULT 1,
          `created_at` timestamp NULL DEFAULT NULL,
          `updated_at` timestamp NULL DEFAULT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `courses_slug_unique` (`slug`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;\n\n";
    } elseif ($table === 'colleges') {
        $sqlDump .= "CREATE TABLE `colleges` (
          `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
          `name` varchar(255) NOT NULL,
          `slug` varchar(255) NOT NULL,
          `location` varchar(255) DEFAULT NULL,
          `approval_body` varchar(255) DEFAULT 'UGC',
          `rating` decimal(3,1) DEFAULT 4.50,
          `total_courses` int(11) DEFAULT 15,
          `banner_image` varchar(255) DEFAULT NULL,
          `created_at` timestamp NULL DEFAULT NULL,
          `updated_at` timestamp NULL DEFAULT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `colleges_slug_unique` (`slug`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;\n\n";
    } elseif ($table === 'posts') {
        $sqlDump .= "CREATE TABLE `posts` (
          `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
          `title` varchar(255) NOT NULL,
          `slug` varchar(255) NOT NULL,
          `excerpt` text DEFAULT NULL,
          `content` longtext DEFAULT NULL,
          `featured_image` longtext DEFAULT NULL,
          `status` varchar(255) NOT NULL DEFAULT 'draft',
          `published_at` timestamp NULL DEFAULT NULL,
          `created_at` timestamp NULL DEFAULT NULL,
          `updated_at` timestamp NULL DEFAULT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `posts_slug_unique` (`slug`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;\n\n";
    } elseif ($table === 'leads') {
        $sqlDump .= "CREATE TABLE `leads` (
          `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
          `full_name` varchar(255) NOT NULL,
          `phone` varchar(255) NOT NULL,
          `email` varchar(255) DEFAULT NULL,
          `stream_interest` varchar(255) DEFAULT NULL,
          `course_interest` varchar(255) DEFAULT NULL,
          `current_qualification` varchar(255) DEFAULT NULL,
          `state` varchar(255) DEFAULT NULL,
          `status` varchar(255) DEFAULT 'New',
          `notes` text DEFAULT NULL,
          `created_at` timestamp NULL DEFAULT NULL,
          `updated_at` timestamp NULL DEFAULT NULL,
          PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;\n\n";
    } elseif ($table === 'settings') {
        $sqlDump .= "CREATE TABLE `settings` (
          `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
          `key` varchar(255) NOT NULL,
          `value` longtext DEFAULT NULL,
          `created_at` timestamp NULL DEFAULT NULL,
          `updated_at` timestamp NULL DEFAULT NULL,
          PRIMARY KEY (`id`),
          UNIQUE KEY `settings_key_unique` (`key`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;\n\n";
    }

    // Skip dumping session data
    if ($table === 'sessions' || $table === 'password_reset_tokens') {
        continue;
    }

    // Dump Data
    $rows = DB::table($table)->get();
    if ($rows->count() > 0) {
        $sqlDump .= "-- Dumping data for table `{$table}`\n";
        foreach ($rows as $row) {
            $rowArray = (array) $row;
            $cols = array_keys($rowArray);
            $escapedCols = array_map(fn($c) => "`{$c}`", $cols);
            
            $escapedVals = array_map(function($v) {
                if ($v === null) return "NULL";
                $v = str_replace(['\\', "'"], ['\\\\', "\\'"], $v);
                return "'{$v}'";
            }, array_values($rowArray));

            $sqlDump .= "INSERT INTO `{$table}` (" . implode(', ', $escapedCols) . ") VALUES (" . implode(', ', $escapedVals) . ");\n";
        }
        $sqlDump .= "\n";
    }
}

$sqlDump .= "SET FOREIGN_KEY_CHECKS=1;\n";

file_put_contents(__DIR__ . '/admissionsdekho_import.sql', $sqlDump);
echo "SQL export regenerated with upfront DROP TABLE IF EXISTS at: admissionsdekho_import.sql (" . strlen($sqlDump) . " bytes)\n";
