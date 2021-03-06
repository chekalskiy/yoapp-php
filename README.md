![Yo logo](http://i.imgur.com/CdlzlHT.png) Yo API
============
PHP wrapper for Yo App API (http://justyo.co)

[Yo API documentation](http://docs.justyo.co/)

## Installation
You can install `yoapp-php` by using [Composer](http://getcomposer.org/)
```
"require": {
    "chekalskiy/yoapp-php": "~1.0"
}
```


## Example
First of all you need to register your own personal Yo account using your mobile phone. Then [create new api account](http://dev.justyo.co/) with any other username.

Then replace `{API_TOKEN}` with your own token.


```php
try {
    $yo = new \che\Yo({API_TOKEN});

    // send a yo to all subscribers
    $yo->sendAll(array('link' => 'http://example.com'));
} catch (\che\YoException $e) {
    echo "Error #" . $e->getCode() . ": " . $e->getMessage();
}
```

You can find more examples in `examples` directory.
