<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'PT ECOAS Management') - PT Londo Bell</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background: radial-gradient(circle at top right, #f8fafc, #f1f5f9);
            min-height: 100vh;
        }
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .gradient-text {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="antialiased text-slate-900">
    <header>
        <nav class="sticky top-0 z-50 glass border-b border-slate-200" role="navigation" aria-label="Main Navigation">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 flex items-center">
                            <span class="text-2xl font-bold tracking-tight">
                                <span class="text-indigo-600">PT</span> ECOAS
                            </span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-xs font-semibold px-2 py-1 bg-indigo-100 text-indigo-700 rounded-full uppercase tracking-wider">
                            Partner of Londo Bell
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if(session('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: "{{ session('success') }}",
                        timer: 3000,
                        showConfirmButton: false,
                        toast: true,
                        position: 'top-end',
                        background: '#ffffff',
                        iconColor: '#10b981',
                        customClass: {
                            popup: 'rounded-2xl shadow-xl border border-emerald-100'
                        }
                    });
                </script>
            @endif

            @yield('content')
        </div>
    </main>

    <footer class="mt-auto py-8 border-t border-slate-200 bg-white" role="contentinfo">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-sm text-slate-500">
                &copy; {{ date('Y') }} PT ECOAS. Developed by PT Londo Bell.
            </p>
        </div>
    </footer>
</body>
</html>
