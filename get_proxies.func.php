<?php
function get_proxies($url){ 
  $result  = preg_match_all("/\d+\.\d+\.\d+\.\d+\:\d+/", file_get_contents($url), $match);
    if ($result)
      foreach ($match[0] as $value)
        $proxies[] = $value;
  return array_unique($proxies);
}
?>
