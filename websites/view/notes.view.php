<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body>
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
<?php require './partials/nav.php' ?>

  <header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= $heading ?></h1>

    </div>
  </header>
  <main>
   
      <!-- Your content -->
       <?php foreach ($notes as $note) : ?>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4">
          <div class="px-4 py-5 sm:px-6">
            <a href="/note?id=<?=$note['id']?>" class="block text-sm font-medium text-indigo-600 hover:text-indigo-500 font-blue-500">
          
             
         <?= $note['body'] ?>
            </a>
            </div>
        </div>
        </div>
            <?php endforeach; ?>
   
  </main>
</div>

  </body>
</html>