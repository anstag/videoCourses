<?php ## MVC. Контроллер (генератор данных) гостевой книги
define("GBook", "gbook.dat"); // имя файла с данными гостевой книги
require_once "model.php"; // подключаем Модель (ядро)
// Исполняемая часть сценария.
// Сначала загрузка гостевой книги.
$book = loadBook(GBook);
// Обработка формы, если сценарий вызван через нее.
// Если сценарий запущен после нажатия кнопки Добавить...
if (!empty($_REQUEST['doAdd'])) {
    // Добавить в книгу запись пользователя - она у нас хранится
    // в массиве $_REQUEST['new'], см. форму в Шаблоне.
    // Запись добавляется, как водится, в начало книги.
    $book = [time() => $_REQUEST['new']] + $book;
    // Записать книгу на диск.
    saveBook(GBook, $book);
}
// Все. Теперь у нас в $book хранится содержимое книги в формате:
// array (
// время_добавления => array(
// name => имя_пользователя,
// text => текст_пользователя
// ),
// . . .
// );
// Загружаем Шаблон страницы.
include "view.php";