# Isotop WordPress Coding Standard

The coding standard used for WordPress sites.

## Installation

### Standalone

Standards are provided as a [Composer](http://getcomposer.org) package and can be installed with:

```bash
composer create-project isotopsweden/isotopcs:dev-master --repository-url http://composer.omg.isotop.ad
```

Composer will automatically install dependencies, register standards paths, and set default PHP Code Sniffer standard to `Isotop`.

### As dependency

You should add Isotop composer repository to your composer config file.

```json
{
    "repositories": [
      {
        "type": "composer",
         "url": "http://composer.omg.isotop.ad"
      }
    ]
}
```

Or use a `vcs` repository if you like to access it outside Isotops network.

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "git@bitbucket.org:isotopsweden/isotopcs.git"
        }
    ],
}
```

And you should update `minimum-stability` to `dev` and set `prefer-stable` to `true`.

```json
{
    "minimum-stability": "dev",
    "prefer-stable": true
}
```

Then you can install `isotopcs` as a dependency.

```bash
composer require isotopsweden/isotopcs:dev-master --dev
```

### Command line

```bash
vendor/bin/phpcs --extensions=php /path/to/folder/
```

### Editors

### Atom

> TODO

#### Sublime

```javascript
{
    "phpcs_executable_path": "/path/to/isotopcs/vendor/bin/phpcs",
    "phpcs_additional_args": {
        "--standard": "Isotop"
    }
}
```

#### PhpStorm

Refer to [Using PHP Code Sniffer Tool](https://www.jetbrains.com/phpstorm/help/using-php-code-sniffer-tool.html) in PhpStorm documentation.

After installation `Isotop` standard will be available as a choice in PHP Code Sniffer Validation inspection.
