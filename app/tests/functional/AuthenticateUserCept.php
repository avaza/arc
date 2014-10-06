<?php
use Arc\Users\User;
$I = new FunctionalTester($scenario);

$I->wantTo('login to the Arc System');
$I->am('valid User');

$I->haveAnAccount();
$I->amOnPage('/login');
$I->fillField('email', 'j.murray@avaza.co');
$I->fillField('password', 'a52Vaza09@');
$I->click('Sign In');

$I->seeCurrentUrlEquals('/admin');
$I->see('You are logged in.');




