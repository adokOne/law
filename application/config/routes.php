<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package  Core
 *
 * Sets the default route to "welcome"
 */
$config['_default'] = 'main';
$config['spheres'] = 'main/spheres';
$config['contacts'] = 'main/contacts';
$config['clients'] = 'main/clients';
$config['news'] = 'main/news';
$config['news/(.*)'] = 'main/show_news/$1';
$config['send'] = 'main/send';
$config['team'] = 'main/team';
$config['about'] = 'main/about';
$config['spheres/(.*)'] = 'main/show_spheres/$1';


