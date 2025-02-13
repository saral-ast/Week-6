<?php require base_path('view/partials/head.php') ?>
<?php require base_path('view/partials/nav.php') ?>

<main class="flex flex-col items-center justify-center min-h-screen bg-gray-50 dark:bg-gray-800 p-8">
<div class="max-w-md w-full bg-white dark:bg-gray-900 p-6 rounded-lg shadow-lg">
    <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-6"><?= $heading ?></h1>
    <p class="text-lg text-gray-700 dark:text-gray-300 mb-4">Create a New Note</p>

    <form action="<?= isset($errors['note']) ? '/notes/create' : '/notes' ?>" method="POST" class="max-w-md w-full bg-white dark:bg-gray-900 p-6 rounded-lg shadow-lg">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Your Note
        </label>
        <textarea id="message" name="notes" rows="4" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your note here..."><?= isset($errors['note']) ? $_POST['notes']  : null?></textarea>

        <?php if(isset($errors['note'])) : ?>
            <span class="text-red-500 text-xs mt-1"><?= $errors['note'] ?></span>
        <?php endif ?>

        <button type="submit" class="mt-4 w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
            Save Note
        </button>
    </form>
    </div>
</main>


<?php require base_path('view/partials/foot.php') ?>