<?php


class ecfCest
{
    
    
    public function _before(AcceptanceTester $I)
    {

    }

    public function _after(AcceptanceTester $I)
    {
    }

    /**
    *This test will only be run in 'dev' environment
    *
    *@env dev
    */
    public function ecftouch(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->seeCurrentUrlEquals('/ecf/index/index/id/1/jobid/0/');
		$I->wait(5);
    }
}
