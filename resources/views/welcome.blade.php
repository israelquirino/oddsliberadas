<!DOCTYPE1 html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabor & Arte | Blog de Culinária</title>
    <style>
        :root {
            --primary: #e67e22;
            --primary-dark: #d35400;
            --text-dark: #2c3e50;
            --text-light: #7f8c8d;
            --bg-light: #f8f9fa;
            --white: #ffffff;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --radius: 8px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background-color: var(--bg-light);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* Header & Nav */
        header {
            background-color: var(--white);
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--primary);
        }

        .logo span {
            color: var(--text-dark);
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 1.5rem;
        }

        nav a {
            font-weight: 600;
            transition: color 0.2s;
        }

        nav a:hover {
            color: var(--primary);
        }

        /* Layout Grid */
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1.5rem;
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        @media (min-width: 900px) {
            .container {
                grid-template-columns: 2.5fr 1fr;
            }
        }

        /* Hero / Featured Post */
        .featured-post {
            background: var(--white);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
        }

        .featured-post img {
            width: 100%;
            height: 350px;
            object-fit: cover;
        }

        .featured-content {
            padding: 1.5rem;
        }

        .tag {
            display: inline-block;
            background: var(--primary);
            color: var(--white);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }

        .post-title {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }

        .post-meta {
            font-size: 0.85rem;
            color: var(--text-light);
            margin-bottom: 1rem;
        }

        .post-excerpt {
            color: var(--text-light);
            margin-bottom: 1rem;
        }

        /* Posts Grid */
        .posts-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        @media (min-width: 600px) {
            .posts-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .post-card {
            background: var(--white);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            display: flex;
            flex-direction: column;
        }

        .post-card img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }

        .post-card-content {
            padding: 1.25rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .post-card-content h3 {
            font-size: 1.2rem;
            margin: 0.5rem 0;
        }

        .read-more {
            margin-top: auto;
            color: var(--primary);
            font-weight: 700;
            display: inline-block;
            padding-top: 1rem;
        }

        .read-more:hover {
            color: var(--primary-dark);
        }

        /* Sidebar */
        .sidebar-widget {
            background: var(--white);
            padding: 1.5rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
        }

        .widget-title {
            font-size: 1.2rem;
            border-bottom: 2px solid var(--primary);
            padding-bottom: 0.5rem;
            margin-bottom: 1rem;
        }

        .author-box {
            text-align: center;
        }

        .author-box img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 1rem;
            object-fit: cover;
        }

        .newsletter-form input {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .newsletter-form button {
            width: 100%;
            padding: 0.75rem;
            background: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 4px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s;
        }

        .newsletter-form button:hover {
            background: var(--primary-dark);
        }

        /* Footer */
        footer {
            background: var(--text-dark);
            color: var(--white);
            text-align: center;
            padding: 2rem 1.5rem;
            margin-top: 3rem;
        }

        footer p {
            color: var(--text-light);
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <div class="header-container">
        <a href="#" class="logo">Sabor<span>&Arte</span></a>
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Receitas</a></li>
                <li><a href="#">Dicas</a></li>
                <li><a href="#">Sobre</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Main Container -->
<div class="container">

    <!-- Conteúdo Principal -->
    <main>
        <!-- Post em Destaque -->
        <article class="featured-post">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=1000&q=80" alt="Massa caseira com molho artesanal">
            <div class="featured-content">
                <span class="tag">Destaque</span>
                <h2 class="post-title"><a href="#">O Segredo da Massa Caseira Perfeita com Apenas 3 Ingredientes</a></h2>
                <div class="post-meta">Por <strong>Chef Ana Silva</strong> em <strong>25 de Outubro, 2026</strong> • 8 min de leitura</div>
                <p class="post-excerpt">Aprenda a verdadeira técnica italiana para preparar fettuccine fresco em casa sem complicações e com ingredientes que você já tem na dispensa.</p>
                <a href="#" class="read-more">Ler receita completa &rarr;</a>
            </div>
        </article>

        <!-- Grid de Posts Recentes -->
        <section class="posts-grid">

            <article class="post-card">
                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=600&q=80" alt="Pizza artesanal">
                <div class="post-card-content">
                    <span class="tag">Pratos Principais</span>
                    <h3><a href="#">Pizza de Fermentação Natural: Guia Definitivo</a></h3>
                    <div class="post-meta">20 de Out, 2026</div>
                    <p class="post-excerpt">Como dominar a fermentação lenta para obter uma massa leve, crocante e aerada.</p>
                    <a href="#" class="read-more">Ver receita &rarr;</a>
                </div>
            </article>

            <article class="post-card">
                <img src="https://images.unsplash.com/photo-1551024709-8f23befc6f87?auto=format&fit=crop&w=600&q=80" alt="Sobremesa de chocolate">
                <div class="post-card-content">
                    <span class="tag">Sobremesas</span>
                    <h3><a href="#">Mousse de Chocolate Amargo 70% Crespo</a></h3>
                    <div class="post-meta">18 de Out, 2026</div>
                    <p class="post-excerpt">Uma sobremesa sofisticada, aerada e com o equilíbrio perfeito da intensidade do cacau.</p>
                    <a href="#" class="read-more">Ver receita &rarr;</a>
                </div>
            </article>

            <article class="post-card">
                <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=600&q=80" alt="Salada fresca de verão">
                <div class="post-card-content">
                    <span class="tag">Saudável</span>
                    <h3><a href="#">Salada de Quinoa com Vegetais Tostados</a></h3>
                    <div class="post-meta">15 de Out, 2026</div>
                    <p class="post-excerpt">Refeição leve, nutritiva e cheia de textura para os dias quentes de verão.</p>
                    <a href="#" class="read-more">Ver receita &rarr;</a>
                </div>
            </article>

            <article class="post-card">
                <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=600&q=80" alt="Xícara de café especial">
                <div class="post-card-content">
                    <span class="tag">Bebidas</span>
                    <h3><a href="#">Como Escolhar o Grão de Café Ideal</a></h3>
                    <div class="post-meta">10 de Out, 2026</div>
                    <p class="post-excerpt">Entenda as notas sensoriais, tipos de moagem e perfis de torra para o seu método.</p>
                    <a href="#" class="read-more">Ler artigo &rarr;</a>
                </div>
            </article>

        </section>
    </main>

    <!-- Sidebar -->
    <aside>
        <!-- Autor -->
        <div class="sidebar-widget author-box">
            <img src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?auto=format&fit=crop&w=200&q=80" alt="Foto do Autor">
            <h3 class="widget-title" style="border:none; padding:0; margin-bottom:0.5rem;">Ana Silva</h3>
            <p>Apaixonada pela gastronomia simples e cheia de afeto. Compartilho receitas testadas e aprovadas para o seu dia a dia.</p>
        </div>

        <!-- Newsletter -->
        <div class="sidebar-widget">
            <h3 class="widget-title">Receba Receitas</h3>
            <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 1rem;">Inscreva-se para receber novas receitas semanalmente no seu e-mail.</p>
            <form class="newsletter-form" onsubmit="event.preventDefault();">
                <input type="email" placeholder="Seu melhor e-mail" required>
                <button type="submit">Inscrever-se</button>
            </form>
        </div>
    </aside>

</div>

<!-- Footer -->
<footer>
    <p>&copy; 2026 Sabor & Arte. Todos os direitos reservados.</p>
</footer>

</body>
</html>