<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Покупаель</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div>
            <div>
                <table>
                    <h2>Покупатель</h2>
                    <tr>
                        <td>ID</td>
                        <td>Имя</td>
                        <td>Фамилия</td>
                        <td>Заблокирован</td>
                        <td>Телефон</td>
                        <td>Email</td>
                        <td>Дата регистрации</td>
                    </tr>
                    @foreach ($customers as $customer)<tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name}}</td>
                        <td>{{ $customer->surname}}</td>
                        <td>{{ $customer->block}}</td>
                        <td>{{ $customer->phone}}</td>
                        <td>{{ $customer->email}}</td>
                        <td>{{ $customer->registr}}</td>
                    </tr>
                    @endforeach
                </table>

                <table>
                    <h2>Адреса покупателя</h2>
                    <tr>
                        <td>Название</td>
                        <td>Город</td>
                        <td>Улица</td>
                        <td>Дом</td>
                        <td>Этаж</td>
                        <td>Квартира</td>
                        <td>Код</td>
                        <td>Дата добавления</td>
                    </tr>
                    @foreach ($addresses as $address)
                    <tr>
                        <td>{{ $address->title }}</td>
                        <td>{{ $address->city }}</td>
                        <td>{{ $address->street }}</td>
                        <td>{{ $address->home }}</td>
                        <td>{{ $address->floor }}</td>
                        <td>{{ $address->apartment }}</td>
                        <td>{{ $address->code }}</td>
                        <td>{{ $address->registr }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>
