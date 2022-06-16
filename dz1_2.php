<?php
const TOTAL_DRAW = 80;
echo 'Всего рисунков на выставке:'.' '.TOTAL_DRAW.'<br>';
define('MARKERS_DRAW', 23);
echo 'Выполнены фломастерами:'.' '.MARKERS_DRAW.'<br>';
define('PENCIL_DRAW', 40);
echo 'Выполнены карандашами:'.' '.PENCIL_DRAW.'<br>';
const PAINTS_DRAW = TOTAL_DRAW - (MARKERS_DRAW + PENCIL_DRAW);
echo 'Выполнены красками:'.' '.PAINTS_DRAW.'<br>';