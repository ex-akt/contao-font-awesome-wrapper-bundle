<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace ExAkt\ContaoFontAwesomeWrapperBundle;

use ExAkt\ContaoFontAwesomeWrapperBundle\DependencyInjection\ContaoFontAwesomeWrapperExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ContaoFontAwesomeWrapperBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    public function getContainerExtension(): ContaoFontAwesomeWrapperExtensionExtension
    {
        return new ContaoFontAwesomeWrapperExtension();
    }
}
