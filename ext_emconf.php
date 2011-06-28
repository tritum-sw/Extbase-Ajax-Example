<?php

########################################################################
# Extension Manager/Repository config file for ext "as_ajaxexample".
#
# Auto generated 28-06-2011 15:46
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Ajax Example',
	'description' => '',
	'category' => 'example',
	'shy' => 0,
	'version' => '0.0.1',
	'dependencies' => 'extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Alexander Schnitzler',
	'author_email' => 'mail@alexanderschnitzler.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.4.0-4.5.99',
			'extbase' => '1.3.0-0.0.0',
			'fluid' => '1.3.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:6:{s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"196b";s:14:"ext_tables.php";s:4:"ba8a";s:40:"Classes/Controller/ExampleController.php";s:4:"48f0";s:34:"Configuration/TypoScript/setup.txt";s:4:"89bb";s:46:"Resources/Private/Templates/Example/Index.html";s:4:"6f32";}',
	'suggests' => array(
	),
);

?>