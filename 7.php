<?php

// Расширьте конструкцию if из п.5-6, выводя фразу: "Вам еще рано работать" при условии, что значение переменной age попадает в диапазон чисел от 0 до 17 (включительно).

$age = 15;

if($age >= 18 && $age <=59) {
    echo "Вам ещё работать и работать";
}
else if ($age > 59) {
    echo 'Пенсия';

}

else
    echo 'Вам ещё рано работать';
