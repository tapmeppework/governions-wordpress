<?php

/**
 * Plugin Name: tapmeppe governance⚙️
 * Plugin URI: https://tapmeppe.work/solutions/governance/
 * Description: The tapmeppe extension for the governance⚙️ tools based on WordPress.
 * Version: 0.1.0
 * Requires PHP: 8.4
 * Requires at least: 6.9
 * Tested up to: 6.9
 * Author: Patrick Meppe (patrick.meppe@tapmeppe.work)
 * Author URI: https://tapmeppe.work/team/patrick-meppe/
 * License: GPL-3.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
 * Tags: tapmeppe, composer, cli, console, digital-transformation, governance
 * @see https://www.dreamhost.com/blog/how-to-create-your-first-wordpress-plugin/
 */

declare(strict_types=1);

namespace tapmeppe\composer;

use tapmeppe\composer\blueprint\{Administration};
use tapmeppe\composer\helpers\{Routes, Views, Summons};

require_once __DIR__ . '/vendor/autoload.php';

Administration::abcd();
if (defined('WP_CLI')) Summons::start();
else {
	Routes::start();
	Views::start(__FILE__);
}
