# SimpleHtmlDom version 1.9 plugin for CakePHP 3

## Installation

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```
composer require albertotain/simple-html-dom
```

## Cargar plugin
bin/cake plugin load simple-html-dom

## Usar en controlador
use SimpleHtmlDom\Controller;

     public function suMetodo() {

        // Create DOM from URL or file
        $simpleHtml = new Controller\SimpleHtmlDomController;

        $html = $simpleHtml->file_get_html('http://URL/');

        dd($html);
    }

