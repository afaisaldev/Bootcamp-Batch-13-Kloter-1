<?php
function drawimage($num_char) {

    $onehalf 	 = floor($num_char / 2);
    $onehalf_var = $onehalf;
    $char1 		 = '=';
    $char2 		 = '@';

    echo '<div style="font: 16px courier new; line-height:15px">';
    // loop baris
    for ($row = 1; $row <= $num_char; $row++)
    {
        // loop kolom
        for ($col = 1; $col <= $num_char; $col++)
        {
            $char =	$col > $onehalf_var && $col <= ($num_char - $onehalf_var) ? $char2 : $char1;
            echo "<b style='margin:3px'>$char</b>";	
        }
        $row <= $onehalf ? $onehalf_var-- : $onehalf_var++;	
        echo '<br/>';
    }
    echo '</div>';

}

drawimage(7);
?>