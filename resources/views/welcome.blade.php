<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Weather') }}</title>

    <style>
     

            </style>
        
    </head>
    <body>
    <header>
        <a class="brand" href="{{ url('/') }}" style="text-decoration: none;">
            {{ config('app.name', 'Weather') }}
        </a>
 
        <nav>
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Log in</a>
            @endauth
        </nav>
    </header>
 
    <main>
        <h1>App Météo super cool</h1>
 
        <p>
            mettre des villes en favoris
        </p>
 
        <div class="actions">
            @auth
                <a class="button primary" href="{{ route('dashboard') }}">Open dashboard</a>
            @else
                <a class="button primary" href="{{ route('register') }}">Create an account</a>
                <a class="button" href="{{ route('login') }}">Log in</a>
            @endauth
        </div>
    </main>
</body>
</html>
