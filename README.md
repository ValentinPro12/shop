<p align="center">
    <h1 align="center">NSPK</h1>
    <br>
</p>

Создание пользователя в MongoDB:
--------------------------------

- Инициализация MongoDB:
```
mongo init
```

- Войти как admin:
```
use admin
```

- Авторизация:
```
db.auth("root", "example")
```

- Подключиться к БД:
```
use db_mongodb_20190305_nspk
```

- Создать пользователя с правами администратора:
```
db.createUser({
    user: "user",
    pwd: "example",
    roles: ["readWrite", "dbAdmin"]
})
```
