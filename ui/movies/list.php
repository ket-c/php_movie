<?php
include_once __DIR__.'/../includes/check_login.php';
include_once __DIR__.'/../../repositories/MovieRepositoryClass.php';

use respositiories\MovieRepositoryClass;;

$movieRepo = new MovieRepositoryClass();
$movieData = $movieRepo->fetchAllMovies();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Movie List - PHP Movie Demo</title>
  <!-- CSS Styles from template -->
  <?php include_once'../includes/styles.php'; ?>
</head>

<body>

 
  <main id="main" class="main">
  <?php include_once'../includes/navigation.php' ?>
  <div class="pagetitle">
      <h1>Movie List</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Movie List</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <!-- Recent Movies added -->
       <div class="col-12">
          <div class="card recent-sales overflow-auto">
            <div class="card-body">
              <h5 class="card-title">List of movies added</span></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Year</th>
                    <th scope="col">Ratings</th>
                    <th scope="col">Image</th>
                    <th scope="col">Trailer</th>
                    <th scope="col">Date.added</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach($movieData as $key => $movie){ ?>
                  <tr>
                    <th scope="row"><?php  echo ++$key; ?></th>
                    <td><?php echo $movie['movie_title'] ?></td>
                    <td><a href="#" class="text-primary">Action Movie</a></td>
                    <td><?php echo $movie['movie_description'] ?></td>
                    <td><?php echo $movie['movie_year'] ?></td>
                    <td><?php echo $movie['movie_ratings'] ?></td>
                    <td><img src="<?php echo $movie['movie_image_url'] ?>" alt="" width="50"></td>
                    <td><a href="<?php echo $movie['movie_trailer_url'] ?>" >Trailer Link</a></td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                  <?php } ?>
                 </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Movies added -->
    </section>
 
  </main>
  <?php include_once'../includes/scripts.php' ?>
  <?php include_once'../includes/footer.php' ?>





</body>

</html><?php
