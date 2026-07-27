# BeautyPro

SaaS para Salão de Beleza - Sistema de gerenciamento profissional para salões.

## 🎯 Funcionalidades

- Agendamento de clientes
- Gestão de serviços
- Controle de funcionários
- Relatórios e análises

## 📋 Requisitos

- PHP 8.0+
- Node.js 14+
- Laravel 9+

## ⚙️ Instalação

```bash
# Clone o repositório
git clone https://github.com/spservicos17-gif/BeautyPro.git
cd BeautyPro

# Instale as dependências
composer install
npm install

# Configure o arquivo .env
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate

# Execute as migrações
php artisan migrate --seed

# Inicie o servidor
php artisan serve
```

Acesse em: http://localhost:8000

## 📄 Licença

MIT
