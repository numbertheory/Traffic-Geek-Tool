<?php
// Based on the contents of source.txt change x.png to match 

$file = file_get_contents('source.txt', true);
if ($file == 'GREEN')
{
system ('cp traffic-green.png x.png');
}
else if ($file == 'YELLOW')
{
system ('cp traffic-yellow.png x.png');
}
else
{
system ('cp traffic-red.png x.png');
}
?>