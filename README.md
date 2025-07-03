# Документация к сайту

Разработчик: [Студия Флаг](https://flagsoft.ru)

## Структура Docker Compose

## Сервисы

- traefik
- app
- cron
- queue
- postgres
- redis
- meilisearch

## Поднимаем проект LOCALно

Первым делом нужно заполнить переменные окружения в `.env` файле. Он находит не под гитом. Для его создания используйте команду:

```shell
cp .env.example .env
```

Для проверки, что вы ничего не забыли можете использовать команду:

```shell
docker compose ps
```

После этого необходимо собрать два базовых образа `unit_base` и `php_cli`.

```bash
# это образ для приложения
docker compose -f docker-compose.base.yaml build unit --no-cache

# это образ для контернеров с кроном и воркерами очередей
docker compose -f docker-compose.base.yaml build cli --no-cache
```

# Логирование

Памятка по уровням логирования:

1. 0 = Emergency
1. 1 = Alert
1. 2 = Critical
1. 3 = Error
1. 4 = Warning
1. 5 = Notice
1. 6 = Informational
1. 7 = Debug

Не забываем добавлять логирование в нужных местах. Так же запись в логе должна быть понятной, давая достаточно информации о произошедшем.
Пример плохого сообщения в логе:

```php
Log::error($e->getMessage()); //получаем только текст об ошибке
```

Пример хорошего сообщения в логе:

```php
Log::critical($e->getMessage(), [ // текст ошибки
    'event' => 'create_order', // событие при котором произошла ошибка
    'user_id' => $user->id, // Id пользователя, у которого произошла ошибка
    'data' => $data, // Это данные из запроса клиента
]);
```

Так будет проще в будущем понять, что произошло, и попытаться воспроизвести ошибку.
И не забываем о правильной приоритизации логов. Не нужно все сообщения писать просто в Error или Info.

# Стандарты кода

## Линтеры

Для проверки качества кода используются линтеры:

- laravel pint
- Larastan

## Структура

На проекте используется своя интерпретация DDD. Весь бизнес код лежит в директории `src`. В ней лежит список доменов, поделённые на слои:

- Domain 
  - Aggregates (являются границей транзакции в БД)
  - Entities (бизнес сущности)
  - Values (паттерн Value Object)
    - Primitives
    - Enums
    - Collections
  - Contracts
  - Exceptions
- Application
  - Actions
  - Services
  - Data (DTO)
  - Exceptions
- Infrastructure
  - Repositories
  - Criteria (Специальные скоуп классы для eloquent)
  - Mappers (мапят модели на сущности)
- Presentation
  - Controllers (принимает запросы, отдаёт ответы)
  - Requests (валидация и авторизация)
  - Resources
  - ViewModels 
  - Commands

При этом мы оставляем в директории `app` дакие вещи как `Providers`, `Models`, `Nova`, `Middleware` и тому подобное.

# Архитектура

![Архитектура проекта](resources/img/docs/architecture.png)

## Traefik

Это проксисервер. Он принимает весь трафик извне и перенаправляет его на приложение.

## app

Наше приложение на Laravel.

## cron

Вынесли работу задач по расписанию в отдельный контейнер.

## queue

Воркеры очередей тоже выносим в отдельные контейнеры. Один контейнер - один воркер. Воркеры должны обрабатывать только одну очередь.

## postgres

База данных. Основное хранилище.

## meilisearch

Необходим для быстрого полнотекстового поиска и фильтрации объектов.

## redis

Здесь храним сессии, очередь и кеш.

## S3

Хранилище объектов (медиафайлов).

# Структура данных

![Структура квартир в бд](resources/img/docs/db_flats_relations.png)

![Структура журнала в бд](resources/img/docs/db_journal_relations.png)

![Структура выборки в бд](resources/img/docs/db_selection_relations.png)

# Глоссарий

# CI/CD

CD граф

![CD граф](resources/img/docs/cd_graph.png)

## Линтинг

Для линтинга используется два инструмента `pint` и `larastan`.

## Тестирование

## Сборка

Для ускорения сборки используется "базовые образы", которые уже содержат все необходимые зависимости. На данном этапе происходит копированик кода в образ и сборка `composer` и `npm`. 

Собираем мы несколько образов для разные сервисов: `app`, `cron` и `queue`.

Новым образам присваивается тег с хешем коммита.

## Выкат

## Откат

# Полезные ресурсы

1. [Неортодоксальный Eloquent](https://habr.com/ru/articles/762598/)
2. [Laravel Tips](https://github.com/OussamaMater/Laravel-Tips)
3. [Flagsoft Code Standards](https://docs.flagsoft.ru/books/gaidy-po-razrabotke/page/flagsoft-code-standards)
4. [Список правил для `Laravel Pint`](https://mlocati.github.io/php-cs-fixer-configurator/#version:3.70)
