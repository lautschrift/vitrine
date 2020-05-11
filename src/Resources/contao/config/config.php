<?php

/**
 * Back end modules
 */


/**
 * Content elements
 */


array_insert($GLOBALS['TL_CTE']['Vitrine'] ,1, array(
		'Vitrine' => 'Lautschrift\\VitrineBundle\\Resources\\contao\\classes\\ContentVitrine'
));


//$GLOBALS['TL_CTE']['Museum']['Museum'] = '\\lautschrift\\museum-bundle\\src\\Resources\\contao\\classes\\ContentMuseum';
$GLOBALS['TL_LANG']['CTE']['Vitrine'] = array('Vitrine','Einbinden einer Museums Vitrine ins Fundfenster');
