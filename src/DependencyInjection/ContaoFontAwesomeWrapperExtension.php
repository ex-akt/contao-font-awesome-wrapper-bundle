<?php

declare(strict_types=1);

/*
 * This file is part of ex-akt/contao-font-awesome-wrapper-bundle.
 *
 * (c) ex-akt
 *
 * @license LGPL-3.0-or-later
 */

namespace ExAkt\ContaoFontAwesomeWrapperBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class ContaoFontAwesomeWrapperExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
