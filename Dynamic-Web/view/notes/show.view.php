<?php require base_path('view/partials/head.php') ?>
<?php require base_path('view/partials/nav.php') ?>

<main class="flex flex-col items-center justify-center min-h-screen bg-gray-50 dark:bg-gray-800 p-8">
    <!-- Heading -->
    <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-6"><?= $heading ?></h1>
    
    <!-- Note Content -->
    <div class="bg-white dark:bg-gray-900 shadow-lg rounded-lg p-6 w-full max-w-lg text-center">
        <p class="text-gray-800 dark:text-gray-200 text-lg"><?= htmlspecialchars($note['notes']) ?></p>
    </div>

    <!-- Action Buttons -->
    <div class="mt-6 flex space-x-4">
        <!-- Delete Note Form -->
        <form action="/note" method="POST"">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>"> 
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
                Delete Note
            </button>
        </form>

        <!-- Edit Note Button -->
        <a href="/note/edit?id=<?= $note['id'] ?>" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
            Edit Note
        </a>
    </div>

    <!-- Back Link -->
    <a href="/notes" class="mt-6 text-blue-600 dark:text-blue-400 hover:underline font-semibold">
        ← Go back to notes
    </a>
</main>


<?php require base_path('view/partials/foot.php') ?>