# Тестирование веб-приложений 2.0
Ссылка: http://software-testing.ru/edu/3-online/189-web (https://yadi.sk/d/wadjVgxYfzbyuw)

## 1. Основы
ISO/IEC 25000:2014

### Уровни:
- модульный
- интеграционный
- системный

### Черное и прозрачное тестирование

### Описание программы:
- Логическая структура
	+ ключевые функции, сценарии использования
	+ входные и выходные данные
- Физическая структура
	+ схема развертывания
	+ входные и выходные данные

### Типы интерфейсов:
- API
- Сетевой протокол (+ удаленный API)
- Command Line Interface (CLI) (+ удаленный CLI)
- Graphical User Interface (GUI)

### Тестирование разметки:
- https://checker.html5.org/ (синтаксис)
- https://validator.w3.org/

### Тестирование текстового содержимого:
- https://tech.yandex.ru/speller/ (орфография) - можно скачать плагин в браузер
- https://languagetool.org/ - Доп. расширение - LanguageTool

### Тестирование ссылок:
- Xenu's Link Sleuth http://home.snafu.de/tilman/xenulink.html
- SEO Spider https://www.screamingfrog.co.uk/seo-spider/
- Доп. расширение - LinkMiner
- Консоль браузера

### Тестирование локализации



## 2. Клиент и сервер
### Альтернативы:
- Master-Slave
- Peer-to-Peer (равноправие)
- Massaging
- Serverless

### Средства перехвата запроса:
- Браузер (самый информативный FireFox)
- Proxy:
	+ Fiddler (https://www.telerik.com/fiddler, https://learn.javascript.ru/fiddler)
	+ Charles

### Request Methods:
- GET
- HEAD
- POST
- PUT
- PATH
- DELETE

### Служебные:
- TRACE (зеркало)
- OPTIONS (настройки соединения)
- CONNECT (шифрование)

### Pesponse Codes:
#### HTTP/2.0 ~
- 200 OK
- 301 Moved Permanently - перенаправление
- 304 Not Modified - модификация страницы
- 400 Bad Request
- 401 Unauthorized
- 403 Forbidden
- 404 Not Found
- 500 Internal Server Error

### Версии HTTP:
- HTTP 0.9
- HTTP 1.0
- HTTP 1.1
- SPDY
- HTTP 2.0

### HTTP 2.0
- Бинарный формат
- Сжатые заголовки
- Мультиплексирование
- Насильственная отгрузка
- Приоритеты запросов

http://useragentstring.com/

### User Agent
- Браузеры
- Поисковые боты
- "Обходчики"
- Валидаторы
- Другие боты



## 3. Динамическая генерация страниц
### Как работает сервер:
- Слушает порт или несклько
- Принимает запрос на установление соединения
- Принимает HTTP-запрос
- Обрабатывает или делегирует запрос
- Отправляет HTTP-ответ

### Обработка запроса:
- Модификация запроса
- Отправка статической полезной нагрузки
- Отправка ответа 304 Not Modified
- Динамическая генерация полезной нагрузки
- Отправка полезной нагрузки из кэша

### Виртуальные сервера:
- Разные порты
- Разные домены
- Дефолтный сервер

### Способы создания страниц:
- Вручную написанный HTML-код
- Сгенерированный HTML-код
- Common Gateway Interface (CGI)
- Шаблонизаторы (Template Engine)

### Источники данных:
- Файлы
- Базы данных

### Негативные тесты:
- Отсутствуют данные
- Избыток данных
- Недоступность источника
- "Неправильные" данные
- "Старые данные"

### Кэширование:
- Первый запрос - создать, поместить в кэш
- Повторный запрос - отдать из кэша
- Таймаут - удалить из кэша
- Обновление данных - удалить из кэша
- Недоступность данных - отдать из кэша

### Что кэшировать?
- Страницы целиком
- Фрагмент страницы
- Результаты запросов к БД
- Данные из внешних источников
- Результаты вычислений

### Что тестировать?
- "Уместность" кэширования
- Функционирование кэша
- Своевременность очистки
- Принудительная очистка
- Производительность системы

### Слоистый пирог архитектуры
#### Многозвенная архитектура
- Database Layer
- Persistence Layer
- Business Layer
- Presentation Layer

### AuthN + AuthZ
### Паспорт и билет

### Аутентификация (Auth):
- Логин / пароль
- Токен
- Телефон
- Биометрия
- 2FA

### Cookies:
- Аутентификация
- Персонализация
- Временное хранилище
- Отслеживание
- Режим "Инкогнито"

### Авторизация:
- Приложение целиком
- Отдельные разделы
- Отдельные функции
- Чтоние / запись
- Роли, или группы

### OAuth

### Тестирование прав доступа

### Объекты и функции
- Пользователь системы
	+ Зарегистрировать, посмотретьб изменить, удалить
- Статья
	+ Написать, прочитать, изменить, удалить

### Роли, функции, права

### Тестирование производительности:
- Скорость ответа сервера на каждой странице

### Утилита Apache JMeter 

### Классификация проблем:
- Медленная подсистема/функции
- Узкое место ("бутылочное горлышко")
- Точка насыщения
- Функциональный дефект
- Дефект интерфейса

### Ошибки первого и второго рода:
- Ложная тревога
	+ Ошибка первого рода
	+ Ложноположительный результат
- Пропуск дефекта
	+ Ошибка второго рода
	+ Ложноотрицательный результат



## 4. Формы - получение данных от пользователя
#### Разновидность форм:
- form
- input
- select
- textarea
- contenteditable

### Формы:
- Валидация данных
- Отправка данных

### GET и POST:
- GET - адресная строка
- POST - тело запроса

### Неявные параметры запросов:
- /user/123/
- /user/123/orders/

### Тестировние функциональности

### Техники тест-дизайна:
- Анализ границ, классы эквивалентности
- Комбинаторика, попарные сочетания
- Дефолтные и другие особые значения
- Сущности и связи. Create, Read, Update, Delete
- Сценарии, диаграммы состояний и переходов

### Специфика веб-приложений:
- Отрытый доступ к протоколу HTTP
- Проверки в браузере и на сервере
- Предыдущая страница, следующая страница
- Обновление текущей страницы
- Несколько окон/вкладок одновременно

### Автоматизация тестировния

### Через клиентскую часть:
- Selenium IDE (плагин для FireFox)

### Программирование:
- Selenium (Driver)

### Тестирование производительности:
- ~ Apache JMeter

### Тестирование защищенности:
- Контроль прав доступа
- Раскрытие данных клиенту
- Раскрытие данных персоналу
- Механизмы противодействия
- "Настоящие" уязвимости

### Уязвимости:
- https://www.owasp.org/index.php/Category:OWASP_Top_Ten_Project

### SQL инъекции:
- http://sqlmap.org/



## 5. Вёрстка страниц (CSS)
### Стандарт CSS:
- https://www.w3.org/Style/CSS/
- https://www.w3.org/TR/CSS2/

### Инструменты:
- https://caniuse.com/
- https://css3test.com/
- https://jigsaw.w3.org/css-validator/

### Валидаторы CSS:
- https://jigsaw.w3.org/css-validator/
- https://validator.w3.org/unicorn/

### Тестирование верстки:
- Размеры элементов (в т.ч. относительные)
- Положение элементов (в т.ч. относительные)
- "Воздух" и "изоляция"

### Адаптивная верстка:
- 3 major breaks: 480 / 768 / 1024
- 3 minor breaks: 320 / 720 / 900
- Desktop limit is around 1024px

### Семантическая верстка:
- https://html5book.ru/html5-semantic-elements/



## 6. JavaScript и интерактивность
### История:
- Mocha / LiveScript / JavaScript
- Microsoft JScript
- ECMAScript (ECMA-262)
- ECMAScript 3 (+AJAX)
- ECMAScript 5

### Использование:
- Изменение DOM
- Анимация интерактивность
- Обработка данных
	+ http://htmlbook.ru/html/input/pattern
	+ https://webformyself.com/atribut-pattern-html5-proverka-formy/
- Асинхронные запросы (AJAX)
- Скрытые функции

### REST API
- https://bugify.com/api
- Postman



## 7. Картинки и клиентская производительность
### Загрузка данных:
- Откуда загружаем
- Сколько запросов
- Количество адресов
- Объем данных

### Инструменты:
- DevTools
- Lighthouse
- GTMetrix (https://gtmetrix.com/)
- WebPagetest
- YSlow

### Что делать?
- Меньше запросов
- Меньше объем
- Кеширование
- Спрайты, шрифты, SVG
- HTTP/2



## 8. Подробнее про тестирование
### Порядок действий:
- Выявить логические сущности
- Выявить операции (CRUDL)
- Выявить параметры
- Дизайн тестовых данных
- Дизайн тестовых сценариев

### Интерфейсы для тестирования:
- Внутренние API
- Внешний Remote API
- Протокол HTTP
- API в браузере
- Graphical User Interface

### Автоматизация:
- Через API (Postman)
- Через HTTP (JMeter)
- Через GUI (Selenium)

### Производительность:
- Внутренние API
- Внешний Remote API
- Протокол HTTP
- Клиентская

### Инструменты:
- Для сервера (JMeter)
- Для клиента и сервера (LightHouse, YSlow)

### Анализ данных:
- Время отклика, отказы
- Использование ресурсов
- В режиме реального времени
- Средние значения и аномалии
- Динамические данные

### Классификация проблем:
- Медленная подсистема/функция
- Узкое место ("бутылочное горлышко")
- Точка насыщения
- Функциональный дефект
- Дефект интерфейса

### Надежность:
- Готовность
- Отказоустойчивость
- Восстанавливаемость

### Удобство для кого:
- Новички / опытные
- Удобство и скорость
- Удобство и защита
- Удобство и привычки
- Ограниченные возможности

### Различные устройства:
- Клавиатура и мышь
- Мышь и пальцы
- Размер экрана
- Черно-белый экран
- Скорость сети

### Ограничения зрения:
- Размер элементов
- Контрастность
- Цветовосприятие
- Альтернативный текст
- Чтение вслух

### Инструменты для тестирования:
- Расширение WAVE (Для Chrome)

### Другие аспекты:
- Мультиязычность
- Понятность:
	+ Жаргон
	+ Аббревиатуры
	+ Грамотность



## 9. Не совсем про тестирование
### Мониторинг:
- Логи на сервере
- Веб-аналитика
- Консоль браузера
- Трекинг сбоев (TrackJS, Airbrake)
- https://uptimerobot.com/

### A/B-тестирование:
- Цель: оценить эффект изменений
- Контрольный образец и эксперимент
- Сегментирование аудитории
- Анализ результатов
- Значимость результата
- Два варианта страницы
- A/B/n тестирование
- Мультивариантность
- Локальный оптимум
- Критерий оценки

### Оформление:
- OpenGraph
- 404 страница