<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Все покупатели</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
<div>
    <div class="main">
        <div class="search">
            <form>
                <h2>Задание 3.1</h2>

                <label for="name">Имя: </label><input type="text" name="name" id="name"
                                                      placeholder="Введите имя покупателя"></input>
                <label for="surname">Фамилия: </label><input type="text" name="surname" id="surname"
                                                             placeholder="Введите фамилию покупателя"></input>
                <label for="block">Блокировка: </label><input type="text" name="block" id="block"
                                                              placeholder="Введите значение: block/unblock"></input>
                <label for="email">Email: </label><input type="email" name="email" id="email"
                                                         placeholder="Введите эл.почту покупателя"></input>
                <label for="phone">Телефон: </label><input type="text" name="phone" id="phone"
                                                           placeholder="Введите телефон покупателя"></input>

                <button type="submit">Поиск</button>
            </form>
        </div>
    </div>

    <div>
        <table class="table">
            <h2>Список покупателей</h2>
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Заблокирован</th>
                <th>Телефон</th>
                <th>Email</th>
                <th>Дата регистрации</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td><a href='customers/{{ $customer->id }}'>{{ $customer->id }}</a></td>
                    <td>{{ $customer->name}}</td>
                    <td>{{ $customer->surname}}</td>
                    <td>{{ $customer->block}}</td>
                    <td>{{ $customer->phone}}</td>
                    <td>{{ $customer->email}}</td>
                    <td>{{ $customer->reg  }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
