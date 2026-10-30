<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="referrer" content="no-referrer">
    <title>Touchline Notes – A football blog</title>
    <style>
        :root{
            box-sizing:border-box;
            padding-top:env(safe-area-inset-top,0px);
            padding-bottom:env(safe-area-inset-bottom,0px);
            --bg:#f3f6ef;--surface:#ffffff;--ink:#14231a;--muted:#55645a;--line:#d5ddd0;--pitch:#1f6b3a;--chalk:#e9f1e3;--accent:#e0a526;
        }
        @media (prefers-color-scheme:dark){
            :root:not([data-theme="light"]){--bg:#0f1a13;--surface:#16251b;--ink:#eaf2e6;--muted:#a3b3a7;--line:#2a3d30;--pitch:#4fae72;--chalk:#1b2d21;--accent:#f0bb44}
        }
        :root[data-theme="dark"]{--bg:#0f1a13;--surface:#16251b;--ink:#eaf2e6;--muted:#a3b3a7;--line:#2a3d30;--pitch:#4fae72;--chalk:#1b2d21;--accent:#f0bb44}
        html{scroll-padding-top:env(safe-area-inset-top,0px)}
        *{box-sizing:border-box}
        body{margin:0;background:var(--bg);color:var(--ink);font:17px/1.6 Georgia,"Times New Roman",serif}
        a{color:inherit}
        .wrap{max-width:1040px;margin:0 auto;padding:0 20px}
        header{display:flex;flex-wrap:wrap;gap:12px;align-items:center;justify-content:space-between;padding:22px 0;border-bottom:2px solid var(--ink)}
        .logo{font:800 1.5rem/1 "Trebuchet MS",Verdana,sans-serif;text-decoration:none;letter-spacing:-.02em}
        nav{display:flex;gap:18px;flex-wrap:wrap;font:600 .95rem "Trebuchet MS",Verdana,sans-serif}
        nav a{text-decoration:none;color:var(--muted)}
        nav a:hover,nav a:focus-visible{color:var(--pitch);text-decoration:underline}
        a:focus-visible,button:focus-visible,input:focus-visible{outline:3px solid var(--accent);outline-offset:2px}
        .hero{padding:56px 0 44px;display:grid;gap:32px;grid-template-columns:1.4fr 1fr;align-items:center}
        .hero h1{font:800 clamp(2.2rem,6vw,4rem)/1.02 "Trebuchet MS",Verdana,sans-serif;letter-spacing:-.03em;margin:0 0 16px}
        .hero p{color:var(--muted);max-width:52ch;margin:0 0 22px}
        .btn{display:inline-block;background:var(--pitch);color:#fff;padding:12px 22px;border-radius:4px;font:700 .95rem "Trebuchet MS",Verdana,sans-serif;text-decoration:none}
        .btn:hover{filter:brightness(1.1)}
        .pitch{width:100%;height:auto;display:block}
        .pitch *{vector-effect:non-scaling-stroke}
        h2{font:800 1.4rem "Trebuchet MS",Verdana,sans-serif;margin:0 0 18px}
        .feature{background:var(--surface);border:1px solid var(--line);padding:28px;margin-bottom:44px;display:grid;gap:8px;border-left:8px solid var(--accent)}
        .feature h3{font:800 1.8rem/1.15 "Trebuchet MS",Verdana,sans-serif;margin:0}
        .meta{font:.85rem "Trebuchet MS",Verdana,sans-serif;color:var(--muted)}
        .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-bottom:48px}
        .post{background:var(--surface);border:1px solid var(--line);padding:20px;display:flex;flex-direction:column;gap:8px}
        .post h3{font:700 1.15rem/1.25 "Trebuchet MS",Verdana,sans-serif;margin:0}
        .post p{margin:0;color:var(--muted);font-size:.95rem}
        .tag{font:700 .78rem "Trebuchet MS",Verdana,sans-serif;color:var(--pitch)}
        .topics{display:flex;flex-wrap:wrap;gap:10px;margin-bottom:48px}
        .topics a{background:var(--chalk);border:1px solid var(--line);padding:8px 16px;border-radius:99px;text-decoration:none;font:600 .92rem "Trebuchet MS",Verdana,sans-serif}
        .topics a:hover{border-color:var(--pitch)}
        .news{background:var(--pitch);color:#fff;padding:32px;margin-bottom:48px;display:grid;gap:14px}
        .news h2{margin:0}
        .news p{margin:0;opacity:.92}
        .news form,.news .row{display:flex;gap:10px;flex-wrap:wrap}
        .news input{flex:1;min-width:200px;padding:12px;border:0;border-radius:4px;font:1rem Georgia,serif}
        .news button{background:var(--accent);color:#14231a;border:0;border-radius:4px;padding:12px 22px;font:700 .95rem "Trebuchet MS",Verdana,sans-serif;cursor:pointer}
        .small{font-size:.8rem!important;opacity:.8!important}
        footer{border-top:2px solid var(--ink);padding:26px 0 40px;color:var(--muted);font:.88rem/1.6 "Trebuchet MS",Verdana,sans-serif}
        footer p{margin:0 0 8px;max-width:75ch}
        @media (max-width:760px){.hero{grid-template-columns:1fr;padding-top:36px}.grid{grid-template-columns:1fr}.feature{padding:20px}}
    </style>
</head>
<body>
<div class="wrap">
    <header>
        <a class="logo" href="#top">Touchline Notes</a>
        <nav aria-label="Main">
            <a href="#latest">Latest</a>
            <a href="#topics">Topics</a>
            <a href="#newsletter">Newsletter</a>
            <a href="#about">About</a>
        </nav>
    </header>

    <main id="top">
        <section class="hero">
            <div>
                <h1>Football, explained one match at a time.</h1>
                <p>Tactics, history, training ideas and stories from the world’s most-loved sport. Written for anyone who enjoys the game, from first-time viewers to lifelong supporters.</p>
                <a class="btn" href="#latest">Read the latest</a>
            </div>
            <svg class="pitch" viewBox="0 0 300 200" role="img" aria-label="Simple illustration of a football pitch">
                <rect x="4" y="4" width="292" height="192" rx="6" fill="var(--pitch)" opacity=".9"/>
                <g fill="none" stroke="#fff" stroke-width="2" opacity=".85">
                    <rect x="14" y="14" width="272" height="172"/>
                    <line x1="150" y1="14" x2="150" y2="186"/>
                    <circle cx="150" cy="100" r="28"/>
                    <rect x="14" y="58" width="42" height="84"/>
                    <rect x="244" y="58" width="42" height="84"/>
                </g>
                <circle cx="150" cy="100" r="4" fill="#fff"/>
            </svg>
        </section>

        <section id="latest" aria-labelledby="l-h">
            <h2 id="l-h">Featured story</h2>
            <article class="feature">
                <span class="tag">Tactics</span>
                <h3><a href="#" style="text-decoration:none">How a back three changes the shape of a game</a></h3>
                <p>A plain-language look at wing-backs, spare defenders and the space between the lines, with simple diagrams anyone can follow.</p>
                <span class="meta">8 min read · Updated this week</span>
            </article>

            <h2>Recent posts</h2>
            <div class="grid">
                <article class="post"><span class="tag">History</span><h3><a href="#" style="text-decoration:none">The story behind the first international match</a></h3><p>How a simple friendly in the 1870s helped shape the modern sport.</p><span class="meta">6 min read</span></article>
                <article class="post"><span class="tag">Training</span><h3><a href="#" style="text-decoration:none">Five passing drills for a small garden or park</a></h3><p>Easy exercises to practise control and touch with a ball and a few cones.</p><span class="meta">5 min read</span></article>
                <article class="post"><span class="tag">Youth football</span><h3><a href="#" style="text-decoration:none">Making Saturday mornings fun for young players</a></h3><p>Ideas for coaches and volunteers who run community sessions.</p><span class="meta">7 min read</span></article>
                <article class="post"><span class="tag">Equipment</span><h3><a href="#" style="text-decoration:none">What to look for in a first pair of boots</a></h3><p>Fit, surface and comfort explained in simple terms.</p><span class="meta">4 min read</span></article>
                <article class="post"><span class="tag">Culture</span><h3><a href="#" style="text-decoration:none">Stadium traditions around the world</a></h3><p>Songs, colours and rituals that bring communities together.</p><span class="meta">9 min read</span></article>
                <article class="post"><span class="tag">Rules</span><h3><a href="#" style="text-decoration:none">The offside law in five minutes</a></h3><p>A clear, illustrated guide to one of the sport’s most discussed rules.</p><span class="meta">5 min read</span></article>
            </div>
        </section>

        <section id="topics" aria-labelledby="t-h">
            <h2 id="t-h">Browse by topic</h2>
            <div class="topics">
                <a href="#">Tactics</a><a href="#">History</a><a href="#">Training</a><a href="#">Youth football</a><a href="#">Women’s football</a><a href="#">Rules explained</a><a href="#">Equipment</a><a href="#">Fan culture</a>
            </div>
        </section>

        <section id="newsletter" class="news" aria-labelledby="n-h">
            <h2 id="n-h">Get new articles by email</h2>
            <p>One short email when a new article is published. Unsubscribe at any time.</p>
            <form id="sub" class="row" novalidate>
                <input type="email" id="em" placeholder="Email address" aria-label="Email address" autocomplete="email">
                <button type="submit">Subscribe</button>
            </form>
            <p id="msg" class="small" role="status">We use your email only to send the newsletter.</p>
        </section>
    </main>

    <footer id="about">
        <p><strong>About Touchline Notes.</strong> An independent blog about football, written by volunteers who love the game.</p>
        <p>This site is not affiliated with any club, league or governing body. All team and competition names belong to their respective owners. Content is for general information and entertainment only.</p>
        <p>© 2026 Touchline Notes · Privacy · Contact</p>
    </footer>
</div>
<script>
    document.getElementById('sub').addEventListener('submit',function(e){
        e.preventDefault();
        var v=document.getElementById('em').value.trim(),m=document.getElementById('msg');
        if(!/^\S+@\S+\.\S+$/.test(v)){m.textContent='Please enter a valid email address.';return}
        m.textContent='Thanks. Check your inbox to confirm.';
        this.reset();
    });
</script>
</body>
</html>
