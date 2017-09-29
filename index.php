<?php
$min = 0;
$max = 300;
$chiffresImpairs = '';
for ($i = $min; $i <= $max; $i++) {
    if ( $i % 2 == 1 ) {
        $chiffresImpairs .= $i.' ';
    }
}
echo "Les chiffres pairs compris entre $min et $max sont: $chiffresImpairs";
?>
