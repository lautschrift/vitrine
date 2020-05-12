<?php
/**
 * Table tl_content
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['vitrine'] = '
	{type_legend},type,headline;
	{vitrine_legend},vitrine_name, text;
	{vitrinedetails_legend}, vitrine_type, vitrine_material, vitrine_date, vitrine_more, vitrine_url;
	{image_legend},addImage;
	{template_legend:hide},customTpl;
	{protected_legend:hide},protected;
	{expert_legend:hide},guests,cssID;
	{invisible_legend:hide},invisible,start,stop
';


/***
 * Fields
 */
 $GLOBALS['TL_DCA']['tl_content']['fields'][vitrine_name] = array(
 		'label' 	=> array('Titel', 'Titel der Vitrine'),
 		'eval' 		=> array('tl_class' ),
 		'inputType' => 'text',
 		'sql'      	=> "varchar(255) NOT NULL default ''"
 );
 $GLOBALS['TL_DCA']['tl_content']['fields'][vitrine_text] = array(
 		'label' 	=> array('Bildbeschreibung', 'Bildbeschreibung'),
 		'eval' => array('rte' => 'tinyMCE'),
 		'inputType' => 'textarea',
 		'sql'       => "varchar(255) NOT NULL default ''"
 );
 $GLOBALS['TL_DCA']['tl_content']['fields'][vitrine_type] = array(
 		'label' 	=> array('Ansprache', 'Ansprache'),
         'eval' 		=> array('tl_class' => 'w50'),
         'inputType' => 'text',
 		'sql'       => "varchar(255) NOT NULL default ''"
 );
 $GLOBALS['TL_DCA']['tl_content']['fields'][vitrine_material] = array(
		 'label' 	=> array('Material', 'Material'),
				 'eval' 		=> array('tl_class' => 'w50'),
				 'inputType' => 'text',
		 'sql'       => "varchar(255) NOT NULL default ''"
 );
 $GLOBALS['TL_DCA']['tl_content']['fields'][vitrine_more] = array(
		 'label' 	=> array('Sonstiges', 'Sonstiges'),
				 'eval' 		=> array('tl_class' => 'w50'),
				 'inputType' => 'text',
		 'sql'       => "varchar(255) NOT NULL default ''"
 );
 $GLOBALS['TL_DCA']['tl_content']['fields'][vitrine_url] = array(
		 'label' 	=> array('Link', 'Link zum Museum'),
				 'eval' 		=> array('tl_class' => 'w50'),
				 'wizard' 	=> array(array('tl_content', 'pagePicker')),
				 'inputType' => 'text',
		 'sql'       => "varchar(255) NOT NULL default ''"
 );


/*
$GLOBALS['TL_DCA']['tl_content']['fields']['c4g_map_id'] = array
(
		'label'                   => &$GLOBALS['TL_LANG']['tl_content']['c4g_map_id'],
		'exclude'                 => true,
		'inputType'               => 'select',
		'options_callback'        => array('tl_content_c4g_maps', 'get_maps'),
		'eval'                    => array('submitOnChange'=>true),
		'sql'                     => "int(10) unsigned NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['c4g_map_width'] = array
(
		'label'                   => &$GLOBALS['TL_LANG']['tl_content']['c4g_map_width'],
		'exclude'                 => true,
		'inputType'               => 'inputUnit',
		'options'                 => array('px', '%', 'em', 'vh', 'vw', 'vmin', 'vmax', 'pt', 'pc', 'in', 'cm', 'mm'),
		'eval'                    => array(
				'rgxp'=>'digit_auto_inherit',
				'tl_class'=>'w50',
				'includeBlankOption'=>true
		),
		'sql'                     => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['c4g_map_height'] = array
(
		'label'                   => &$GLOBALS['TL_LANG']['tl_content']['c4g_map_height'],
		'exclude'                 => true,
		'inputType'               => 'inputUnit',
		'options'                 => array('px', '%', 'em', 'vh', 'vw', 'vmin', 'vmax', 'pt', 'pc', 'in', 'cm', 'mm'),
		'eval'                    => array(
				'rgxp'=>'digit_auto_inherit',
				'tl_class'=>'w50',
				'includeBlankOption'=>true
		),
		'sql'                     => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['c4g_map_zoom'] = array
(
		'label'                   => &$GLOBALS['TL_LANG']['tl_content']['c4g_map_zoom'],
		'exclude'                 => true,
		'inputType'               => 'text',
		'eval'                    => array('mandatory'=>false, 'rgxp'=>'digit', 'tl_class'=>'clr'),
		'sql'                     => "int(10) unsigned NOT NULL default '0'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['c4g_map_default_mapservice'] = array
(
		'label'                   => &$GLOBALS['TL_LANG']['tl_content']['c4g_map_default_mapservice'],
		'exclude'                 => true,
		'inputType'               => 'select',
		'options_callback'        => array('tl_content_c4g_maps', 'get_baselayers'),
		'sql'                     => "int(10) unsigned NOT NULL default '0'"

);
*/
