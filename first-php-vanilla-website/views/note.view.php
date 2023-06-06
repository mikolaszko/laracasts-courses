<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>
          <main>
            <p class="text-center text-2xl"><a href="/notes">Go back to notes</a></p>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                            <div class="mt-8 text-2xl">
                                <?= $note['body'] ?>
                            </div>
                        </div>
                    </div>
            </div>
          </main>
        </div>
    </body>
</html>
