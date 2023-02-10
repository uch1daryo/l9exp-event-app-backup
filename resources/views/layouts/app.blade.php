<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <title>{{ config('app.name') }} - @yield('title')</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">{{ config('app.name') }}</span>
    </div>
  </nav>
  <main class="container-fluid">
    @yield('content')
  </main>
</body>
</html>
