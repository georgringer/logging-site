# Example for EXT:logging

This project shows the usage of the TYPO3 CMS Extension logging, https://github.com/georgringer/logging, which is based on monolog.

## Features

Besides logging to files, you can use a Graylog2 which is e.g. provided by https://github.com/hggh/graylog2-vagrant

## Usage

- Clone this repo ```https://github.com/georgringer/logging-site.git```.
- ```composer install```
- Change the DB credentials in the ```LocalConfiguration.php```

If using Graylog2, check out the Readme of the repository.

## Requirements

- PHP 5.5
- TYPO3 CMS 7.x

Both requirements will be changed in the future to PHP 5.4 and TYPO3 CMS 6.x!

## License

MIT