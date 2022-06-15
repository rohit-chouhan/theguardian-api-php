<img width="300" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/The_Guardian.svg/1280px-The_Guardian.svg.png"/>
<p>PHP API Client for The Guardian News.</p>

**Requirements**
* PHP 5.6.0 or greater

The documentation for the Guardian News API can found [here](http://open-platform.theguardian.com/documentation/), In order to connect you will need an api key, which you can be generate from [here](http://open-platform.theguardian.com/access/)

### Usage
To use this client api, first download this gihutb files, and start using.
```php
<?php
require_once 'vendor/autoload.php';
    $theguardian = new TheGuardian('your_api_key');
```
**methods**

| methods  | descriptions   |
| ------------ | ------------ |
|  $theguardian->get_articles() |  Content  |
| $theguardian->get_article(`id`)  |  Single Item |
| $theguardian->get_tags()  |  Tags |
| $theguardian->get_sections()  | Sections |
| $theguardian->get_editions()  | Editions |

#### 📌 get_articles() `Content`
A Content module can be utilized as an interface for the content endpoint provided by the Guardian.
```php
<?php
    require_once 'vendor/autoload.php';

    $theguardian = new TheGuardian('test');
    $articles = $theguardian
                ->search("test")
                ->section("technology")
                ->show_fields("all")
                ->get_articles();
    //you can add more functions to the object

    foreach ($articles as $article) {
        echo $article->webTitle."<br>";
    }
?>
```
#### 📌 get_article() `Single Item`
```php
<?php
    require_once 'vendor/autoload.php';

    $theguardian = new TheGuardian('test');
    $articles = $theguardian
                ->show_fields("all")
                ->get_article("business/2014/feb/18/uk-inflation-falls-below-bank-england-target");
?>
```
#### 📌 get_tags() `Tags`
Tags are returned by the tags endpoint. We manually categorize all Guardian content based on these tags, which number more than 50,000.
```php
<?php
    require_once 'vendor/autoload.php';

    $theguardian = new TheGuardian('test');
    $articles = $theguardian
                ->search("sport")
                ->get_tags()
?>
```
#### 📌 get_sections() `Sections`
Using this section module, the Guardian's sections endpoint can be accessed. The guardian's data can be accessed through this link. For example, business, sports, and technology are examples of query parameters (q).
```php
<?php
    require_once 'vendor/autoload.php';

    $theguardian = new TheGuardian('test');
    $articles = $theguardian
                ->search("sport")
                ->get_sections()
?>
```
#### 📌 get_editions() `Editions`
All editions in the API are returned by the editions endpoint. An edition is a front main page on the Guardian site. There are currently editions of the Guardian available for the United Kingdom(uk), the United States(us) and Australia(au).
```php
<?php
    require_once 'vendor/autoload.php';

    $theguardian = new TheGuardian('test');
    $articles = $theguardian
                ->search("sport")
                ->get_editions()
?>
```

#### Developer
This API Client created by [Rohit Chouhan](https://rohitchouhan.com)
