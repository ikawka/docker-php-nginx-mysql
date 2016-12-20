<?php //phpinfo();
$servers = explode(",", ini_get("session.save_path"));
$c = count($servers);
for ($i = 0; $i < $c; ++$i) {
  $servers[$i] = explode(":", $servers[$i]);
}

print_r($servers);
