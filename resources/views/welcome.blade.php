<!DOCTYPE html>
<html lang="pt-BR" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Champions Hub 2026/27 | O Portal da UEFA Champions League</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter & Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@700;800;900&display=swap" rel="stylesheet">
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        ucl: {
                            bg: '#07090e',
                            card: '#0e1320',
                            cardHover: '#161f33',
                            border: '#1e293b',
                            cyan: '#00f0ff',
                            purple: '#7b2cbf',
                            magenta: '#e0aaff',
                            blue: '#1d4ed8'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Montserrat', 'sans-serif'],
                    },
                    boxShadow: {
                        'neon-cyan': '0 0 20px rgba(0, 240, 255, 0.25)',
                        'neon-purple': '0 0 20px rgba(123, 44, 191, 0.3)',
                    }
                }
            }
        }
    </script>
    <style>
        /* CSS Personalizado e Gradientes Neon */
        body {
            background-color: #07090e;
            color: #f1f5f9;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        .ucl-gradient-text {
            background: linear-gradient(135deg, #00f0ff 0%, #a855f7 50%, #ec4899 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .ucl-glass {
            background: rgba(14, 19, 32, 0.75);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .ucl-card-glow {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .ucl-card-glow:hover {
            transform: translateY(-4px);
            border-color: rgba(0, 240, 255, 0.4);
            box-shadow: 0 10px 30px -10px rgba(0, 240, 255, 0.2);
        }

        /* Hero Starball Animated Background Pattern */
        .bg-star-pattern {
            background-image: radial-gradient(circle at 50% 50%, rgba(123, 44, 191, 0.15) 0%, transparent 60%),
            radial-gradient(circle at 80% 20%, rgba(0, 240, 255, 0.1) 0%, transparent 40%);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #07090e;
        }
        ::-webkit-scrollbar-thumb {
            background: #1e293b;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #00f0ff;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col justify-between selection:bg-ucl-cyan selection:text-black">

<!-- HEADER / NAVIGATION -->
<header class="sticky top-0 z-50 ucl-glass border-b border-ucl-border/50 transition-all">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <a href="#" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-ucl-blue via-ucl-purple to-ucl-cyan p-0.5 flex items-center justify-center shadow-neon-cyan">
                    <div class="w-full h-full bg-ucl-bg rounded-full flex items-center justify-center">
                        <i data-lucide="trophy" class="w-5 h-5 text-ucl-cyan group-hover:scale-110 transition-transform"></i>
                    </div>
                </div>
                <div class="flex flex-col">
                        <span class="font-display font-extrabold text-lg tracking-wider text-white flex items-center gap-1">
                            CHAMPIONS<span class="text-ucl-cyan">HUB</span>
                        </span>
                    <span class="text-[10px] text-slate-400 font-semibold tracking-widest uppercase -mt-1">Temporada 2026/27</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="#hero" class="text-ucl-cyan hover:text-white transition-colors relative py-1 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-ucl-cyan">Início</a>
                <a href="#noticias" class="text-slate-300 hover:text-ucl-cyan transition-colors py-1">Notícias</a>
                <a href="#formato" class="text-slate-300 hover:text-ucl-cyan transition-colors py-1">Formato Suíço</a>
                <a href="#classificacao" class="text-slate-300 hover:text-ucl-cyan transition-colors py-1">Classificação</a>
                <a href="#jogos" class="text-slate-300 hover:text-ucl-cyan transition-colors py-1">Jogos & Resultados</a>
            </nav>

            <!-- Action Button & Mobile Menu Toggle -->
            <div class="flex items-center gap-4">
                <a href="#classificacao" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider bg-gradient-to-r from-ucl-purple to-ucl-blue hover:from-ucl-blue hover:to-ucl-cyan text-white transition-all transform hover:scale-105 shadow-neon-purple">
                    <i data-lucide="shield" class="w-3.5 h-3.5"></i>
                    Fase de Liga
                </a>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuBtn" aria-label="Abrir Menu" class="md:hidden p-2 rounded-lg text-slate-400 hover:text-white hover:bg-ucl-card focus:outline-none">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobileMenu" class="hidden md:hidden ucl-glass border-b border-ucl-border px-4 pt-2 pb-6 space-y-3">
        <a href="#hero" class="block py-2 text-ucl-cyan font-semibold border-b border-ucl-border/50">Início</a>
        <a href="#noticias" class="block py-2 text-slate-300 hover:text-ucl-cyan border-b border-ucl-border/50">Notícias</a>
        <a href="#formato" class="block py-2 text-slate-300 hover:text-ucl-cyan border-b border-ucl-border/50">Formato Suíço</a>
        <a href="#classificacao" class="block py-2 text-slate-300 hover:text-ucl-cyan border-b border-ucl-border/50">Classificação</a>
        <a href="#jogos" class="block py-2 text-slate-300 hover:text-ucl-cyan">Jogos & Resultados</a>
    </div>
</header>

<!-- HERO SECTION -->
<section id="hero" class="relative pt-12 pb-20 md:pt-20 md:pb-32 overflow-hidden bg-star-pattern">
    <!-- Ambient background glows -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-ucl-purple/20 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="absolute top-1/3 right-10 w-[300px] h-[300px] bg-ucl-cyan/15 blur-[100px] rounded-full pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-12 gap-12 items-center">

            <!-- Hero Left Content -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-ucl-cyan/10 border border-ucl-cyan/30 text-ucl-cyan text-xs font-semibold uppercase tracking-widest">
                    <span class="w-2 h-2 rounded-full bg-ucl-cyan animate-pulse"></span>
                    Em Andamento: Rodada 4 de 8
                </div>

                <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight">
                    A Jornada Rumo a <span class="ucl-gradient-text">Madri 2027</span>
                </h1>

                <p class="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto lg:mx-0 font-normal leading-relaxed">
                    Acompanhe a cobertura completa da Fase de Liga da UEFA Champions League 2026/27. Análises táticas, dados em tempo real, tabela do modelo suíço e os destaques das 36 maiores potências do futebol europeu.
                </p>

                <!-- Hero Buttons -->
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-4">
                    <a href="#noticias" class="px-7 py-3.5 rounded-xl bg-gradient-to-r from-ucl-cyan to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-slate-950 font-bold text-sm tracking-wide shadow-neon-cyan transition-all transform hover:-translate-y-0.5 flex items-center gap-2">
                        <i data-lucide="newspaper" class="w-4 h-4"></i>
                        Ler Últimas Notícias
                    </a>
                    <a href="#jogos" class="px-7 py-3.5 rounded-xl ucl-glass hover:bg-ucl-card text-white font-semibold text-sm border border-slate-700 hover:border-ucl-cyan/50 transition-all flex items-center gap-2">
                        <i data-lucide="calendar" class="w-4 h-4 text-ucl-cyan"></i>
                        Próxima Rodada (24/25 Nov)
                    </a>
                </div>

                <!-- Quick Metrics Banner -->
                <div class="pt-8 grid grid-cols-3 gap-4 border-t border-slate-800/80">
                    <div>
                        <span class="block text-2xl sm:text-3xl font-black text-white font-display">36</span>
                        <span class="text-xs text-slate-400 uppercase tracking-wider">Clubes na Liga</span>
                    </div>
                    <div>
                        <span class="block text-2xl sm:text-3xl font-black text-ucl-cyan font-display">144</span>
                        <span class="text-xs text-slate-400 uppercase tracking-wider">Jogos na 1ª Fase</span>
                    </div>
                    <div>
                        <span class="block text-2xl sm:text-3xl font-black text-purple-400 font-display">05 JUN</span>
                        <span class="text-xs text-slate-400 uppercase tracking-wider">Grande Final</span>
                    </div>
                </div>
            </div>

            <!-- Hero Right Card Highlight -->
            <div class="lg:col-span-5">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-ucl-cyan via-ucl-purple to-pink-500 rounded-2xl blur-lg opacity-40 group-hover:opacity-75 transition duration-500"></div>
                    <div class="relative rounded-2xl bg-ucl-card border border-ucl-border p-6 overflow-hidden">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-bold uppercase tracking-wider text-ucl-cyan bg-ucl-cyan/10 px-2.5 py-1 rounded-md">Destaque da Rodada 4</span>
                            <span class="text-xs text-slate-400 flex items-center gap-1">
                                    <i data-lucide="clock" class="w-3.5 h-3.5"></i> Resultado Histórico
                                </span>
                        </div>

                        <!-- Featured Match Graphic -->
                        <div class="py-4 border-y border-slate-800/80 my-4">
                            <div class="flex items-center justify-between">
                                <div class="text-center flex-1">
                                    <div class="w-12 h-12 bg-slate-800 rounded-full mx-auto flex items-center justify-center font-bold text-white text-lg border border-slate-700 shadow-md">RCL</div>
                                    <span class="block text-xs font-semibold text-slate-300 mt-2">RC Lens</span>
                                </div>
                                <div class="px-4 text-center">
                                    <span class="text-3xl font-black text-white tracking-wider font-display">1 - 9</span>
                                    <span class="block text-[10px] font-semibold uppercase text-emerald-400 tracking-widest mt-1">Encerrado</span>
                                </div>
                                <div class="text-center flex-1">
                                    <div class="w-12 h-12 bg-blue-900/60 border border-ucl-cyan/40 rounded-full mx-auto flex items-center justify-center font-bold text-ucl-cyan text-lg shadow-neon-cyan">COM</div>
                                    <span class="block text-xs font-bold text-white mt-2">Como 1907</span>
                                </div>
                            </div>
                        </div>

                        <h3 class="font-display font-bold text-lg text-white mb-2 hover:text-ucl-cyan transition-colors">
                            Massacre em Lens: Como impressiona a Europa com goleada histórica de 9 a 1
                        </h3>
                        <p class="text-xs text-slate-400 line-clamp-2 leading-relaxed">
                            Em uma noite atípica e avassaladora na França, a equipe visitante estabeleceu um novo recorde de gols fora de casa na fase de liga da Champions 2026/27.
                        </p>

                        <div class="mt-4 pt-4 border-t border-slate-800/60 flex items-center justify-between text-xs">
                            <span class="text-slate-400">Por <strong class="text-slate-200">Redação Hub</strong></span>
                            <a href="#noticias" class="text-ucl-cyan font-semibold hover:underline flex items-center gap-1">
                                Ler crônica completa <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- NOTÍCIAS EM DESTAQUE (GRID) -->
<section id="noticias" class="py-16 bg-ucl-bg relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 pb-4 border-b border-slate-800">
            <div>
                <span class="text-ucl-cyan font-bold text-xs uppercase tracking-widest block mb-1">Últimas Atualizações</span>
                <h2 class="text-3xl font-black font-display text-white">Notícias & Cobertura Especial</h2>
            </div>
            <!-- Category Filter Pills -->
            <div class="flex flex-wrap gap-2 mt-4 md:mt-0">
                <button class="px-3.5 py-1.5 rounded-lg text-xs font-semibold bg-ucl-cyan text-slate-950 transition-all">Todas</button>
                <button class="px-3.5 py-1.5 rounded-lg text-xs font-semibold bg-ucl-card text-slate-300 hover:text-white hover:bg-slate-800 transition-all">Resultados</button>
                <button class="px-3.5 py-1.5 rounded-lg text-xs font-semibold bg-ucl-card text-slate-300 hover:text-white hover:bg-slate-800 transition-all">Análises</button>
                <button class="px-3.5 py-1.5 rounded-lg text-xs font-semibold bg-ucl-card text-slate-300 hover:text-white hover:bg-slate-800 transition-all">Estatísticas</button>
            </div>
        </div>

        <!-- News Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <article class="bg-ucl-card border border-ucl-border rounded-2xl overflow-hidden ucl-card-glow flex flex-col justify-between">
                <div>
                    <div class="relative h-48 bg-slate-800 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-ucl-card via-transparent to-transparent z-10"></div>
                        <!-- Mock Image Background with Icon -->
                        <div class="w-full h-full bg-gradient-to-br from-blue-900 to-indigo-950 flex items-center justify-center p-6 text-center">
                            <span class="font-display font-black text-2xl text-white/20 tracking-widest uppercase">PSG 6 - 0 VIL</span>
                        </div>
                        <span class="absolute top-3 left-3 z-20 px-2.5 py-1 rounded bg-ucl-purple/90 text-white text-[10px] font-bold uppercase tracking-wider">Análise de Jogo</span>
                    </div>
                    <div class="p-6">
                        <span class="text-xs text-slate-400 block mb-2">06 de Novembro, 2026</span>
                        <h3 class="font-display font-bold text-xl text-white mb-3 hover:text-ucl-cyan transition-colors">
                            PSG dá show no Parc des Princes e aplica 6 a 0 no Villarreal
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-4">
                            Com atuação impecável no setor ofensivo, o Paris Saint-Germain dominou a posse de bola e construiu a maior vitória da equipe nesta fase inicial.
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0 flex items-center justify-between text-xs text-slate-400 border-t border-slate-800/40 mt-auto">
                    <span class="flex items-center gap-1"><i data-lucide="user" class="w-3.5 h-3.5 text-ucl-cyan"></i> Mateus Silva</span>
                    <span class="flex items-center gap-1"><i data-lucide="message-square" class="w-3.5 h-3.5"></i> 14 comentários</span>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="bg-ucl-card border border-ucl-border rounded-2xl overflow-hidden ucl-card-glow flex flex-col justify-between">
                <div>
                    <div class="relative h-48 bg-slate-800 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-ucl-card via-transparent to-transparent z-10"></div>
                        <div class="w-full h-full bg-gradient-to-br from-purple-900 to-slate-900 flex items-center justify-center p-6 text-center">
                            <span class="font-display font-black text-2xl text-white/20 tracking-widest uppercase">BAR 3 - 0 AST</span>
                        </div>
                        <span class="absolute top-3 left-3 z-20 px-2.5 py-1 rounded bg-ucl-cyan/90 text-slate-950 text-[10px] font-bold uppercase tracking-wider">Fase de Liga</span>
                    </div>
                    <div class="p-6">
                        <span class="text-xs text-slate-400 block mb-2">05 de Novembro, 2026</span>
                        <h3 class="font-display font-bold text-xl text-white mb-3 hover:text-ucl-cyan transition-colors">
                            FC Barcelona supera Aston Villa por 3 a 0 e cola nos líderes
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-4">
                            Com controle total do meio-campo e grande exibição coletiva, o clube catalão garante a 3ª vitória consecutiva no modelo suíço.
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0 flex items-center justify-between text-xs text-slate-400 border-t border-slate-800/40 mt-auto">
                    <span class="flex items-center gap-1"><i data-lucide="user" class="w-3.5 h-3.5 text-ucl-cyan"></i> Lucas Andrade</span>
                    <span class="flex items-center gap-1"><i data-lucide="message-square" class="w-3.5 h-3.5"></i> 8 comentários</span>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="bg-ucl-card border border-ucl-border rounded-2xl overflow-hidden ucl-card-glow flex flex-col justify-between">
                <div>
                    <div class="relative h-48 bg-slate-800 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t from-ucl-card via-transparent to-transparent z-10"></div>
                        <div class="w-full h-full bg-gradient-to-br from-emerald-950 to-slate-900 flex items-center justify-center p-6 text-center">
                            <i data-lucide="award" class="w-16 h-16 text-ucl-cyan/20"></i>
                        </div>
                        <span class="absolute top-3 left-3 z-20 px-2.5 py-1 rounded bg-emerald-500 text-slate-950 text-[10px] font-bold uppercase tracking-wider">Artilharia</span>
                    </div>
                    <div class="p-6">
                        <span class="text-xs text-slate-400 block mb-2">04 de Novembro, 2026</span>
                        <h3 class="font-display font-bold text-xl text-white mb-3 hover:text-ucl-cyan transition-colors">
                            Douvikas assume a liderança isolada da artilharia da Champions
                        </h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-4">
                            O atacante Anastasios Douvikas vem sendo a grande sensação do torneio até aqui, somando números impressionantes nas primeiras rodadas.
                        </p>
                    </div>
                </div>
                <div class="px-6 pb-6 pt-0 flex items-center justify-between text-xs text-slate-400 border-t border-slate-800/40 mt-auto">
                    <span class="flex items-center gap-1"><i data-lucide="user" class="w-3.5 h-3.5 text-ucl-cyan"></i> Sofia Costa</span>
                    <span class="flex items-center gap-1"><i data-lucide="message-square" class="w-3.5 h-3.5"></i> 22 comentários</span>
                </div>
            </article>

        </div>
    </div>
</section>

<!-- FORMATO DA LIGA E CALENDÁRIO 2026/27 -->
<section id="formato" class="py-16 bg-ucl-card/40 border-y border-ucl-border relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-12 gap-12 items-center">

            <!-- Left: Explicativo do Formato -->
            <div class="lg:col-span-6 space-y-6">
                <span class="text-ucl-cyan font-bold text-xs uppercase tracking-widest block">Novo Modelo da UEFA</span>
                <h2 class="text-3xl sm:text-4xl font-black font-display text-white">
                    Como Funciona o <span class="ucl-gradient-text">Formato Suíço</span> (36 Clubes)
                </h2>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Na temporada 2026/2027, a tradicional fase de grupos permanece substituída pelo sistema de liga única com 36 equipes. Cada clube disputa 8 partidas (4 em casa, 4 fora) contra 8 adversários diferentes.
                </p>

                <div class="space-y-4 pt-2">
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-ucl-card border border-ucl-border">
                        <div class="p-2.5 rounded-lg bg-emerald-500/10 text-emerald-400 mt-1">
                            <i data-lucide="check-circle-2" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-sm">Top 8 Direct (1º ao 8º)</h4>
                            <p class="text-xs text-slate-400">Classificam-se diretamente para as Oitavas de Final como cabeças de chave.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-xl bg-ucl-card border border-ucl-border">
                        <div class="p-2.5 rounded-lg bg-ucl-cyan/10 text-ucl-cyan mt-1">
                            <i data-lucide="help-circle" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-sm">Playoffs de Vaga (9º ao 24º)</h4>
                            <p class="text-xs text-slate-400">Disputam um mata-mata de ida e volta para definir os outros 8 classificados.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-4 rounded-xl bg-ucl-card border border-ucl-border">
                        <div class="p-2.5 rounded-lg bg-red-500/10 text-red-400 mt-1">
                            <i data-lucide="x-circle" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-white text-sm">Eliminação Direta (25º ao 36º)</h4>
                            <p class="text-xs text-slate-400">Estão eliminados das competições europeias da temporada (sem transição para Liga Europa).</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Timeline / Calendário Principal -->
            <div class="lg:col-span-6 bg-ucl-card p-6 sm:p-8 rounded-2xl border border-ucl-border shadow-xl">
                <h3 class="font-display font-bold text-xl text-white mb-6 flex items-center gap-2">
                    <i data-lucide="calendar-days" class="w-5 h-5 text-ucl-cyan"></i>
                    Calendário Chave 2026/2027
                </h3>

                <div class="relative border-l-2 border-slate-800 ml-4 space-y-6">

                    <div class="relative pl-6">
                        <span class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-emerald-500 ring-4 ring-ucl-card"></span>
                        <span class="text-xs font-bold text-emerald-400 uppercase tracking-wider">Setembro 2026 – Janeiro 2027</span>
                        <h4 class="text-sm font-bold text-white mt-1">Fase de Liga (8 Rodadas)</h4>
                        <p class="text-xs text-slate-400 mt-0.5">Rodada 5 agendada para 24 e 25 de Novembro de 2026.</p>
                    </div>

                    <div class="relative pl-6">
                        <span class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-ucl-cyan ring-4 ring-ucl-card"></span>
                        <span class="text-xs font-bold text-ucl-cyan uppercase tracking-wider">Fevereiro 2027</span>
                        <h4 class="text-sm font-bold text-white mt-1">Playoffs de Acesso às Oitavas</h4>
                        <p class="text-xs text-slate-400 mt-0.5">Jogos de ida e volta entre os times do 9º ao 24º lugar.</p>
                    </div>

                    <div class="relative pl-6">
                        <span class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-ucl-purple ring-4 ring-ucl-card"></span>
                        <span class="text-xs font-bold text-ucl-purple uppercase tracking-wider">Março – Maio 2027</span>
                        <h4 class="text-sm font-bold text-white mt-1">Mata-Mata (Oitavas até Semifinais)</h4>
                        <p class="text-xs text-slate-400 mt-0.5">Fase eliminatória até a definição dos dois grandes finalistas.</p>
                    </div>

                    <div class="relative pl-6">
                        <span class="absolute -left-[9px] top-1 w-4 h-4 rounded-full bg-pink-500 ring-4 ring-ucl-card shadow-neon-purple"></span>
                        <span class="text-xs font-bold text-pink-400 uppercase tracking-wider">05 de Junho de 2027</span>
                        <h4 class="text-sm font-bold text-white mt-1">A Grande Final</h4>
                        <p class="text-xs text-slate-400 mt-0.5">Estádio Metropolitano, Madri (Espanha).</p>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- CLASSIFICAÇÃO & RESULTADOS DAS RODADAS -->
<section id="classificacao" class="py-16 bg-ucl-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid lg:grid-cols-12 gap-8">

            <!-- Tabela de Classificação Simulado (8 Colunas) -->
            <div class="lg:col-span-8 bg-ucl-card rounded-2xl border border-ucl-border p-6">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="font-display font-bold text-xl text-white">Classificação da Liga</h3>
                        <p class="text-xs text-slate-400">Atualizado após a 4ª Rodada</p>
                    </div>
                    <span class="text-xs text-ucl-cyan bg-ucl-cyan/10 border border-ucl-cyan/30 px-3 py-1 rounded-full font-semibold">
                            Top 8 = Vaga Direta
                        </span>
                </div>

                <!-- Table Responsive Wrapper -->
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-slate-300">
                        <thead class="text-xs uppercase bg-slate-900/80 text-slate-400 border-b border-slate-800">
                        <tr>
                            <th class="py-3 px-3">#</th>
                            <th class="py-3 px-3">Clube</th>
                            <th class="py-3 px-3 text-center">J</th>
                            <th class="py-3 px-3 text-center">V</th>
                            <th class="py-3 px-3 text-center">E</th>
                            <th class="py-3 px-3 text-center">D</th>
                            <th class="py-3 px-3 text-center">SG</th>
                            <th class="py-3 px-3 text-center font-bold text-white">Pts</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800/60 font-medium">
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-800/40 transition-colors border-l-4 border-emerald-500">
                            <td class="py-3 px-3 font-bold text-white">1</td>
                            <td class="py-3 px-3 font-bold text-white flex items-center gap-2">
                                <span class="w-6 h-6 rounded-full bg-blue-600/40 text-blue-400 text-[10px] flex items-center justify-center border border-blue-500">PSG</span>
                                Paris Saint-Germain
                            </td>
                            <td class="py-3 px-3 text-center">4</td>
                            <td class="py-3 px-3 text-center text-emerald-400">4</td>
                            <td class="py-3 px-3 text-center">0</td>
                            <td class="py-3 px-3 text-center">0</td>
                            <td class="py-3 px-3 text-center text-slate-300">+12</td>
                            <td class="py-3 px-3 text-center font-bold text-ucl-cyan">12</td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-slate-800/40 transition-colors border-l-4 border-emerald-500">
                            <td class="py-3 px-3 font-bold text-white">2</td>
                            <td class="py-3 px-3 font-bold text-white flex items-center gap-2">
                                <span class="w-6 h-6 rounded-full bg-cyan-900/40 text-ucl-cyan text-[10px] flex items-center justify-center border border-ucl-cyan">COM</span>
                                Como 1907
                            </td>
                            <td class="py-3 px-3 text-center">4</td>
                            <td class="py-3 px-3 text-center text-emerald-400">3</td>
                            <td class="py-3 px-3 text-center">1</td>
                            <td class="py-3 px-3 text-center">0</td>
                            <td class="py-3 px-3 text-center text-slate-300">+11</td>
                            <td class="py-3 px-3 text-center font-bold text-ucl-cyan">10</td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-slate-800/40 transition-colors border-l-4 border-emerald-500">
                            <td class="py-3 px-3 font-bold text-white">3</td>
                            <td class="py-3 px-3 font-bold text-white flex items-center gap-2">
                                <span class="w-6 h-6 rounded-full bg-red-900/40 text-red-400 text-[10px] flex items-center justify-center border border-red-500">BAR</span>
                                FC Barcelona
                            </td>
                            <td class="py-3 px-3 text-center">4</td>
                            <td class="py-3 px-3 text-center text-emerald-400">3</td>
                            <td class="py-3 px-3 text-center">1</td>
                            <td class="py-3 px-3 text-center">0</td>
                            <td class="py-3 px-3 text-center text-slate-300">+7</td>
                            <td class="py-3 px-3 text-center font-bold text-ucl-cyan">10</td>
                        </tr>
                        <!-- Row 4 -->
                        <tr class="hover:bg-slate-800/40 transition-colors border-l-4 border-emerald-500">
                            <td class="py-3 px-3 font-bold text-white">4</td>
                            <td class="py-3 px-3 font-bold text-white flex items-center gap-2">
                                <span class="w-6 h-6 rounded-full bg-purple-900/40 text-purple-400 text-[10px] flex items-center justify-center border border-purple-500">RMA</span>
                                Real Madrid
                            </td>
                            <td class="py-3 px-3 text-center">4</td>
                            <td class="py-3 px-3 text-center text-emerald-400">3</td>
                            <td class="py-3 px-3 text-center">0</td>
                            <td class="py-3 px-3 text-center">1</td>
                            <td class="py-3 px-3 text-center text-slate-300">+5</td>
                            <td class="py-3 px-3 text-center font-bold text-ucl-cyan">9</td>
                        </tr>
                        <!-- Row 5 -->
                        <tr class="hover:bg-slate-800/40 transition-colors border-l-4 border-ucl-cyan">
                            <td class="py-3 px-3 font-bold text-white">9</td>
                            <td class="py-3 px-3 font-bold text-white flex items-center gap-2">
                                <span class="w-6 h-6 rounded-full bg-amber-900/40 text-amber-400 text-[10px] flex items-center justify-center border border-amber-500">AST</span>
                                Aston Villa
                            </td>
                            <td class="py-3 px-3 text-center">4</td>
                            <td class="py-3 px-3 text-center text-emerald-400">2</td>
                            <td class="py-3 px-3 text-center">1</td>
                            <td class="py-3 px-3 text-center">1</td>
                            <td class="py-3 px-3 text-center text-slate-300">+2</td>
                            <td class="py-3 px-3 text-center font-bold text-ucl-cyan">7</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Aba Interativa de Jogos Recentes e Próxima Rodada -->
            <div id="jogos" class="lg:col-span-4 bg-ucl-card rounded-2xl border border-ucl-border p-6 flex flex-col justify-between">
                <div>
                    <!-- Tabs Header -->
                    <div class="flex items-center gap-2 border-b border-slate-800 pb-4 mb-4">
                        <button id="tabResults" onclick="switchMatchTab('results')" class="flex-1 py-2 text-center font-bold text-xs uppercase tracking-wider rounded-lg bg-ucl-cyan text-slate-950 transition-all">
                            Rodada 4 (Recente)
                        </button>
                        <button id="tabNext" onclick="switchMatchTab('next')" class="flex-1 py-2 text-center font-bold text-xs uppercase tracking-wider rounded-lg bg-slate-800 text-slate-400 hover:text-white transition-all">
                            Rodada 5 (Próxima)
                        </button>
                    </div>

                    <!-- Match List Container: Results -->
                    <div id="contentResults" class="space-y-3">
                        <div class="p-3 rounded-xl bg-slate-900/60 border border-slate-800/80 flex items-center justify-between text-xs">
                            <span class="font-bold text-slate-300">RC Lens</span>
                            <span class="px-2.5 py-1 rounded bg-ucl-purple/30 text-ucl-cyan font-extrabold">1 - 9</span>
                            <span class="font-bold text-slate-300">Como 1907</span>
                        </div>
                        <div class="p-3 rounded-xl bg-slate-900/60 border border-slate-800/80 flex items-center justify-between text-xs">
                            <span class="font-bold text-slate-300">PSG</span>
                            <span class="px-2.5 py-1 rounded bg-ucl-purple/30 text-ucl-cyan font-extrabold">6 - 0</span>
                            <span class="font-bold text-slate-300">Villarreal</span>
                        </div>
                        <div class="p-3 rounded-xl bg-slate-900/60 border border-slate-800/80 flex items-center justify-between text-xs">
                            <span class="font-bold text-slate-300">FC Barcelona</span>
                            <span class="px-2.5 py-1 rounded bg-ucl-purple/30 text-ucl-cyan font-extrabold">3 - 0</span>
                            <span class="font-bold text-slate-300">Aston Villa</span>
                        </div>
                    </div>

                    <!-- Match List Container: Next Matchday (Hidden by default) -->
                    <div id="contentNext" class="space-y-3 hidden">
                        <div class="p-3 rounded-xl bg-slate-900/60 border border-slate-800/80 flex items-center justify-between text-xs">
                            <span class="font-bold text-slate-300">Real Madrid</span>
                            <span class="px-2.5 py-1 rounded bg-slate-800 text-slate-400 font-bold">24 NOV 17:00</span>
                            <span class="font-bold text-slate-300">PSG</span>
                        </div>
                        <div class="p-3 rounded-xl bg-slate-900/60 border border-slate-800/80 flex items-center justify-between text-xs">
                            <span class="font-bold text-slate-300">Como 1907</span>
                            <span class="px-2.5 py-1 rounded bg-slate-800 text-slate-400 font-bold">24 NOV 17:00</span>
                            <span class="font-bold text-slate-300">FC Barcelona</span>
                        </div>
                        <div class="p-3 rounded-xl bg-slate-900/60 border border-slate-800/80 flex items-center justify-between text-xs">
                            <span class="font-bold text-slate-300">Aston Villa</span>
                            <span class="px-2.5 py-1 rounded bg-slate-800 text-slate-400 font-bold">25 NOV 17:00</span>
                            <span class="font-bold text-slate-300">RC Lens</span>
                        </div>
                    </div>
                </div>

                <a href="#noticias" class="block w-full text-center py-2.5 mt-6 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white font-semibold text-xs transition-colors">
                    Ver Agenda Completa de Jogos
                </a>
            </div>

        </div>

    </div>
</section>

<!-- NEWSLETTER SUBSCRIPTION -->
<section class="py-16 relative overflow-hidden bg-gradient-to-b from-ucl-bg to-ucl-card">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">

        <div class="w-16 h-16 rounded-2xl bg-gradient-to-tr from-ucl-cyan to-ucl-purple p-0.5 mx-auto mb-6 shadow-neon-cyan">
            <div class="w-full h-full bg-ucl-bg rounded-2xl flex items-center justify-center">
                <i data-lucide="mail" class="w-8 h-8 text-ucl-cyan"></i>
            </div>
        </div>

        <h2 class="text-3xl sm:text-4xl font-black font-display text-white mb-3">
            Receba as Novidades da Champions no seu E-mail
        </h2>
        <p class="text-slate-300 text-sm sm:text-base max-w-xl mx-auto mb-8">
            Assine nossa newsletter diária e receba análises táticas exclusivas, vídeos dos gols e atualizações da fase de liga em tempo real.
        </p>

        <!-- Form Submissão -->
        <form id="newsletterForm" onsubmit="handleSubscribe(event)" class="flex flex-col sm:flex-row items-center justify-center gap-3 max-w-lg mx-auto">
            <input
                    type="email"
                    required
                    placeholder="Digite seu melhor e-mail..."
                    class="w-full sm:flex-1 px-5 py-3.5 rounded-xl bg-ucl-bg border border-slate-700 text-white placeholder-slate-500 focus:outline-none focus:border-ucl-cyan transition-colors text-sm"
            />
            <button
                    type="submit"
                    class="w-full sm:w-auto px-8 py-3.5 rounded-xl bg-gradient-to-r from-ucl-cyan to-blue-600 hover:from-cyan-400 hover:to-blue-500 text-slate-950 font-bold text-sm tracking-wide shadow-neon-cyan transition-all transform hover:-translate-y-0.5"
            >
                Inscrever-se
            </button>
        </form>

        <div id="subscribeAlert" class="hidden mt-4 p-3 rounded-lg bg-emerald-500/20 border border-emerald-500/50 text-emerald-300 text-xs font-semibold max-w-lg mx-auto">
            ✓ Inscrição realizada com sucesso! Bem-vindo ao Champions Hub.
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer class="bg-ucl-bg border-t border-ucl-border py-12 text-slate-400 text-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">

            <!-- Col 1: Brand -->
            <div class="space-y-4">
                <a href="#" class="flex items-center gap-2">
                    <i data-lucide="trophy" class="w-6 h-6 text-ucl-cyan"></i>
                    <span class="font-display font-black text-lg text-white">CHAMPIONS<span class="text-ucl-cyan">HUB</span></span>
                </a>
                <p class="text-xs text-slate-500 leading-relaxed">
                    O seu portal de notícias não-oficial e hub de análises estatísticas dedicado inteiramente à UEFA Champions League 2026/2027.
                </p>
            </div>

            <!-- Col 2: Naves -->
            <div>
                <h4 class="font-bold text-white text-xs uppercase tracking-wider mb-4">Navegação</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="#hero" class="hover:text-ucl-cyan transition-colors">Início</a></li>
                    <li><a href="#noticias" class="hover:text-ucl-cyan transition-colors">Últimas Notícias</a></li>
                    <li><a href="#formato" class="hover:text-ucl-cyan transition-colors">Formato Suíço</a></li>
                    <li><a href="#classificacao" class="hover:text-ucl-cyan transition-colors">Tabela Atualizada</a></li>
                </ul>
            </div>

            <!-- Col 3: Temporada -->
            <div>
                <h4 class="font-bold text-white text-xs uppercase tracking-wider mb-4">Temporada 2026/27</h4>
                <ul class="space-y-2 text-xs">
                    <li><a href="#jogos" class="hover:text-ucl-cyan transition-colors">Rodada 4 (Resultados)</a></li>
                    <li><a href="#jogos" class="hover:text-ucl-cyan transition-colors">Rodada 5 (24-25 Nov)</a></li>
                    <li><a href="#formato" class="hover:text-ucl-cyan transition-colors">Final em Madri 2027</a></li>
                </ul>
            </div>

            <!-- Col 4: Redes Sociais -->
            <div>
                <h4 class="font-bold text-white text-xs uppercase tracking-wider mb-4">Siga o Hub</h4>
                <div class="flex items-center gap-3">
                    <a href="#" aria-label="Twitter" class="w-9 h-9 rounded-lg bg-ucl-card hover:bg-ucl-cyan hover:text-slate-950 flex items-center justify-center transition-colors">
                        <i data-lucide="twitter" class="w-4 h-4"></i>
                    </a>
                    <a href="#" aria-label="Instagram" class="w-9 h-9 rounded-lg bg-ucl-card hover:bg-ucl-cyan hover:text-slate-950 flex items-center justify-center transition-colors">
                        <i data-lucide="instagram" class="w-4 h-4"></i>
                    </a>
                    <a href="#" aria-label="Youtube" class="w-9 h-9 rounded-lg bg-ucl-card hover:bg-ucl-cyan hover:text-slate-950 flex items-center justify-center transition-colors">
                        <i data-lucide="youtube" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

        </div>

        <div class="pt-8 border-t border-slate-800/80 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>© 2026 Champions Hub Blog. Todos os direitos reservados.</p>
            <p>Este site é um projeto de fã e não possui afiliação oficial com a UEFA.</p>
        </div>
    </div>
</footer>

<!-- INTERACTIVITE SCRIPT -->
<script>
    // Inicializar Lucide Icons
    lucide.createIcons();

    // Mobile Menu Toggle Logic
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Alternate Tabs for Matchday / Results Sidebar
    function switchMatchTab(tab) {
        const btnResults = document.getElementById('tabResults');
        const btnNext = document.getElementById('tabNext');
        const contentResults = document.getElementById('contentResults');
        const contentNext = document.getElementById('contentNext');

        if (tab === 'results') {
            btnResults.className = 'flex-1 py-2 text-center font-bold text-xs uppercase tracking-wider rounded-lg bg-ucl-cyan text-slate-950 transition-all';
            btnNext.className = 'flex-1 py-2 text-center font-bold text-xs uppercase tracking-wider rounded-lg bg-slate-800 text-slate-400 hover:text-white transition-all';
            contentResults.classList.remove('hidden');
            contentNext.classList.add('hidden');
        } else {
            btnNext.className = 'flex-1 py-2 text-center font-bold text-xs uppercase tracking-wider rounded-lg bg-ucl-cyan text-slate-950 transition-all';
            btnResults.className = 'flex-1 py-2 text-center font-bold text-xs uppercase tracking-wider rounded-lg bg-slate-800 text-slate-400 hover:text-white transition-all';
            contentNext.classList.remove('hidden');
            contentResults.classList.add('hidden');
        }
    }

    // Handle Newsletter Subscription
    function handleSubscribe(event) {
        event.preventDefault();
        const alertBox = document.getElementById('subscribeAlert');
        const form = document.getElementById('newsletterForm');

        alertBox.classList.remove('hidden');
        form.reset();

        setTimeout(() => {
            alertBox.classList.add('hidden');
        }, 5000);
    }
</script>
</body>
</html>