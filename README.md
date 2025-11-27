# Orlips SMS

A plug-and-play SMS package for Laravel.

## Installation

composer require villicah/sms

## Usage

$sms = app(\Villicah\Sms\Sms::class);

$response = $sms->send('2547XXXXXXXX', 'Test message');

print_r($response);

The package requires no configuration. All defaults are built-in.
