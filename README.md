# Test Task Employee Catalog

Задание:
1. Создать три таблицы в БД:
1.1. В одной хранятся имена пользователей.
1.2. Во второй - связь между пользователями и их образованием (среднее, бакалавр, магистр, еще что-то).
1.3. В третьей - связь между пользователями и некими городами, у каждого пользователя может быть 1 или более городов.

2. Написать приложение, которое будет:
2.1. Выводить таблицу (grid) этих пользователей, в зависимости от отмеченных галочек (для каждой таблички свой набор галочек). Таблица должна обновляться без перезагрузки страницы. Поля: пользователь, образование, город.
2.2. Предоставлять возможность смены образования в этой таблице. При этом изменения должны отправляться на сервер и сохраняться в базе данных.

3. Приложение должно быть написано с использованием следующего инструментария:
3.1. Серверная часть должна быть написана на PHP. Можно использовать любой удобный framework или даже написать код без применения framework.
3.2. Клиентская часть должна быть написана на ExtJS 3/4/5/6 (по выбору).

4. В работе должно использоваться ООП, сложная выборка должна реализовываться средствами SQL.
