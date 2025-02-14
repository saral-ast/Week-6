<?php require base_path('view/partials/head.php') ?>
<?php require base_path('view/partials/nav.php') ?>
<main class="flex flex-col items-center justify-center min-h-screen bg-gray-50 dark:bg-gray-800 p-8">
    <div class="max-w-md w-full bg-white dark:bg-gray-900 p-6 rounded-lg shadow-lg">
        <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-6"><?= $heading ?></h1>
        <p class="text-lg text-gray-700 dark:text-gray-300 mb-4">Edit Note</p>

        <!-- Edit Note Form -->
        <form action="/note" method="POST" class="space-y-4">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Your Note
            </label>
            <textarea 
                id="message" 
                name="notes" 
                rows="4" 
                class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" 
                placeholder="Write your note here..." 
                aria-label="Edit your note"><?= htmlspecialchars($note['notes']) ?></textarea>

            <?php if (isset($errors['note'])): ?>
                <span class="text-red-500 text-xs mt-1"><?= $errors['note'] ?></span>
            <?php endif ?>

            <!-- Action Buttons -->
            <div class="flex space-x-4 mt-4">
                <!-- Save Button -->
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-300">
                    Update Note
                </button>

                <!-- Cancel Button -->
                <a href="/notes" class="w-full text-center bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-lg transition duration-300">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</main>




<?php require base_path('view/partials/foot.php') ?>