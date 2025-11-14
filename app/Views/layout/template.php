<!DOCTYPE html>
<html lang="id" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($biodata['nama_lengkap']) ?> | <?= esc($title) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">


    <style type="text/tailwindcss">
        body {
            font-family: 'Inter', sans-serif;
            @apply bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-300 transition-colors duration-300;
        }
        html.dark {
            color-scheme: dark;
        }
        .nav-link-active {
            @apply text-indigo-600 dark:text-indigo-400;
        }
        .nav-link-inactive {
            @apply text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400;
        }
        .prose p {
            margin-top: 0;
            margin-bottom: 1rem;
        }
        .prose-lg {
            line-height: 1.75;
        }
        .rating-dots {
            display: flex;
            gap: 4px;
        }
        .rating-dot {
            width: 14px;
            height: 14px;
            border-radius: 50%;
            @apply bg-gray-300 dark:bg-gray-600;
        }
        .rating-dot.filled {
            @apply bg-indigo-600 dark:bg-indigo-400;
        }
        .timeline {
            position: relative;
            max-width: 36rem;
            margin-left: auto;
            margin-right: auto;
        }
        .timeline-item {
            position: relative;
            padding-left: 2.5rem;
            padding-bottom: 2rem;
            border-left: 2px solid;
            @apply border-gray-200 dark:border-gray-700;
        }
        .timeline-item:last-child {
            border-left: 2px solid transparent;
            padding-bottom: 0;
        }
        .timeline-icon {
            position: absolute;
            left: -0.6rem;
            top: 0;
            width: 1.125rem;
            height: 1.125rem;
            border-radius: 9999px;
            border-width: 3px;
            @apply bg-white dark:bg-gray-900 border-indigo-600 dark:border-indigo-400;
        }
    </style>
</head>
<body class="antialiased">

<div id="app" class="min-h-screen flex flex-col">
    <!-- Header & Navigasi -->
    <header class="bg-white dark:bg-gray-900 shadow-sm sticky top-0 z-50">
        <nav class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" aria-label="Top">
            <div class="w-full py-5 flex items-center justify-between">
                <div class="flex items-center">
                    <a href="<?= base_url('/') ?>" class="text-2xl font-extrabold text-gray-900 dark:text-white">
                        DR.
                    </a>
                </div>
                <div class="hidden ml-10 space-x-8 lg:flex">
                    <a href="<?= base_url('/') ?>" class="text-base font-medium <?= ($page == 'home') ? 'nav-link-active' : 'nav-link-inactive' ?>">Home</a>
                    <a href="<?= base_url('/pendidikan') ?>" class="text-base font-medium <?= ($page == 'pendidikan') ? 'nav-link-active' : 'nav-link-inactive' ?>">Pendidikan</a>
                    <a href="<?= base_url('/pengalaman') ?>" class="text-base font-medium <?= ($page == 'pengalaman') ? 'nav-link-active' : 'nav-link-inactive' ?>">Pengalaman</a>
                    <a href="<?= base_url('/keahlian') ?>" class="text-base font-medium <?= ($page == 'keahlian') ? 'nav-link-active' : 'nav-link-inactive' ?>">Keahlian</a>
                </div>
                <div class="flex items-center space-x-4">
                    <!-- Dark Mode Toggle -->
                    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none rounded-lg text-sm p-2.5 transition-colors">
                        <svg id="theme-toggle-light-icon" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.707.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-1.636 4.364a1 1 0 01-1.414 0l-.707-.707a1 1 0 011.414-1.414l.707.707a1 1 0 010 1.414zM4 11a1 1 0 100-2H3a1 1 0 100 2h1zM6.636 6.636a1 1 0 00-1.414 0l-.707.707A1 1 0 005.93 8.75l.707-.707a1 1 0 000-1.414zM4.95 15.05l-.707.707a1 1 0 101.414 1.414l.707-.707a1 1 0 00-1.414-1.414zM10 16a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                        <svg id="theme-toggle-dark-icon" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                    </button>
                    <!-- Mobile menu button -->
                    <div class="lg:hidden">
                        <button id="mobile-menu-button" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none transition-colors">
                            <span class="sr-only">Open main menu</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="hidden lg:hidden" id="mobile-menu">
                <div class="pt-2 pb-3 space-y-1">
                    <a href="<?= base_url('/') ?>" class="block px-3 py-2 rounded-md text-base font-medium <?= ($page == 'home') ? 'nav-link-active bg-gray-100 dark:bg-gray-800' : 'nav-link-inactive' ?>">Home</a>
                    <a href="<?= base_url('/pendidikan') ?>" class="block px-3 py-2 rounded-md text-base font-medium <?= ($page == 'pendidikan') ? 'nav-link-active bg-gray-100 dark:bg-gray-800' : 'nav-link-inactive' ?>">Pendidikan</a>
                    <a href="<?= base_url('/pengalaman') ?>" class="block px-3 py-2 rounded-md text-base font-medium <?= ($page == 'pengalaman') ? 'nav-link-active bg-gray-100 dark:bg-gray-800' : 'nav-link-inactive' ?>">Pengalaman</a>
                    <a href="<?= base_url('/keahlian') ?>" class="block px-3 py-2 rounded-md text-base font-medium <?= ($page == 'keahlian') ? 'nav-link-active bg-gray-100 dark:bg-gray-800' : 'nav-link-inactive' ?>">Keahlian</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Konten Utama (Dinamis dari file pages/*.php) -->
    <main class="flex-grow">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-50 dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700">
        <div class="container mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:px-8">
            <!-- Wrapper baru untuk menengahkan semua item -->
            <div class="flex flex-col items-center">
                <div class="mt-8">
                    <p class="text-center text-base text-gray-500 dark:text-gray-400">
                        &copy; <?= date('Y') ?> <?= esc($biodata['nama_lengkap']) ?>. All rights reserved.
                    </p>
                    <p class="text-center text-sm text-gray-500 dark:text-gray-400 mt-1">
                        <?= esc($biodata['email']) ?> | <?= esc($biodata['telepon']) ?>
                    </p>
                </div>

            </div>
        </div>
    </footer>
</div>

<!-- Script untuk Dark Mode Toggle, Mobile Menu, & Modal -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Dark Mode
        const themeToggleBtn = document.getElementById('theme-toggle');
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        const docElement = document.documentElement;

        const applyTheme = (theme) => {
            if (theme === 'dark') {
                docElement.classList.add('dark');
                themeToggleLightIcon.classList.remove('hidden');
                themeToggleDarkIcon.classList.add('hidden');
                localStorage.setItem('theme', 'dark');
            } else {
                docElement.classList.remove('dark');
                themeToggleLightIcon.classList.add('hidden');
                themeToggleDarkIcon.classList.remove('hidden');
                localStorage.setItem('theme', 'light');
            }
        };

        const savedTheme = localStorage.getItem('theme');
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

        // Set initial theme
        if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
            applyTheme('dark');
        } else {
            applyTheme('light');
        }

        // Toggle theme on button click
        themeToggleBtn.addEventListener('click', () => {
            const currentTheme = docElement.classList.contains('dark') ? 'dark' : 'light';
            applyTheme(currentTheme === 'dark' ? 'light' : 'dark');
        });

        // Mobile Menu
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Kontak Modal
        const closeModalBtn = document.getElementById('close-modal-btn');
        const modalOverlay = document.getElementById('modal-overlay');
        const contactModal = document.getElementById('contact-modal');
        const modalContent = document.getElementById('modal-content');

        const openModal = () => {
            if (contactModal && modalContent) {
                contactModal.classList.remove('hidden');
                setTimeout(() => {
                    modalContent.classList.add('scale-100', 'opacity-100');
                    modalContent.classList.remove('scale-95', 'opacity-0');
                }, 10);
            }
        };

        const closeModal = () => {
            if (modalContent && contactModal) {
                modalContent.classList.add('scale-95', 'opacity-0');
                modalContent.classList.remove('scale-100', 'opacity-100');
                setTimeout(() => {
                    contactModal.classList.add('hidden');
                }, 150);
            }
        };

        // Event listener untuk tombol open modal (jika ada di halaman lain)
        document.addEventListener('click', (e) => {
            if (e.target && e.target.id === 'open-modal-btn') {
                e.preventDefault();
                openModal();
            }
        });

        if (closeModalBtn) {
            closeModalBtn.addEventListener('click', closeModal);
        }
        if (modalOverlay) {
            modalOverlay.addEventListener('click', closeModal);
        }

        // Menutup modal dengan tombol Escape
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && contactModal && !contactModal.classList.contains('hidden')) {
                closeModal();
            }
        });
    });
</script>
</body>
</html>