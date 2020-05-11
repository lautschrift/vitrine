<?php
class ContentVitrine extends ContentElement
{
	protected $strTemplate = 'ce_vitrine';

	protected function compile()
	{
		$rs = Database::getInstance()
		->query('SELECT * FROM tl_content');

		$this->Template->vitrine = $rs->fetchAllAssoc();
	}
}
