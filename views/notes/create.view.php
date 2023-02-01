<?php require basePath('views/partials/head.php') ?>
<?php require basePath('views/partials/nav.php') ?>
<?php require basePath('views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="mt-5 md:col-span-2 md:mt-0">
                <form method="POST">
                    <div class="shadow bg-gray-300  sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 px-4 py-5 sm:p-6">
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <div class="mt-1">
                                    <input id="title" name="title" class="mt-1 block p-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Here's an idea for a note..." value=<?= isset($_POST['title']) ? $_POST['title'] : ''; ?>>
                                    </input>
                                    <?php if (isset($errors['title'])) : ?>
                                        <h3 class="text-red-500 font-semibold text-xs"><?= $errors['title'] ?></h3>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-6  px-4 py-5 sm:p-6">
                            <div>
                                <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                                <div class="mt-1">
                                    <textarea id="body" name="body" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Here's an idea for a note...">
                                              <?= isset($_POST['body']) ? $_POST['body'] : ''; ?>

                                    </textarea>
                                    <?php if (isset($errors['body'])) : ?>
                                        <h3 class="text-red-500 font-semibold text-xs"><?= $errors['body'] ?></h3>
                                    <?php endif ?>

                                </div>
                            </div>
                        </div>

                        <div class=" px-4 py-3 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php require basePath('views/partials/footer.php') ?>