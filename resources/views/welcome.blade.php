<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Météo Accueil</title>
</head>

<body>
    <header>
        <h1>Météo</h1>

        <nav>
            @guest
                <a href="{{ route('login') }}">Se connecter</a>
                <a href="{{ route('register') }}">Créer un compte</a>
            @endguest

            @auth
                <span>Connecté en tant que {{ auth()->user()->name }}</span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Se déconnecter</button>
                </form>
            @endauth
        </nav>
    </header>

    <main>

    </main>

    <footer>

    </footer>
</body>

</html>