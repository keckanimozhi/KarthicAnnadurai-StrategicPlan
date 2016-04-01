<?php

 function method($a){
    return htmlspecialchars($_POST[$a]);
}

$current_row = method('cr');

for($i = 0; $i<$current_row;i++){
	
}