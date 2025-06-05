<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - ASM Event Organizer</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-login.css') }}">
    @stack('styles')
</head>
<body>
    <main>
        @yield('content')
    </main>
    @stack('scripts')
    <footer style="text-align:center; margin-top:2rem; color:#888; font-size:0.98rem;">
        &copy; {{ date('Y') }} ASM Event Organizer. All rights reserved.
    </footer>
</body>
</html>
