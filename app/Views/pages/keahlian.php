<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- Hero Section Simple -->
<section class="py-16 bg-white dark:bg-gray-900">
    <div class="container mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
            Detail Keahlian
        </h1>
        <p class="text-xl text-gray-600 dark:text-gray-400">
            Rating kemampuan saya di berbagai bidang.
        </p>
    </div>
</section>

<!-- Keahlian Section -->
<section class="py-12 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            
            <!-- Kolom Keahlian Teknis -->
            <div>
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg border border-gray-200 dark:border-gray-700">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-600 to-blue-600 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-laptop-code text-white text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Keahlian Teknis</h2>
                            <p class="text-gray-600 dark:text-gray-400">Teknologi & tools yang dikuasai</p>
                        </div>
                    </div>
                    
                    <div class="space-y-6">
                        <?php if (empty($keahlian_teknis)): ?>
                            <p class="text-gray-500 dark:text-gray-400 text-center py-4">Belum ada data keahlian teknis.</p>
                        <?php else: ?>
                            <?php foreach($keahlian_teknis as $k): ?>
                            <div class="group transition-all duration-300">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="font-semibold text-gray-700 dark:text-gray-300 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors duration-300">
                                        <?= esc($k['nama_keahlian']) ?>
                                    </span>
                                    <span class="text-sm font-bold bg-purple-100 dark:bg-purple-500/20 text-purple-700 dark:text-purple-300 px-3 py-1 rounded-full">
                                        <?= $k['rating'] ?>/10
                                    </span>
                                </div>
                                
                                <!-- Rating Dots -->
                                <div class="rating-dots">
                                    <?php for($i = 1; $i <= 10; $i++): ?>
                                        <div class="rating-dot <?= ($i <= $k['rating']) ? 'filled' : '' ?>"></div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Kolom Keahlian Non-Teknis -->
            <div>
                <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg border border-gray-200 dark:border-gray-700">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-purple-600 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-users text-white text-xl"></i>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Keahlian Non-Teknis</h2>
                            <p class="text-gray-600 dark:text-gray-400">Soft skills & interpersonal</p>
                        </div>
                    </div>
                    
                    <div class="space-y-6">
                        <?php if (empty($keahlian_non_teknis)): ?>
                            <p class="text-gray-500 dark:text-gray-400 text-center py-4">Belum ada data keahlian non-teknis.</p>
                        <?php else: ?>
                            <?php foreach($keahlian_non_teknis as $k): ?>
                            <div class="group transition-all duration-300">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="font-semibold text-gray-700 dark:text-gray-300 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors duration-300">
                                        <?= esc($k['nama_keahlian']) ?>
                                    </span>
                                    <span class="text-sm font-bold bg-blue-100 dark:bg-blue-500/20 text-blue-700 dark:text-blue-300 px-3 py-1 rounded-full">
                                        <?= $k['rating'] ?>/10
                                    </span>
                                </div>
                                
                                <!-- Rating Dots -->
                                <div class="rating-dots">
                                    <?php for($i = 1; $i <= 10; $i++): ?>
                                        <div class="rating-dot <?= ($i <= $k['rating']) ? 'filled' : '' ?>"></div>
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

<?= $this->endSection() ?>