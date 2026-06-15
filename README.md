# 🔧 AR Retífica — Sistema de Gerenciamento para Oficinas

Sistema web completo para gestão de oficinas mecânicas, desenvolvido em PHP com arquitetura MVC. Permite o controle de clientes, veículos, serviços, peças, orçamentos e histórico de atendimentos em uma interface moderna e responsiva.

## ✨ Funcionalidades

- **Dashboard** — visão geral das métricas da oficina
- **Clientes** — cadastro, histórico de atendimentos e LTV (valor do cliente)
- **Veículos** — gerenciamento de frotas vinculadas a clientes
- **Serviços** — catálogo com categorias, precificação e procedimentos padrão
- **Peças** — controle de estoque e precificação
- **Orçamentos** — criação e acompanhamento de orçamentos
- **Quadro Kanban** — acompanhamento visual do status das ordens de serviço
- **Histórico** — registro completo de atendimentos por cliente

---

## 🛠️ Tecnologias Utilizadas

- **PHP 8+** — back-end e renderização de views
- **Arquitetura MVC** — separação entre Models, Views e Controllers
- **MySQL** — banco de dados relacional
- **Composer** — gerenciamento de dependências
- **Tailwind CSS** — estilização e design responsivo
- **HTML5** — estrutura das páginas

---

## 📁 Estrutura do Projeto

```
oficina-sistema/
├── app/
│   ├── Config/          # Configurações da aplicação
│   ├── Controllers/     # Controladores (lógica de requisição)
│   ├── core/            # Núcleo do framework MVC
│   ├── DAO/             # Acesso ao banco de dados
│   └── Models/
│       ├── entity/      # Entidades do sistema
│       └── kanban/      # Lógica do quadro Kanban
├── public/              # Ponto de entrada público (index.php)
├── resources/
│   ├── css/             # Estilos customizados
│   └── views/           # Templates de cada módulo
│       ├── categorias/
│       ├── clientes/
│       ├── dashboard/
│       ├── historicos/
│       ├── kanban/
│       ├── layouts/
│       ├── orcamento/
│       ├── pecas/
│       ├── servicos/
│       └── veiculos/
├── src/                 # Scripts auxiliares
├── composer.json
└── tailwind.config.js
```

---

## 🚀 Como Executar Localmente

### Pré-requisitos

- PHP 8+
- MySQL
- Composer
- Servidor local (XAMPP, Laragon ou similar)

### Passo a passo

```bash
# 1. Clone o repositório
git clone https://github.com/EdnieRoglin/oficina-sistema.git

# 2. Acesse a pasta do projeto
cd oficina-sistema

# 3. Instale as dependências
composer install

# 4. Configure o banco de dados
# Crie um banco de dados MySQL e importe o arquivo SQL (em breve)

# 5. Configure a conexão
# Edite o arquivo de configuração em app/Config/ com seus dados de acesso

# 6. Acesse no navegador
# http://localhost/oficina-sistema/public
```

---

## 📌 Status do Projeto

🚧 **Em desenvolvimento ativo** — novas funcionalidades sendo adicionadas continuamente.

---

## 👨‍💻 Autor

Desenvolvido por **Ednie Röglin Martins**

- LinkedIn: [linkedin.com/in/ednie-roglin-martins](https://www.linkedin.com/in/ednie-roglin-martins)
- GitHub: [github.com/EdnieRoglin](https://github.com/EdnieRoglin)
