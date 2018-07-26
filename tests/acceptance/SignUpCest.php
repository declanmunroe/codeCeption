<?php

class SignUpCest
{
    //Test to see if you click next without filling in fields you get an error message
    /**
    *This test will only be run in 'staging' environment
    *
    *@env staging
    *
    */
    public function AffiliateSignInTrue(AcceptanceTester $I)
    {
        $I->amOnPage('/signup/plan_id/2');
        $I->see('Please enter your individual details:');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('This field is required.');
        
    }
 
    /**
    *This test will only be run in 'staging' environment
    *
    *@env staging
    *
    */
    public function planTwo(AcceptanceTester $I){
        $I->amOnPage('/signup/plan_id/2');
        $I->see('Please enter your individual details:');
        $I->see('First Name');
        $I->fillField('First Name', 'Mark');
        $I->see('Last Name');
        $I->fillField('Last Name', 'Kelly');
        $I->see('Email');
        $I->fillField('Email', time().'@test.com'); //email already in use?
        $I->see('Password');
        $I->fillField('Password', 'Excalibar14');
        $I->see('Confirm');
        $I->fillField('Confirm Password', 'Excalibar14');
        $I->see('Phone Number');
        $I->fillField('Phone Number', '00864050947');
        $I->fillField('//*[@id="employer"]', 'Irish Computer Society');
        $I->see('Job Title');
        $I->fillField('Job Title','Desktop Support');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Your postal address please:');
        $I->see('Countries');
        $I->selectOption('//*[@id="cb_country"]','Ireland');
        $I->see('Address line 1');
        $I->fillField('Address line 1', '83 Rossmore road');
        $I->see('Address line 2');
        $I->fillField('Address line 2', 'Ballyfermot');
        $I->see('Address line 3');
        $I->fillField('Address line 3', 'Dublin 10');
        $I->see('Eircode');
        $I->fillField('//*[@id="cb_primaryeircode"]', 'D10 R529');
        $I->see('County');
        $I->selectOption('//*[@id="cb_county"]', 'Dublin 10');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('College Name');
        $I->fillField('//*[@id="college"]', 'Griffith College');
        $I->see('Course');
        $I->fillField('//*[@id="course"]', 'Diploma');
        $I->see('Course Code');
        $I->fillField('//*[@id="course_code"]', 'HDWD');
        $I->see('Graduation Month');
        $I->selectOption('//*[@id="graduation_month"]','June');
        $I->see('Graduation Year');
        $I->fillField('//*[@id="graduation_year"]', '2018');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Review your membership');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Declaration and Consent');
        $I->click('//*[@id="cb_code_conduct"]');
        $I->click('//*[@id="cb_news_email"]');
        $I->click('//*[@id="cb_news_tel"]');
        $I->click('//*[@id="cb_news_sms"]');
        $I->click('//*[@id="cb_com_email"]');
        $I->click('//*[@id="cb_com_tel"]');
        $I->click('//*[@id="cb_com_sms"]');
        $I->seeLink('Finish');
        $I->click('Finish');
        $I->seeCurrentUrlEquals('/signup/successstudent');
        $I->wait(15);
    }

    /**
    *This test will only be run in 'staging' environment
    *
    *@env staging
    *
    */
      public function planTwoEire(AcceptanceTester $I){
        $I->amOnPage('/signup/plan_id/2');
        $I->see('Please enter your individual details:');
        $I->see('First Name');
        $I->fillField('First Name', 'Mark');
        $I->see('Last Name');
        $I->fillField('Last Name', 'Kelly');
        $I->see('Email');
        $I->fillField('Email', time().'@test.com'); //email already in use?
        $I->see('Password');
        $I->fillField('Password', 'Excalibar14');
        $I->see('Confirm');
        $I->fillField('Confirm Password', 'Excalibar14');
        $I->see('Phone Number');
        $I->fillField('Phone Number', '00864050947');
        $I->fillField('//*[@id="employer"]', 'Irish Computer Society');
        $I->see('Job Title');
        $I->fillField('Job Title','Desktop Support');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Your postal address please:');
        $I->see('Countries');
        $I->selectOption('//*[@id="cb_country"]','Burma');
        $I->see('Address line 1');
        $I->fillField('Address line 1', 'Some Street Burma');
        $I->see('Address line 2');
        $I->fillField('Address line 2', 'Any Road Burma');
        $I->see('Address line 3');
        $I->fillField('Address line 3', 'Any State Burma');
        $I->dontSeeElement('//*[@id="cb_primaryeircode"]');
        $I->dontSeeElement('//*[@id="cb_county"]');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('College Name');
        $I->fillField('//*[@id="college"]', 'Griffith College');
        $I->see('Course');
        $I->fillField('//*[@id="course"]', 'Diploma');
        $I->see('Course Code');
        $I->fillField('//*[@id="course_code"]', 'HDWD');
        $I->see('Graduation Month');
        $I->selectOption('//*[@id="graduation_month"]','June');
        $I->see('Graduation Year');
        $I->fillField('//*[@id="graduation_year"]', '2018');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Review your membership');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Declaration and Consent');
        $I->click('//*[@id="cb_code_conduct"]');
        $I->click('//*[@id="cb_news_email"]');
        $I->click('//*[@id="cb_news_tel"]');
        $I->click('//*[@id="cb_news_sms"]');
        $I->click('//*[@id="cb_com_email"]');
        $I->click('//*[@id="cb_com_tel"]');
        $I->click('//*[@id="cb_com_sms"]');
        $I->seeLink('Finish');
        $I->click('Finish');
        $I->seeCurrentUrlEquals('/signup/successstudent');
        $I->expect('Your application is being processed by the Member Services Team, 
        once your application is approved you will recieve your welcome email');
       }

       /**
    *This test will only be run in 'staging' environment
    *
    *@env staging
    */
    public function planNine(AcceptanceTester $I){
        $I->amOnPage('/signup/plan_id/9');
        $I->see('Please enter your individual details:');
        $I->see('First Name');
        $I->fillField('First Name', 'Mark');
        $I->see('Last Name');
        $I->fillField('Last Name', 'Kelly');
        $I->see('Email');
        $I->fillField('Email', time().'@test.com'); //email already in use?
        $I->see('Password');
        $I->fillField('Password', 'Excalibar14');
        $I->see('Confirm');
        $I->fillField('Confirm Password', 'Excalibar14');
        $I->see('Phone Number');
        $I->fillField('Phone Number', '00864050947');
        $I->fillField('//*[@id="employer"]', 'Irish Computer Society');
        $I->see('Job Title');
        $I->fillField('Job Title','Desktop Support');
        $I->see('Years in IT');
        $I->fillField('//*[@id="cb_yearsinitonapplication"]', '1');
        $I->see('Highest Qualification');
        $I->fillField('//*[@id="cb_highestqual"]', 'Degree');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Your postal address please:');
        $I->see('Countries');
        $I->selectOption('//*[@id="cb_country"]','Ireland');
        $I->see('Address line 1');
        $I->fillField('Address line 1', '83 Rossmore road');
        $I->see('Address line 2');
        $I->fillField('Address line 2', 'Ballyfermot');
        $I->see('Address line 3');
        $I->fillField('Address line 3', 'Dublin 10');
        $I->see('Eircode');
        $I->fillField('//*[@id="cb_primaryeircode"]', 'D10 R529');
        $I->see('County');
        $I->selectOption('//*[@id="cb_county"]', 'Dublin 10');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Full Name');
        $I->fillField('//*[@id="ref_name_1"]', 'Some Body');
        $I->see('Email');
        $I->fillField('//*[@id="ref_email_1"]', time().'@test.com');
        $I->see('Company');
        $I->fillField('//*[@id="ref_company_1"]', 'Any Company');
        $I->see('Job title');
        $I->fillField('//*[@id="ref_job_title_1"]', 'Snowball Melter');
        $I->see('Mobile');
        $I->fillField('//*[@id="ref_mobile_1"]', '089765433');
        $I->see('Full Name');
        $I->fillField('//*[@id="ref_name_2"]', 'Any Body');
        $I->see('Email');
        $I->fillField('//*[@id="ref_email_2"]', time().'@test.com');
        $I->see('Company');
        $I->fillField('//*[@id="ref_company_2"]', 'Another Company');
        $I->see('Job title');
        $I->fillField('//*[@id="ref_job_title_2"]', 'Fireball Dowser');
        $I->see('Mobile');
        $I->fillField('//*[@id="ref_mobile_2"]', '099343343');
        $I->click('Next');
        $I->see('Select your payment method please:');
        $I->click('#payment_method-1');
        $I->click('//*[@id="the-wizard"]/div[3]/ul/li[2]/a');
        $I->see('Declaration and Consent');
        $I->click('//*[@id="cb_code_conduct"]');
        $I->click('//*[@id="cb_news_email"]');
        $I->click('//*[@id="cb_news_tel"]');
        $I->click('//*[@id="cb_news_sms"]');
        $I->click('//*[@id="cb_com_email"]');
        $I->click('//*[@id="cb_com_tel"]');
        $I->click('//*[@id="cb_com_sms"]');
        $I->seeLink('Finish');
        $I->click('//*[@id="the-wizard"]/div[3]/ul/li[3]/a');
        $I->seeCurrentUrlEquals('/signup/success');
        $I->wait(3);
        
    }
       
    /**
    *This test will only be run in 'staging' environment
    *
    *@env baai
    */
    public function planThirteen(AcceptanceTester $I){
        $I->amOnPage('/signup/plan_id/13');
        $I->see('Please enter your individual details:');
        $I->see('First Name');
        $I->fillField('First Name', 'Mark');
        $I->see('Last Name');
        $I->fillField('Last Name', 'Kelly');
        $I->see('Email');
        $I->fillField('Email', time().'@test.com'); //email already in use?
        $I->see('Password');
        $I->fillField('Password', 'Excalibar14');
        $I->see('Confirm');
        $I->fillField('Confirm Password', 'Excalibar14');
        $I->see('Phone Number');
        $I->fillField('Phone Number', '00864050947');
        $I->fillField('//*[@id="employer"]', 'Irish Computer Society');
        $I->see('Job Title');
        $I->fillField('Job Title','Desktop Support');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Your postal address please:');
        $I->see('Countries');
        $I->selectOption('//*[@id="cb_country"]','Ireland');
        $I->see('Address line 1');
        $I->fillField('Address line 1', '83 Rossmore road');
        $I->see('Address line 2');
        $I->fillField('Address line 2', 'Ballyfermot');
        $I->see('Address line 3');
        $I->fillField('Address line 3', 'Dublin 10');
        $I->see('Eircode');
        $I->fillField('//*[@id="cb_primaryeircode"]', 'D10 R529');
        $I->see('County');
        $I->selectOption('//*[@id="cb_county"]', 'Dublin 10');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Select your payment method please:');
        $I->click('#payment_method-1');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Declaration and Consent');
        $I->click('//*[@id="cb_code_conduct"]');
        $I->click('//*[@id="cb_news_email"]');
        $I->click('//*[@id="cb_news_tel"]');
        $I->click('//*[@id="cb_news_sms"]');
        $I->click('//*[@id="example-basic-p-2"]/div[8]/label');
        $I->click('//*[@id="cb_com__tel"]');
        $I->click('//*[@id="cb_com_sms"]');
        $I->seeLink('Finish');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Cost');
        $I->wait(3);
        
    }

    /**
    *This test will only be run in 'staging' environment
    *
    *@env baai
    */
    public function planThirteenPayPal(AcceptanceTester $I){
        $I->amOnPage('/signup/plan_id/13');
        $I->see('Please enter your individual details:');
        $I->see('First Name');
        $I->fillField('First Name', 'Mark');
        $I->see('Last Name');
        $I->fillField('Last Name', 'Kelly');
        $I->see('Email');
        $I->fillField('Email', time().'@test.com'); //email already in use?
        $I->see('Password');
        $I->fillField('Password', 'Excalibar14');
        $I->see('Confirm');
        $I->fillField('Confirm Password', 'Excalibar14');
        $I->see('Phone Number');
        $I->fillField('Phone Number', '00864050947');
        $I->fillField('//*[@id="employer"]', 'Irish Computer Society');
        $I->see('Job Title');
        $I->fillField('Job Title','Desktop Support');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Your postal address please:');
        $I->see('Countries');
        $I->selectOption('//*[@id="cb_country"]','Ireland');
        $I->see('Address line 1');
        $I->fillField('Address line 1', '83 Rossmore road');
        $I->see('Address line 2');
        $I->fillField('Address line 2', 'Ballyfermot');
        $I->see('Address line 3');
        $I->fillField('Address line 3', 'Dublin 10');
        $I->see('Eircode');
        $I->fillField('//*[@id="cb_primaryeircode"]', 'D10 R529');
        $I->see('County');
        $I->selectOption('//*[@id="cb_county"]', 'Dublin 10');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Select your payment method please:');
        $I->click('#payment_method-0');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Declaration and Consent');
        $I->click('//*[@id="cb_code_conduct"]');
        $I->click('//*[@id="cb_news_email"]');
        $I->click('//*[@id="cb_news_tel"]');
        $I->click('//*[@id="cb_news_sms"]');
        $I->click('//*[@id="example-basic-p-2"]/div[8]/label');
        $I->click('//*[@id="cb_com__tel"]');
        $I->click('//*[@id="cb_com_sms"]');
        $I->seeLink('Finish');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Cost');
        $I->wait(1);
        //$I->see('Log in to PayPal');
        $I->wait(2);
        
    }
        /**
    *This test will only be run in 'staging' environment
    *
    *@env baai
    */
    public function planFourteen(AcceptanceTester $I){
        $I->amOnPage('/signup/plan_id/14');
        $I->see('Please enter your individual details:');
        $I->see('First Name');
        $I->fillField('First Name', 'Mark');
        $I->see('Last Name');
        $I->fillField('Last Name', 'Kelly');
        $I->see('Email');
        $I->fillField('Email', time().'@test.com'); //email already in use?
        $I->see('Password');
        $I->fillField('Password', 'Excalibar14');
        $I->see('Confirm');
        $I->fillField('Confirm Password', 'Excalibar14');
        $I->see('Phone Number');
        $I->fillField('Phone Number', '00864050947');
        $I->fillField('//*[@id="employer"]', 'Irish Computer Society');
        $I->see('Job Title');
        $I->fillField('Job Title','Desktop Support');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Your postal address please:');
        $I->see('Countries');
        $I->selectOption('//*[@id="cb_country"]','Ireland');
        $I->see('Address line 1');
        $I->fillField('Address line 1', '83 Rossmore road');
        $I->see('Address line 2');
        $I->fillField('Address line 2', 'Ballyfermot');
        $I->see('Address line 3');
        $I->fillField('Address line 3', 'Dublin 10');
        $I->see('Eircode');
        $I->fillField('//*[@id="cb_primaryeircode"]', 'D10 R529');
        $I->see('County');
        $I->selectOption('//*[@id="cb_county"]', 'Dublin 10');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Select your payment method please:');
        $I->click('#payment_method-1');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Declaration and Consent');
        $I->click('//*[@id="cb_code_conduct"]');
        $I->click('//*[@id="cb_news_email"]');
        $I->click('//*[@id="cb_news_tel"]');
        $I->click('//*[@id="cb_news_sms"]');
        $I->click('//*[@id="example-basic-p-2"]/div[8]/label');
        $I->click('//*[@id="cb_com__tel"]');
        $I->click('//*[@id="cb_com_sms"]');
        $I->seeLink('Finish');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Cost');
        $I->wait(3);
        
    }
    /**
    *This test will only be run in 'staging' environment
    *
    *@env dpo
    */
    public function planForty(AcceptanceTester $I){
        $I->amOnPage('/signup/plan_id/40');
        $I->see('Please enter your individual details:');
        $I->see('First Name');
        $I->fillField('First Name', 'Mark');
        $I->see('Last Name');
        $I->fillField('Last Name', 'Kelly');
        $I->see('Email');
        $I->fillField('Email', time().'@test.com'); //email already in use?
        $I->see('Password');
        $I->fillField('Password', 'Excalibar14');
        $I->see('Confirm');
        $I->fillField('Confirm Password', 'Excalibar14');
        $I->see('Phone Number');
        $I->fillField('Phone Number', '00864050947');
        $I->fillField('//*[@id="employer"]', 'Irish Computer Society');
        $I->see('Job Title');
        $I->fillField('Job Title','Desktop Support');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Your postal address please:');
        $I->see('Countries');
        $I->selectOption('//*[@id="cb_country"]','Ireland');
        $I->see('Address line 1');
        $I->fillField('Address line 1', '83 Rossmore road');
        $I->see('Address line 2');
        $I->fillField('Address line 2', 'Ballyfermot');
        $I->see('Address line 3');
        $I->fillField('Address line 3', 'Dublin 10');
        $I->see('Eircode');
        $I->fillField('//*[@id="cb_primaryeircode"]', 'D10 R529');
        $I->see('County');
        $I->selectOption('//*[@id="cb_county"]', 'Dublin 10');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Select your payment method please:');
        $I->click('#payment_method-1');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Declaration and Consent');
        $I->click('//*[@id="cb_code_conduct"]');
        $I->click('//*[@id="cb_news_email"]');
        $I->click('//*[@id="cb_news_tel"]');
        $I->click('//*[@id="cb_news_sms"]');
        $I->click('//*[@id="example-basic-p-2"]/div[8]/label');
        $I->click('//*[@id="cb_com__tel"]');
        $I->click('//*[@id="cb_com_sms"]');
        $I->seeLink('Finish');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Cost');
        $I->wait(3);
        
    }

    /**
    *This test will only be run in 'staging' environment
    *
    *@env dpo
    */
    public function planEleven(AcceptanceTester $I){
        $I->amOnPage('/signup/plan_id/11');
        $I->see('Please enter your individual details:');
        $I->see('First Name');
        $I->fillField('First Name', 'Mark');
        $I->see('Last Name');
        $I->fillField('Last Name', 'Kelly');
        $I->see('Email');
        $I->fillField('Email', time().'@test.com'); //email already in use?
        $I->see('Password');
        $I->fillField('Password', 'Excalibar14');
        $I->see('Confirm');
        $I->fillField('Confirm Password', 'Excalibar14');
        $I->see('Phone Number');
        $I->fillField('Phone Number', '00864050947');
        $I->fillField('//*[@id="employer"]', 'Irish Computer Society');
        $I->see('Job Title');
        $I->fillField('Job Title','Desktop Support');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Your postal address please:');
        $I->see('Countries');
        $I->selectOption('//*[@id="cb_country"]','Ireland');
        $I->see('Address line 1');
        $I->fillField('Address line 1', '83 Rossmore road');
        $I->see('Address line 2');
        $I->fillField('Address line 2', 'Ballyfermot');
        $I->see('Address line 3');
        $I->fillField('Address line 3', 'Dublin 10');
        $I->see('Eircode');
        $I->fillField('//*[@id="cb_primaryeircode"]', 'D10 R529');
        $I->see('County');
        $I->selectOption('//*[@id="cb_county"]', 'Dublin 10');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Select your payment method please:');
        $I->click('#payment_method-1');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Declaration and Consent');
        $I->click('//*[@id="cb_code_conduct"]');
        $I->click('//*[@id="cb_news_email"]');
        $I->click('//*[@id="cb_news_tel"]');
        $I->click('//*[@id="cb_news_sms"]');
        $I->click('//*[@id="example-basic-p-2"]/div[8]/label');
        $I->click('//*[@id="cb_com__tel"]');
        $I->click('//*[@id="cb_com_sms"]');
        $I->seeLink('Finish');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Cost');
        $I->wait(3);
        
    }

    /**
    *This test will only be run in 'staging' environment
    *
    *@env dpo
    */
    public function planFour(AcceptanceTester $I){
        $I->amOnPage('/signup/plan_id/4');
        $I->see('Please enter your individual details:');
        $I->see('First Name');
        $I->fillField('First Name', 'Mark');
        $I->see('Last Name');
        $I->fillField('Last Name', 'Kelly');
        $I->see('Email');
        $I->fillField('Email', time().'@test.com'); //email already in use?
        $I->see('Password');
        $I->fillField('Password', 'Excalibar14');
        $I->see('Confirm');
        $I->fillField('Confirm Password', 'Excalibar14');
        $I->see('Phone Number');
        $I->fillField('Phone Number', '00864050947');
        $I->fillField('//*[@id="employer"]', 'Irish Computer Society');
        $I->see('Job Title');
        $I->fillField('Job Title','Desktop Support');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Your postal address please:');
        $I->see('Countries');
        $I->selectOption('//*[@id="cb_country"]','Ireland');
        $I->see('Address line 1');
        $I->fillField('Address line 1', '83 Rossmore road');
        $I->see('Address line 2');
        $I->fillField('Address line 2', 'Ballyfermot');
        $I->see('Address line 3');
        $I->fillField('Address line 3', 'Dublin 10');
        $I->see('Eircode');
        $I->fillField('//*[@id="cb_primaryeircode"]', 'D10 R529');
        $I->see('County');
        $I->selectOption('//*[@id="cb_county"]', 'Dublin 10');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Select your payment method please:');
        $I->click('#payment_method-1');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Declaration and Consent');
        $I->click('//*[@id="cb_code_conduct"]');
        $I->click('//*[@id="cb_news_email"]');
        $I->click('//*[@id="cb_news_tel"]');
        $I->click('//*[@id="cb_news_sms"]');
        $I->click('//*[@id="example-basic-p-2"]/div[8]/label');
        $I->click('//*[@id="cb_com__tel"]');
        $I->click('//*[@id="cb_com_sms"]');
        $I->seeLink('Finish');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Cost');
        $I->wait(3);
        
    }

    /**
    *This test will only be run in 'staging' environment
    *
    *@env hisi
    *@env iasa
    */
    public function planBlankId(AcceptanceTester $I){
        $I->amOnPage('/signup');
        $I->see('Please enter your individual details:');
        $I->see('First Name');
        $I->fillField('First Name', 'Mark');
        $I->see('Last Name');
        $I->fillField('Last Name', 'Kelly');
        $I->see('Email');
        $I->fillField('Email', time().'@test.com'); //email already in use?
        $I->see('Password');
        $I->fillField('Password', 'Excalibar14');
        $I->see('Confirm');
        $I->fillField('Confirm Password', 'Excalibar14');
        $I->see('Phone Number');
        $I->fillField('Phone Number', '00864050947');
        $I->fillField('//*[@id="employer"]', 'Irish Computer Society');
        $I->see('Job Title');
        $I->fillField('Job Title','Desktop Support');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Your postal address please:');
        $I->see('Countries');
        $I->selectOption('//*[@id="cb_country"]','Ireland');
        $I->see('Address line 1');
        $I->fillField('Address line 1', '83 Rossmore road');
        $I->see('Address line 2');
        $I->fillField('Address line 2', 'Ballyfermot');
        $I->see('Address line 3');
        $I->fillField('Address line 3', 'Dublin 10');
        $I->see('Eircode');
        $I->fillField('//*[@id="cb_primaryeircode"]', 'D10 R529');
        $I->see('County');
        $I->selectOption('//*[@id="cb_county"]', 'Dublin 10');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Select your payment method please:');
        $I->click('#payment_method-1');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Declaration and Consent');
        $I->click('//*[@id="cb_code_conduct"]');
        $I->click('//*[@id="cb_news_email"]');
        $I->click('//*[@id="cb_news_tel"]');
        $I->click('//*[@id="cb_news_sms"]');
        $I->click('//*[@id="example-basic-p-2"]/div[8]/label');
        $I->click('//*[@id="cb_com__tel"]');
        $I->click('//*[@id="cb_com_sms"]');
        $I->seeLink('Finish');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Cost');
        $I->wait(3);
        
    }
    
    /**
    *This test will only be run in 'staging' environment
    *
    *
    *@env hisi
    */
    public function planTwentyThree(AcceptanceTester $I){
        $I->amOnPage('/signup/plan_id/23');
        $I->see('Please enter your individual details:');
        $I->see('First Name');
        $I->fillField('First Name', 'Mark');
        $I->see('Last Name');
        $I->fillField('Last Name', 'Kelly');
        $I->see('Email');
        $I->fillField('Email', time().'@test.com'); //email already in use?
        $I->see('Password');
        $I->fillField('Password', 'Excalibar14');
        $I->see('Confirm');
        $I->fillField('Confirm Password', 'Excalibar14');
        $I->see('Phone Number');
        $I->fillField('Phone Number', '00864050947');
        $I->fillField('//*[@id="employer"]', 'Irish Computer Society');
        $I->see('Job Title');
        $I->fillField('Job Title','Desktop Support');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Your postal address please:');
        $I->see('Countries');
        $I->selectOption('//*[@id="cb_country"]','Burma');
        $I->see('Address line 1');
        $I->fillField('Address line 1', 'Some Street Burma');
        $I->see('Address line 2');
        $I->fillField('Address line 2', 'Any Road Burma');
        $I->see('Address line 3');
        $I->fillField('Address line 3', 'Any State Burma');
        $I->dontSeeElement('//*[@id="cb_primaryeircode"]');
        $I->dontSeeElement('//*[@id="cb_county"]');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('College Name');
        $I->fillField('//*[@id="college"]', 'Griffith College');
        $I->see('Course');
        $I->fillField('//*[@id="course"]', 'Diploma');
        $I->see('Course Code');
        $I->fillField('//*[@id="course_code"]', 'HDWD');
        $I->see('Graduation Month');
        $I->selectOption('//*[@id="graduation_month"]','June');
        $I->see('Graduation Year');
        $I->fillField('//*[@id="graduation_year"]', '2018');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Declaration and Consent');
        $I->click('//*[@id="cb_code_conduct"]');
        $I->click('//*[@id="cb_news_email"]');
        $I->click('//*[@id="cb_news_tel"]');
        $I->click('//*[@id="cb_news_sms"]');
        $I->click('//*[@id="cb_com_email"]');
        $I->click('//*[@id="cb_com__tel"]');
        $I->click('//*[@id="example-basic-p-3"]/div[9]/label');
        $I->seeLink('Submit');
        $I->click('Submit');
        $I->see('Student membership');
        $I->wait(2);
        
        
       }
    /**
    *This test will only be run in 'staging' environment
    *
    *@env itsmf
    */
    public function planTwentyFour(AcceptanceTester $I){
        $I->amOnPage('/signup/plan_id/4');
        $I->see('Please enter your individual details:');
        $I->see('First Name');
        $I->fillField('First Name', 'Mark');
        $I->see('Last Name');
        $I->fillField('Last Name', 'Kelly');
        $I->see('Email');
        $I->fillField('Email', time().'@test.com'); //email already in use?
        $I->see('Password');
        $I->fillField('Password', 'Excalibar14');
        $I->see('Confirm');
        $I->fillField('Confirm Password', 'Excalibar14');
        $I->see('Phone Number');
        $I->fillField('Phone Number', '00864050947');
        $I->fillField('//*[@id="employer"]', 'Irish Computer Society');
        $I->see('Job Title');
        $I->fillField('Job Title','Desktop Support');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Your postal address please:');
        $I->see('Countries');
        $I->selectOption('//*[@id="cb_country"]','Ireland');
        $I->see('Address line 1');
        $I->fillField('Address line 1', '83 Rossmore road');
        $I->see('Address line 2');
        $I->fillField('Address line 2', 'Ballyfermot');
        $I->see('Address line 3');
        $I->fillField('Address line 3', 'Dublin 10');
        $I->see('Eircode');
        $I->fillField('//*[@id="cb_primaryeircode"]', 'D10 R529');
        $I->see('County');
        $I->selectOption('//*[@id="cb_county"]', 'Dublin 10');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Select your payment method please:');
        $I->click('#payment_method-1');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Declaration and Consent');
        $I->click('//*[@id="cb_code_conduct"]');
        $I->click('//*[@id="cb_news_email"]');
        $I->click('//*[@id="cb_news_tel"]');
        $I->click('//*[@id="cb_news_sms"]');
        $I->click('//*[@id="example-basic-p-2"]/div[8]/label');
        $I->click('//*[@id="cb_com__tel"]');
        $I->click('//*[@id="cb_com_sms"]');
        $I->seeLink('Finish');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Cost');
        $I->wait(3);
        
    }

    /**
    *This test will only be run in 'staging' environment
    *
    *@env itsmf
    */
    public function planTwentyFive(AcceptanceTester $I){
        $I->amOnPage('/signup/plan_id/5');
        $I->see('Please enter your individual details:');
        $I->see('First Name');
        $I->fillField('First Name', 'Mark');
        $I->see('Last Name');
        $I->fillField('Last Name', 'Kelly');
        $I->see('Email');
        $I->fillField('Email', time().'@test.com'); //email already in use?
        $I->see('Password');
        $I->fillField('Password', 'Excalibar14');
        $I->see('Confirm');
        $I->fillField('Confirm Password', 'Excalibar14');
        $I->see('Phone Number');
        $I->fillField('Phone Number', '00864050947');
        $I->fillField('//*[@id="employer"]', 'Irish Computer Society');
        $I->see('Job Title');
        $I->fillField('Job Title','Desktop Support');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Your postal address please:');
        $I->see('Countries');
        $I->selectOption('//*[@id="cb_country"]','Ireland');
        $I->see('Address line 1');
        $I->fillField('Address line 1', '83 Rossmore road');
        $I->see('Address line 2');
        $I->fillField('Address line 2', 'Ballyfermot');
        $I->see('Address line 3');
        $I->fillField('Address line 3', 'Dublin 10');
        $I->see('Eircode');
        $I->fillField('//*[@id="cb_primaryeircode"]', 'D10 R529');
        $I->see('County');
        $I->selectOption('//*[@id="cb_county"]', 'Dublin 10');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Select your payment method please:');
        $I->click('#payment_method-1');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Declaration and Consent');
        $I->click('//*[@id="cb_code_conduct"]');
        $I->click('//*[@id="cb_news_email"]');
        $I->click('//*[@id="cb_news_tel"]');
        $I->click('//*[@id="cb_news_sms"]');
        $I->click('//*[@id="example-basic-p-2"]/div[8]/label');
        $I->click('//*[@id="cb_com__tel"]');
        $I->click('//*[@id="cb_com_sms"]');
        $I->seeLink('Finish');
        $I->click('//*[@id="example-basic"]/div[3]/ul/li[3]/a');
        $I->see('Cost');
        $I->wait(3);
        
    }

    /**
    *This test will only be run in 'staging' environment
    *
    *@env staging
    */
    public function planSeventeen(AcceptanceTester $I){
        $I->amOnPage('/signup/plan_id/17');
        $I->see('Please enter your individual details:');
        $I->see('First Name');
        $I->fillField('First Name', 'Mark');
        $I->see('Last Name');
        $I->fillField('Last Name', 'Kelly');
        $I->see('Email');
        $I->fillField('Email', time().'@test.com'); 
        $I->see('Password');
        $I->fillField('Password', 'Excalibar14');
        $I->see('Confirm');
        $I->fillField('Confirm Password', 'Excalibar14');
        $I->see('Phone Number');
        $I->fillField('Phone Number', '00864050947');
        $I->fillField('//*[@id="employer"]', 'Irish Computer Society');
        $I->see('Job Title');
        $I->fillField('Job Title','Desktop Support');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Your postal address please:');
        $I->see('Countries');
        $I->selectOption('//*[@id="cb_country"]','Ireland');
        $I->see('Address line 1');
        $I->fillField('Address line 1', '83 Rossmore road');
        $I->see('Address line 2');
        $I->fillField('Address line 2', 'Ballyfermot');
        $I->see('Address line 3');
        $I->fillField('Address line 3', 'Dublin 10');
        $I->see('Eircode');
        $I->fillField('//*[@id="cb_primaryeircode"]', 'D10 R529');
        $I->see('County');
        $I->selectOption('//*[@id="cb_county"]', 'Dublin 10');
        $I->seeLink('Next');
        $I->click('Next');
        $I->see('Select your payment method please:');
        $I->click('#payment_method-1');
        $I->click('//*[@id="the-wizard"]/div[3]/ul/li[2]/a');
        $I->see('Declaration and Consent');
        $I->click('//*[@id="cb_code_conduct"]');
        $I->click('//*[@id="cb_news_email"]');
        $I->click('//*[@id="cb_news_tel"]');
        $I->click('//*[@id="cb_news_sms"]');
        $I->click('//*[@id="cb_com_email"]');
        $I->click('//*[@id="cb_com_tel"]');
        $I->click('//*[@id="cb_com_sms"]');
        $I->seeLink('Finish');
        $I->click('//*[@id="the-wizard"]/div[3]/ul/li[3]/a');
        $I->seeCurrentUrlEquals('/signup/success');
        $I->wait(3);
        
    }


}




