<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Guestbook App</title>
    <!-- Tambahkan link CSS atau CDN lainnya di sini -->
</head>
<body>
    <header>
        <h1>Your Guestbook App</h1>
        <nav>
            <ul>
                <li><a href="{{ route('guestbooks.index') }}">Home</a></li>
                <!-- Tambahkan tautan navigasi lainnya sesuai kebutuhan -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Tambahkan konten footer sesuai kebutuhan -->
    </footer>

    <!-- Tambahkan script JavaScript atau CDN lainnya di sini -->
</body>
</html>
