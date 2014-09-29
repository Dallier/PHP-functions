PHP-functions
=============



### get_proxies($url)
Downloads the html of any html proxy list & returns a clean ip:port array;


```php
require_once("get_proxies.func.php");
$array = get_proxies("http://aliveproxy.com/socks5-list/");
```

```php
Array
(
    [0] => 123.30.188.46:2214
    [1] => 219.137.250.198:1080
    [2] => 202.119.199.147:1080
    [3] => 82.115.25.9:1080
    [4] => 202.38.95.66:1080
    [5] => 212.57.179.29:2214
    [6] => 69.76.173.69:30631
    [7] => 82.209.198.2:1080
    [8] => 98.237.12.7:40362
    [9] => 174.117.34.166:48074
)
```
