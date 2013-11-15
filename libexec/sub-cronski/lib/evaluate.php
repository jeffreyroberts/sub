<?php
include("class.cron.inc");

$argv[3] = str_replace("@", "*", $argv[3]);

# Debug
#echo $argv[1];

$cronVal = cron::due($argv[1], $argv[2], $argv[3]);
$cronText = ($cronVal == TRUE) ? "TRUE" : "FALSE";
echo "$cronText";

// Below for debug
die(); 

if(stristr($argv[3], '*'))
{
	echo "found colon";
}
else
{
	echo "no colon";
}

#echo "\r\n";
#var_dump($argv);
