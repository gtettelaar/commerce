<?php
/**
 * @copyright Copyright (c) Global Network Group
 */


/**
 * FunctionalCest
 *
 * @author Global Network Group | Giel Tettelaar <giel@yellowflash.net>
 * @since 3.0
 */
class FunctionalCest
{
    public function _before(\AcceptanceTester $I)
    {
        $user = \craft\elements\User::find()
            ->admin()
            ->one();

        \Craft::$app->getUser()->setIdentity($user);
    }
    public function testStuff(\AcceptanceTester $I)
    {
        \craft\commerce\Plugin::getInstance()->controllerNamespace = 'craft\\commerce\\controllers';
        $I->amOnPage('?p=/admin/commerce/products');
        $I->see('Products');
    }
}
