<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radical Skateboard & Culture</title>
    <style>
        :root {
            --primary: #ff4500;
            --dark: #121212;
            --card-bg: #1e1e1e;
            --light: #f4f4f4;
            --gray: #a0a0a0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--dark);
            color: var(--light);
            line-height: 1.6;
        }

        /* Header / Navbar */
        header {
            background-color: rgba(18, 18, 18, 0.95);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            border-bottom: 2px solid var(--primary);
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--light);
        }

        .logo span {
            color: var(--primary);
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        nav a {
            color: var(--light);
            text-decoration: none;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            transition: color 0.3s;
        }

        nav a:hover {
            color: var(--primary);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.8)),
            url('https://images.unsplash.com/photo-1520045892732-304bc3ac5d8e?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 1rem;
        }

        .hero h1 {
            font-size: 4rem;
            text-transform: uppercase;
            font-weight: 900;
            margin-bottom: 1rem;
            letter-spacing: 3px;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin-bottom: 2rem;
            color: var(--gray);
        }

        .btn {
            display: inline-block;
            background: var(--primary);
            color: var(--light);
            padding: 0.8rem 2rem;
            border: none;
            font-weight: 700;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 4px;
            transition: transform 0.2s, background 0.3s;
            cursor: pointer;
        }

        .btn:hover {
            background: #e03d00;
            transform: translateY(-2px);
        }

        /* Highlights / Categorias */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 5rem 2rem;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            text-transform: uppercase;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background: var(--primary);
            margin: 0.5rem auto 0;
        }

        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .card {
            background: var(--card-bg);
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s;
            border: 1px solid #333;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .card-content {
            padding: 1.5rem;
        }

        .card-content h3 {
            margin-bottom: 0.5rem;
            font-size: 1.3rem;
        }

        .card-content p {
            color: var(--gray);
            font-size: 0.95rem;
            margin-bottom: 1rem;
        }

        /* Footer */
        footer {
            background: #0a0a0a;
            text-align: center;
            padding: 2rem;
            border-top: 1px solid #222;
            color: var(--gray);
            font-size: 0.9rem;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            nav ul {
                display: none; /* Em um projeto real, adicione um menu hambúrguer */
            }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">Street<span>Skate</span></div>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#produtos">Produtos</a></li>
            <li><a href="#pistas">Pistas</a></li>
            <li><a href="#contato">Contato</a></li>
        </ul>
    </nav>
</header>

<section class="hero" id="home">
    <h1>Viva o Lifestyle</h1>
    <p>Shapes de alta performance, vestuário de rua e tudo o que você precisa para dominar o asfalto.</p>
    <a href="#produtos" class="btn">Ver Coleção</a>
</section>

<main class="container" id="produtos">
    <h2 class="section-title">Destaques</h2>
    <div class="cards-grid">
        <div class="card">
            <img src="https://images.unsplash.com/photo-1547447134-cd3f5c716030?auto=format&fit=crop&w=600&q=80" alt="Shape de Skate">
            <div class="card-content">
                <h3>Shapes Pro Model</h3>
                <p>Feitos em Maple canadense de alta resistência para garantir a batida perfeita no pop.</p>
                <a href="#" class="btn" style="padding: 0.5rem 1rem; font-size: 0.8rem;">Detalhes</a>
            </div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?auto=format&fit=crop&w=600&q=80" alt="Tênis de Skate">
            <div class="card-content">
                <h3>Sneakers Streetwear</h3>
                <p>Solados vulcanizados projetados para máximo grip na lixa e maior durabilidade.</p>
                <a href="#" class="btn" style="padding: 0.5rem 1rem; font-size: 0.8rem;">Detalhes</a>
            </div>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1564982752979-3f7bc974d29a?auto=format&fit=crop&w=600&q=80" alt="Rodas e Trucks">
            <div class="card-content">
                <h3>Hardware Complete</h3>
                <p>Trucks leves em alumínio e rodas de poliuretano de alta resiliência para qualquer terreno.</p>
                <a href="#" class="btn" style="padding: 0.5rem 1rem; font-size: 0.8rem;">Detalhes</a>
            </div>
        </div>
    </div>
</main>

<footer>
    <p>&copy; 2026 StreetSkate Culture. Todos os direitos reservados.</p>
</footer>

</body>
</html>