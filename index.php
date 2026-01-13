<?php
// --- KONFIGURÁCIÓ ÉS ADATOK ---

// Személyes adatok
$personalInfo = [
    'name' => 'Troznai Roland',
    'role' => 'Full Stack Fejlesztő',
    'email' => 'troznairoland@gmail.com',
    'phone' => '+36 20 270 6492',
    'location' => 'Zalaegerszeg, Magyarország',
    'status' => 'Elérhető',
    'bio_short' => 'Szeretem a modern, felhasználóbarát webes alkalmazásokat. A tiszta kód és az elegáns megoldások embere vagyok.',
    'bio_long_1' => 'Mindig is érdekelt, hogyan működnek a dolgok a színfalak mögött. Programozóként az a célom, hogy komplex problémákat oldjak meg egyszerű, de hatékony eszközökkel.',
    'bio_long_2' => 'Jelenleg 2. éves programtervező informatikus hallgató vagyok az Eötvös Loránd Tudományegyetemen. Amikor nem kódolok, szeretek [pl. túrázni, gamelni].'
];

// Közösségi média linkek
$socials = [
    'github' => 'https://github.com/Roland1520',
    'gmail' => 'mailto:troznairoland@gmail.com',
    'facebook' => 'https://www.facebook.com/profile.php?id=100013607384042',
];

// Készségek (Ikonok: FontAwesome osztályok)
$skills = [
    ['name' => 'HTML5', 'icon' => 'fab fa-html5', 'color' => 'text-orange-500', 'border' => 'hover:border-blue-500'],
    ['name' => 'CSS3', 'icon' => 'fab fa-css3-alt', 'color' => 'text-blue-500', 'border' => 'hover:border-blue-500'],
    ['name' => 'JavaScript', 'icon' => 'fab fa-js', 'color' => 'text-yellow-400', 'border' => 'hover:border-yellow-500'],
    ['name' => 'Php', 'icon' => 'fab fa-php', 'color' => 'text-purple-500', 'border' => 'hover:border-purple-500'],
    ['name' => 'Node.js', 'icon' => 'fab fa-node', 'color' => 'text-green-500', 'border' => 'hover:border-green-500'],
    ['name' => 'C / C#', 'icon' => 'fab fa-c', 'color' => 'text-blue-400', 'border' => 'hover:border-blue-400'],
    ['name' => 'SQL / MySQL', 'icon' => 'fas fa-database', 'color' => 'text-gray-400', 'border' => 'hover:border-gray-500'],
    ['name' => 'Git', 'icon' => 'fab fa-git-alt', 'color' => 'text-orange-600', 'border' => 'hover:border-orange-600'],
];

// Projektek
$projects = [
    [
        'title' => 'E-Commerce Webshop',
        'desc' => 'Egy teljes értékű webáruház kosár funkcióval, fizetési rendszerrel és admin felülettel.',
        'image' => 'https://placehold.co/600x400/2563eb/white?text=Webshop',
        'tags' => ['React', 'Node.js', 'MongoDB'],
        'links' => ['github' => '#', 'demo' => '#']
    ],
    [
        'title' => 'Időjárás Alkalmazás',
        'desc' => 'Valós idejű időjárás adatok lekérése külső API segítségével, város szerinti kereséssel.',
        'image' => 'https://placehold.co/600x400/a855f7/white?text=Időjárás+App',
        'tags' => ['JavaScript', 'API', 'CSS3'],
        'links' => ['github' => '#', 'demo' => '#']
    ],
    [
        'title' => 'Task Manager',
        'desc' => 'Hatékonyságnövelő alkalmazás drag-and-drop funkcióval a feladatok rendszerezésére.',
        'image' => 'https://placehold.co/600x400/22c55e/white?text=Feladatkezelő',
        'tags' => ['Vue.js', 'Firebase', 'Tailwind'],
        'links' => ['github' => '#', 'demo' => '#']
    ],
    [
        'title' => 'Valós idejű Chat',
        'desc' => 'Socket.io alapú chat alkalmazás, privát szobákkal és előzményekkel.',
        'image' => 'https://placehold.co/600x400/f59e0b/white?text=Chat+App',
        'tags' => ['Socket.io', 'Express', 'React'],
        'links' => ['github' => '#', 'demo' => '#']
    ]
];
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fejlesztői Portfólió - <?php echo $personalInfo['name']; ?></title>
    
    <!-- Tailwind CSS betöltése -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome ikonok -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: '#3b82f6',
                        dark: '#0f172a',
                        card: '#1e293b'
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Egyedi görgetősáv */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #0f172a;
        }
        ::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #475569;
        }
        
        .gradient-text {
            background: linear-gradient(to right, #60a5fa, #a855f7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .project-card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }

        /* Gördítősáv elrejtése a carouselhez */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-dark text-slate-300 font-sans selection:bg-primary selection:text-white">

    <!-- Navigáció -->
    <nav class="fixed w-full z-50 bg-dark/90 backdrop-blur-sm border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0">
                    <a href="#" class="text-2xl font-bold text-white">&lt;Dev<span class="text-blue-500">Portfolio</span>/&gt;</a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">Kezdőlap</a>
                        <a href="#about" class="hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">Rólam</a>
                        <a href="#skills" class="hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">Készségek</a>
                        <a href="#projects" class="hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">Projektek</a>
                        <a href="#contact" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">Kapcsolat</a>
                    </div>
                </div>
                <!-- Mobil menü gomb -->
                <div class="-mr-2 flex md:hidden">
                    <button type="button" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobil menü -->
        <div class="hidden md:hidden bg-card border-b border-slate-700" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Kezdőlap</a>
                <a href="#about" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Rólam</a>
                <a href="#skills" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Készségek</a>
                <a href="#projects" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projektek</a>
                <a href="#contact" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Kapcsolat</a>
            </div>
        </div>
    </nav>

    <!-- Hero Szekció -->
    <section id="home" class="min-h-screen flex items-center justify-center pt-16 relative overflow-hidden">
        <!-- Háttér effekt -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10 opacity-20">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-blue-500 rounded-full blur-3xl filter"></div>
            <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500 rounded-full blur-3xl filter"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-blue-400 font-medium mb-4 animate-pulse">Szia, a nevem</p>
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 tracking-tight">
                <?php echo $personalInfo['name']; ?>
            </h1>
            <h2 class="text-3xl md:text-5xl font-bold mb-8">
                <span class="gradient-text"><?php echo $personalInfo['role']; ?></span> vagyok.
            </h2>
            <p class="max-w-2xl mx-auto text-lg text-slate-400 mb-10 leading-relaxed">
                <?php echo $personalInfo['bio_short']; ?>
            </p>
            <div class="flex justify-center gap-4">
                <a href="#projects" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-full font-semibold transition-all transform hover:scale-105 shadow-lg shadow-blue-500/30">
                    Munkáim megtekintése
                </a>
                <a href="#contact" class="border border-slate-600 hover:border-white text-white px-8 py-3 rounded-full font-semibold transition-all hover:bg-white/5">
                    Kapcsolatfelvétel
                </a>
            </div>
            
            <div class="mt-16 text-slate-500 text-2xl flex justify-center gap-8">
                <a href="<?php echo $socials['github']; ?>" target="_blank" class="hover:text-white transition-colors"><i class="fab fa-github"></i></a>
                <a href="<?php echo $socials['gmail']; ?>" target="_blank" class="hover:text-white transition-colors"><i class="fa-brands fa-google"></i></a>
                <a href="<?php echo $socials['facebook']; ?>" target="_blank" class="hover:text-white transition-colors"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </section>

    <!-- Rólam Szekció -->
    <section id="about" class="py-20 bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <img src="/images/profile_picture.jpg" text="Profilkép" alt="Profilkép" class="rounded-2xl shadow-2xl border-2 border-slate-700 w-full object-cover">
                    <!-- Dekoratív elem -->
                    <div class="absolute -bottom-4 -right-4 bg-card p-4 rounded-xl shadow-xl border border-slate-700">
                        <div class="flex items-center gap-3">
                            <div class="bg-green-500/20 p-2 rounded-lg text-green-400">
                                <i class="fas fa-code"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-400">Tapasztalat</p>
                                <p class="text-white font-bold">1+ Év</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-white mb-6">Rólam</h2>
                    <p class="text-slate-400 mb-6 leading-relaxed">
                        <?php echo $personalInfo['bio_long_1']; ?>
                    </p>
                    <p class="text-slate-400 mb-8 leading-relaxed">
                        <?php echo $personalInfo['bio_long_2']; ?>
                    </p>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="border-l-4 border-blue-500 pl-4">
                            <h3 class="font-bold text-white">Név</h3>
                            <p class="text-slate-400"><?php echo $personalInfo['name']; ?></p>
                        </div>
                        <div class="border-l-4 border-purple-500 pl-4">
                            <h3 class="font-bold text-white">Email</h3>
                            <p class="text-slate-400"><?php echo $personalInfo['email']; ?></p>
                        </div>
                        <div class="border-l-4 border-pink-500 pl-4">
                            <h3 class="font-bold text-white">Hely</h3>
                            <p class="text-slate-400"><?php echo $personalInfo['location']; ?></p>
                        </div>
                        <div class="border-l-4 border-yellow-500 pl-4">
                            <h3 class="font-bold text-white">Státusz</h3>
                            <p class="text-green-400"><?php echo $personalInfo['status']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Készségek Szekció -->
    <section id="skills" class="py-20 bg-card/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white mb-4">Technológiák & Készségek</h2>
                <p class="text-slate-400">Eszközök, amiket nap mint nap használok a munkám során.</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <?php foreach($skills as $skill): ?>
                <!-- Skill: <?php echo $skill['name']; ?> -->
                <div class="bg-card p-6 rounded-xl border border-slate-700 <?php echo $skill['border']; ?> transition-colors text-center group">
                    <i class="<?php echo $skill['icon']; ?> text-5xl <?php echo $skill['color']; ?> mb-4 transform group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-white font-semibold"><?php echo $skill['name']; ?></h3>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Projektek Szekció -->
    <section id="projects" class="py-20 bg-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-white mb-4">Kiemelt Projektjeim</h2>
                    <p class="text-slate-400">Néhány munka, amire büszke vagyok.</p>
                </div>
                <!-- Lapozó gombok -->
                <div class="flex gap-2">
                    <button onclick="scrollProjects('left')" class="p-3 rounded-full bg-card border border-slate-700 hover:bg-slate-700 text-white transition-colors hover:border-blue-500 group" aria-label="Balra">
                        <i class="fas fa-chevron-left group-hover:text-blue-400 transition-colors"></i>
                    </button>
                    <button onclick="scrollProjects('right')" class="p-3 rounded-full bg-card border border-slate-700 hover:bg-slate-700 text-white transition-colors hover:border-blue-500 group" aria-label="Jobbra">
                        <i class="fas fa-chevron-right group-hover:text-blue-400 transition-colors"></i>
                    </button>
                </div>
            </div>

            <!-- Carousel Container -->
            <div id="projects-container" class="flex overflow-x-auto gap-6 snap-x snap-mandatory pb-8 hide-scrollbar scroll-smooth">
                
                <?php foreach($projects as $project): ?>
                <div class="min-w-[85vw] sm:min-w-[380px] md:min-w-[350px] lg:min-w-[380px] snap-center project-card bg-card rounded-xl overflow-hidden border border-slate-700 shadow-xl group flex-shrink-0">
                    <div class="h-48 overflow-hidden relative">
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4">
                            <a href="<?php echo $project['links']['github']; ?>" class="bg-white text-black p-3 rounded-full hover:bg-gray-200 transition-colors" title="Forráskód"><i class="fab fa-github"></i></a>
                            <a href="<?php echo $project['links']['demo']; ?>" class="bg-blue-600 text-white p-3 rounded-full hover:bg-blue-700 transition-colors" title="Élő demó"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2"><?php echo $project['title']; ?></h3>
                        <p class="text-slate-400 text-sm mb-4">
                            <?php echo $project['desc']; ?>
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach($project['tags'] as $tag): ?>
                            <span class="text-xs bg-slate-800 text-blue-400 px-3 py-1 rounded-full border border-slate-700"><?php echo $tag; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
            
            <div class="text-center mt-12">
                <a href="<?php echo $socials['github']; ?>" class="inline-block border border-slate-700 hover:border-blue-500 text-slate-300 hover:text-white px-8 py-3 rounded-full transition-all">
                    További projektek a GitHub-on <i class="fab fa-github ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Kapcsolat Szekció -->
    <section id="contact" class="py-20 bg-gradient-to-b from-card to-dark">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">Lépj velem kapcsolatba!</h2>
            <p class="text-slate-400 mb-12">
                Van egy projekted a számomra, vagy csak köszönni szeretnél? Írj bátran!
            </p>
            
            <form class="space-y-6 text-left bg-card p-8 rounded-2xl border border-slate-700 shadow-2xl" onsubmit="event.preventDefault(); alert('Köszönöm az üzenetet! (Ez csak egy demó űrlap)');">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-400 mb-2">Név</label>
                        <input type="text" id="name" class="w-full bg-dark border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors" placeholder="Kovács János">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-400 mb-2">Email cím</label>
                        <input type="email" id="email" class="w-full bg-dark border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors" placeholder="kovacs.janos@example.com">
                    </div>
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-slate-400 mb-2">Üzenet</label>
                    <textarea id="message" rows="4" class="w-full bg-dark border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors" placeholder="Ide írd az üzeneted..."></textarea>
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold py-4 rounded-lg transition-all transform hover:scale-[1.02] shadow-lg">
                    Üzenet küldése <i class="fas fa-paper-plane ml-2"></i>
                </button>
            </form>
            
            <div class="mt-12 flex justify-center gap-8">
                <div class="text-center">
                    <div class="w-12 h-12 bg-slate-800 rounded-full flex items-center justify-center mx-auto mb-3 text-blue-400">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <p class="text-slate-400 text-sm"><?php echo $personalInfo['email']; ?></p>
                </div>
                <div class="text-center">
                    <div class="w-12 h-12 bg-slate-800 rounded-full flex items-center justify-center mx-auto mb-3 text-blue-400">
                        <i class="fas fa-phone"></i>
                    </div>
                    <p class="text-slate-400 text-sm"><?php echo $personalInfo['phone']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Lábléc -->
    <footer class="bg-dark border-t border-slate-800 py-8">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-slate-500 text-sm">
                &copy; <?php echo date("Y"); ?> Minden jog fenntartva. Készítette: <span class="text-white font-semibold"><?php echo $personalInfo['name']; ?></span>
            </p>
        </div>
    </footer>

    <script>
        // Sima görgetés a linkekre kattintáskor
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Projektek lapozása
        function scrollProjects(direction) {
            const container = document.getElementById('projects-container');
            const scrollAmount = container.clientWidth * 0.8;
            
            if (direction === 'left') {
                container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else {
                container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }
    </script>
</body>
</html>