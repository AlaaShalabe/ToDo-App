<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TO-Do App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/fa92797f6d.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fa92797f6d.js" crossorigin="anonymous"></script>
</head>

<body>
    @include('layout.navbar')
    <section class="hero is-info">
        <div class="hero-body">
            <p class="title has-text-centered">
                To-Do
            </p>
            <p class="subtitle has-text-centered">
                A To-Do List to Organize Your Work & Life
            </p>
        </div>
    </section>
    @yield('content')
    @include('layout.footer')
</body>

</html>
