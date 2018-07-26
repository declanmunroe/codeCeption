<?php


class RecordCpdPointsCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
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
    public function RecordPoints(AcceptanceTester $I)
    {
        $I->amOnPage('/signin');
        $I->wantTo('Sign In');
        $I->see('Email');
        $I->fillField('username', 'mark.kelly@ics.ie');
        $I->see('Password');
        $I->fillField('password', 'excalibar');
        $I->click('Login');
        $I->seeCurrentUrlEquals('/');
        $I->click('//*[@id="signin-box"]/div/a[4]');
        $I->click('body > div.add-cpd-wrapper > div > div > div.col-xs-12.col-sm-3.col-md-3.col-lg-3.pull-right > button');
        $I->executeJS('$("#type_radio_7").prop("checked", true);');
        $I->wait(2);
        $I->fillField('#date', '12-03-2018');
        $I->fillField('#hours', '2');
        $I->fillField('#description' ,'New ECDL It Security Module');
        $I->fillField('#reflection', 'Training required for all employees');
        $I->click('//*[@id="modal_record_btn"]');
        $I->see('Record new activity');
        $I->click('//*[@id="modal_confirm_buttons"]/button[2]');
        $I->wait(2);
        $I->see('TOTAL');
        $I->click('body > div.cpd-history-wrapper > div > div > b > b > div.col-xs-6.col-sm-3.col-md-2.col-lg-2.col-apps > span > button.btn.btn-danger.delete-activity');
        $I->click('#deleteActivityModal > div > div > div.modal-footer > button.btn.btn-danger');
        $I->see('TOTAL');
        $I->see('0000');
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
    public function RecordRequiredFieldsRadioBtn(AcceptanceTester $I)
    {
        $I->amOnPage('/signin');
        $I->wantTo('Sign In');
        $I->see('Email');
        $I->fillField('username', 'mark.kelly@ics.ie');
        $I->see('Password');
        $I->fillField('password', 'excalibar');
        $I->click('Login');
        $I->seeCurrentUrlEquals('/');
        $I->click('//*[@id="signin-box"]/div/a[4]');
        $I->click('body > div.add-cpd-wrapper > div > div > div.col-xs-12.col-sm-3.col-md-3.col-lg-3.pull-right > button');
        $I->wait(2);
        $I->fillField('#date', '12-03-2018');
        $I->fillField('#hours', '2');
        $I->fillField('#description' ,'New ECDL It Security Module');
        $I->fillField('#reflection', 'Training required for all employees');
        $I->click('//*[@id="modal_record_btn"]');
        $I->see('This field is required');
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

    public function RecordRequiredFieldsDate(AcceptanceTester $I)
    {
        $I->amOnPage('/signin');
        $I->wantTo('Sign In');
        $I->see('Email');
        $I->fillField('username', 'mark.kelly@ics.ie');
        $I->see('Password');
        $I->fillField('password', 'excalibar');
        $I->click('Login');
        $I->seeCurrentUrlEquals('/');
        $I->click('//*[@id="signin-box"]/div/a[4]');
        $I->click('body > div.add-cpd-wrapper > div > div > div.col-xs-12.col-sm-3.col-md-3.col-lg-3.pull-right > button');
        $I->executeJS('$("#type_radio_7").prop("checked", true);');
        $I->wait(2);
        $I->fillField('#date','');
        $I->fillField('#hours', '2');
        $I->fillField('#description' ,'New ECDL It Security Module');
        $I->fillField('#reflection', 'Training required for all employees');
        $I->click('//*[@id="modal_record_btn"]');
        $I->see('This field is required');
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

    public function RecordRequiredFieldsHours(AcceptanceTester $I)
    {
        $I->amOnPage('/signin');
        $I->wantTo('Sign In');
        $I->see('Email');
        $I->fillField('username', 'mark.kelly@ics.ie');
        $I->see('Password');
        $I->fillField('password', 'excalibar');
        $I->click('Login');
        $I->seeCurrentUrlEquals('/');
        $I->click('//*[@id="signin-box"]/div/a[4]');
        $I->click('body > div.add-cpd-wrapper > div > div > div.col-xs-12.col-sm-3.col-md-3.col-lg-3.pull-right > button');
        $I->executeJS('$("#type_radio_7").prop("checked", true);');
        $I->wait(2);
        $I->fillField('#date', '12-03-2018');
        $I->fillField('#hours', '');
        $I->fillField('#description' ,'New ECDL It Security Module');
        $I->fillField('#reflection', 'Training required for all employees');
        $I->click('//*[@id="modal_record_btn"]');
        $I->see('This field is required');
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

   public function RecordRequiredFieldsDescription(AcceptanceTester $I)
    {
        $I->amOnPage('/signin');
        $I->wantTo('Sign In');
        $I->see('Email');
        $I->fillField('username', 'mark.kelly@ics.ie');
        $I->see('Password');
        $I->fillField('password', 'excalibar');
        $I->click('Login');
        $I->seeCurrentUrlEquals('/');
        $I->click('//*[@id="signin-box"]/div/a[4]');
        $I->click('body > div.add-cpd-wrapper > div > div > div.col-xs-12.col-sm-3.col-md-3.col-lg-3.pull-right > button');
        $I->executeJS('$("#type_radio_7").prop("checked", true);');
        $I->wait(2);
        $I->fillField('#date', '12-03-2018');
        $I->fillField('#hours', '2');
        $I->fillField('#reflection', 'Training required for all employees');
        $I->click('//*[@id="modal_record_btn"]');
        $I->see('This field is required');
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

    public function RecordRequiredFieldReflection(AcceptanceTester $I)
    {
        $I->amOnPage('/signin');
        $I->wantTo('Sign In');
        $I->see('Email');
        $I->fillField('username', 'mark.kelly@ics.ie');
        $I->see('Password');
        $I->fillField('password', 'excalibar');
        $I->click('Login');
        $I->seeCurrentUrlEquals('/');
        $I->click('//*[@id="signin-box"]/div/a[4]');
        $I->click('body > div.add-cpd-wrapper > div > div > div.col-xs-12.col-sm-3.col-md-3.col-lg-3.pull-right > button');
        $I->executeJS('$("#type_radio_7").prop("checked", true);');
        $I->wait(2);
        $I->fillField('#date', '12-03-2018');
        $I->fillField('#hours', '2');
        $I->fillField('#description' ,'New ECDL It Security Module');
        $I->click('//*[@id="modal_record_btn"]');
        $I->see('This field is required');
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
    public function RecordWrongInput(AcceptanceTester $I)
    {
        $I->amOnPage('/signin');
        $I->wantTo('Sign In');
        $I->see('Email');
        $I->fillField('username', 'mark.kelly@ics.ie');
        $I->see('Password');
        $I->fillField('password', 'excalibar');
        $I->click('Login');
        $I->seeCurrentUrlEquals('/');
        $I->click('//*[@id="signin-box"]/div/a[4]');
        $I->click('body > div.add-cpd-wrapper > div > div > div.col-xs-12.col-sm-3.col-md-3.col-lg-3.pull-right > button');
        $I->wait(2);
        $I->fillField('#date', 'time,time, time');
        $I->fillField('#hours', 'lots');
        $I->fillField('#description' ,'New ECDL It Security Module');
        $I->see('Please enter a valid number');
        
    }
}