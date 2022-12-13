<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <header>
            ヘッダー1
        </header>
        <div class="font-sans text-gray-900 antialiased">
            コンポーネントテスト1
            <div class="border-2 shadow-md w-1/4 p-2">
                <div>タイトル1</div>
                <div>画像</div>
                <div>本文1</div>
            </div>
        </div>
    </body>
</html>
