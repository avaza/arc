<?php 
$I = new FunctionalTester($scenario);
$I->am('guest');
$I->wantTo('sign up for an account');

$I->amOnPage('/');
$I->click('Sign Up');
$I->seeCurrentUrlEquals('/register');
$I->fillField('access_code', '123456')
$I->fillField('email', 'j.smith@test.com')
$I->fillField('first_name', 'John')
$I->fillField('last_name', 'Smith')
$I->checkOption('')