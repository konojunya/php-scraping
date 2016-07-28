<?php
require_once("phpQuery.php");

header("Content-Type: text/html; charset=UTF-8");

$url = "http://konojunya.com";

$phpQueryObj = phpQuery::newDocument(file_get_contents($url));
foreach($phpQueryObj['h2'] as $i => $val) {
  $el = pq($val)->text();
  echo $el . "<br/>";
}