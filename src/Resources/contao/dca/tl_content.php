<?php
/**
 * Table tl_content
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['vitrine'] = '
	{type_legend},type,headline;
	{vitrine_legend},vitrine_name, text;
	{vitrinedetails_legend}, vitrine_type, vitrine_material, vitrine_date, vitrine_more, vitrine_url;
	{source_legend},singleSRC,size,imagemargin,fullsize,overwriteMeta;
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
 $GLOBALS['TL_DCA']['tl_content']['fields'][vitrine_date] = array(
		'label' 	=> array('Datierung', 'Datierung'),
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
