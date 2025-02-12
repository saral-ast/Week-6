<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<main class="flex flex-col items-center justify-center min-h-screen bg-gray-50 dark:bg-gray-800 p-8">
    <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-6"><?= $heading ?></h1>

    <ul class="w-full max-w-md bg-white dark:bg-white  shadow-lg rounded-lg p-4">
        <?php foreach ($notes as $note) : ?>
            <li class="border-b border-gray-300 dark:border-gray-700 last:border-none py-2">
                <a href="/Dynamic-Web/note?id=<?= $note['id'] ?>" class="text-gray-900 dark:text-gray-800 hover:text-blue-500 hover:underline">
                    <?= htmlspecialchars(htmlspecialchars($note['notes'])); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <div class="mt-6">
        <a href="/Dynamic-Web/notes/create" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
            + Create Note
        </a>
    </div>
</main>


<?php require('partials/foot.php') ?>