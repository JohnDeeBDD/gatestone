<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Add an SEO article');
$I->loginAsAdmin();
$I->amOnPage("/wp-admin/edit.php?post_type=external-content");
$I->fillField('add-this-url', "https://generalchicken.net/better-error-messages/");
$I->click("#add-new-button");
$I->see("Edit External Content");