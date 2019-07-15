Реализация MVC паттерна путем создания интернет магазина
=============================
Проект создан для учебных целей. 

Для разработки было решено использовать PHP 7.
Паттерн реализуется с помощью классов Router, Controller, Model, View.
Все запросы на сервер переадрессовываются на index.php, в файле реализована проверка запроса и переадрессация на нужный контроллер 
и вызов Action. В Model работаем с базой данных.

В качестве СУБД было решено использовать MySQL. В базе находятся 5 таблиц 
(пользователь,роли пользователей, товар, категория товара, заказы)
В качестве работы с базой данных был использован PDO с подготовленными запросами.

Была реализована авторизация, регистрация, корзина(работа с coockie и ajax добавление в корзину товаров), 
пагинация, вывод товаров (всех/по категориям), валидация полей на стороне сервера и клиента.

Для визуализации было решено использовать matirealize css - библиотека стилей "матириал дизайн", подход в дизайне 
которой был придуман google.

Для работы с компонентами на стороне клинета и отправки ajax используется jquery.



