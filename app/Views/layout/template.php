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

    <!-- Kontak Modal (Pop-up) -->
    <div id="contact-modal" class="fixed inset-0 z-[60] flex items-center justify-center p-4 bg-gray-900 bg-opacity-50 dark:bg-opacity-70 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <!-- Latar belakang modal, klik untuk menutup -->
        <div id="modal-overlay" class="absolute inset-0"></div>

        <!-- Konten Modal -->
        <div class="relative bg-white dark:bg-gray-800 rounded-lg shadow-xl w-full max-w-md p-6 transform transition-all scale-95 opacity-0" id="modal-content">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white" id="modal-title">
                    Hubungi Saya
                </h3>
                <button id="close-modal-btn" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white rounded-lg text-sm p-1.5 ml-auto inline-flex items-center transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            
            <p class="text-gray-600 dark:text-gray-400 mb-6">Anda dapat menghubungi saya melalui platform berikut:</p>

            <div class="space-y-4">
                <!-- WhatsApp -->
                <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', esc($biodata['telepon'])) ?>" target="_blank" class="flex items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors">
                    <svg class="w-6 h-6 text-green-500 mr-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.61 15.36 3.48 16.84L2.06 21.94L7.3 20.52C8.75 21.32 10.36 21.8 12.04 21.8H12.05C17.5 21.8 21.96 17.35 21.96 11.91C21.96 6.45 17.5 2 12.04 2ZM12.05 19.99C10.59 19.99 9.17 19.58 7.94 18.81L7.54 18.57L4.43 19.38L5.26 16.36L5.02 15.96C4.18 14.63 4.18 14.63 3.73 13.13 3.73 11.91C3.73 7.39 7.47 3.65 12.05 3.65C16.63 3.65 20.37 7.39 20.37 11.91C20.37 16.43 16.63 19.99 12.05 19.99Z"/></svg>
                    <span class="font-medium text-gray-900 dark:text-white">WhatsApp</span>
                </a>
                <!-- Email -->
                <a href="mailto:<?= esc($biodata['email']) ?>" class="flex items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors">
                    <svg class="w-6 h-6 text-indigo-500 mr-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/></svg>
                    <span class="font-medium text-gray-900 dark:text-white">Email</span>
                </a>
                <!-- GitHub -->
                <a href="<?= esc($biodata['github']) ?>" target="_blank" class="flex items-center p-4 bg-gray-50 dark:bg-gray-700 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600 transition-colors">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white mr-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.165 6.839 9.49.5.092.682-.217.682-.483 0-.237-.009-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.03-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.026 2.747-1.026.546 1.379.202 2.398.1 2.65.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.001 10.001 0 0022 12c0-5.523-4.477-10-10-10z" clip-rule="evenodd"></svg>
                    <span class="font-medium text-gray-900 dark:text-white">GitHub</span>
                </a>
            </div>
        </div>
    </div>
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