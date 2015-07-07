# Isotop WordPress Coding Standard

The coding standard used for WordPress sites.

## Installation

### Standalone

Standards are provided as a [Composer](http://getcomposer.org) package and can be installed with:

```bash
composer create-project isotopsweden/isotopcs:dev-master --repository-url git@bitbucket.org:isotopsweden/isotopcs.git
```

Composer will automatically install dependencies, register standards paths, and set default PHP Code Sniffer standard to `Isotop`.

### As dependency

To include standards as part of a project require them as development dependencies:

```bash
composer require isotopsweden/isotopcs:dev-master --dev --repository-url git@bitbucket.org:isotopsweden/isotopcs.git
```

### Command line

```bash
"vendor/bin/phpcs" --extensions=php /path/to/folder/
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
