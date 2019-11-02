<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Forms\Element\Select;

use IntegrationTester;

/**
 * Class HasMessagesCest
 */
class HasMessagesCest
{
    /**
     * Tests Phalcon\Forms\Element\Select :: hasMessages()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function formsElementSelectHasMessages(IntegrationTester $I)
    {
        $I->wantToTest('Forms\Element\Select - hasMessages()');
        $I->skipTest('Need implementation');
    }
}