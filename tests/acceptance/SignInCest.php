<?php


class SignInCest
{
    /**
    *This test will only be run in 'staging' environment
    *
    *@env staging
    *@env baai
    *@env dpo
    *@env iasa
    *@env hisi
    *@env itsmf 
    */
    public function loginTrue(AcceptanceTester $I)
    {
        $I->amOnPage('/signin');
        $I->wantTo('Sign In');
        $I->see('Email');
        $I->fillField('username', 'mark.kelly@ics.ie');
        $I->see('Password');
        $I->fillField('password', 'excalibar');
        $I->click('Login');
        $I->seeCurrentUrlEquals('/');
    }

    /**
    *This test will only be run in 'staging' environment
    *
    *@env staging
    *@env baai
    *@env dpo
    *@env iasa
    *@env hisi
    *@env itsmf 
    */
    public function userNameFalse(AcceptanceTester $I)
    {
        $I->amOnPage('/signin');
        $I->wantTo('Sign In');
        $I->see('Email');
        $I->fillField('username', 'mark.kelly@ics.com');
        $I->see('Password');
        $I->fillField('password', 'excalibar');
        $I->click('Login');
        $I->seeCurrentUrlEquals('/signin/invalid/true');
        $I->see('Wrong email or password combination');
    }

    /**
    *This test will only be run in 'staging' environment
    *
    *@env staging
    *@env baai
    *@env dpo
    *@env iasa
    *@env hisi
    *@env itsmf 
    */
    public function passwordFalse(AcceptanceTester $I)
    {
        $I->amOnPage('/signin');
        $I->wantTo('Sign In');
        $I->see('Email');
        $I->fillField('username', 'mark.kelly@ics.com');
        $I->see('Password');
        $I->fillField('password', 'excalibur');
        $I->click('Login');
        $I->seeCurrentUrlEquals('/signin/invalid/true');
        $I->see('Wrong email or password combination');
    }

    /**
    *This test will only be run in 'staging' environment
    *
    *@env staging
    *@env baai
    *@env dpo
    *@env iasa
    *@env hisi
    *@env itsmf 
    */
   public function forgotPassword(AcceptanceTester $I){
       $I->amOnPage('/signin');
       $I->wantTo('Reset password');
       $I->see('Forgot password?');
       $I->click('//*[@id="mod_loginform"]/p[1]/a');
       $I->seeCurrentUrlEquals('/auth/reset');
       $I->fillField('//*[@id="login"]','mark.kelly@ics.ie');
       $I->click('//*[@id="Submit"]');
       $I->wait(3);
       $I->see('Please Check Your Email');
    }

   /**
    *This test will only be run in 'staging' environment
    *
    *@env staging
    *@env baai
    *@env dpo
    *@env iasa
    *@env hisi
    *@env itsmf 
    */
   public function forgotPasswordWrongEmail(AcceptanceTester $I){
        $I->amOnPage('/signin');
        $I->wantTo('Reset password');
        $I->see('Forgot password?');
        $I->click('//*[@id="mod_loginform"]/p[1]/a');
        $I->seeCurrentUrlEquals('/auth/reset');
        $I->fillField('//*[@id="login"]','some.geezer@nomail.com');
        $I->click('//*[@id="Submit"]');
        $I->wait(3);
        $I->see('Please Check Your Email');
    }

    /**
    *This test will only be run in 'staging' environment
    *
    *@env staging
    *@env baai
    *@env dpo
    *@env iasa
    *@env hisi
    *@env itsmf 
    */
    public function forgotPasswordInjection(AcceptanceTester $I){
        $I->amOnPage('/signin');
        $I->wantTo('Reset password');
        $I->see('Forgot password?');
        $I->click('//*[@id="mod_loginform"]/p[1]/a');
        $I->seeCurrentUrlEquals('/auth/reset');
        $I->fillField('//*[@id="login"]','mark.kelly@<script>alert(1)</script>mail.com');
        $I->click('//*[@id="Submit"]');
        $I->wait(3);
        $I->see('Please Check Your Email');
    
    }
}
