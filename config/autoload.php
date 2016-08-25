<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Null0815',
	'Emojione',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Null0815\Emoji'               => 'system/modules/emoji/classes/Emoji.php',

	// Plugins
	'Emojione\Ruleset'             => 'system/modules/emoji/plugins/emojione/lib/php/src/Ruleset.php',
	'Emojione\Client'              => 'system/modules/emoji/plugins/emojione/lib/php/src/Client.php',
	'Emojione\RulesetInterface'    => 'system/modules/emoji/plugins/emojione/lib/php/src/RulesetInterface.php',
	'Emojione\Emojione'            => 'system/modules/emoji/plugins/emojione/lib/php/src/Emojione.php',
	'Emojione\ClientInterface'     => 'system/modules/emoji/plugins/emojione/lib/php/src/ClientInterface.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'j_emojionearea' => 'system/modules/emoji/templates',
));
