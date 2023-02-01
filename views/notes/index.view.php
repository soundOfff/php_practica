<?php require basePath('views/partials/head.php') ?>
<?php require basePath('views/partials/nav.php') ?>
<?php require basePath('views/partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p>Hello you are in the Notes Page!</p>

    <ul class="mb-6">
      <?php foreach ($notes as $note) : ?>

        <li>
          <a href="/note?id=<?= $note['id'] ?>" class="text-blue-600">
            <?= htmlspecialchars($note['title']) ?>
          </a>
        </li>

      <?php endforeach; ?>
    </ul>

    <p>
      <a href="notes/create" class="text-blue-600">Create a note</a>
    </p>

  </div>
</main>
<?php require basePath('views/partials/footer.php') ?>