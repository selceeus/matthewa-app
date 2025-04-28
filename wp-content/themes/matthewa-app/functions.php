<?php

use Timber\Timber;

/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 */

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

// Set up Vite
require_once get_template_directory() . '/lib/lib-vite.php';
new WPVite(isChild: false);

// Get Utility functions
require_once get_template_directory() . '/lib/lib-utilities.php';

// Get ACF and ACF Blocks defaults
require_once get_template_directory() . '/lib/lib-acf.php';

// Setup Admin
require_once get_template_directory() . '/lib/lib-admin.php';

// Configure Timber in a subclass
require_once get_template_directory() . '/lib/lib-timber.php';

Timber::init();

/**
 * Sets the directories (inside your theme) to find .twig files
 */
Timber::$dirname = ['templates', 'views'];

new StarterTimber();
new Admin();

