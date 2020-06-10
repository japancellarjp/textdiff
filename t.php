<?php

use \japancellarjp\textdiff\TextDiff;

include(__DIR__ . '/TextDiff.php');
$old_text = "abcg efgh ijk";
$new_text = "abcg efg hijk";
$diff = new TextDiff($old_text, $new_text);
$data = $diff->getData();
var_dump($data);
$html = $diff->getHtml();
var_dump($html);

$old_text = "形態素解析で問題なのはなのはのような解析が難しい単語です";
$new_text = "形態素解析で問だ題なのはなのはのような解析が難しー単語です";
$diff = new TextDiff($old_text, $new_text);
$data = $diff->getData();
var_dump($data);
$html = $diff->getHtml();
var_dump($html);

