<?php
// src/ContaoExtraElementsBundle.php
namespace SolidWork\ContaoExtraElementsBundle;

use Composer\InstalledVersions;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class ContaoExtraElementsBundle extends Bundle
{
    public function getVersion(): string
    {
        $pkg = 'solidwork/contao-extra-elements-bundle';
        return \class_exists(InstalledVersions::class) && InstalledVersions::isInstalled($pkg)
            ? (InstalledVersions::getPrettyVersion($pkg) ?? 'dev')
            : 'dev';
    }
}