<?php

$mtable = '<table >';

for ($i = 1; $i <= 10; $i++) {
    $mtable .= '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        $a = $i * $j;
        if (($i % 2) == 0 and ($j % 2) == 0) {
            $a = '(' . $a . ')';
        } elseif (($i % 2) != 0 and ($j % 2) != 0) {
            $a = '[' . $a . ']';
        }
        $mtable .= '<td>' . $a . '</td>';
    }
    $mtable .= '</tr>';
}
$mtable .= '</table>';

echo $mtable;