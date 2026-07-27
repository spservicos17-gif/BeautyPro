<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - BeautyPro</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow">
            <div class="p-6">
                <h1 class="text-2xl font-bold text-primary">BeautyPro</h1>
            </div>
            <nav class="mt-6">
                <a href="#" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">📊 Dashboard</a>
                <a href="#" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">📅 Agendamentos</a>
                <a href="#" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">👥 Clientes</a>
                <a href="#" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">💼 Serviços</a>
                <a href="#" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">👔 Funcionários</a>
                <a href="#" class="block px-6 py-3 text-gray-700 hover:bg-gray-100">⚙️ Configurações</a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-auto">
            <header class="bg-white shadow">
                <div class="flex justify-between items-center p-6">
                    <h2 class="text-2xl font-semibold text-gray-900">Dashboard</h2>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600">{{ auth()->user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-red-600 hover:text-red-800">Sair</button>
                        </form>
                    </div>
                </div>
            </header>

            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
                    <div class="card">
                        <h3 class="text-gray-500 text-sm font-semibold">Agendamentos Hoje</h3>
                        <p class="text-3xl font-bold text-primary mt-2">0</p>
                    </div>
                    <div class="card">
                        <h3 class="text-gray-500 text-sm font-semibold">Clientes</h3>
                        <p class="text-3xl font-bold text-primary mt-2">0</p>
                    </div>
                    <div class="card">
                        <h3 class="text-gray-500 text-sm font-semibold">Receita Mês</h3>
                        <p class="text-3xl font-bold text-primary mt-2">R$ 0,00</p>
                    </div>
                    <div class="card">
                        <h3 class="text-gray-500 text-sm font-semibold">Funcionários</h3>
                        <p class="text-3xl font-bold text-primary mt-2">0</p>
                    </div>
                </div>

                <div class="card">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Próximos Agendamentos</h3>
                    <p class="text-gray-600">Nenhum agendamento próximo.</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
