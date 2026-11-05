<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cozinha de Afeto | Receitas Caseiras & Sabores de Família</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Playfair Display & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,800;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cozinha: {
                            bg: '#FAF7F2',       /* Creme Suave */
                            card: '#FFFFFF',     /* Branco */
                            terracota: '#C85A32',/* Terracota Quente */
                            terracotaHover: '#B04924',
                            amber: '#E8A838',    /* Amarelo Quente / Estrelas */
                            brown: '#3A2820',    /* Marrom Escuro / Texto */
                            lightBrown: '#7A6258',
                            green: '#4A7C59',    /* Verde Erva Fresca */
                            sage: '#EAF0EC',     /* Fundo Verde Claro */
                            creamBorder: '#EFE8DC'
                        }
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                    boxShadow: {
                        'cozy': '0 10px 30px -5px rgba(58, 40, 32, 0.08)',
                        'cozy-hover': '0 20px 35px -5px rgba(200, 90, 50, 0.15)',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #FAF7F2;
            color: #3A2820;
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }

        .recipe-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .recipe-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 35px -5px rgba(200, 90, 50, 0.15);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #FAF7F2;
        }
        ::-webkit-scrollbar-thumb {
            background: #D8CEBE;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #C85A32;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between selection:bg-cozinha-terracota selection:text-white">

<!-- HEADER / NAVEGAÇÃO -->
<header class="sticky top-0 z-50 bg-cozinha-bg/90 backdrop-blur-md border-b border-cozinha-creamBorder">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <a href="#" class="flex items-center gap-3 group">
                <div class="w-11 h-11 rounded-2xl bg-cozinha-terracota/10 flex items-center justify-center text-cozinha-terracota group-hover:bg-cozinha-terracota group-hover:text-white transition-all duration-300">
                    <i data-lucide="utensils-crossed" class="w-6 h-6"></i>
                </div>
                <div>
                        <span class="font-serif font-bold text-2xl tracking-tight text-cozinha-brown block leading-none">
                            Cozinha de <span class="text-cozinha-terracota italic">Afeto</span>
                        </span>
                    <span class="text-[11px] text-cozinha-lightBrown font-medium tracking-wider uppercase">Receitas de Família</span>
                </div>
            </a>

            <!-- Nav Links Desktop -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-cozinha-brown">
                <a href="#hero" class="text-cozinha-terracota hover:text-cozinha-terracotaHover transition-colors">Início</a>
                <a href="#categorias" class="hover:text-cozinha-terracota transition-colors">Categorias</a>
                <a href="#receitas" class="hover:text-cozinha-terracota transition-colors">Receitas</a>
                <a href="#dica-semana" class="hover:text-cozinha-terracota transition-colors">Segredos da Vovó</a>
                <a href="#newsletter" class="hover:text-cozinha-terracota transition-colors">E-book Grátis</a>
            </nav>

            <!-- Campo de Busca & Mobile Toggle -->
            <div class="flex items-center gap-3">
                <div class="relative hidden sm:block w-48 lg:w-64">
                    <input
                            type="text"
                            id="searchInput"
                            placeholder="Buscar receita ou ingrediente..."
                            class="w-full pl-9 pr-4 py-2 text-xs rounded-full bg-white border border-cozinha-creamBorder focus:outline-none focus:border-cozinha-terracota text-cozinha-brown placeholder-cozinha-lightBrown transition-all shadow-sm"
                            onkeyup="filterRecipes()"
                    />
                    <i data-lucide="search" class="w-4 h-4 text-cozinha-lightBrown absolute left-3 top-2.5"></i>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" aria-label="Menu" class="md:hidden p-2.5 rounded-xl bg-white border border-cozinha-creamBorder text-cozinha-brown hover:text-cozinha-terracota focus:outline-none">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-b border-cozinha-creamBorder px-4 pt-3 pb-6 space-y-3">
        <div class="relative mb-4">
            <input
                    type="text"
                    id="mobileSearchInput"
                    placeholder="Buscar receita..."
                    class="w-full pl-9 pr-4 py-2.5 text-xs rounded-full bg-cozinha-bg border border-cozinha-creamBorder focus:outline-none focus:border-cozinha-terracota"
                    onkeyup="syncMobileSearch(this.value)"
            />
            <i data-lucide="search" class="w-4 h-4 text-cozinha-lightBrown absolute left-3 top-3"></i>
        </div>
        <a href="#hero" class="block py-2 text-cozinha-terracota font-bold border-b border-cozinha-creamBorder">Início</a>
        <a href="#categorias" class="block py-2 text-cozinha-brown hover:text-cozinha-terracota font-medium border-b border-cozinha-creamBorder">Categorias</a>
        <a href="#receitas" class="block py-2 text-cozinha-brown hover:text-cozinha-terracota font-medium border-b border-cozinha-creamBorder">Receitas</a>
        <a href="#dica-semana" class="block py-2 text-cozinha-brown hover:text-cozinha-terracota font-medium border-b border-cozinha-creamBorder">Segredos da Vovó</a>
        <a href="#newsletter" class="block py-2 text-cozinha-brown hover:text-cozinha-terracota font-medium">E-book Grátis</a>
    </div>
</header>

<!-- HERO SECTION / RECEITA DESTAQUE DO DIA -->
<section id="hero" class="py-8 md:py-14 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl border border-cozinha-creamBorder shadow-cozy overflow-hidden grid lg:grid-cols-12 gap-0">

            <!-- Hero Left Content -->
            <div class="lg:col-span-6 p-6 sm:p-10 lg:p-12 flex flex-col justify-between">
                <div>
                    <!-- Tag e Avaliação -->
                    <div class="flex items-center justify-between gap-2 mb-4 flex-wrap">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-cozinha-terracota/10 text-cozinha-terracota text-xs font-bold uppercase tracking-wider">
                                <i data-lucide="sparkles" class="w-3.5 h-3.5"></i> Receita do Dia
                            </span>
                        <div class="flex items-center gap-1 text-cozinha-amber text-xs font-bold">
                            <i data-lucide="star" class="w-4 h-4 fill-cozinha-amber"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-cozinha-amber"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-cozinha-amber"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-cozinha-amber"></i>
                            <i data-lucide="star" class="w-4 h-4 fill-cozinha-amber"></i>
                            <span class="text-cozinha-brown ml-1">(4.9 • 128 avaliações)</span>
                        </div>
                    </div>

                    <!-- Título Principal -->
                    <h1 class="font-serif font-bold text-3xl sm:text-4xl lg:text-5xl text-cozinha-brown leading-tight mb-4">
                        Bolo de Cenoura Fofinho com Vulcão de Chocolate
                    </h1>

                    <p class="text-cozinha-lightBrown text-sm sm:text-base leading-relaxed mb-6">
                        A clássica receita da vovó reinventada com uma cobertura ultra cremosa de brigadeiro gourmet crocante. Fica pronto rápido e enche a casa com cheiro de infância!
                    </p>

                    <!-- Informações Rápidas (Prep time, Dificuldade, Porções) -->
                    <div class="grid grid-cols-3 gap-3 p-4 rounded-2xl bg-cozinha-bg border border-cozinha-creamBorder mb-8">
                        <div class="flex flex-col items-center text-center">
                            <i data-lucide="clock" class="w-5 h-5 text-cozinha-terracota mb-1"></i>
                            <span class="text-[10px] text-cozinha-lightBrown uppercase font-semibold">Preparo</span>
                            <span class="text-xs sm:text-sm font-bold text-cozinha-brown">45 min</span>
                        </div>
                        <div class="flex flex-col items-center text-center border-x border-cozinha-creamBorder">
                            <i data-lucide="chef-hat" class="w-5 h-5 text-cozinha-terracota mb-1"></i>
                            <span class="text-[10px] text-cozinha-lightBrown uppercase font-semibold">Nível</span>
                            <span class="text-xs sm:text-sm font-bold text-cozinha-brown">Fácil</span>
                        </div>
                        <div class="flex flex-col items-center text-center">
                            <i data-lucide="users" class="w-5 h-5 text-cozinha-terracota mb-1"></i>
                            <span class="text-[10px] text-cozinha-lightBrown uppercase font-semibold">Rendimento</span>
                            <span class="text-xs sm:text-sm font-bold text-cozinha-brown">10 fatias</span>
                        </div>
                    </div>
                </div>

                <!-- Rodapé do Card do Hero com Autor e Botão -->
                <div class="flex items-center justify-between pt-4 border-t border-cozinha-creamBorder gap-4 flex-wrap">
                    <div class="flex items-center gap-3">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=100&auto=format&fit=crop&q=80" alt="Dona Helena" class="w-10 h-10 rounded-full object-cover border-2 border-cozinha-terracota" onerror="this.src='https://placehold.co/100x100/C85A32/FFFFFF?text=DH'" />
                        <div>
                            <span class="block text-xs font-bold text-cozinha-brown">Dona Helena</span>
                            <span class="text-[11px] text-cozinha-lightBrown">Chefe da Família</span>
                        </div>
                    </div>

                    <button onclick="openRecipeModal('Bolo de Cenoura Fofinho com Vulcão de Chocolate')" class="px-6 py-3 rounded-xl bg-cozinha-terracota hover:bg-cozinha-terracotaHover text-white font-bold text-xs uppercase tracking-wider transition-all transform hover:scale-105 shadow-md flex items-center gap-2">
                        Ver Receita Completa <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>

            <!-- Hero Right Image -->
            <div class="lg:col-span-6 relative min-h-[300px] lg:min-h-full">
                <img
                        src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?w=1000&auto=format&fit=crop&q=80"
                        alt="Bolo de Cenoura com Chocolate"
                        class="w-full h-full object-cover"
                        onerror="this.src='https://placehold.co/800x600/C85A32/FFFFFF?text=Bolo+de+Cenoura'"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-cozinha-brown/40 via-transparent to-transparent lg:hidden"></div>
            </div>

        </div>
    </div>
</section>

<!-- FILTROS DE CATEGORIA INTERATIVOS -->
<section id="categorias" class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-4">
            <h2 class="font-serif font-bold text-xl sm:text-2xl text-cozinha-brown flex items-center gap-2">
                <i data-lucide="layout-grid" class="w-5 h-5 text-cozinha-terracota"></i> Explore por Categoria
            </h2>
            <span class="text-xs text-cozinha-lightBrown font-medium hidden sm:inline">Escolha o que cozinhar hoje</span>
        </div>

        <!-- Category Pills -->
        <div class="flex items-center gap-2 sm:gap-3 overflow-x-auto pb-4 scrollbar-none" id="categoryContainer">
            <button onclick="filterCategory('todas')" class="cat-btn active px-5 py-2.5 rounded-full text-xs font-bold whitespace-nowrap bg-cozinha-terracota text-white shadow-sm transition-all">
                Todas
            </button>
            <button onclick="filterCategory('almoco')" class="cat-btn px-5 py-2.5 rounded-full text-xs font-bold whitespace-nowrap bg-white text-cozinha-brown border border-cozinha-creamBorder hover:border-cozinha-terracota transition-all">
                🍝 Almoço em Família
            </button>
            <button onclick="filterCategory('sobremesas')" class="cat-btn px-5 py-2.5 rounded-full text-xs font-bold whitespace-nowrap bg-white text-cozinha-brown border border-cozinha-creamBorder hover:border-cozinha-terracota transition-all">
                🍰 Doces & Sobremesas
            </button>
            <button onclick="filterCategory('paes')" class="cat-btn px-5 py-2.5 rounded-full text-xs font-bold whitespace-nowrap bg-white text-cozinha-brown border border-cozinha-creamBorder hover:border-cozinha-terracota transition-all">
                🍞 Pães & Broas
            </button>
            <button onclick="filterCategory('lanches')" class="cat-btn px-5 py-2.5 rounded-full text-xs font-bold whitespace-nowrap bg-white text-cozinha-brown border border-cozinha-creamBorder hover:border-cozinha-terracota transition-all">
                ☕ Lanches Rápidos
            </button>
            <button onclick="filterCategory('sopas')" class="cat-btn px-5 py-2.5 rounded-full text-xs font-bold whitespace-nowrap bg-white text-cozinha-brown border border-cozinha-creamBorder hover:border-cozinha-terracota transition-all">
                🍲 Sopas & Caldos
            </button>
        </div>
    </div>
</section>

<!-- GRID DE RECEITAS -->
<section id="receitas" class="py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center justify-between mb-8">
            <div>
                <span class="text-xs font-bold uppercase tracking-widest text-cozinha-terracota block">Cardápio Caseiro</span>
                <h2 class="font-serif font-bold text-3xl text-cozinha-brown">Receitas Favoritas</h2>
            </div>

            <span id="recipeCount" class="text-xs font-bold bg-cozinha-terracota/10 text-cozinha-terracota px-3 py-1.5 rounded-full">
                    Mostrando 6 receitas
                </span>
        </div>

        <!-- Grid Container -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8" id="recipesGrid">

            <!-- Card 1 -->
            <article class="recipe-card bg-white rounded-2xl border border-cozinha-creamBorder overflow-hidden flex flex-col justify-between" data-category="paes" data-time="90" data-name="pão caseiro trançado">
                <div>
                    <div class="relative h-52 overflow-hidden bg-cozinha-creamBorder">
                        <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?w=600&auto=format&fit=crop&q=80" alt="Pão Caseiro Trançado" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" onerror="this.src='https://placehold.co/600x400/EFE8DC/3A2820?text=P%C3%A3o+Caseiro'" />
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-white/90 backdrop-blur-md text-cozinha-brown font-bold text-[10px] uppercase tracking-wider">Pães & Broas</span>
                        <button onclick="toggleBookmark(this)" class="absolute top-3 right-3 p-2 rounded-full bg-white/90 text-cozinha-lightBrown hover:text-red-500 transition-colors shadow-sm" aria-label="Salvar">
                            <i data-lucide="heart" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-xs text-cozinha-lightBrown mb-3">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3.5 h-3.5 text-cozinha-terracota"></i> 1h 30m</span>
                            <span>•</span>
                            <span class="flex items-center gap-1"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-cozinha-terracota"></i> Média</span>
                        </div>
                        <h3 class="font-serif font-bold text-xl text-cozinha-brown mb-2 hover:text-cozinha-terracota transition-colors cursor-pointer" onclick="openRecipeModal('Pão Caseiro Trançado do Vovô')">
                            Pão Caseiro Trançado do Vovô
                        </h3>
                        <p class="text-cozinha-lightBrown text-xs leading-relaxed line-clamp-2">
                            Com casquinha dourada por fora e miolo incrivelmente macio por dentro. Perfeito para o café da tarde quentinho com manteiga.
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0 flex items-center justify-between border-t border-cozinha-creamBorder/60 mt-4 pt-4">
                    <div class="flex items-center gap-1 text-cozinha-amber text-xs font-bold">
                        <i data-lucide="star" class="w-3.5 h-3.5 fill-cozinha-amber"></i>
                        <span>4.9 (84)</span>
                    </div>
                    <button onclick="openRecipeModal('Pão Caseiro Trançado do Vovô')" class="text-xs font-bold text-cozinha-terracota hover:underline flex items-center gap-1">
                        Ver detalhes <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </button>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="recipe-card bg-white rounded-2xl border border-cozinha-creamBorder overflow-hidden flex flex-col justify-between" data-category="almoco" data-time="50" data-name="nhoque de batata ao molho sugo">
                <div>
                    <div class="relative h-52 overflow-hidden bg-cozinha-creamBorder">
                        <img src="https://images.unsplash.com/photo-1551183053-bf91a1d81141?w=600&auto=format&fit=crop&q=80" alt="Nhoque Caseiro" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" onerror="this.src='https://placehold.co/600x400/EFE8DC/3A2820?text=Nhoque+Caseiro'" />
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-white/90 backdrop-blur-md text-cozinha-brown font-bold text-[10px] uppercase tracking-wider">Almoço em Família</span>
                        <button onclick="toggleBookmark(this)" class="absolute top-3 right-3 p-2 rounded-full bg-white/90 text-cozinha-lightBrown hover:text-red-500 transition-colors shadow-sm" aria-label="Salvar">
                            <i data-lucide="heart" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-xs text-cozinha-lightBrown mb-3">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3.5 h-3.5 text-cozinha-terracota"></i> 50 min</span>
                            <span>•</span>
                            <span class="flex items-center gap-1"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-cozinha-terracota"></i> Média</span>
                        </div>
                        <h3 class="font-serif font-bold text-xl text-cozinha-brown mb-2 hover:text-cozinha-terracota transition-colors cursor-pointer" onclick="openRecipeModal('Nhoque de Batata com Molho de Tomate Rústico')">
                            Nhoque de Batata com Molho Rústico
                        </h3>
                        <p class="text-cozinha-lightBrown text-xs leading-relaxed line-clamp-2">
                            Nhoque leve de batata asterix derretendo na boca, acompanhado de molho caseiro de tomates frescos com manjericão.
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0 flex items-center justify-between border-t border-cozinha-creamBorder/60 mt-4 pt-4">
                    <div class="flex items-center gap-1 text-cozinha-amber text-xs font-bold">
                        <i data-lucide="star" class="w-3.5 h-3.5 fill-cozinha-amber"></i>
                        <span>5.0 (112)</span>
                    </div>
                    <button onclick="openRecipeModal('Nhoque de Batata com Molho de Tomate Rústico')" class="text-xs font-bold text-cozinha-terracota hover:underline flex items-center gap-1">
                        Ver detalhes <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </button>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="recipe-card bg-white rounded-2xl border border-cozinha-creamBorder overflow-hidden flex flex-col justify-between" data-category="sobremesas" data-time="40" data-name="pudim de leite condensado">
                <div>
                    <div class="relative h-52 overflow-hidden bg-cozinha-creamBorder">
                        <img src="https://images.unsplash.com/photo-1528975604071-b4dc52a2d18c?w=600&auto=format&fit=crop&q=80" alt="Pudim de Leite" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" onerror="this.src='https://placehold.co/600x400/EFE8DC/3A2820?text=Pudim+Liso'" />
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-white/90 backdrop-blur-md text-cozinha-brown font-bold text-[10px] uppercase tracking-wider">Doces & Sobremesas</span>
                        <button onclick="toggleBookmark(this)" class="absolute top-3 right-3 p-2 rounded-full bg-white/90 text-cozinha-lightBrown hover:text-red-500 transition-colors shadow-sm" aria-label="Salvar">
                            <i data-lucide="heart" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-xs text-cozinha-lightBrown mb-3">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3.5 h-3.5 text-cozinha-terracota"></i> 40 min</span>
                            <span>•</span>
                            <span class="flex items-center gap-1"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-cozinha-terracota"></i> Fácil</span>
                        </div>
                        <h3 class="font-serif font-bold text-xl text-cozinha-brown mb-2 hover:text-cozinha-terracota transition-colors cursor-pointer" onclick="openRecipeModal('Pudim de Leite Lisinho sem Furinhos')">
                            Pudim de Leite Lisinho sem Furinhos
                        </h3>
                        <p class="text-cozinha-lightBrown text-xs leading-relaxed line-clamp-2">
                            O segredo definitivo para assar o pudim perfeito, com calda dourada brilhante e textura aveludada.
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0 flex items-center justify-between border-t border-cozinha-creamBorder/60 mt-4 pt-4">
                    <div class="flex items-center gap-1 text-cozinha-amber text-xs font-bold">
                        <i data-lucide="star" class="w-3.5 h-3.5 fill-cozinha-amber"></i>
                        <span>4.8 (96)</span>
                    </div>
                    <button onclick="openRecipeModal('Pudim de Leite Lisinho sem Furinhos')" class="text-xs font-bold text-cozinha-terracota hover:underline flex items-center gap-1">
                        Ver detalhes <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </button>
                </div>
            </article>

            <!-- Card 4 -->
            <article class="recipe-card bg-white rounded-2xl border border-cozinha-creamBorder overflow-hidden flex flex-col justify-between" data-category="sopas" data-time="35" data-name="caldo verde tradicional">
                <div>
                    <div class="relative h-52 overflow-hidden bg-cozinha-creamBorder">
                        <img src="https://images.unsplash.com/photo-1547592166-23ac45744acd?w=600&auto=format&fit=crop&q=80" alt="Caldo Verde" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" onerror="this.src='https://placehold.co/600x400/EFE8DC/3A2820?text=Caldo+Verde'" />
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-white/90 backdrop-blur-md text-cozinha-brown font-bold text-[10px] uppercase tracking-wider">Sopas & Caldos</span>
                        <button onclick="toggleBookmark(this)" class="absolute top-3 right-3 p-2 rounded-full bg-white/90 text-cozinha-lightBrown hover:text-red-500 transition-colors shadow-sm" aria-label="Salvar">
                            <i data-lucide="heart" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-xs text-cozinha-lightBrown mb-3">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3.5 h-3.5 text-cozinha-terracota"></i> 35 min</span>
                            <span>•</span>
                            <span class="flex items-center gap-1"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-cozinha-terracota"></i> Fácil</span>
                        </div>
                        <h3 class="font-serif font-bold text-xl text-cozinha-brown mb-2 hover:text-cozinha-terracota transition-colors cursor-pointer" onclick="openRecipeModal('Caldo Verde Cremoso com Calabresa')">
                            Caldo Verde Cremoso com Calabresa
                        </h3>
                        <p class="text-cozinha-lightBrown text-xs leading-relaxed line-clamp-2">
                            Receita reconfortante para os dias frios. Couve fininha fresca, batata cremosa e rodelas crocantes de calabresa.
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0 flex items-center justify-between border-t border-cozinha-creamBorder/60 mt-4 pt-4">
                    <div class="flex items-center gap-1 text-cozinha-amber text-xs font-bold">
                        <i data-lucide="star" class="w-3.5 h-3.5 fill-cozinha-amber"></i>
                        <span>4.9 (67)</span>
                    </div>
                    <button onclick="openRecipeModal('Caldo Verde Cremoso com Calabresa')" class="text-xs font-bold text-cozinha-terracota hover:underline flex items-center gap-1">
                        Ver detalhes <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </button>
                </div>
            </article>

            <!-- Card 5 -->
            <article class="recipe-card bg-white rounded-2xl border border-cozinha-creamBorder overflow-hidden flex flex-col justify-between" data-category="lanches" data-time="25" data-name="pão de queijo mineiro">
                <div>
                    <div class="relative h-52 overflow-hidden bg-cozinha-creamBorder">
                        <img src="https://images.unsplash.com/photo-1598103442097-8b74394b95c6?w=600&auto=format&fit=crop&q=80" alt="Pão de Queijo" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" onerror="this.src='https://placehold.co/600x400/EFE8DC/3A2820?text=P%C3%A3o+de+Queijo'" />
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-white/90 backdrop-blur-md text-cozinha-brown font-bold text-[10px] uppercase tracking-wider">Lanches Rápidos</span>
                        <button onclick="toggleBookmark(this)" class="absolute top-3 right-3 p-2 rounded-full bg-white/90 text-cozinha-lightBrown hover:text-red-500 transition-colors shadow-sm" aria-label="Salvar">
                            <i data-lucide="heart" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-xs text-cozinha-lightBrown mb-3">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3.5 h-3.5 text-cozinha-terracota"></i> 25 min</span>
                            <span>•</span>
                            <span class="flex items-center gap-1"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-cozinha-terracota"></i> Rápido</span>
                        </div>
                        <h3 class="font-serif font-bold text-xl text-cozinha-brown mb-2 hover:text-cozinha-terracota transition-colors cursor-pointer" onclick="openRecipeModal('Pão de Queijo Mineiro Tradicional')">
                            Pão de Queijo Mineiro Tradicional
                        </h3>
                        <p class="text-cozinha-lightBrown text-xs leading-relaxed line-clamp-2">
                            Feito com queijo meia cura ralado na hora e polvilho azedo. Crocante por fora e puxa-puxa por dentro.
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0 flex items-center justify-between border-t border-cozinha-creamBorder/60 mt-4 pt-4">
                    <div class="flex items-center gap-1 text-cozinha-amber text-xs font-bold">
                        <i data-lucide="star" class="w-3.5 h-3.5 fill-cozinha-amber"></i>
                        <span>5.0 (143)</span>
                    </div>
                    <button onclick="openRecipeModal('Pão de Queijo Mineiro Tradicional')" class="text-xs font-bold text-cozinha-terracota hover:underline flex items-center gap-1">
                        Ver detalhes <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </button>
                </div>
            </article>

            <!-- Card 6 -->
            <article class="recipe-card bg-white rounded-2xl border border-cozinha-creamBorder overflow-hidden flex flex-col justify-between" data-category="almoco" data-time="60" data-name="frango assado com batatas coradas">
                <div>
                    <div class="relative h-52 overflow-hidden bg-cozinha-creamBorder">
                        <img src="https://images.unsplash.com/photo-1598515214211-89d3c73ae83b?w=600&auto=format&fit=crop&q=80" alt="Frango Assado" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" onerror="this.src='https://placehold.co/600x400/EFE8DC/3A2820?text=Frango+Assado'" />
                        <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-white/90 backdrop-blur-md text-cozinha-brown font-bold text-[10px] uppercase tracking-wider">Almoço em Família</span>
                        <button onclick="toggleBookmark(this)" class="absolute top-3 right-3 p-2 rounded-full bg-white/90 text-cozinha-lightBrown hover:text-red-500 transition-colors shadow-sm" aria-label="Salvar">
                            <i data-lucide="heart" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-3 text-xs text-cozinha-lightBrown mb-3">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3.5 h-3.5 text-cozinha-terracota"></i> 1h 00m</span>
                            <span>•</span>
                            <span class="flex items-center gap-1"><i data-lucide="chef-hat" class="w-3.5 h-3.5 text-cozinha-terracota"></i> Fácil</span>
                        </div>
                        <h3 class="font-serif font-bold text-xl text-cozinha-brown mb-2 hover:text-cozinha-terracota transition-colors cursor-pointer" onclick="openRecipeModal('Frango de Domingo Assado com Batatas')">
                            Frango de Domingo com Batatas Coradas
                        </h3>
                        <p class="text-cozinha-lightBrown text-xs leading-relaxed line-clamp-2">
                            Marinado na maionese caseira, alho e ervas frescas. A pele fica crocante e as batatas absorvem todo o sabor.
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0 flex items-center justify-between border-t border-cozinha-creamBorder/60 mt-4 pt-4">
                    <div class="flex items-center gap-1 text-cozinha-amber text-xs font-bold">
                        <i data-lucide="star" class="w-3.5 h-3.5 fill-cozinha-amber"></i>
                        <span>4.9 (78)</span>
                    </div>
                    <button onclick="openRecipeModal('Frango de Domingo Assado com Batatas')" class="text-xs font-bold text-cozinha-terracota hover:underline flex items-center gap-1">
                        Ver detalhes <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                    </button>
                </div>
            </article>

        </div>

        <!-- Empty Search State -->
        <div id="noResults" class="hidden text-center py-16">
            <div class="w-16 h-16 bg-cozinha-terracota/10 rounded-full flex items-center justify-center mx-auto text-cozinha-terracota mb-4">
                <i data-lucide="search-x" class="w-8 h-8"></i>
            </div>
            <h3 class="font-serif font-bold text-xl text-cozinha-brown mb-1">Nenhuma receita encontrada</h3>
            <p class="text-xs text-cozinha-lightBrown">Tente buscar por outro ingrediente ou escolha outra categoria.</p>
        </div>

    </div>
</section>

<!-- SEGREDO DA VOVÓ / DICA DA SEMANA -->
<section id="dica-semana" class="py-12 bg-cozinha-sage border-y border-cozinha-green/20 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-12 gap-8 items-center">

            <div class="lg:col-span-8 space-y-4">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-cozinha-green text-white font-bold text-xs uppercase tracking-wider">
                        <i data-lucide="lightbulb" class="w-3.5 h-3.5"></i> Segredo da Vovó • Dica da Semana
                    </span>
                <h2 class="font-serif font-bold text-2xl sm:text-3xl text-cozinha-brown">
                    Como fazer bolos ficarem super fofinhos e sem solar?
                </h2>
                <p class="text-cozinha-brown/80 text-sm leading-relaxed">
                    O grande segredo está na temperatura dos ingredientes! Nunca use ovos ou leite saídos direto da geladeira. Deixe-os em temperatura ambiente por 30 minutos antes de bater. Além disso, peneire a farinha de trigo junto com o fermento para aerar a massa!
                </p>
                <div class="flex items-center gap-4 text-xs font-bold text-cozinha-green pt-2">
                    <span class="flex items-center gap-1"><i data-lucide="check" class="w-4 h-4"></i> Ingredientes em temp. ambiente</span>
                    <span class="flex items-center gap-1"><i data-lucide="check" class="w-4 h-4"></i> Farinha sempre peneirada</span>
                </div>
            </div>

            <div class="lg:col-span-4 flex justify-center lg:justify-end">
                <div class="bg-white p-6 rounded-2xl border border-cozinha-green/30 shadow-sm max-w-xs text-center space-y-3">
                    <div class="w-12 h-12 rounded-full bg-cozinha-green/10 text-cozinha-green flex items-center justify-center mx-auto">
                        <i data-lucide="book-open-check" class="w-6 h-6"></i>
                    </div>
                    <h4 class="font-serif font-bold text-base text-cozinha-brown">Tem uma dúvida culinária?</h4>
                    <p class="text-xs text-cozinha-lightBrown">Envie sua pergunta para nossa cozinha e ela pode aparecer aqui na próxima semana!</p>
                    <button onclick="alert('Obrigado! Envie sua pergunta para nosso e-mail de contato.')" class="w-full py-2 bg-cozinha-green hover:bg-cozinha-green/90 text-white rounded-xl text-xs font-bold transition-all">
                        Enviar Pergunta
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CALCULADORA / FILTRO RÁPIDO DE TEMPO DE PREPARO -->
<section class="py-12 bg-white border-b border-cozinha-creamBorder">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-cozinha-bg rounded-2xl border border-cozinha-creamBorder p-6 sm:p-8 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-2xl bg-cozinha-terracota/10 text-cozinha-terracota flex items-center justify-center shrink-0">
                    <i data-lucide="timer" class="w-6 h-6"></i>
                </div>
                <div>
                    <h3 class="font-serif font-bold text-lg text-cozinha-brown">Pouco tempo para cozinhar?</h3>
                    <p class="text-xs text-cozinha-lightBrown">Filtre nossas receitas pelo tempo máximo de preparo disponível.</p>
                </div>
            </div>

            <!-- Botões de Tempo -->
            <div class="flex flex-wrap items-center gap-2 w-full md:w-auto">
                <button onclick="filterByTime(30)" class="px-4 py-2 rounded-xl text-xs font-bold bg-white text-cozinha-brown border border-cozinha-creamBorder hover:border-cozinha-terracota hover:text-cozinha-terracota transition-all">
                    ⚡ Até 30 min
                </button>
                <button onclick="filterByTime(60)" class="px-4 py-2 rounded-xl text-xs font-bold bg-white text-cozinha-brown border border-cozinha-creamBorder hover:border-cozinha-terracota hover:text-cozinha-terracota transition-all">
                    🍲 Até 1 hora
                </button>
                <button onclick="filterByTime(999)" class="px-4 py-2 rounded-xl text-xs font-bold bg-cozinha-terracota text-white transition-all">
                    Mostrar Todas
                </button>
            </div>
        </div>
    </div>
</section>

<!-- NEWSLETTER / E-BOOK GRÁTIS -->
<section id="newsletter" class="py-16 relative overflow-hidden bg-cozinha-brown text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">

            <span class="w-14 h-14 rounded-2xl bg-cozinha-terracota text-white flex items-center justify-center mx-auto mb-6 shadow-lg">
                <i data-lucide="gift" class="w-7 h-7"></i>
            </span>

        <span class="text-cozinha-amber text-xs font-bold uppercase tracking-widest block mb-2">Presente Exclusivo</span>
        <h2 class="font-serif font-bold text-3xl sm:text-4xl text-white mb-4">
            Baixe o E-book "50 Receitas Inesquecíveis da Vovó"
        </h2>
        <p class="text-cozinha-creamBorder/80 text-xs sm:text-sm max-w-xl mx-auto mb-8 leading-relaxed">
            Cadastre seu e-mail para receber semanalmente nossas receitas completas, segredos de preparo e o livro digital gratuito diretamente na sua caixa de entrada.
        </p>

        <form id="newsletterForm" onsubmit="handleSubscribe(event)" class="flex flex-col sm:flex-row items-center justify-center gap-3 max-w-md mx-auto">
            <input
                    type="email"
                    required
                    placeholder="Seu melhor e-mail aqui..."
                    class="w-full sm:flex-1 px-5 py-3.5 rounded-xl bg-white/10 border border-white/20 text-white placeholder-white/50 text-xs focus:outline-none focus:border-cozinha-terracota transition-all"
            />
            <button
                    type="submit"
                    class="w-full sm:w-auto px-7 py-3.5 rounded-xl bg-cozinha-terracota hover:bg-cozinha-terracotaHover text-white font-bold text-xs uppercase tracking-wider transition-all transform hover:scale-105 shadow-md"
            >
                Baixar Grátis
            </button>
        </form>

        <div id="subscribeSuccess" class="hidden mt-4 p-3 rounded-xl bg-cozinha-green/20 border border-cozinha-green/40 text-cozinha-sage text-xs font-semibold max-w-md mx-auto">
            ✓ Sucesso! O link do seu e-book foi enviado para seu e-mail.
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer class="bg-cozinha-bg border-t border-cozinha-creamBorder py-12 text-cozinha-lightBrown text-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">

            <!-- Col 1 -->
            <div class="space-y-3">
                <a href="#" class="flex items-center gap-2 text-cozinha-brown font-serif font-bold text-xl">
                    <i data-lucide="utensils-crossed" class="w-5 h-5 text-cozinha-terracota"></i>
                    Cozinha de Afeto
                </a>
                <p class="text-xs leading-relaxed">
                    Resgatando o prazer das refeições feitas em casa com amor, ingredientes simples e aquele tempero especial de família.
                </p>
            </div>

            <!-- Col 2 -->
            <div>
                <h4 class="font-bold text-cozinha-brown text-xs uppercase tracking-wider mb-3">Links Rápidos</h4>
                <ul class="space-y-2">
                    <li><a href="#hero" class="hover:text-cozinha-terracota transition-colors">Início</a></li>
                    <li><a href="#categorias" class="hover:text-cozinha-terracota transition-colors">Categorias de Receitas</a></li>
                    <li><a href="#dica-semana" class="hover:text-cozinha-terracota transition-colors">Dicas da Vovó</a></li>
                    <li><a href="#newsletter" class="hover:text-cozinha-terracota transition-colors">E-book Grátis</a></li>
                </ul>
            </div>

            <!-- Col 3 -->
            <div>
                <h4 class="font-bold text-cozinha-brown text-xs uppercase tracking-wider mb-3">Categorias Populares</h4>
                <ul class="space-y-2">
                    <li><a href="#categorias" onclick="filterCategory('almoco')" class="hover:text-cozinha-terracota transition-colors">Almoço de Domingo</a></li>
                    <li><a href="#categorias" onclick="filterCategory('sobremesas')" class="hover:text-cozinha-terracota transition-colors">Doces Caseiros</a></li>
                    <li><a href="#categorias" onclick="filterCategory('paes')" class="hover:text-cozinha-terracota transition-colors">Pães Artesanais</a></li>
                </ul>
            </div>

            <!-- Col 4 -->
            <div>
                <h4 class="font-bold text-cozinha-brown text-xs uppercase tracking-wider mb-3">Redes Sociais</h4>
                <div class="flex items-center gap-2">
                    <a href="#" aria-label="Instagram" class="w-9 h-9 rounded-xl bg-white border border-cozinha-creamBorder hover:border-cozinha-terracota hover:text-cozinha-terracota flex items-center justify-center transition-colors">
                        <i data-lucide="instagram" class="w-4 h-4"></i>
                    </a>
                    <a href="#" aria-label="Youtube" class="w-9 h-9 rounded-xl bg-white border border-cozinha-creamBorder hover:border-cozinha-terracota hover:text-cozinha-terracota flex items-center justify-center transition-colors">
                        <i data-lucide="youtube" class="w-4 h-4"></i>
                    </a>
                    <a href="#" aria-label="Pinterest" class="w-9 h-9 rounded-xl bg-white border border-cozinha-creamBorder hover:border-cozinha-terracota hover:text-cozinha-terracota flex items-center justify-center transition-colors">
                        <i data-lucide="bookmark" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

        </div>

        <div class="pt-8 border-t border-cozinha-creamBorder flex flex-col sm:flex-row items-center justify-between gap-4">
            <p>© 2026 Cozinha de Afeto Blog. Feito com amor para apaixonados por comida de verdade.</p>
            <p class="italic text-cozinha-terracota font-serif font-semibold">"Cozinhar é uma forma de dizer eu te amo."</p>
        </div>
    </div>
</footer>

<!-- MODAL DE RECEITA COMPLETA -->
<div id="recipeModal" class="fixed inset-0 z-50 bg-cozinha-brown/60 backdrop-blur-sm hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-y-auto p-6 sm:p-8 relative border border-cozinha-creamBorder shadow-2xl">
        <button onclick="closeRecipeModal()" class="absolute top-5 right-5 p-2 rounded-full bg-cozinha-bg text-cozinha-brown hover:bg-cozinha-terracota hover:text-white transition-colors">
            <i data-lucide="x" class="w-5 h-5"></i>
        </button>

        <span class="text-xs font-bold text-cozinha-terracota uppercase tracking-widest block mb-1">Receita Detalhada</span>
        <h3 id="modalTitle" class="font-serif font-bold text-2xl sm:text-3xl text-cozinha-brown mb-4">Nome da Receita</h3>

        <div class="space-y-6">
            <div>
                <h4 class="font-bold text-sm text-cozinha-brown mb-2 flex items-center gap-2">
                    <i data-lucide="shopping-bag" class="w-4 h-4 text-cozinha-terracota"></i> Ingredientes
                </h4>
                <ul class="list-disc list-inside text-xs text-cozinha-lightBrown space-y-1.5 bg-cozinha-bg p-4 rounded-xl border border-cozinha-creamBorder">
                    <li>3 ovos em temperatura ambiente</li>
                    <li>2 xícaras (chá) de farinha de trigo peneirada</li>
                    <li>1 xícara (chá) de açúcar cristal ou refinado</li>
                    <li>1 colher (sopa) de fermento químico em pó</li>
                    <li>Ingredientes frescos selecionados com carinho</li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold text-sm text-cozinha-brown mb-2 flex items-center gap-2">
                    <i data-lucide="flame" class="w-4 h-4 text-cozinha-terracota"></i> Modo de Preparo
                </h4>
                <ol class="list-decimal list-inside text-xs text-cozinha-lightBrown space-y-2 leading-relaxed">
                    <li>Preaqueça o forno a 180°C e unte uma forma com manteiga e farinha.</li>
                    <li>No liquidificador ou tigela, bata os ingredientes líquidos até obter uma mistura homogênea.</li>
                    <li>Adicione os secos peneirados aos poucos, misturando delicadamente com um fouet.</li>
                    <li>Despeje na forma e asse por aproximadamente 35 a 40 minutos até dourar.</li>
                </ol>
            </div>

            <div class="pt-4 border-t border-cozinha-creamBorder flex justify-end">
                <button onclick="closeRecipeModal()" class="px-6 py-2.5 rounded-xl bg-cozinha-terracota text-white font-bold text-xs uppercase tracking-wider hover:bg-cozinha-terracotaHover transition-all">
                    Fechar Receita
                </button>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPT DE INTERATIVIDADE -->
<script>
    // Inicializar Lucide Icons
    lucide.createIcons();

    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Toggle Favorite / Bookmark Heart
    function toggleBookmark(button) {
        const icon = button.querySelector('i');
        if (button.classList.contains('text-red-500')) {
            button.classList.remove('text-red-500');
            button.classList.add('text-cozinha-lightBrown');
            icon.setAttribute('fill', 'none');
        } else {
            button.classList.remove('text-cozinha-lightBrown');
            button.classList.add('text-red-500');
            icon.setAttribute('fill', 'currentColor');
        }
    }

    // Filter Recipes by Category Pill
    function filterCategory(category) {
        const cards = document.querySelectorAll('.recipe-card');
        const buttons = document.querySelectorAll('.cat-btn');
        let visibleCount = 0;

        // Update Active Button Style
        buttons.forEach(btn => {
            btn.classList.remove('bg-cozinha-terracota', 'text-white');
            btn.classList.add('bg-white', 'text-cozinha-brown');
        });

        event.currentTarget.classList.remove('bg-white', 'text-cozinha-brown');
        event.currentTarget.classList.add('bg-cozinha-terracota', 'text-white');

        // Filter Cards
        cards.forEach(card => {
            const cardCat = card.getAttribute('data-category');
            if (category === 'todas' || cardCat === category) {
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });

        updateRecipeCount(visibleCount);
    }

    // Filter Recipes by Search Input
    function filterRecipes() {
        const query = document.getElementById('searchInput').value.toLowerCase().trim();
        const cards = document.querySelectorAll('.recipe-card');
        let visibleCount = 0;

        cards.forEach(card => {
            const name = card.getAttribute('data-name').toLowerCase();
            if (name.includes(query)) {
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });

        updateRecipeCount(visibleCount);
    }

    function syncMobileSearch(val) {
        document.getElementById('searchInput').value = val;
        filterRecipes();
    }

    // Filter Recipes by Max Prep Time
    function filterByTime(maxTime) {
        const cards = document.querySelectorAll('.recipe-card');
        let visibleCount = 0;

        cards.forEach(card => {
            const time = parseInt(card.getAttribute('data-time'));
            if (time <= maxTime) {
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });

        updateRecipeCount(visibleCount);
    }

    // Helper: Update visible count badge & empty state
    function updateRecipeCount(count) {
        const badge = document.getElementById('recipeCount');
        const noResults = document.getElementById('noResults');

        badge.innerText = `Mostrando ${count} receita${count === 1 ? '' : 's'}`;

        if (count === 0) {
            noResults.classList.remove('hidden');
        } else {
            noResults.classList.add('hidden');
        }
    }

    // Handle Newsletter Form
    function handleSubscribe(event) {
        event.preventDefault();
        const successMsg = document.getElementById('subscribeSuccess');
        const form = document.getElementById('newsletterForm');

        successMsg.classList.remove('hidden');
        form.reset();

        setTimeout(() => {
            successMsg.classList.add('hidden');
        }, 5000);
    }

    // Modal de Receita
    function openRecipeModal(title) {
        document.getElementById('modalTitle').innerText = title;
        document.getElementById('recipeModal').classList.remove('hidden');
    }

    function closeRecipeModal() {
        document.getElementById('recipeModal').classList.add('hidden');
    }
</script>
</body>
</html>