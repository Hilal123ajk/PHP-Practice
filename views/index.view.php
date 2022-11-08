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
     <p class="text-gray-700 mx-20 my-5">Your are on home page</p>
     <div class="flex justify-center">

     
      <?php
          foreach ($posts as  $post) {
              echo "
                  <div class='p-6 mx-4 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700'>
                      <a href='#'>
                          <h5 class='mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white'>{$post['title']}</h5>
                      </a>
                      <p class='mb-3 font-normal text-gray-700 dark:text-gray-400'>{$post['description']}</p>
                      <a href='#' class='inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800'>
                          Edit Note
                      </a>
                      <a href='#' class='inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-bred-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-red-600 dark:hover:bgr-red-700 dark:focus:ring-red-800'>
                          Delete Post
                      </a>
                  </div>
              ";
          }
      ?>

    </div>
     
  </main>

  <!-- Footer  -->
  <?php require 'partials/footer.php'; ?>