<?php
class BasicCest
{
    // test
    public function tryToTest(\AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->wantTo('See that the browser can launch');
        $I->amOnUrl("https://generalchicken.net");
        $I->see("WordPress");
    }
}