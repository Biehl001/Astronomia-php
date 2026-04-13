# 🌌 Cosmos News — Portal de Astronomia

Portal de notícias sobre astronomia desenvolvido em **PHP + MySQL**, com cadastro de usuários, publicação de notícias, categorias e busca.

## ✨ Funcionalidades

- Cadastro e login de usuários (autenticação por sessão)
- Publicação, edição e exclusão de notícias (CRUD)
- Upload de imagens de capa
- Categorias (Planetas, Estrelas, Galáxias, Buracos Negros, etc.)
- Notícias em destaque e contador de visualizações
- Sistema de busca
- Página de perfil e gerenciamento de "Minhas Notícias"

## 🛠️ Tecnologias

- PHP 8+ (PDO)
- MySQL / MariaDB
- HTML, CSS e JavaScript (vanilla)
- Servidor local: XAMPP / Apache

## 📂 Estrutura

```
Astronomia-php/
├── config/        # Conexão com o banco e autenticação
├── includes/      # header.php e footer.php
├── pages/         # Perfil, formulário de notícia, gerenciamento
├── assets/        # CSS, JS, imagens
├── uploads/       # Imagens enviadas pelos usuários
├── database.sql   # Estrutura do banco
└── seed_noticias.sql
```

## 🚀 Como rodar localmente

1. Instale o [XAMPP](https://www.apachefriends.org/) e inicie **Apache** e **MySQL**.
2. Clone o projeto dentro de `C:/xampp/htdocs/`:
   ```bash
   git clone <repo> Astronomia-php
   ```
3. Importe o banco no phpMyAdmin:
   - Execute `database.sql`
   - (Opcional) Execute `seed_noticias.sql` para popular notícias de exemplo
4. Configure `config/database.php` apontando para seu MySQL local:
   ```php
   $host = 'localhost';
   $dbname = 'portal_astronomia';
   $username = 'root';
   $password = '';
   ```
5. Acesse: <http://localhost/Astronomia-php>

## 🔐 Aviso de segurança

O arquivo `config/database.php` contém credenciais reais de produção (InfinityFree). **Recomendado:** removê-las do repositório, trocar a senha do banco e usar variáveis de ambiente.

## 📄 Licença

Projeto acadêmico — uso livre para fins educacionais.
