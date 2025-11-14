<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- 1. Hero Section dengan Hover yang Lebih Smooth -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-100 via-purple-50 to-blue-100 dark:from-gray-900 dark:via-purple-900 dark:to-gray-900 transition-colors duration-500">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-purple-100/30 via-white to-blue-100/20 dark:from-purple-900/30 dark:via-gray-900 dark:to-blue-900/20 transition-all duration-700"></div>
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-purple-400/20 dark:bg-purple-600/20 rounded-full blur-3xl animate-pulse transition-all duration-1000 ease-out"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-blue-400/20 dark:bg-blue-600/20 rounded-full blur-3xl animate-pulse animation-delay-2000 transition-all duration-1000 ease-out"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-purple-300/10 dark:bg-purple-500/10 rounded-full blur-3xl animate-pulse animation-delay-4000 transition-all duration-1000 ease-out"></div>
    </div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center py-20">
            <!-- Kolom Kiri: Intro -->
            <div class="fade-in">
                <!-- Badge Profesional -->
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-gray-800/10 dark:bg-white/10 backdrop-blur-md border border-purple-500/30 dark:border-purple-400/30 text-gray-800 dark:text-white text-sm font-medium mb-8 group hover:bg-purple-500/20 dark:hover:bg-purple-500/20 transition-all duration-500 ease-out hover:scale-105 hover:-translate-y-0.5">
                    <div class="w-2 h-2 bg-gradient-to-r from-purple-500 to-blue-500 dark:from-purple-400 dark:to-blue-500 rounded-full mr-3 group-hover:scale-150 transition-transform duration-500 ease-out"></div>
                    <?= esc($biodata['gelar_profesional']) ?>
                </div>

                <!-- Headline -->
                <div class="space-y-6">
                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-gray-900 dark:text-white leading-tight">
                        <span class="block">Halo, Saya</span>
                        <span class="block bg-gradient-to-r from-purple-600 via-blue-600 to-purple-700 dark:from-purple-400 dark:via-blue-500 dark:to-purple-600 bg-clip-text text-transparent mt-4">
                            <?= esc($biodata['nama_lengkap']) ?>
                        </span>
                    </h1>
                </div>

                <!-- CTA Buttons -->
                <div class="flex items-center mt-12 space-x-6">
                    <button id="open-contact-btn" class="group relative bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white font-semibold py-4 px-8 rounded-xl transition-all duration-500 ease-out transform hover:-translate-y-1 hover:scale-105 shadow-2xl hover:shadow-purple-500/30 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-white/0 via-white/20 to-white/0 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700 ease-out"></div>
                        <span class="relative flex items-center">
                            <i class="fas fa-paper-plane mr-3 group-hover:scale-110 transition-transform duration-500 ease-out"></i>
                            Hubungi Saya
                        </span>
                    </button>

                    <!-- Contact Options -->
                    <div id="contact-options" class="hidden fade-in transition-all duration-500 ease-out">
                        <div class="flex space-x-4">
                            <!-- WhatsApp -->
                            <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', esc($biodata['telepon'])) ?>" target="_blank" 
                               class="group relative w-14 h-14 bg-green-500/20 hover:bg-green-500/30 backdrop-blur-md border border-green-500/50 dark:border-green-400/50 rounded-xl flex items-center justify-center transition-all duration-500 ease-out transform hover:-translate-y-1 hover:scale-110 hover:shadow-2xl hover:shadow-green-500/30">
                                <svg class="w-6 h-6 text-green-600 dark:text-green-400 group-hover:text-green-500 dark:group-hover:text-green-300 transition-all duration-500 ease-out group-hover:scale-110" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.61 15.36 3.48 16.84L2.06 21.94L7.3 20.52C8.75 21.32 10.36 21.8 12.04 21.8H12.05C17.5 21.8 21.96 17.35 21.96 11.91C21.96 6.45 17.5 2 12.04 2ZM12.05 19.99C10.59 19.99 9.17 19.58 7.94 18.81L7.54 18.57L4.43 19.38L5.26 16.36L5.02 15.96C4.18 14.63 3.73 13.13 3.73 11.91C3.73 7.39 7.47 3.65 12.05 3.65C16.63 3.65 20.37 7.39 20.37 11.91C20.37 16.43 16.63 19.99 12.05 19.99ZM17.38 14.52C17.1 14.38 15.77 13.72 15.5 13.61C15.23 13.5 15.03 13.46 14.86 13.73C14.69 14.01 14.11 14.7 13.92 14.92C13.73 15.14 13.54 15.17 13.26 15.04C12.98 14.9 11.91 14.54 10.66 13.41C9.72 12.58 9.08 11.58 8.86 11.23C8.65 10.88 8.76 10.72 8.91 10.57C9.04 10.43 9.21 10.24 9.38 10.05C9.55 9.85 9.61 9.71 9.72 9.49C9.84 9.27 9.78 9.09 9.69 8.92C9.6 8.76 9.08 7.53 8.86 7C8.65 6.47 8.44 6.51 8.27 6.5C8.1 6.5 7.9 6.5 7.7 6.5C7.5 6.5 7.22 6.59 6.99 6.86C6.76 7.14 6.13 7.7 6.13 8.92C6.13 10.14 7.02 11.31 7.17 11.53C7.32 11.75 9.01 14.4 11.62 15.53C13.8 16.49 14.21 16.3 14.62 16.23C15.08 16.15 16.14 15.5 16.38 14.84C16.62 14.18 16.62 13.66 16.53 13.5C16.43 13.34 16.24 13.24 15.96 13.1C15.68 12.96 17.67 15.04 17.38 14.52Z"/>
                                </svg>
                            </a>
                            
                            <!-- Email -->
                            <a href="mailto:<?= esc($biodata['email']) ?>" 
                               class="group relative w-14 h-14 bg-red-500/20 hover:bg-red-500/30 backdrop-blur-md border border-red-500/50 dark:border-red-400/50 rounded-xl flex items-center justify-center transition-all duration-500 ease-out transform hover:-translate-y-1 hover:scale-110 hover:shadow-2xl hover:shadow-red-500/30">
                                <svg class="w-6 h-6 text-red-600 dark:text-red-400 group-hover:text-red-500 dark:group-hover:text-red-300 transition-all duration-500 ease-out group-hover:scale-110" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/>
                                </svg>
                            </a>
                            
                            <!-- GitHub -->
                            <a href="<?= esc($biodata['github']) ?>" target="_blank" 
                               class="group relative w-14 h-14 bg-gray-500/20 hover:bg-gray-500/30 backdrop-blur-md border border-gray-500/50 dark:border-gray-400/50 rounded-xl flex items-center justify-center transition-all duration-500 ease-out transform hover:-translate-y-1 hover:scale-110 hover:shadow-2xl hover:shadow-gray-500/30">
                                <svg class="w-6 h-6 text-gray-700 dark:text-gray-400 group-hover:text-gray-600 dark:group-hover:text-gray-300 transition-all duration-500 ease-out group-hover:scale-110" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.418 2.865 8.165 6.839 9.49.5.092.682-.217.682-.483 0-.237-.009-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.03-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.026 2.747-1.026.546 1.379.202 2.398.1 2.65.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.001 10.001 0 0022 12c0-5.523-4.477-10-10-10z" clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Tentang Saya Card -->
            <div class="fade-in animation-delay-300">
                <div class="relative group">
                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -left-4 w-8 h-8 bg-purple-400/20 dark:bg-purple-400/20 rounded-full blur-sm group-hover:scale-150 transition-all duration-700 ease-out"></div>
                    <div class="absolute -bottom-4 -right-4 w-12 h-12 bg-blue-400/20 dark:bg-blue-400/20 rounded-full blur-sm group-hover:scale-150 transition-all duration-700 ease-out animation-delay-200"></div>
                    
                    <!-- Main Card -->
                    <div class="bg-white/80 dark:bg-white/10 backdrop-blur-xl rounded-3xl shadow-2xl border border-gray-200/50 dark:border-white/20 p-8 lg:p-10 transform transition-all duration-700 ease-out group-hover:scale-[1.02] group-hover:-translate-y-1 group-hover:shadow-3xl">
                        <div class="flex items-center mb-8">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-blue-500 rounded-2xl flex items-center justify-center mr-4 shadow-lg transition-all duration-500 ease-out group-hover:scale-110">
                                <i class="fas fa-user text-white text-xl"></i>
                            </div>
                            <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Tentang Saya</h2>
                        </div>
                        
                        <div class="prose prose-invert max-w-none">
                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed text-lg">
                                <?= esc($biodata['tentang_saya']) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border-2 border-purple-500/50 dark:border-purple-400/50 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-purple-500 dark:bg-purple-400 rounded-full mt-2 animate-pulse"></div>
        </div>
    </div>
</section>

<!-- 2. Stats Section dengan Hover Smooth -->
<section class="py-20 bg-gray-50 dark:bg-gray-900 relative overflow-hidden transition-colors duration-500">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_1px_1px,_rgba(168,85,247,0.1)_1px,_transparent_0)] dark:bg-[radial-gradient(circle_at_1px_1px,_rgba(168,85,247,0.1)_1px,_transparent_0)] bg-[length:20px_20px]"></div>
    
    <div class="relative z-10 container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-in">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                Profil <span class="bg-gradient-to-r from-purple-600 to-blue-600 dark:from-purple-500 dark:to-blue-500 bg-clip-text text-transparent">Profesional</span>
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Ringkasan pencapaian dan pengalaman profesional saya
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $statsData = [
                [
                    'icon' => 'fas fa-briefcase',
                    'value' => $stats['total_pengalaman'],
                    'label' => 'Proyek & Pengalaman',
                    'gradient' => 'from-purple-600 to-blue-600 dark:from-purple-500 dark:to-blue-500'
                ],
                [
                    'icon' => 'fas fa-graduation-cap', 
                    'value' => $stats['total_pendidikan'],
                    'label' => 'Riwayat Pendidikan',
                    'gradient' => 'from-purple-600 to-blue-600 dark:from-purple-500 dark:to-blue-500'
                ],
                [
                    'icon' => 'fas fa-code',
                    'value' => $stats['total_keahlian_teknis'],
                    'label' => 'Keahlian Teknis', 
                    'gradient' => 'from-blue-600 to-purple-600 dark:from-blue-500 dark:to-purple-500'
                ],
                [
                    'icon' => 'fas fa-users',
                    'value' => $stats['total_keahlian_non_teknis'],
                    'label' => 'Keahlian Non-Teknis',
                    'gradient' => 'from-blue-600 to-purple-600 dark:from-blue-500 dark:to-purple-500'
                ]
            ];
            ?>

            <?php foreach($statsData as $index => $stat): ?>
            <div class="fade-in animation-delay-<?= $index * 100 ?> group">
                <div class="relative bg-white dark:bg-gray-800 rounded-2xl p-8 text-center transform transition-all duration-700 ease-out hover:-translate-y-3 hover:scale-105 shadow-lg hover:shadow-2xl border border-purple-200 dark:border-purple-500/20 overflow-hidden">
                    <!-- Hover Effect Background -->
                    <div class="absolute inset-0 bg-gradient-to-br <?= $stat['gradient'] ?> opacity-0 group-hover:opacity-10 transition-opacity duration-700 ease-out"></div>
                    
                    <!-- Animated Border -->
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-r <?= $stat['gradient'] ?> opacity-0 group-hover:opacity-100 transition-all duration-700 ease-out">
                        <div class="absolute inset-[2px] rounded-2xl bg-white dark:bg-gray-800"></div>
                    </div>
                    
                    <div class="relative">
                        <div class="w-20 h-20 bg-gradient-to-br <?= $stat['gradient'] ?> rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg transition-all duration-700 ease-out group-hover:scale-110 group-hover:rotate-3">
                            <i class="<?= $stat['icon'] ?> text-white text-2xl transition-transform duration-700 ease-out group-hover:scale-110"></i>
                        </div>
                        <span class="block text-4xl font-bold text-gray-900 dark:text-white mb-2"><?= $stat['value'] ?></span>
                        <span class="block text-sm font-semibold text-gray-600 dark:text-gray-400"><?= $stat['label'] ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- 3. Pendidikan Terbaru dengan Hover Smooth -->
<section class="py-20 bg-white dark:bg-gray-900 relative transition-colors duration-500">
    <div class="container mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-16">
            <div class="fade-in">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                    Jejak <span class="bg-gradient-to-r from-purple-600 to-blue-600 dark:from-purple-500 dark:to-blue-500 bg-clip-text text-transparent">Pendidikan</span>
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl">
                    Perjalanan akademis yang membentuk kompetensi profesional saya
                </p>
            </div>
            <a href="<?= base_url('/pendidikan') ?>" class="fade-in animation-delay-200 group inline-flex items-center bg-gray-100 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 font-semibold py-3 px-6 rounded-xl transition-all duration-500 ease-out transform hover:-translate-y-1 hover:scale-105 mt-4 lg:mt-0 border border-purple-300 dark:border-purple-500/30 hover:border-purple-400 dark:hover:border-purple-400/50">
                Lihat Semua Riwayat
                <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform duration-500 ease-out"></i>
            </a>
        </div>

        <!-- Education Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php if (empty($pendidikan_terbaru)): ?>
                <div class="col-span-full text-center py-12 fade-in">
                    <div class="w-24 h-24 bg-gray-100 dark:bg-gray-800 rounded-2xl flex items-center justify-center mx-auto mb-6 border border-purple-300 dark:border-purple-500/20">
                        <i class="fas fa-graduation-cap text-3xl text-purple-500 dark:text-purple-400"></i>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400 text-lg">Belum ada data pendidikan.</p>
                </div>
            <?php else: ?>
                <?php foreach($pendidikan_terbaru as $index => $p): ?>
                <div class="fade-in animation-delay-<?= $index * 100 ?> group">
                    <div class="relative bg-white dark:bg-gray-800 rounded-2xl p-6 transform transition-all duration-700 ease-out hover:-translate-y-2 hover:scale-105 shadow-lg hover:shadow-xl border border-purple-200 dark:border-purple-500/20 hover:border-purple-300 dark:hover:border-purple-400/40 overflow-hidden">
                        <!-- Hover Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-700 ease-out"></div>
                        
                        <div class="relative">
                            <!-- Institution & Major -->
                            <div class="mb-4">
                                <h3 class="text-xl font-bold text-gray-900 dark:text-white"><?= esc($p['institusi']) ?></h3>
                                <p class="text-blue-600 dark:text-blue-400 font-semibold mt-1"><?= esc($p['jenjang_jurusan']) ?></p>
                            </div>
                            
                            <!-- Year & Duration -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-200 dark:border-gray-700">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-purple-100 dark:bg-purple-500/20 text-purple-700 dark:text-purple-300 border border-purple-200 dark:border-purple-500/30">
                                    <i class="fas fa-calendar-alt mr-2 text-xs"></i>
                                    <?= esc($p['tahun_mulai']) ?> - <?= esc($p['tahun_selesai']) ?>
                                </span>
                                <div class="w-2 h-2 bg-blue-500 dark:bg-blue-400 rounded-full animate-pulse"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- 4. Pengalaman Terbaru dengan Hover Smooth -->
<section class="py-20 bg-gray-50 dark:bg-gray-800 relative overflow-hidden transition-colors duration-500">
    <!-- Background Elements -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-purple-400/10 dark:bg-purple-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-400/10 dark:bg-blue-500/10 rounded-full blur-3xl"></div>
    
    <div class="relative z-10 container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-16">
            <div class="fade-in">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                    Pengalaman <span class="bg-gradient-to-r from-purple-600 to-blue-600 dark:from-purple-400 dark:to-blue-500 bg-clip-text text-transparent">Profesional</span>
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl">
                    Perjalanan karir dan kontribusi di berbagai organisasi
                </p>
            </div>
            <a href="<?= base_url('/pengalaman') ?>" class="fade-in animation-delay-200 group inline-flex items-center bg-white hover:bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-300 font-semibold py-3 px-6 rounded-xl transition-all duration-500 ease-out transform hover:-translate-y-1 hover:scale-105 mt-4 lg:mt-0 border border-blue-300 dark:border-blue-500/30 hover:border-blue-400 dark:hover:border-blue-400/50">
                Lihat Semua Pengalaman
                <i class="fas fa-arrow-right ml-3 group-hover:translate-x-2 transition-transform duration-500 ease-out"></i>
            </a>
        </div>

        <!-- Experience Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <?php if (empty($pengalaman_terbaru)): ?>
                <div class="col-span-full text-center py-12 fade-in">
                    <div class="w-24 h-24 bg-white dark:bg-gray-700 rounded-2xl flex items-center justify-center mx-auto mb-6 border border-blue-300 dark:border-blue-500/20">
                        <i class="fas fa-briefcase text-3xl text-blue-500 dark:text-blue-400"></i>
                    </div>
                    <p class="text-gray-500 dark:text-gray-400 text-lg">Belum ada data pengalaman.</p>
                </div>
            <?php else: ?>
                <?php foreach($pengalaman_terbaru as $index => $p): ?>
                <div class="fade-in animation-delay-<?= $index * 100 ?> group">
                    <div class="relative bg-white dark:bg-gray-700 rounded-2xl p-6 transform transition-all duration-700 ease-out hover:-translate-y-2 hover:scale-105 shadow-lg hover:shadow-xl border border-blue-200 dark:border-blue-500/20 hover:border-blue-300 dark:hover:border-blue-400/40 overflow-hidden">
                        <!-- Gradient Border Effect -->
                        <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-purple-500 to-blue-500 opacity-0 group-hover:opacity-100 transition-all duration-700 ease-out">
                            <div class="absolute inset-[2px] rounded-2xl bg-white dark:bg-gray-700"></div>
                        </div>
                        
                        <div class="relative">
                            <!-- Header -->
                            <div class="mb-4">
                                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between mb-3">
                                    <h3 class="text-lg font-bold text-gray-900 dark:text-white"><?= esc($p['posisi']) ?></h3>
                                    
                                    <!-- Experience Type Badge -->
                                    <?php 
                                        $color_classes = [
                                            'Pekerjaan' => 'from-purple-500 to-blue-500',
                                            'Magang' => 'from-blue-500 to-purple-500', 
                                            'Proyek' => 'from-purple-600 to-blue-600',
                                            'Organisasi' => 'from-blue-600 to-purple-600'
                                        ];
                                        $gradient = $color_classes[$p['tipe']] ?? 'from-gray-500 to-gray-600';
                                    ?>
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold text-white bg-gradient-to-r <?= $gradient ?> shadow-sm mt-2 sm:mt-0">
                                        <i class="fas fa-tag mr-1 text-xs"></i>
                                        <?= esc($p['tipe']) ?>
                                    </span>
                                </div>
                                
                                <p class="text-blue-600 dark:text-blue-400 font-semibold flex items-center">
                                    <i class="fas fa-building mr-2"></i>
                                    <?= esc($p['perusahaan']) ?>
                                </p>
                            </div>
                            
                            <!-- Timeline -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-200 dark:border-gray-600">
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 dark:bg-gray-600 text-gray-700 dark:text-gray-300">
                                    <i class="fas fa-calendar-alt mr-2 text-xs"></i>
                                    <?= esc($p['tahun_mulai']) ?> - <?= esc($p['tahun_selesai']) ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- 5. Keahlian dengan Hover Smooth -->
<section class="py-20 bg-white dark:bg-gray-900 relative transition-colors duration-500">
    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-16">
            <div class="fade-in">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                    Keahlian <span class="bg-gradient-to-r from-purple-600 to-blue-600 dark:from-purple-400 dark:to-blue-500 bg-clip-text text-transparent">Profesional</span>
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl">
                    Kompetensi teknis dan soft skills yang terus berkembang
                </p>
            </div>
            <a href="<?= base_url('/keahlian') ?>" class="fade-in animation-delay-200 group inline-flex items-center bg-gray-100 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 font-semibold py-3 px-6 rounded-xl transition-all duration-300 ease-out transform hover:-translate-y-0.5 mt-4 lg:mt-0 border border-purple-300 dark:border-purple-500/30 hover:border-purple-400 dark:hover:border-purple-400/50">
                Lihat Detail Keahlian
                <i class="fas fa-arrow-right ml-3 group-hover:translate-x-1 transition-transform duration-300 ease-out"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Technical Skills -->
            <div class="fade-in">
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-xl border border-purple-200 dark:border-purple-500/20 transition-all duration-300 ease-out hover:scale-[1.02] hover:-translate-y-1">
                    <div class="flex items-center mb-8">
                        <div class="w-14 h-14 bg-gradient-to-br from-purple-600 to-blue-600 dark:from-purple-500 dark:to-blue-500 rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                            <i class="fas fa-laptop-code text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Keahlian Teknis</h3>
                            <p class="text-gray-600 dark:text-gray-400">Teknologi & tools yang dikuasai</p>
                        </div>
                    </div>
                    
                    <div class="space-y-6">
                        <?php if (empty($keahlian_teknis)): ?>
                            <div class="text-center py-8">
                                <i class="fas fa-code text-4xl text-gray-400 dark:text-gray-600 mb-4"></i>
                                <p class="text-gray-500 dark:text-gray-500">Belum ada data keahlian teknis.</p>
                            </div>
                        <?php else: ?>
                            <?php foreach($keahlian_teknis as $k): ?>
                            <div class="group transition-all duration-300 ease-out">
                                <div class="flex justify-between items-center mb-3">
                                    <span class="font-semibold text-gray-700 dark:text-gray-300 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-all duration-300 ease-out group-hover:translate-x-1 group-hover:scale-105">
                                        <?= esc($k['nama_keahlian']) ?>
                                    </span>
                                    <span class="text-sm font-bold bg-purple-100 dark:bg-purple-500/20 text-purple-700 dark:text-purple-300 px-3 py-1 rounded-full border border-purple-200 dark:border-purple-500/30 transition-all duration-300 ease-out group-hover:scale-110 group-hover:bg-purple-200 dark:group-hover:bg-purple-500/30">
                                        <?= $k['rating'] ?>/10
                                    </span>
                                </div>
                                
                                <!-- Animated Progress Dots dengan hover effect -->
                                <div class="rating-dots-animated group-hover:gap-2 transition-all duration-300 ease-out">
                                    <?php for($i = 1; $i <= 10; $i++): ?>
                                        <div class="rating-dot <?= ($i <= $k['rating']) ? 'filled' : '' ?> transition-all duration-300 ease-out group-hover:scale-110 group-hover:-translate-y-0.5" style="animation-delay: <?= $i * 0.1 ?>s"></div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Soft Skills -->
            <div class="fade-in animation-delay-300">
                <div class="bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-xl border border-blue-200 dark:border-blue-500/20 transition-all duration-300 ease-out hover:scale-[1.02] hover:-translate-y-1">
                    <div class="flex items-center mb-8">
                        <div class="w-14 h-14 bg-gradient-to-br from-blue-600 to-purple-600 dark:from-blue-500 dark:to-purple-500 rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                            <i class="fas fa-users text-white text-2xl"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Keahlian Non-Teknis</h3>
                            <p class="text-gray-600 dark:text-gray-400">Soft skills & interpersonal</p>
                        </div>
                    </div>
                    
                    <div class="space-y-6">
                        <?php if (empty($keahlian_non_teknis)): ?>
                            <div class="text-center py-8">
                                <i class="fas fa-users text-4xl text-gray-400 dark:text-gray-600 mb-4"></i>
                                <p class="text-gray-500 dark:text-gray-500">Belum ada data keahlian non-teknis.</p>
                            </div>
                        <?php else: ?>
                            <?php foreach($keahlian_non_teknis as $k): ?>
                            <div class="group transition-all duration-300 ease-out">
                                <div class="flex justify-between items-center mb-3">
                                    <span class="font-semibold text-gray-700 dark:text-gray-300 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-all duration-300 ease-out group-hover:translate-x-1 group-hover:scale-105">
                                        <?= esc($k['nama_keahlian']) ?>
                                    </span>
                                    <span class="text-sm font-bold bg-blue-100 dark:bg-blue-500/20 text-blue-700 dark:text-blue-300 px-3 py-1 rounded-full border border-blue-200 dark:border-blue-500/30 transition-all duration-300 ease-out group-hover:scale-110 group-hover:bg-blue-200 dark:group-hover:bg-blue-500/30">
                                        <?= $k['rating'] ?>/10
                                    </span>
                                </div>
                                
                                <!-- Animated Progress Dots dengan hover effect -->
                                <div class="rating-dots-animated group-hover:gap-2 transition-all duration-300 ease-out">
                                    <?php for($i = 1; $i <= 10; $i++): ?>
                                        <div class="rating-dot <?= ($i <= $k['rating']) ? 'filled' : '' ?> transition-all duration-300 ease-out group-hover:scale-110 group-hover:-translate-y-0.5" style="animation-delay: <?= $i * 0.1 ?>s"></div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Animasi fade in saat scroll
    document.addEventListener('DOMContentLoaded', function() {
        const fadeElements = document.querySelectorAll('.fade-in');
        
        const fadeInObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { 
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });
        
        fadeElements.forEach(element => {
            fadeInObserver.observe(element);
        });
        
        // Contact Options Toggle dengan animasi smooth
        const contactBtn = document.getElementById('open-contact-btn');
        const contactOptions = document.getElementById('contact-options');
        
        contactBtn?.addEventListener('click', function() {
            contactOptions.classList.toggle('hidden');
            if (!contactOptions.classList.contains('hidden')) {
                setTimeout(() => {
                    contactOptions.classList.add('visible');
                }, 10);
            }
        });

        // Smooth scroll untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });
</script>

<style>
    .animation-delay-100 { animation-delay: 100ms; }
    .animation-delay-200 { animation-delay: 200ms; }
    .animation-delay-300 { animation-delay: 300ms; }
    
    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Animated Rating Dots dengan easing yang lebih smooth */
    .rating-dots-animated {
        display: flex;
        gap: 4px;
        align-items: center;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .rating-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: #e5e7eb;
        opacity: 0;
        animation: dotFadeIn 0.5s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .rating-dot.filled {
        background-color: #8b5cf6;
    }
    
    .dark .rating-dot {
        background-color: #374151;
    }
    
    .dark .rating-dot.filled {
        background-color: #8b5cf6;
    }
    
    @keyframes dotFadeIn {
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }
    
    ::-webkit-scrollbar-track {
        background: #f1f5f9;
    }
    
    .dark ::-webkit-scrollbar-track {
        background: #1f2937;
    }
    
    ::-webkit-scrollbar-thumb {
        background: #cbd5e1;
        border-radius: 4px;
    }
    
    .dark ::-webkit-scrollbar-thumb {
        background: #4b5563;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: #94a3b8;
    }
    
    .dark ::-webkit-scrollbar-thumb:hover {
        background: #6b7280;
    }

    /* Improved focus states untuk accessibility */
    button:focus, a:focus {
        outline: 2px solid #8b5cf6;
        outline-offset: 2px;
    }
</style>

<?= $this->endSection() ?>