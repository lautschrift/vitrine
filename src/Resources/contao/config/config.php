<?php

/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['content'], 1, array
(
	'Vitrine' => array
	(
		'tables'	=> array('tl_vitrine'),

	)
));

/**
 * Content elements
 */

$GLOBALS['TL_CTE']['Vitrine'] = array(
		'Vitrine' => 'Lautschrift\\VitrineBundle\\Resources\\contao\\classes\\ContentVitrine'
);


// Frontend modules
// $GLOBALS['FE_MOD']['Vitrine']['Vitrine'] = 'Lautschrift\VitrineBundle\Module\VitrineBundleModule';
