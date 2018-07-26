<?php


class LoginCest
{
    /**
    *This test will only be run in 'staging' environment
    *
    *@env staging
    * 
    */
    public function seeAllLinks(AcceptanceTester $I)
    {
        $I->amOnPage('/member/join');
        $I->see('Join');
        $I->click('Affiliate');
        $I->seeCurrentUrlEquals('/member/affiliate');
        $I->click('Professionals');
        $I->seeCurrentUrlEquals('/member/professionals');
        $I->click('Students');
        $I->seeCurrentUrlEquals('/member/student');
        $I->click('Chartered (CITP)');
        $I->seeCurrentUrlEquals('/member/chartered');
        $I->click('Fellowship');
        $I->seeCurrentUrlEquals('/member/fellows');
        $I->click('Corporate');
        $I->seeCurrentUrlEquals('/member/corporate');
        $I->amOnPage('/member/join');
        $I->click('Rejoin');
        $I->seeCurrentUrlEquals('/member/rejoin');
        $I->click('Upgrade');
        $I->seeCurrentUrlEquals('/member/upgrade');
        $I->click('//*[@id="ben-graph"]/div[1]/div/div/div/div/div[1]/div/button/a');
        $I->seeCurrentUrlEquals('/signin');
        $I->wantTo('Sign In');
        $I->see('Email');
        $I->fillField('username', 'mark.kelly@ics.ie');
        $I->see('Password');
        $I->fillField('password', 'excalibar');
        $I->click('Login');
        $I->see('My Profile');

    }

    
    /**
    *This test will only be run in 'staging' environment
    *
    *@env staging
    *
    */
   public function joinAllForm(AcceptanceTester $I){
        
        $I->amOnPage('/member/join');
        $I->click('body > div.container > div > div.col-md-12.primary-content.primary-content-ics > div:nth-child(4) > div > a:nth-child(1) > div > div > button');
        $I->seeCurrentUrlEquals('/signup/plan_id/2');
        $I->amOnPage('/member/join');
        $I->click('body > div.container > div > div.col-md-12.primary-content.primary-content-ics > div:nth-child(4) > div > a:nth-child(2) > div > div > button');
        $I->seeCurrentUrlEquals('/signup/plan_id/17');
        $I->amOnPage('/member/join');
        $I->click('body > div.container > div > div.col-md-12.primary-content.primary-content-ics > div:nth-child(4) > div > a:nth-child(3) > div > div > button');
        $I->seeCurrentUrlEquals('/signup/plan_id/9');
        $I->amOnPage('/member/join');
        $I->click('body > div.container > div > div.col-md-12.primary-content.primary-content-ics > div:nth-child(4) > div > a:nth-child(4) > div > div > button');
        $I->seeCurrentUrlEquals('/signup/plan_id/10');
                 
    }

}
