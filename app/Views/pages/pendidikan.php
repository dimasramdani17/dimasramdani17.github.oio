<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<!-- Hero Section Simple -->
<section class="py-16 bg-white dark:bg-gray-900">
    <div class="container mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4">
            Riwayat Pendidikan
        </h1>
        <p class="text-xl text-gray-600 dark:text-gray-400">
            Perjalanan akademis yang telah saya tempuh.
        </p>
    </div>
</section>

<!-- Pendidikan Section -->
<section class="py-12 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <!-- Timeline Pendidikan -->
        <div class="timeline">
            <?php if (empty($pendidikan_list)): ?>
                <p class="text-center text-gray-500 dark:text-gray-400 py-8">Belum ada data pendidikan untuk ditampilkan.</p>
            <?php else: ?>
                <!-- Looping semua data pendidikan -->
                <?php foreach($pendidikan_list as $p): ?>
                <div class="timeline-item">
                    <!-- Ikon di garis timeline -->
                    <div class="timeline-icon"></div>
                    
                    <!-- Konten item -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-lg border border-gray-200 dark:border-gray-700">
                        <div class="flex flex-col sm:flex-row justify-between sm:items-start">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white"><?= esc($p['institusi']) ?></h3>
                                <p class="text-md font-medium text-purple-600 dark:text-purple-400 mt-1"><?= esc($p['jenjang_jurusan']) ?></p>
                            </div>
                            <span class="flex-shrink-0 mt-2 sm:mt-0 text-sm font-medium text-gray-500 dark:text-gray-400 bg-gray-100 dark:bg-gray-700 px-3 py-1 rounded-full">
                                <?= esc($p['tahun_mulai']) ?> - <?= esc($p['tahun_selesai']) ?>
                            </span>
                        </div>
                        <?php if (!empty($p['deskripsi'])): ?>
                            <p class="mt-4 text-gray-600 dark:text-gray-300"><?= esc($p['deskripsi']) ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?= $this->endSection() ?>