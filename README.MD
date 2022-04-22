Перед началом занятия

1. Сделать к себе fork репозитория на Github
2. Клонировать репозиторий из своего репозитория
3. Сделать composer install -n
4. Создать пользователя в БД с реквизитами symfony/symfony
5. С помощью команды bin/console создать базу данных
6. С помощью команды bin/console применить миграции
7. Проверить что в БД появилась таблица task



План занятия

1. Создать репозиторий для работы с задачами
   https://symfony.com/doc/4.4/doctrine.html#querying-for-objects-the-repository
2. Реализовать для контроллеров получение списка задач через репозиторий
   https://symfony.com/doc/4.4/doctrine.html#querying-for-objects-the-repository
3. Консольные команды, сделать команду для добавления задачи из консоли
   https://symfony.com/doc/4.4/console.html
4. Настроить InMemory UserProvider
   https://symfony.com/doc/4.4/security/user_provider.html#security-memory-user-provider
5. Настроить Firewall, сделать задачи закрытыми для всех пользователей
6. Добавить проверку роли для метода выполнения задачи
7. Добавить проверку роли при выводе в шаблоне ссылки для закрытия задачи

