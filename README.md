# Oxxa API (PHP)

Use the Oxxa API in PHP.

## Status

[![Build Status](https://travis-ci.com/ben221199/oxxa-api.svg?branch=master)](https://travis-ci.com/ben221199/oxxa-api)

## Installation

`composer require ben221199/oxxa-api`

## Use

```php
$username = 'myUsername'; // Your API username
$password = 'myPassword'; // Your API password
$useMD5 = true; // When true, password is send in its MD5 form.
$isTesting = false; // When true, payment wil not occur

$oxxaApi = new \Ben221199\Oxxa\API\OxxaAPI('https://api.oxxa.com',$username,$password,$useMD5,$isTesting);

$xml = $oxxaApi->DOMAIN_CHECK([
	'sld'	=> 'myDomain',
	'tld'	=> 'com',
]);
```