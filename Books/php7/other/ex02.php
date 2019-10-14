<?php
// Найти в тексте адрес E-mail. \S означает "не пробел", а [a-z0-9.]+ -
// "любое число букв, цифр или точек". Модификатор 'i' после '/'
// заставляет PHP не учитывать регистр букв при поиске совпадений.
// Модификатор 's', стоящий рядом с 'i', говорит, что мы работаем
// в "однострочном режиме" (см. ниже в этой главе).

$pattern = '/(\S+)@([a-z0-9.]+)/is';
$subject = 'Привет от somebody@mail.ru!';

preg_match($pattern, $subject, $matches);

print_r($matches);