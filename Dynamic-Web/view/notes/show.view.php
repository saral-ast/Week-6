<?php require base_path('view/partials/head.php') ?>
<?php require base_path('view/partials/nav.php') ?>

<main class="flex flex-col items-center justify-center min-h-screen bg-gray-50 dark:bg-gray-800 p-8">
    <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-6"><?= $heading ?></h1>
    
    <div class="bg-white dark:bg-white shadow-lg rounded-lg p-6 w-full max-w-lg text-center">
        <p class="text-gray-800 dark:text-gray-800 text-lg"><?= htmlspecialchars($note['notes']) ?></p>
    </div>

    <form action="/note" method="POST" class="mt-6">
        <input type="text" name = '_method' value="DELETE" hidden>
        <input type="text" name = 'id' value="<?= $note['id'] ?>" hidden> 
        <button type="submit" class="mt-6 bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">Delete Note</button>
    </form>

    <a href="/notes" class="mt-6 text-blue-600 dark:text-blue-400 hover:underline font-semibold">
        ← Go back to notes
    </a>
</main>


<?php require base_path('view/partials/foot.php') ?>