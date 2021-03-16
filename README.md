# Minimal Framework

[![Latest Stable Version](https://poser.pugx.org/rslanzi/minimal/v/stable)](https://packagist.org/packages/rslanzi/minimal) 
[![License](https://poser.pugx.org/rslanzi/minimal/license)](https://packagist.org/packages/rslanzi/minimal)
[![Riccardo Slanzi](https://img.shields.io/badge/Author-Riccardo%20Slanzi-orange)](https://riccardoslanzi.com)

**Minimal Framework** give you some of Laravel's magic in less than 10MB. Ideal for landing pages and small web sites.


<a name="Highlights"></a>
## Highlights

Minimal includes:

- **Rich package skeleton**, (containing common files required by almost every PHP package)
- Version Control: **Git** (`.gitignore`)
- Rounting: **Symfony**
- Dependency injection: **Symfony**
- Environment variables: **phpdotenv** (`.env`)
- Template scripting: **Blade**
- Testing: **PHPUnit** (`phpunit.xml`)
- Package Manager: **Composer** (`composer.json`)  
- CSS: **TailwindCSS 2** with full config preset (`tailwind.config.js`)  
- JS: **AlpineJS**  
  
<a name="Installation"></a>
## Installation
Require the rslanzi/minimal package with [composer](https://getcomposer.org/).

`composer require rslanzi/minimal`

<a name="Usage"></a>
## Usage
```php
// index.php
require_once __DIR__.'/../vendor/autoload.php';
...
```
## Test

To run the tests, run the following command from the project folder.

``` bash
$ ./vendor/bin/phpunit
```

<a name="Contributing"></a>
## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.


## Credits

- [Riccardo Slanzi](https://github.com/rslanzi)


## License

The MIT License (MIT). See the [License File](./LICENSE.md) for more information.