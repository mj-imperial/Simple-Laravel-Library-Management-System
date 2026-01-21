<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ env('APP_NAME') }}</title>
</head>
<body class="bg-slate-100 text-slate-900">
    <header>
        <nav>
            <a href="" class="nav-link">Home</a>

            {{-- Login and Register --}}
            <div class="flex items-center gap-4">
                <a href="" class="nav-link">Login</a>
                <a href=" {{route('register')}} " class="nav-link">Register</a>
            </div>
        </nav>
    </header>

    <main class="py-8 px-7">
        {{ $slot }}
    </main>
</body>
</html>