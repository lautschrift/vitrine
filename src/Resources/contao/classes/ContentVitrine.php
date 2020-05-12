
<?php
namespace Lautschrift\VitrineBundle\Resources\contao\classes;

class ContentVitrine extends \ContentElement
{
	protected $strTemplate = 'ce_vitrine';


	public function generate()
	    {
	        if (TL_MODE == 'BE') {
	            $template = new \BackendTemplate('be_wildcard');
	            $template->wildcard = '### '.utf8_strtoupper($GLOBALS['TL_LANG']['CTE']['vitrine'][0]).' ###';

	            return $template->parse();
	        }

	        return parent::generate();
	    }


	protected function compile()
	{
		$rs = \Database::getInstance()
		->query('SELECT * FROM tl_content');

		$this->Template->vitrine = $rs->fetchAllAssoc();
		//return;
	}

}
