<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Crud</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Dashboard</a>
            <a class="navbar-brand" href="{{ route('user') }}" wire:navigate>User</a>
            <a class="navbar-brand" href="{{ route('post') }}" wire:navigate>Post</a>
            <a class="navbar-brand" href="{{ route('category') }}" wire:navigate>Category</a>
            <livewire:common.switch-language />
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center mt-3">
        {{ $slot }}
        </div>
    </div>

    @livewireScripts
</body>
</html>