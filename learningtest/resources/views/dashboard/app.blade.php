<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <h1 class="text-3xl font-bold underline"></h1>
        <header>
            @include('../components/header')

        </header>

  <main>
    @yield('content')
  </main>
  @include('../components/footer')
</body>
</html>