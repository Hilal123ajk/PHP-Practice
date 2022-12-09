  <!-- Header  -->
  <?php require 'partials/header.php'; ?>
  
  <!-- Navbar -->
  <?php require 'partials/nav.php'; ?>

  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= $pageHeading; ?></h1>
    </div>
  </header>
  <main>

    <div class="mx-auto max-w-7xl py-6 sm:px-6 log:px-8">
    
        <p class="text-blue-500 hover:underline my-4"><a href="/notes">Back to notes...</a></p>

        <?php echo $note['note_body']; ?>
           
    </div>
     
  </main>

  <!-- Footer  -->
  <?php require 'partials/footer.php'; ?>