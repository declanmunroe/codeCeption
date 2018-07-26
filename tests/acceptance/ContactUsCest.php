<?php


class ContactUsCest
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
    *
    */
    public function requiredFields(AcceptanceTester $I)
    {
        $I->amOnPage('/contact');
        $I->click('//*[@id="register_button"]');
        $I->wait(3);
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
    *
    */
    public function requiredFieldsTwo(AcceptanceTester $I)
    {
        $I->amOnPage('/contact');
        $I->see('First name');
        $I->fillField('//*[@id="newsletterForm"]/div[1]/input', '');
        $I->see('Last name');
        $I->fillField('//*[@id="newsletterForm"]/div[2]/input', '');
        $I->see('Email');
        $I->fillField('//*[@id="newsletterForm"]/div[3]/input[1]', '');
        $I->see('Organisation');
        $I->fillField('//*[@id="newsletterForm"]/div[3]/div[1]/input', '');
        $I->see('Phone');
        $I->fillField('//*[@id="newsletterForm"]/div[3]/div[2]/input', '');
        $I->see('Are you human?');
        $I->fillField('//*[@id="newsletterForm"]/div[3]/div[3]/input', '');
        $I->see('Comments? Questions?');
        $I->fillField('//*[@id="00N800000049G76"]', 'Some very naughty words!');
        $I->click('//*[@id="register_button"]');
        $I->wait(3);
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
    *
    */
    public function contactCorrect(AcceptanceTester $I)
    {
        $I->amOnPage('/contact');
        $I->see('First name');
        $I->fillField('//*[@id="newsletterForm"]/div[1]/input', 'Mark');
        $I->see('Last name');
        $I->fillField('//*[@id="newsletterForm"]/div[2]/input', 'Kelly');
        $I->see('Email');
        $I->fillField('//*[@id="newsletterForm"]/div[3]/input[1]', time().'@test.com');
        $I->see('Organisation');
        $I->fillField('//*[@id="newsletterForm"]/div[3]/div[1]/input', 'The Far Corporation');
        $I->see('Phone');
        $I->fillField('//*[@id="newsletterForm"]/div[3]/div[2]/input', '0876532232');
        $I->see('Are you human?');
        $I->fillField('//*[@id="newsletterForm"]/div[3]/div[3]/input', 'wed');
        $I->see('Comments? Questions?');
        $I->fillField('//*[@id="00N800000049G76"]', 'Some very naughty words!');
        $I->click('//*[@id="register_button"]');
        $I->wait(3);
    }
}
