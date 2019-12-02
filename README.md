# Session Keeper

**Session token theft detection**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/session-keeper/v/stable)](https://packagist.org/packages/hiqdev/session-keeper)
[![Total Downloads](https://poser.pugx.org/hiqdev/session-keeper/downloads)](https://packagist.org/packages/hiqdev/session-keeper)
[![Build Status](https://img.shields.io/travis/hiqdev/session-keeper.svg)](https://travis-ci.org/hiqdev/session-keeper)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/session-keeper.svg)](https://scrutinizer-ci.com/g/hiqdev/session-keeper/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/session-keeper.svg)](https://scrutinizer-ci.com/g/hiqdev/session-keeper/)

This package provides small library for token theft detection.

## Installation

The preferred way to install this library is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require "hiqdev/session-keeper"
```

or add

```json
"hiqdev/session-keeper": "*"
```

to the require section of your composer.json.

## Idea

- Save for every session:
    - is it secure (user chooses)
    - browser fingerprint
    - IP address
- Session can be revalidated by
    - current fingerprint
    - IP address
- Conditions:
    - changed fingerprint - kill session, must relogin
    - changed IP:
        - the IP is secure - ok
        - the IP is unknown - kill session, must relogin

## License

This project is released under the terms of the MIT [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/mit).

Copyright © 2019, HiQDev (http://hiqdev.com/)
