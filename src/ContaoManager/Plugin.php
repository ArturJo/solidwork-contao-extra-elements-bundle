<?php

declare(strict_types=1);

namespace SolidWork\ContaoExtraElementsBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use SolidWork\ContaoExtraElementsBundle\ContaoExtraElementsBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoExtraElementsBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}
