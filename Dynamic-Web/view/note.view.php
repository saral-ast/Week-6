<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<main class="flex flex-col items-center justify-center min-h-screen bg-gray-50 dark:bg-gray-800 p-8">
    <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-6"><?= $heading ?></h1>
    
    <div class="bg-white dark:bg-white shadow-lg rounded-lg p-6 w-full max-w-lg text-center">
        <p class="text-gray-800 dark:text-gray-800 text-lg"><?= htmlspecialchars($note['notes']) ?></p>
    </div>

    <a href="/Dynamic-Web/notes" class="mt-6 text-blue-600 dark:text-blue-400 hover:underline font-semibold">
        ← Go back to notes
    </a>
</main>


<?php require('partials/foot.php') ?>