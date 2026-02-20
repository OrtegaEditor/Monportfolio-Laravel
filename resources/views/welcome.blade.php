<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marcelin FOSSO - Portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .skill-box {
            @apply flex items-center gap-3 px-4 py-3 bg-black/60 border border-yellow-900/40 rounded-lg text-gray-300 hover:border-yellow-500 hover:text-yellow-400 transition-all duration-300;
        }
    </style>


</head>

<body class="bg-[#0f0f0f] text-white min-h-screen font-sans">

    <!-- Navbar fixe -->
    <nav x-data="{ open: false }"
        class="fixed top-0 left-0 right-0 z-50 bg-black/80 backdrop-blur-md border-b border-yellow-900/30">

        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <div
                    class="w-10 h-10 rounded-full bg-yellow-500 flex items-center justify-center text-black font-bold text-xl shadow-md">
                    MF
                </div>
                <span class="text-xl md:text-2xl font-bold text-yellow-400 tracking-tight">
                    Marcelin FOSSO
                </span>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-10 text-sm lg:text-base font-medium">

                <a href="#accueil" class="flex items-center gap-2 hover:text-yellow-400 transition">
                    <i class="fa-solid fa-house"></i> Accueil
                </a>

                <a href="#apropos" class="flex items-center gap-2 hover:text-yellow-400 transition">
                    <i class="fa-solid fa-user"></i> À propos
                </a>

                <a href="#competences" class="flex items-center gap-2 hover:text-yellow-400 transition">
                    <i class="fa-solid fa-code"></i> Compétences
                </a>

                <a href="#projets" class="flex items-center gap-2 hover:text-yellow-400 transition">
                    <i class="fa-solid fa-laptop"></i> Projets
                </a>

                <a href="#services" class="flex items-center gap-2 hover:text-yellow-400 transition">
                    <i class="fa-solid fa-briefcase"></i> Services
                </a>

                <a href="#contact"
                    class="px-4 py-2 bg-yellow-500 text-black rounded-lg font-semibold hover:bg-yellow-400 transition">
                    <i class="fa-solid fa-envelope mr-2"></i> Contact
                </a>
            </div>

            <!-- Mobile Button -->
            <button @click="open = !open" class="md:hidden text-yellow-400 focus:outline-none">

                <svg x-show="!open" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <svg x-show="open" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

        </div>

        <!-- Mobile Menu -->
        <div x-show="open" x-transition class="md:hidden bg-black/95 border-t border-yellow-900/30">

            <div class="px-6 py-6 flex flex-col gap-6 text-lg">

                <a href="#accueil" @click="open = false" class="flex items-center gap-3 hover:text-yellow-400">
                    <i class="fa-solid fa-house w-5"></i> Accueil
                </a>

                <a href="#apropos" @click="open = false" class="flex items-center gap-3 hover:text-yellow-400">
                    <i class="fa-solid fa-user w-5"></i> À propos
                </a>

                <a href="#competences" @click="open = false" class="flex items-center gap-3 hover:text-yellow-400">
                    <i class="fa-solid fa-code w-5"></i> Compétences
                </a>

                <a href="#projets" @click="open = false" class="flex items-center gap-3 hover:text-yellow-400">
                    <i class="fa-solid fa-laptop w-5"></i> Projets
                </a>

                <a href="#services" @click="open = false" class="flex items-center gap-3 hover:text-yellow-400">
                    <i class="fa-solid fa-briefcase w-5"></i> Services
                </a>

                <a href="#contact" @click="open = false"
                    class="flex items-center justify-center gap-3 px-6 py-3 bg-yellow-500 text-black rounded-xl font-bold hover:bg-yellow-400 transition">
                    <i class="fa-solid fa-envelope"></i> Contact
                </a>

            </div>
        </div>

    </nav>


    <!-- Section Accueil / Hero -->
    <section id="accueil" class="min-h-screen pt-32 pb-20 flex items-center">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 lg:gap-16 items-center">

            <!-- Texte gauche + réseaux sociaux -->
            <div class="space-y-8 md:space-y-10">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold leading-tight">
                    Bonjour,<br>
                    je suis <span class="text-yellow-400">Marcelin</span>
                </h1>

                <p class="text-xl md:text-2xl text-gray-300 leading-relaxed">
                    Développeur web & étudiant en Génie Logiciel à l’IUT Fotso Victor de Bandjoun.<br>
                    Je crée des applications web modernes, performantes et adaptées à vos besoins.
                </p>

                <!-- Liens réseaux sociaux -->
                <div class="flex flex-wrap gap-5 pt-4">
                    <a href="https://www.linkedin.com/in/marcelin-fosso-149b5b352" target="_blank"
                        rel="noopener noreferrer"
                        class="flex items-center gap-3 text-gray-300 hover:text-yellow-400 transition-colors duration-300 text-xl">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-1.337-.029-3.058-1.867-3.058-1.867 0-2.152 1.459-2.152 2.967v5.695h-3v-11h2.882v1.509h.039c.401-.757 1.381-1.557 2.841-1.557 3.037 0 3.597 2.001 3.597 4.604v6.444z" />
                        </svg>
                        LinkedIn
                    </a>

                    <a href="https://github.com/OrtegaEditor" target="_blank" rel="noopener noreferrer"
                        class="flex items-center gap-3 text-gray-300 hover:text-yellow-400 transition-colors duration-300 text-xl">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                        GitHub
                    </a>

                    <a href="https://x.com/" target="_blank" rel="noopener noreferrer"
                        class="flex items-center gap-3 text-gray-300 hover:text-yellow-400 transition-colors duration-300 text-xl">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                        X
                    </a>

                    <a href="https://www.facebook.com/OrtegaEditor/directory_links" target="_blank" rel="noopener noreferrer"
                        class="flex items-center gap-3 text-gray-300 hover:text-yellow-400 transition-colors duration-300 text-xl">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                        </svg>
                        Facebook
                    </a>
                </div>

                <!-- Bouton contact -->
                <div class="pt-6">
                    <a href="#contact"
                        class="inline-flex items-center gap-3 px-8 py-4 bg-yellow-500 text-black font-bold text-lg rounded-xl hover:bg-yellow-400 transition-all duration-300 transform hover:scale-105 shadow-lg shadow-yellow-600/30">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                        </svg>
                        Contactez-moi
                    </a>
                </div>
            </div>

            <!-- Photo droite -->
            <div class="flex justify-center md:justify-end">
                <div class="relative w-72 h-96 md:w-[420px] md:h-[520px] group">

                    <!-- Halo lumineux -->
                    <div
                        class="absolute -inset-4 bg-gradient-to-tr from-yellow-500/30 via-yellow-400/10 to-transparent rounded-3xl blur-2xl opacity-70 group-hover:opacity-100 transition duration-700">
                    </div>

                    <!-- Card glass -->
                    <div
                        class="relative w-full h-full rounded-3xl bg-black/40 backdrop-blur-xl border border-yellow-500/30 shadow-[0_0_40px_rgba(234,179,8,0.25)] overflow-hidden">

                        <!-- Image -->
                        <img src="/images/premiereImage.jpeg" alt="Marcelin FOSSO"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />

                        <!-- Overlay gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent">
                        </div>

                        <!-- Signature Badge -->
                        <div
                            class="absolute bottom-6 left-6 px-4 py-2 bg-yellow-500 text-black font-semibold rounded-lg shadow-lg">
                            Marcelin FOSSO
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- Section À propos -->
    <section id="apropos" class="py-20 bg-black/40">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-yellow-400 mb-10 text-center">À propos</h2>
            <p class="text-lg md:text-xl text-gray-300 leading-relaxed max-w-4xl mx-auto text-center">
                Passionné par le développement web et les nouvelles technologies, je suis actuellement étudiant en Génie
                Logiciel.<br><br>
                J’aime concevoir des solutions digitales propres, rapides et tournées utilisateur. Mon objectif :
                transformer vos idées en produits concrets et performants.
            </p>
        </div>
    </section>

    <!-- Section Compétences -->
    <section id="competences" class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-yellow-400 mb-12 text-center">
                Compétences
            </h2>

            <div class="grid md:grid-cols-3 gap-8">

                <!-- Frontend -->
                <div
                    class="bg-black/50 p-8 rounded-2xl border border-yellow-900/30 hover:border-yellow-500/50 transition-all">
                    <h3 class="text-2xl font-semibold mb-6 text-yellow-400">Frontend</h3>

                    <div class="grid grid-cols-2 gap-4">

                        <div class="skill-box">
                            <i class="fa-brands fa-html5 text-orange-500"></i>
                            <span>HTML</span>
                        </div>

                        <div class="skill-box">
                            <i class="fa-brands fa-css3-alt text-blue-500"></i>
                            <span>CSS</span>
                        </div>

                        <div class="skill-box">
                            <i class="fa-brands fa-js text-yellow-400"></i>
                            <span>JavaScript</span>
                        </div>

                        <div class="skill-box">
                            <i class="fa-brands fa-php text-indigo-400"></i>
                            <span>PHP</span>
                        </div>

                        <div class="skill-box">
                            <i class="fa-solid fa-wind text-cyan-400"></i>
                            <span>Tailwind</span>
                        </div>

                        <div class="skill-box">
                            <i class="fa-solid fa-code text-yellow-400"></i>
                            <span>FMScript</span>
                        </div>

                    </div>
                </div>

                <!-- Backend -->
                <div
                    class="bg-black/50 p-8 rounded-2xl border border-yellow-900/30 hover:border-yellow-500/50 transition-all">
                    <h3 class="text-2xl font-semibold mb-6 text-yellow-400">Backend</h3>

                    <div class="grid grid-cols-2 gap-4">

                        <div class="skill-box">
                            <i class="fa-brands fa-laravel text-red-500"></i>
                            <span>Laravel</span>
                        </div>

                        <div class="skill-box">
                            <i class="fa-brands fa-python text-blue-400"></i>
                            <span>Django</span>
                        </div>

                        <div class="skill-box">
                            <i class="fa-solid fa-database text-green-400"></i>
                            <span>MySQL</span>
                        </div>

                        <div class="skill-box">
                            <i class="fa-solid fa-database text-sky-400"></i>
                            <span>PostgreSQL</span>
                        </div>

                    </div>
                </div>

                <!-- Outils -->
                <div
                    class="bg-black/50 p-8 rounded-2xl border border-yellow-900/30 hover:border-yellow-500/50 transition-all">
                    <h3 class="text-2xl font-semibold mb-6 text-yellow-400">Outils & Autres</h3>

                    <div class="grid grid-cols-2 gap-4">

                        <div class="skill-box">
                            <i class="fa-brands fa-github text-gray-300"></i>
                            <span>GitHub</span>
                        </div>

                        <div class="skill-box">
                            <i class="fa-brands fa-linux text-yellow-300"></i>
                            <span>Linux</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Section Projets -->
    <section id="projets" class="py-20 bg-black/40">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-yellow-400 mb-12 text-center">Projets</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">

                <!-- Projet 1 : KamerLink -->
                <div
                    class="group bg-black/60 rounded-2xl overflow-hidden border border-yellow-900/40 hover:border-yellow-500/60 transition-all duration-300 shadow-xl hover:shadow-yellow-900/30">
                    <!-- Image / zone visuelle -->
                    <div class="relative h-56 md:h-64 bg-gray-900 overflow-hidden">
                        <img src="/images/kamerlink.jpg" alt="KamerLink - Application de services de proximité"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            onerror="this.src='https://via.placeholder.com/600x400/111/eee?text=KamerLink';" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    </div>

                    <!-- Contenu -->
                    <div class="p-6 md:p-7">
                        <h3 class="text-2xl font-bold text-yellow-400 mb-3">KamerLink</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            Application d’offre de services de proximité au Cameroun permettant de connecter rapidement
                            clients et prestataires locaux.
                        </p>

                        <!-- Technologies -->
                        <div class="flex flex-wrap gap-3">
                            <span
                                class="px-4 py-1.5 bg-yellow-500/20 text-yellow-300 text-sm font-medium rounded-full border border-yellow-500/40">
                                FMSCRIPT
                            </span>

                            <!-- <span class="px-4 py-1.5 bg-gray-700 text-gray-300 text-sm rounded-full">MySQL</span> -->
                        </div>
                    </div>
                </div>

                <!-- Projet 2 : Gestion de stock (Laravel) -->
                <div
                    class="group bg-black/60 rounded-2xl overflow-hidden border border-yellow-900/40 hover:border-yellow-500/60 transition-all duration-300 shadow-xl hover:shadow-yellow-900/30">
                    <div class="relative h-56 md:h-64 bg-gray-900 overflow-hidden">
                        <img src="/images/G_stock.png" alt="Application de gestion de stock - Django"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            onerror="this.src='https://via.placeholder.com/600x400/111/eee?text=Gestion+Stock';" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    </div>

                    <div class="p-6 md:p-7">
                        <h3 class="text-2xl font-bold text-yellow-400 mb-3">G-Stock</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            Application complète de gestion de stock avec suivi des entrées/sorties, alertes de rupture
                            et reporting.
                        </p>

                        <div class="flex flex-wrap gap-3">
                            <span
                                class="px-4 py-1.5 bg-yellow-500/20 text-yellow-300 text-sm font-medium rounded-full border border-yellow-500/40">
                                Laravel
                            </span>
                            <span class="px-4 py-1.5 bg-gray-700 text-gray-300 text-sm rounded-full">
                                PHP
                            </span>
                            <!-- <span class="px-4 py-1.5 bg-gray-700 text-gray-300 text-sm rounded-full">PostgreSQL</span> -->
                        </div>
                    </div>
                </div>

                <!-- Projet 3 : Gestion poulets de chair (Laravel) -->
                <div
                    class="group bg-black/60 rounded-2xl overflow-hidden border border-yellow-900/40 hover:border-yellow-500/60 transition-all duration-300 shadow-xl hover:shadow-yellow-900/30">
                    <div class="relative h-56 md:h-64 bg-gray-900 overflow-hidden">
                        <img src="/images/Manichicks.png" alt="Gestion entreprise poulets de chair - Laravel"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            onerror="this.src='https://via.placeholder.com/600x400/111/eee?text=Poulets+Laravel';" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    </div>

                    <div class="p-6 md:p-7">
                        <h3 class="text-2xl font-bold text-yellow-400 mb-3">Manichicks</h3>
                        <p class="text-gray-300 mb-6 leading-relaxed">
                            Solution complète de gestion d’une entreprise d’élevage de poulets de chair (stocks, santé,
                            ventes, finances).
                        </p>

                        <div class="flex flex-wrap gap-3">
                            <span
                                class="px-4 py-1.5 bg-yellow-500/20 text-yellow-300 text-sm font-medium rounded-full border border-yellow-500/40">
                                Django
                            </span>
                            <span class="px-4 py-1.5 bg-gray-700 text-gray-300 text-sm rounded-full">
                                Python
                            </span>
                            <!-- <span class="px-4 py-1.5 bg-gray-700 text-gray-300 text-sm rounded-full">MySQL</span> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section Services -->
    <section id="services" class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl md:text-5xl font-bold text-yellow-400 mb-12 text-center">Services</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-black/50 p-8 rounded-2xl border border-yellow-900/30">
                    <h3 class="text-2xl font-semibold mb-4 text-yellow-400">Sites web</h3>
                    <p class="text-gray-300">Création de sites vitrines, portfolios, blogs, sites e-commerce</p>
                </div>
                <div class="bg-black/50 p-8 rounded-2xl border border-yellow-900/30">
                    <h3 class="text-2xl font-semibold mb-4 text-yellow-400">Applications web</h3>
                    <p class="text-gray-300">Développement d’applications métiers, dashboards, outils internes</p>
                </div>
                <div class="bg-black/50 p-8 rounded-2xl border border-yellow-900/30">
                    <h3 class="text-2xl font-semibold mb-4 text-yellow-400">Maintenance & Optimisation</h3>
                    <p class="text-gray-300">Refonte, amélioration performance, SEO de base</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="py-20 bg-black/60">
        <h2 class="text-4xl md:text-5xl font-bold text-yellow-400 mb-12 text-center">Contact</h2>
        <p class="text-gray-300 text-center">Avez-vous un projet ? Une idée ? Laissez moi un mesage</p>
        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6 max-w-2xl mx-auto">
            @csrf

            <input type="text" name="name" placeholder="Votre nom"
                class="w-full px-6 py-4 bg-black border border-yellow-500/40 rounded-xl text-white focus:outline-none focus:border-yellow-400">

            <input type="email" name="email" placeholder="Votre email"
                class="w-full px-6 py-4 bg-black border border-yellow-500/40 rounded-xl text-white focus:outline-none focus:border-yellow-400">

            <input type="text" name="subject" placeholder="Sujet (optionnel)"
                class="w-full px-6 py-4 bg-black border border-yellow-500/40 rounded-xl text-white focus:outline-none focus:border-yellow-400">

            <textarea name="message" rows="5" placeholder="Votre message"
                class="w-full px-6 py-4 bg-black border border-yellow-500/40 rounded-xl text-white focus:outline-none focus:border-yellow-400"></textarea>

            <button type="submit"
                class="w-full px-8 py-4 bg-yellow-500 text-black font-bold text-lg rounded-xl hover:bg-yellow-400 transition-all duration-300">
                Envoyer le message
            </button>

            @if (session('success'))
                <p class="text-green-400">{{ session('success') }}</p>
            @endif
        </form>

    </section>

</body>

</html>
