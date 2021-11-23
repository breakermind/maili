# Maili blade template
Maili laravel blade email template package.

## Install
```sh
cd app

composer require breakermind/maili

composer update
```

## How to
```php
<?php
use Maili\Mail\MailiMail;

Route::get('/email', function () {

	$mail = (object) [
		'subject' => 'Message subject',
		'name' => 'Mysia Pysia',
		'message' => 'Hi lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <a href="https://example.com">funny bunny</a> aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat!',
		'btn_href' => 'https://your.page.url/confirm/{code}',
		'btn_text' => 'Confirm email',
		'unsubscribe' => 'https://your.url/unsubscribe/email@email.com',
		// Hide code part
		// 'code' => 'SECRET69CODE',
	];

	// Send email
	Mail::to('mail@example.com')->send(new MailiMail($mail));

	// Show in browser
	return new MailiMail($mail);
});
```

## Maili edit mail view
```sh
php artisan vendor:publish --tag=maili-config --force

php artisan vendor:publish --provider="Maili\MailiServiceProvider.php"
```

## Install package without packagist
```json
{
	"repositories": [{
		"type": "vcs",
		"url": "https://github.com/breakermind/maili"
	}],
	"require": {
		"breakermind/maili": "^1.0"
	}
}
```

## Email foto
<img src="https://raw.githubusercontent.com/breakermind/maili/main/maili-blade.png" width="100%">
