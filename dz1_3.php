<?php
$age = 17.5;
if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
} elseif ($age >= 1 && $age <= 17) {
    echo "Вам еще рано работать";
} else {
    echo "Неизветный возраст";
}