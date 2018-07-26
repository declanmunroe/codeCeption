<?php


class CorporatePortalLoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    /**
    *This test will only be run in 'production' environment
    *
    *@env production
    *
    */
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/corporateportal/login');
        $I->see('CareerPlus');
        $I->fillField('//*[@id="username"]', 'john-cp@ics.ie');
        $I->fillField('//*[@id="password"]', 'letmein01');
        $I->click('/html/body/div/div/div/section/form/div[3]/button');
        $I->wait(2);
        //$I->see('Corporate CPD Report');

    }
}
 