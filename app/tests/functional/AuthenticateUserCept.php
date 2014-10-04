<?php 
$I = new FunctionalTester($scenario);

$I->wantTo('login to the Arc System');
$I->am('a valid user');

$I->haveAnAccount();
$I->amOnPage('/login');
$I->fillField('email', '');
$I->fillField('password', '');
$I->click('Sign In');

$I


