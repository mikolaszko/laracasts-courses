<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>
          <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                <?php foreach ($notes as $note) : ?>
                <a href="/note?id=<?= $note['id'] ?>">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                            <div class="mt-8 text-2xl">
                                <?= $note['body'] ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
          </main>
        </div>
    </body>
</html>
