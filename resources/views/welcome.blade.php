<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Na Trave | O Melhor do Futebol</title>
    <style>
        :root {
            --primary: #00875a;
            --primary-dark: #005c3d;
            --accent: #ffd100;
            --dark: #121212;
            --gray-dark: #1e1e1e;
            --gray-light: #f4f5f7;
            --text-dark: #222222;
            --text-muted: #666666;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--gray-light);
            color: var(--text-dark);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        /* Header */
        header {
            background-color: var(--dark);
            color: var(--white);
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--white);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .logo span {
            color: var(--accent);
        }

        nav ul {
            display: flex;
            gap: 1.5rem;
        }

        nav a {
            font-weight: 600;
            font-size: 0.95rem;
            transition: color 0.2s;
        }

        nav a:hover {
            color: var(--accent);
        }

        /* Layout Container */
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1.5rem;
            display: grid;
            grid-template-columns: 2.5fr 1fr;
            gap: 2rem;
        }

        /* Post em Destaque */
        .featured-post {
            position: relative;
            background: var(--dark);
            border-radius: 12px;
            overflow: hidden;
            color: var(--white);
            margin-bottom: 2rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .featured-img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            opacity: 0.6;
            transition: opacity 0.3s, transform 0.3s;
        }

        .featured-post:hover .featured-img {
            opacity: 0.7;
            transform: scale(1.02);
        }

        .featured-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 2rem;
            background: linear-gradient(transparent, rgba(0,0,0,0.9));
        }

        .tag {
            background-color: var(--primary);
            color: var(--white);
            padding: 0.3rem 0.8rem;
            border-radius: 4px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 0.8rem;
        }

        .featured-title {
            font-size: 2rem;
            line-height: 1.2;
            margin-bottom: 0.5rem;
        }

        .post-meta {
            font-size: 0.85rem;
            color: #ccc;
        }

        /* Feed de Notícias */
        .section-title {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 3px solid var(--primary);
            text-transform: uppercase;
        }

        .posts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
        }

        .card {
            background: var(--white);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }

        .card-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-body {
            padding: 1.2rem;
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: 700;
            margin: 0.5rem 0;
            line-height: 1.3;
        }

        .card-excerpt {
            font-size: 0.9rem;
            color: var(--text-muted);
            margin-bottom: 1rem;
        }

        /* Sidebar */
        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .widget {
            background: var(--white);
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }

        .newsletter-widget {
            background: var(--dark);
            color: var(--white);
        }

        .newsletter-widget p {
            font-size: 0.9rem;
            margin: 0.8rem 0 1.2rem;
            color: #ccc;
        }

        .newsletter-form input {
            width: 100%;
            padding: 0.8rem;
            border: none;
            border-radius: 4px;
            margin-bottom: 0.8rem;
            font-size: 0.9rem;
        }

        .newsletter-form button {
            width: 100%;
            padding: 0.8rem;
            background-color: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 4px;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s;
        }

        .newsletter-form button:hover {
            background-color: var(--primary-dark);
        }

        .popular-list {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .popular-item {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .popular-number {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary);
            min-width: 25px;
        }

        .popular-title {
            font-size: 0.9rem;
            font-weight: 600;
            line-height: 1.3;
        }

        /* Rodapé */
        footer {
            background-color: var(--dark);
            color: var(--white);
            text-align: center;
            padding: 2rem;
            margin-top: 3rem;
            border-top: 4px solid var(--primary);
        }

        footer p {
            font-size: 0.9rem;
            color: #888;
        }

        /* Responsividade */
        @media (max-width: 900px) {
            .container {
                grid-template-columns: 1fr;
            }
            .header-container {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>
<body>

<!-- Cabeçalho -->
<header>
    <div class="header-container">
        <a href="#" class="logo">Na <span>Trave</span></a>
        <nav>
            <ul>
                <li><a href="#">Brasileirão</a></li>
                <li><a href="#">Champions League</a></li>
                <li><a href="#">Mercado da Bola</a></li>
                <li><a href="#">Táticas</a></li>
                <li><a href="#">Opinião</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Conteúdo Principal -->
<div class="container">
    <main>
        <!-- Post em Destaque Principal -->
        <article class="featured-post">
            <a href="#">
                <img src="https://images.unsplash.com/photo-1508098682722-e99c43a406b2?auto=format&fit=crop&w=1200&q=80" alt="Estádio de futebol lotado" class="featured-img">
                <div class="featured-content">
                    <span class="tag">Análise Tática</span>
                    <h2 class="featured-title">A revolução dos pontas invertidos no futebol moderno</h2>
                    <div class="post-meta">Por Carlos Silva • 20 de Maio, 2024</div>
                </div>
            </a>
        </article>

        <!-- Lista de Artigos Recentes -->
        <h2 class="section-title">Últimas do Futebol</h2>
        <div class="posts-grid">

            <article class="card">
                <a href="#">
                    <img src="https://images.unsplash.com/photo-1579952363873-27f3bade9f55?auto=format&fit=crop&w=600&q=80" alt="Bola de futebol no gramado" class="card-img">
                    <div class="card-body">
                        <span class="tag">Mercado da Bola</span>
                        <h3 class="card-title">Promessa sul-americana desperta interesse de gigantes europeus</h3>
                        <p class="card-excerpt">Valores da negociação podem ultrapassar a marca dos 50 milhões de euros nesta janela.</p>
                        <div class="post-meta">Há 2 horas</div>
                    </div>
                </a>
            </article>

            <article class="card">
                <a href="#">
                    <img src="https://images.unsplash.com/photo-1522778119026-d647f0596c20?auto=format&fit=crop&w=600&q=80" alt="Estádio iluminado à noite" class="card-img">
                    <div class="card-body">
                        <span class="tag">Champions League</span>
                        <h3 class="card-title">Guia Completo: O que esperar da fase final do torneio europeu</h3>
                        <p class="card-excerpt">Analisamos os confrontos, pontos fortes e os favoritos a erguer a orelhuda nesta temporada.</p>
                        <div class="post-meta">Há 5 horas</div>
                    </div>
                </a>
            </article>

            <article class="card">
                <a href="#">
                    <img src="https://images.unsplash.com/photo-1518091043644-c1d4457512c6?auto=format&fit=crop&w=600&q=80" alt="Chuteira de futebol" class="card-img">
                    <div class="card-body">
                        <span class="tag">Brasileirão</span>
                        <h3 class="card-title">5 destaques do campeonato que merecem uma chance na Seleção</h3>
                        <p class="card-excerpt">Jogadores que vêm mantendo regularidade e números impressionantes na temporada nacional.</p>
                        <div class="post-meta">Há 1 dia</div>
                    </div>
                </a>
            </article>

        </div>
    </main>

    <!-- Barra Lateral -->
    <aside class="sidebar">
        <!-- Newsletter -->
        <div class="widget newsletter-widget">
            <h3 style="color: var(--accent);">Resenha VIP</h3>
            <p>Receba análises exclusivas e as principais notícias do futebol direto no seu e-mail.</p>
            <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Inscrição realizada!');">
                <input type="email" placeholder="Seu melhor e-mail" required>
                <button type="submit">Inscrever-se</button>
            </form>
        </div>

        <!-- Mais Lidas -->
        <div class="widget">
            <h3 class="section-title">Mais Lidas</h3>
            <div class="popular-list">
                <div class="popular-item">
                    <span class="popular-number">1</span>
                    <a href="#" class="popular-title">Entenda a nova regra do impedimento testada pela FIFA</a>
                </div>
                <div class="popular-item">
                    <span class="popular-number">2</span>
                    <a href="#" class="popular-title">Os 10 maiores salários do futebol mundial em 2024</a>
                </div>
                <div class="popular-item">
                    <span class="popular-number">3</span>
                    <a href="#" class="popular-title">Por que a pré-temporada define os campeões de maio?</a>
                </div>
            </div>
        </div>
    </aside>
</div>

<!-- Rodapé -->
<footer>
    <p>&copy; 2024 Na Trave - Todos os direitos reservados. Feito com paixão pelo futebol.</p>
</footer>

</body>
</html>