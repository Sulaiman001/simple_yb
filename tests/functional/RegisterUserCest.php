<?php
use \FunctionalTester as FunctionalTester;

class RegisterUserCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {

    }

 		public function testUserCreation(FunctionalTester $I) {
		 $I->wantTo('test if user can be created');
		 $I->amOnPage('/register');
		 $I->see('Sign up');
		 $I->fillField('username', 'Danverem');
		 $I->fillField('email', 'danverem@dan.com');
		 $I->fillField('password', 'password');
		 $I->fillField('password_confirmation', 'password');
		 $I->fillField('role', 'user');
		 $I->click('#submit');
		 $I->seeInCurrentUrl('/home');
		}
}
