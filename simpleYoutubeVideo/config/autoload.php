<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Videojs4contao
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'slashworks',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'slashworks\SimpleYoutubeVideo' => 'system/modules/simpleYoutubeVideo/elements/SimpleYoutubeVideo.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_simpleYoutubeVideo' => 'system/modules/simpleYoutubeVideo/templates/elements',
));
