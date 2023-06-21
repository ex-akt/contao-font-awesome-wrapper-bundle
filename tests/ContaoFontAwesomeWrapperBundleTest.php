<?php

declare(strict_types=1);

/*
 * This file is part of ex-akt/contao-font-awesome-wrapper-bundle.
 *
 * (c) ex-akt
 *
 * @license LGPL-3.0-or-later
 */

namespace ExAkt\ContaoFontAwesomeWrapperBundle\Tests;

use ExAkt\ContaoFontAwesomeWrapperBundle\ContaoFontAwesomeWrapperBundle;
use PHPUnit\Framework\TestCase;

class ContaoFontAwesomeWrapperBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoFontAwesomeWrapperBundle();

        $this->assertInstanceOf('ExAkt\ContaoFontAwesomeWrapperBundle\ContaoFontAwesomeWrapperBundle', $bundle);
    }
}
