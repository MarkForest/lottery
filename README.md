## 1. Склонировать проект
```
git clone git@github.com:MarkForest/lottery.git
```
## 2. Перейти в каталог с проектом
```
cd work_directory
```
## 3. В корень проекта добавить файл .env и скопировать в него содержимое файла .env.example
## 4. Создать програмное окружение для проекта(требуется наличие установленого докера)
```
./vendor/bin/sail up -d
```
## 5. Запустить миграции на создание базы дынных
```
./vendor/bin/sail artisan migrate
```
## 6. Сгенерировать ключ приложения
```
./vendor/bin/sail artisan key:generate
```
## 7. Сгенерировать 1 000 000 пользователей (займет около 15 минут)
```
./vendor/bin/sail artisan db:seed
```
## 8. Сайт будет расположен по пути
```
http://localhost/
```
