<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeautyPro - SaaS para Salão de Beleza</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-primary">BeautyPro</h1>
                </div>
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn-primary">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-600 hover:text-gray-900">Sair</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900">Entrar</a>
                        <a href="{{ route('register') }}" class="btn-primary">Criar Conta</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Bem-vindo ao BeautyPro</h2>
            <p class="text-xl text-gray-600">A solução completa para gerenciar seu salão de beleza</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="card">
                <h3 class="text-xl font-semibold text-primary mb-2">📅 Agendamentos</h3>
                <p class="text-gray-600">Gerenciamento completo de agendamentos com sincronização em tempo real.</p>
            </div>
            <div class="card">
                <h3 class="text-xl font-semibold text-primary mb-2">👥 Clientes</h3>
                <p class="text-gray-600">Controle de clientes com histórico de serviços e preferências.</p>
            </div>
            <div class="card">
                <h3 class="text-xl font-semibold text-primary mb-2">💼 Serviços</h3>
                <p class="text-gray-600">Catálogo de serviços com preços, durações e categorias.</p>
            </div>
        </div>
    </div>
</body>
</html>
