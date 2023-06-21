<?php

declare(strict_types=1);

/*
 * This file is part of ex-akt/contao-font-awesome-wrapper-bundle.
 *
 * (c) ex-akt
 *
 * @license LGPL-3.0-or-later
 */

namespace ExAkt\ContaoFontAwesomeWrapperBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use ExAkt\ContaoFontAwesomeWrapperBundle\ContaoFontAwesomeWrapperBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoFontAwesomeWrapperBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
