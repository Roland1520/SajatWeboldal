<?php
// --- CONFIGURATION & TRANSLATIONS ---
$content = [
    'hu' => [
        'nav' => [
            'back' => 'Vissza a főoldalra',
            'lang_hu' => 'HU',
            'lang_en' => 'EN'
        ],
        'header' => [
            'title_1' => 'Felhasználási',
            'title_2' => 'Feltételek',
            'date' => 'Hatályos: 2024. január 1-től visszavonásig'
        ],
        'sections' => [
            'intro' => [
                'title' => '1. Bevezetés',
                'text' => 'Üdvözöljük <strong>Troznai Roland</strong> (továbbiakban: Szolgáltató) weboldalán. A weboldal használatával Ön elfogadja az alábbi felhasználási feltételeket. Kérjük, figyelmesen olvassa el őket.'
            ],
            'copyright' => [
                'title' => '2. Szerzői jogok',
                'text' => 'A weboldalon található összes tartalom (szövegek, képek, grafikák, logók, forráskódok) Troznai Roland szellemi tulajdonát képezik, és szerzői jogi védelem alatt állnak. A tartalmak bármilyen formában történő másolása, terjesztése vagy felhasználása a tulajdonos írásos engedélye nélkül tilos.'
            ],
            'usage' => [
                'title' => '3. A weboldal használata',
                'text' => 'A látogatók a weboldalt kizárólag törvényes célokra használhatják. Tilos a weboldal működésének megzavarása, a biztonsági rendszerek kijátszása, vagy más felhasználók adatainak jogosulatlan megszerzése.',
                'list_title' => 'Tilos továbbá:',
                'list' => [
                    'Kártékony kódok (vírusok, malware) terjesztése.',
                    'A weboldal tartalmának automatizált módszerekkel (pl. robotokkal) történő lementése.',
                    'A Szolgáltató jó hírnevének megsértése.'
                ]
            ],
            'liability' => [
                'title' => '4. Felelősség kizárása',
                'text' => 'A Szolgáltató mindent megtesz az adatok pontosságáért, de nem vállal felelősséget a weboldalon található információk esetleges hibáiért, elírásaiért vagy az ezekből eredő károkért. A weboldal használata saját felelősségre történik.'
            ],
            'links' => [
                'title' => '5. Külső hivatkozások',
                'text' => 'A weboldal tartalmazhat külső weboldalakra mutató hivatkozásokat (pl. GitHub, Facebook). Ezen oldalak tartalmáért és adatkezelési gyakorlatáért a Szolgáltató semmilyen felelősséget nem vállal.'
            ],
            'modification' => [
                'title' => '6. Feltételek módosítása',
                'text' => 'A Szolgáltató fenntartja a jogot, hogy jelen Felhasználási Feltételeket bármikor, előzetes értesítés nélkül módosítsa. A módosítások a weboldalon való közzététellel lépnek hatályba.'
            ],
            'contact' => [
                'title' => '7. Kapcsolat',
                'text' => 'Amennyiben kérdése van a felhasználási feltételekkel kapcsolatban, kérjük, vegye fel velünk a kapcsolatot:',
                'email_label' => 'Email:',
                'email' => 'troznairoland@gmail.com'
            ]
        ],
        'footer_btn' => 'Vissza a főoldalra'
    ],
    'en' => [
        'nav' => [
            'back' => 'Back to Home',
            'lang_hu' => 'HU',
            'lang_en' => 'EN'
        ],
        'header' => [
            'title_1' => 'Terms of',
            'title_2' => 'Use',
            'date' => 'Effective from: January 1, 2024 until withdrawal'
        ],
        'sections' => [
            'intro' => [
                'title' => '1. Introduction',
                'text' => 'Welcome to the website of <strong>Roland Troznai</strong> (hereinafter: Provider). By using this website, you agree to the following terms and conditions. Please read them carefully.'
            ],
            'copyright' => [
                'title' => '2. Copyright',
                'text' => 'All content on the website (texts, images, graphics, logos, source codes) is the intellectual property of Roland Troznai and is protected by copyright. Any copying, distribution, or use of the content without the written permission of the owner is prohibited.'
            ],
            'usage' => [
                'title' => '3. Use of the Website',
                'text' => 'Visitors may use the website for lawful purposes only. It is prohibited to disrupt the operation of the website, bypass security systems, or gain unauthorized access to other users\' data.',
                'list_title' => 'It is also prohibited to:',
                'list' => [
                    'Distribute malicious code (viruses, malware).',
                    'Scrape the website content using automated methods (e.g., bots).',
                    'Damage the reputation of the Provider.'
                ]
            ],
            'liability' => [
                'title' => '4. Limitation of Liability',
                'text' => 'The Provider strives for the accuracy of the data but assumes no responsibility for any errors, typos on the website, or damages resulting from them. Use of the website is at your own risk.'
            ],
            'links' => [
                'title' => '5. External Links',
                'text' => 'The website may contain links to external websites (e.g., GitHub, Facebook). The Provider assumes no responsibility for the content and privacy practices of these sites.'
            ],
            'modification' => [
                'title' => '6. Modification of Terms',
                'text' => 'The Provider reserves the right to modify these Terms of Use at any time without prior notice. Modifications become effective upon publication on the website.'
            ],
            'contact' => [
                'title' => '7. Contact',
                'text' => 'If you have any questions regarding the terms of use, please contact us:',
                'email_label' => 'Email:',
                'email' => 'troznairoland@gmail.com'
            ]
        ],
        'footer_btn' => 'Back to Home'
    ]
];
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms & Conditions - Troznai Roland</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body { font-family: 'Manrope', sans-serif; }
        h1, h2, h3, h4, .font-display { font-family: 'Syne', sans-serif; }
        ::selection { background-color: #feccf2; color: #0a0a0a; }
    </style>
</head>
<body class="bg-[#0a0a0a] text-[#f5f5f7] overflow-x-hidden w-full transition-colors duration-300">

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 py-6 bg-[#0a0a0a]/80 backdrop-blur-md border-b border-white/5">
        <div class="max-w-4xl mx-auto px-6 flex justify-between items-center">
            <!-- Logo -->
            <a href="index.php" class="text-xl md:text-2xl font-bold tracking-tighter uppercase font-display hover:opacity-80 transition-opacity">
                Troznai<span class="text-xs align-top relative -top-1 ml-1 text-[#7795b9]">DEV</span>
            </a>
            
            <div class="flex items-center gap-6">
                <!-- Language Toggle -->
                <button onclick="toggleLanguage()" class="border border-white/20 px-3 py-1 rounded-full hover:bg-white hover:text-black transition-all text-sm">
                    <span id="lang-hu" class="font-extrabold">HU</span>
                    <span class="mx-1 opacity-50">/</span>
                    <span id="lang-en" class="opacity-50">EN</span>
                </button>

                <!-- Back Link -->
                <a href="index.php" class="flex items-center gap-2 text-sm font-semibold hover:text-[#7795b9] transition-colors">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i> 
                    <span data-key="nav.back">Vissza a főoldalra</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="pt-32 pb-24 px-6 md:px-12 max-w-4xl mx-auto">
        
        <header class="mb-16">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-6 uppercase font-display text-transparent bg-clip-text bg-gradient-to-r from-[#7795b9] to-[#feccf2]">
                <span data-key="header.title_1">Felhasználási</span> <br> 
                <span data-key="header.title_2">Feltételek</span>
            </h1>
            <p class="text-gray-400 text-lg" data-key="header.date">Hatályos: 2024. január 1-től visszavonásig</p>
        </header>

        <div class="space-y-12 text-gray-300 leading-relaxed">
            
            <!-- 1. Intro -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 font-display" data-key="sections.intro.title">1. Bevezetés</h2>
                <p data-key="sections.intro.text" data-html="true">
                    Üdvözöljük...
                </p>
            </section>

            <!-- 2. Copyright -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 font-display" data-key="sections.copyright.title">2. Szerzői jogok</h2>
                <p data-key="sections.copyright.text">
                    A weboldalon található összes tartalom...
                </p>
            </section>

            <!-- 3. Usage -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 font-display" data-key="sections.usage.title">3. A weboldal használata</h2>
                <p class="mb-4" data-key="sections.usage.text">
                    A látogatók a weboldalt...
                </p>
                <p class="mb-2 font-semibold text-white" data-key="sections.usage.list_title">Tilos továbbá:</p>
                <ul class="list-disc pl-5 space-y-1 marker:text-[#7795b9]" id="usage-list">
                    <!-- JS renders list here -->
                </ul>
            </section>

            <!-- 4. Liability -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 font-display" data-key="sections.liability.title">4. Felelősség kizárása</h2>
                <p data-key="sections.liability.text">
                    A Szolgáltató mindent megtesz...
                </p>
            </section>

            <!-- 5. Links -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 font-display" data-key="sections.links.title">5. Külső hivatkozások</h2>
                <p data-key="sections.links.text">
                    A weboldal tartalmazhat...
                </p>
            </section>

            <!-- 6. Modification -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 font-display" data-key="sections.modification.title">6. Feltételek módosítása</h2>
                <p data-key="sections.modification.text">
                    A Szolgáltató fenntartja a jogot...
                </p>
            </section>

            <!-- 7. Contact -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 font-display" data-key="sections.contact.title">7. Kapcsolat</h2>
                <p class="mb-2" data-key="sections.contact.text">
                    Amennyiben kérdése van...
                </p>
                <p>
                    <strong data-key="sections.contact.email_label">Email:</strong> 
                    <a href="mailto:troznairoland@gmail.com" class="text-[#feccf2] hover:underline" data-key="sections.contact.email">troznairoland@gmail.com</a>
                </p>
            </section>

        </div>

        <div class="mt-16 pt-8 border-t border-white/10 text-center">
            <a href="index.php" class="inline-block px-8 py-3 border border-white/20 rounded-full hover:bg-white hover:text-black transition-all font-display font-bold uppercase text-sm" data-key="footer_btn">
                Vissza a főoldalra
            </a>
        </div>

    </main>

    <script>
        // Data from PHP
        const content = <?php echo json_encode($content); ?>;
        let currentLang = 'hu';

        function toggleLanguage() {
            currentLang = currentLang === 'hu' ? 'en' : 'hu';
            updateContent();
        }

        function updateContent() {
            const data = content[currentLang];
            
            // 1. Update simple text elements
            document.querySelectorAll('[data-key]').forEach(el => {
                const keys = el.getAttribute('data-key').split('.');
                let val = data;
                keys.forEach(k => { if(val) val = val[k]; });
                
                if (val) {
                    if (el.getAttribute('data-html') === 'true') {
                        el.innerHTML = val;
                    } else {
                        el.innerText = val;
                    }
                }
            });

            // 2. Update Usage List
            const usageList = document.getElementById('usage-list');
            usageList.innerHTML = data.sections.usage.list.map(item => `<li>${item}</li>`).join('');

            // 3. Update Toggle Styles
            const huLabel = document.getElementById('lang-hu');
            const enLabel = document.getElementById('lang-en');
            
            if (currentLang === 'hu') {
                huLabel.classList.add('font-extrabold'); huLabel.classList.remove('opacity-50');
                enLabel.classList.remove('font-extrabold'); enLabel.classList.add('opacity-50');
            } else {
                huLabel.classList.remove('font-extrabold'); huLabel.classList.add('opacity-50');
                enLabel.classList.add('font-extrabold'); enLabel.classList.remove('opacity-50');
            }
        }

        // Initialize Icons & Content
        lucide.createIcons();
        updateContent(); // Ensure list is rendered on load
    </script>
</body>
</html>