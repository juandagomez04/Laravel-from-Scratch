@props(['title' => 'Laravel'])

<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #e6f0ff;
            background: linear-gradient(180deg, #071132 0%, #081838 100%);
            min-height: 100vh;
        }

        nav {
            background-color: #042042;
            padding: 1rem 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 2px 8px rgba(2, 10, 30, 0.6);
        }

        nav a {
            color: #d9f1ff;
            text-decoration: none;
            margin-right: 1.5rem;
            transition: color 0.2s ease;
            font-weight: 600;
        }

        nav a:hover {
            color: #87e0ff;
        }

        a {
            color: #8fd3ff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
            color: #bfefff;
        }

        main {
            padding: 2rem;
        }

        .max-w-400 {
            max-width: 400px;
            margin: auto;
        }

        .card {
            background: linear-gradient(180deg, rgba(6, 24, 54, 0.6), rgba(4, 36, 66, 0.6));
            color: #e6f7ff;
            padding: 1.25rem;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 6px 18px rgba(3, 14, 40, 0.6);
            border: 1px solid rgba(140, 200, 255, 0.08);
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav>
        <a href="/ideas">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>

    <x-nav />
    <main class="max-w-3xl mx-auto mt-6">
        {{ $slot }}
    </main>
</body>

</html>