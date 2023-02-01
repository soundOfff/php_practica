<?php require basePath('views/partials/head.php') ?>
<?php require basePath('views/partials/nav.php') ?>
<?php require basePath('views/partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 flex flex-col space-y-10">
    <p>Hello you are in the Single note Page!</p>
    <h1 class="text-3xl font-bold text-gray-800"><?= $note['title'] ?></h1>
    <p class="text-gray-600 font-semibold text-lg"><?= $note['body'] ?></p>
    <a href="/notes">Go back...</a>
  </div>
</main>
<?php require basePath('views/partials/footer.php') ?>