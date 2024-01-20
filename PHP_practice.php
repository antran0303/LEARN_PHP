<?php

$bien = 100;

$demsoChan = 0;
$demsoLe = 0;

$resultchan = null;
$resultle = null;


for($i=0; $i<=100; $i++)
{
    if($i % 2 == 0)
    {
        $resultChan .= $i;
        $demsoChan++;
    }
    else
    {
        $resultle .= $i;
        $demsoLe++;
    }
}

if($demsoChan > 0)
{
    echo "Co". $demsoChan ."so Chan";
}
else
{
    echo "Co". $demsoLe . "so Le";
}
