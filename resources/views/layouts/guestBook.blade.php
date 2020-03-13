<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="sprint 1">
    <meta name="keywords" content="html, css, javascript">
    <meta name="author" content="Александр Прохоров">
    <title>Научиться учиться</title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="page">
    <header class="header">
        @yield('header')
    </header>
    <main class="content">
        <section class="messages">
            @yield('message')
        </section>
        @yield('formAdd')
    </main>
    <footer class="footer">
        @yield('footer')
    </footer>
</div>
</body>
</html>
