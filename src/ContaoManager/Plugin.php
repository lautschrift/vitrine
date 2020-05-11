<?php
declare(strict_types = 1);
namespace Lautschrift\VitrineBundle\ContaoManager;


use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Lautschrift\VitrineBundle\VitrineBundle;

class Plugin implements BundlePluginInterface
{
	public function getBundles(ParserInterface $parser)
	{
		return [
				BundleConfig::create(VitrineBundle::class)
				->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle', 'Contao\ManagerBundle\ContaoManagerBundle'])
				->setReplace(['VitrineBundle'])
		]; }
}
