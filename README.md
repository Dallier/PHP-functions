PHP-functions
=============



### get_proxy_array($url)
Downloads arbitrary proxy list html & returns a clean ip:port array;


```php
require_once("get_proxy_array.func.php");
get_proxy_array("http://pastebin.com/MRKJXz0s");
```

```php
Array
(
    [0] => 110.143.140.26:37834
    [1] => 65.28.88.235:37241
    [2] => 203.191.169.121:30340
    [3] => 203.144.0.246:2
    [11] => 203.144.0.246:29228
    [12] => 81.109.19.183:6681
    [13] => 81.196.91.42:8434
)
```
