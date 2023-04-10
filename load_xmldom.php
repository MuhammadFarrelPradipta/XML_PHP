<?php
$xml = new DOMDocument();
$xml -> load('ktp.xml');

$x = $xml->documentElement->childNodes;
for ($i = 0 ; $i < $x->length;$i++){
    if ($x[$i] -> nodeType == 1)
    {
        print $x[$i]->nodeName." = ".$x[$i]->nodeValue ."<br>";
        $y = $x[$i]->childNodes;
        for ($j = 0;$j<$y->length;$j++)
        {
            if($y[$j]->nodeType==1){
                print $y[$j]->nodeName. " = ".  $y[$j]->nodeValue. "<br>";
            }
        }
        print "<br>";
    }
}




?>