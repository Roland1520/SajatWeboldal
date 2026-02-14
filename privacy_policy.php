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
            'title_1' => 'Adatvédelmi',
            'title_2' => 'Tájékoztató',
            'date' => 'Hatályos: 2024. január 1-től visszavonásig'
        ],
        'sections' => [
            'intro' => [
                'title' => '1. Bevezetés',
                'text' => 'Jelen Adatvédelmi Tájékoztató célja, hogy <strong>Troznai Roland</strong> (továbbiakban: Adatkezelő) weboldalának látogatóit tájékoztassa a személyes adatok kezelésének módjáról, céljáról és jogalapjáról az Európai Unió Általános Adatvédelmi Rendelete (GDPR) és a magyar jogszabályoknak megfelelően.'
            ],
            'controller' => [
                'title' => '2. Az Adatkezelő adatai',
                'name_label' => 'Név:',
                'email_label' => 'E-mail cím:',
                'phone_label' => 'Telefonszám:',
                'address_label' => 'Székhely/Lakcím:',
                'website_label' => 'Weboldal:',
                'address_value' => 'Zalaegerszeg, Magyarország'
            ],
            'scope' => [
                'title' => '3. A kezelt adatok köre és célja',
                'text' => 'A weboldal "Kapcsolat" űrlapján keresztül történő megkeresés esetén az alábbi adatokat kezelem:',
                'table_head' => ['Adat típusa', 'Adatkezelés célja', 'Jogalap'],
                'rows' => [
                    ['Név', 'Kapcsolattartás, azonosítás.', 'Az érintett önkéntes hozzájárulása.'],
                    ['E-mail cím', 'Válaszadás az üzenetre.', 'Az érintett önkéntes hozzájárulása.'],
                    ['Telefonszám', 'Gyorsabb kapcsolatfelvétel (opcionális).', 'Az érintett önkéntes hozzájárulása.']
                ]
            ],
            'transfer' => [
                'title' => '4. Adattovábbítás és tárolás',
                'text' => 'A megadott személyes adatokat bizalmasan kezelem, azokat harmadik félnek nem adom át, kivéve, ha erre törvény kötelez. Az adatok tárolása biztonságos szervereken történik.',
                'hosting' => 'Tárhelyszolgáltató: vps4you'
            ],
            'cookies' => [
                'title' => '5. Cookie-k (Sütik) használata',
                'text' => 'A weboldal jelenleg <strong>nem használ</strong> marketing célú vagy nyomkövető sütiket (cookie-kat). Kizárólag a működéshez elengedhetetlen technikai sütik kerülhetnek alkalmazásra, amelyek nem gyűjtenek személyes adatokat.'
            ],
            'rights' => [
                'title' => '6. Az érintettek jogai',
                'text' => 'Ön bármikor jogosult:',
                'list' => [
                    'Tájékoztatást kérni személyes adatai kezeléséről.',
                    'Kérni adatai helyesbítését.',
                    'Kérni adatai törlését vagy zárolását ("elfeledtetéshez való jog").',
                    'Tiltakozni az adatkezelés ellen.'
                ],
                'contact_text' => 'Kérelmét a <a href="mailto:troznairoland@gmail.com" class="text-[#7795b9] underline">troznairoland@gmail.com</a> címre küldheti, melyre legkésőbb 30 napon belül válaszolok.'
            ],
            'remedy' => [
                'title' => '7. Jogorvoslat',
                'text' => 'Panaszával a Nemzeti Adatvédelmi és Információszabadság Hatósághoz (NAIH) fordulhat:',
                'address' => 'Cím: 1055 Budapest, Falk Miksa utca 9-11.'
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
            'title_1' => 'Privacy',
            'title_2' => 'Policy',
            'date' => 'Effective from: January 1, 2024 until withdrawal'
        ],
        'sections' => [
            'intro' => [
                'title' => '1. Introduction',
                'text' => 'The purpose of this Privacy Policy is to inform visitors of <strong>Roland Troznai\'s</strong> (hereinafter: Data Controller) website about the method, purpose, and legal basis of personal data processing in accordance with the European Union\'s General Data Protection Regulation (GDPR) and Hungarian laws.'
            ],
            'controller' => [
                'title' => '2. Data Controller Details',
                'name_label' => 'Name:',
                'email_label' => 'Email:',
                'phone_label' => 'Phone:',
                'address_label' => 'Address:',
                'website_label' => 'Website:',
                'address_value' => 'Zalaegerszeg, Hungary'
            ],
            'scope' => [
                'title' => '3. Scope and Purpose of Data Processed',
                'text' => 'When contacting via the "Contact" form on the website, I process the following data:',
                'table_head' => ['Data Type', 'Purpose of Processing', 'Legal Basis'],
                'rows' => [
                    ['Name', 'Communication, identification.', 'Voluntary consent of the data subject.'],
                    ['Email Address', 'Replying to the message.', 'Voluntary consent of the data subject.'],
                    ['Phone Number', 'Faster contact (optional).', 'Voluntary consent of the data subject.']
                ]
            ],
            'transfer' => [
                'title' => '4. Data Transfer and Storage',
                'text' => 'I treat the provided personal data confidentially and do not pass it on to third parties unless required by law. Data is stored on secure servers.',
                'hosting' => 'Hosting Provider: vps4you'
            ],
            'cookies' => [
                'title' => '5. Use of Cookies',
                'text' => 'The website currently <strong>does not use</strong> marketing or tracking cookies. Only technical cookies essential for operation may be used, which do not collect personal data.'
            ],
            'rights' => [
                'title' => '6. Rights of Data Subjects',
                'text' => 'You are entitled at any time to:',
                'list' => [
                    'Request information about the processing of your personal data.',
                    'Request rectification of your data.',
                    'Request deletion or blocking of your data ("right to be forgotten").',
                    'Object to the processing of data.'
                ],
                'contact_text' => 'You can send your request to <a href="mailto:troznairoland@gmail.com" class="text-[#7795b9] underline">troznairoland@gmail.com</a>, to which I will reply within 30 days.'
            ],
            'remedy' => [
                'title' => '7. Legal Remedy',
                'text' => 'You may file a complaint with the National Authority for Data Protection and Freedom of Information (NAIH):',
                'address' => 'Address: 1055 Budapest, Falk Miksa utca 9-11.'
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
    <title>Privacy Policy - Troznai Roland</title>
    
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
                <span data-key="header.title_1">Adatvédelmi</span> <br> 
                <span data-key="header.title_2">Tájékoztató</span>
            </h1>
            <p class="text-gray-400 text-lg" data-key="header.date">Hatályos: 2024. január 1-től visszavonásig</p>
        </header>

        <div class="space-y-12 text-gray-300 leading-relaxed">
            
            <!-- 1. Intro -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 font-display" data-key="sections.intro.title">1. Bevezetés</h2>
                <p data-key="sections.intro.text" data-html="true">
                    Jelen Adatvédelmi Tájékoztató célja, hogy <strong>Troznai Roland</strong> (továbbiakban: Adatkezelő) weboldalának látogatóit tájékoztassa a személyes adatok kezelésének módjáról, céljáról és jogalapjáról az Európai Unió Általános Adatvédelmi Rendelete (GDPR) és a magyar jogszabályoknak megfelelően.
                </p>
            </section>

            <!-- 2. Controller -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 font-display" data-key="sections.controller.title">2. Az Adatkezelő adatai</h2>
                <ul class="list-disc pl-5 space-y-2 marker:text-[#7795b9]">
                    <li><strong data-key="sections.controller.name_label">Név:</strong> Troznai Roland</li>
                    <li><strong data-key="sections.controller.email_label">E-mail cím:</strong> <a href="mailto:troznairoland@gmail.com" class="text-[#7795b9] hover:underline">troznairoland@gmail.com</a></li>
                    <li><strong data-key="sections.controller.phone_label">Telefonszám:</strong> +36 20 270 6492</li>
                    <li><strong data-key="sections.controller.address_label">Székhely/Lakcím:</strong> <span data-key="sections.controller.address_value">Zalaegerszeg, Magyarország</span></li>
                    <li><strong data-key="sections.controller.website_label">Weboldal:</strong> troznaidev.hu</li>
                </ul>
            </section>

            <!-- 3. Scope -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 font-display" data-key="sections.scope.title">3. A kezelt adatok köre és célja</h2>
                <p class="mb-4" data-key="sections.scope.text">A weboldal "Kapcsolat" űrlapján keresztül történő megkeresés esetén az alábbi adatokat kezelem:</p>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse border border-white/10 rounded-lg overflow-hidden">
                        <thead>
                            <tr class="bg-white/5 text-white" id="table-head-row">
                                <!-- JS renders headers here -->
                                <th class="p-4 border-b border-white/10">Adat típusa</th>
                                <th class="p-4 border-b border-white/10">Adatkezelés célja</th>
                                <th class="p-4 border-b border-white/10">Jogalap</th>
                            </tr>
                        </thead>
                        <tbody id="table-body">
                            <!-- JS renders rows here -->
                            <tr>
                                <td class="p-4 border-b border-white/5">Név</td>
                                <td class="p-4 border-b border-white/5">Kapcsolattartás, azonosítás.</td>
                                <td class="p-4 border-b border-white/5">Az érintett önkéntes hozzájárulása.</td>
                            </tr>
                            <tr>
                                <td class="p-4 border-b border-white/5">E-mail cím</td>
                                <td class="p-4 border-b border-white/5">Válaszadás az üzenetre.</td>
                                <td class="p-4 border-b border-white/5">Az érintett önkéntes hozzájárulása.</td>
                            </tr>
                            <tr>
                                <td class="p-4 border-b border-white/5">Telefonszám</td>
                                <td class="p-4 border-b border-white/5">Gyorsabb kapcsolatfelvétel (opcionális).</td>
                                <td class="p-4 border-b border-white/5">Az érintett önkéntes hozzájárulása.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- 4. Transfer -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 font-display" data-key="sections.transfer.title">4. Adattovábbítás és tárolás</h2>
                <p data-key="sections.transfer.text">
                    A megadott személyes adatokat bizalmasan kezelem, azokat harmadik félnek nem adom át, kivéve, ha erre törvény kötelez. Az adatok tárolása biztonságos szervereken történik.
                </p>
                <p class="mt-4 text-sm text-gray-500" data-key="sections.transfer.hosting">
                    Tárhelyszolgáltató: vps4you
                </p>
            </section>

            <!-- 5. Cookies -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 font-display" data-key="sections.cookies.title">5. Cookie-k (Sütik) használata</h2>
                <p data-key="sections.cookies.text" data-html="true">
                    A weboldal jelenleg <strong>nem használ</strong> marketing célú vagy nyomkövető sütiket (cookie-kat). Kizárólag a működéshez elengedhetetlen technikai sütik kerülhetnek alkalmazásra, amelyek nem gyűjtenek személyes adatokat.
                </p>
            </section>

            <!-- 6. Rights -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 font-display" data-key="sections.rights.title">6. Az érintettek jogai</h2>
                <p class="mb-2" data-key="sections.rights.text">Ön bármikor jogosult:</p>
                <ul class="list-disc pl-5 space-y-1 marker:text-[#feccf2]" id="rights-list">
                    <!-- JS renders list here -->
                    <li>Tájékoztatást kérni személyes adatai kezeléséről.</li>
                    <li>Kérni adatai helyesbítését.</li>
                    <li>Kérni adatai törlését vagy zárolását ("elfeledtetéshez való jog").</li>
                    <li>Tiltakozni az adatkezelés ellen.</li>
                </ul>
                <p class="mt-4" data-key="sections.rights.contact_text" data-html="true">
                    Kérelmét a <a href="mailto:troznairoland@gmail.com" class="text-[#7795b9] underline">troznairoland@gmail.com</a> címre küldheti, melyre legkésőbb 30 napon belül válaszolok.
                </p>
            </section>

            <!-- 7. Remedy -->
            <section>
                <h2 class="text-2xl font-bold text-white mb-4 font-display" data-key="sections.remedy.title">7. Jogorvoslat</h2>
                <p data-key="sections.remedy.text">
                    Panaszával a Nemzeti Adatvédelmi és Információszabadság Hatósághoz (NAIH) fordulhat:
                </p>
                <p class="mt-2 text-sm text-gray-400">
                    <span data-key="sections.remedy.address">Cím: 1055 Budapest, Falk Miksa utca 9-11.</span><br>
                    Weboldal: <a href="http://www.naih.hu" target="_blank" class="hover:text-white">www.naih.hu</a>
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

            // 2. Update Table (Scope)
            const tableHead = document.getElementById('table-head-row');
            tableHead.innerHTML = data.sections.scope.table_head.map(h => `<th class="p-4 border-b border-white/10">${h}</th>`).join('');

            const tableBody = document.getElementById('table-body');
            tableBody.innerHTML = data.sections.scope.rows.map(row => `
                <tr>
                    <td class="p-4 border-b border-white/5">${row[0]}</td>
                    <td class="p-4 border-b border-white/5">${row[1]}</td>
                    <td class="p-4 border-b border-white/5">${row[2]}</td>
                </tr>
            `).join('');

            // 3. Update List (Rights)
            const rightsList = document.getElementById('rights-list');
            rightsList.innerHTML = data.sections.rights.list.map(item => `<li>${item}</li>`).join('');

            // 4. Update Toggle Styles
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

        // Initialize Icons
        lucide.createIcons();
    </script>
</body>
</html>