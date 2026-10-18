<?php
require 'config.php'; include 'includes/entete_inc.php'; include 'includes/menu_inc.php';
$file='data/notes.csv'; $data=[];
if(file_exists($file)){ $f=fopen($file,'r'); while(($r=fgetcsv($f,1000,';'))!==false){ $data[]=['nom'=>$r[0],'info'=>$r[1],'math'=>$r[2],'moyenne'=>($r[1]+$r[2])/2]; } fclose($f); }
file_put_contents('data/notes.json', json_encode($data, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));
echo "<pre>".file_get_contents('data/notes.json')."</pre>";
$json=file_get_contents('data/notes.json'); $arr=json_decode($json,true); print_r($arr);
echo "<h3>serialize vs json</h3>"; echo serialize($data)."<br>JSON plus lisible, interopérable<br>";
// JSON directement exploitable par JS, serialize() est propre à PHP

include 'includes/pied_inc.php';
?>