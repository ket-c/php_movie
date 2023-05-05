<?php
include_once __DIR__.'/../includes/check_login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PHPGrammers Movies</title>
    <!-- CSS Styles from template -->
  <?php include '../includes/styles.php'; ?>
</head>

<body>
<?php include '../includes/navigation.php'; ?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
  <?php include_once '../includes/alert.php' ?>
    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6 ">
          <div class="card info-card sales-card">
            <div class="card-body">
              <h5 class="card-title">Movies <span>| Total</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-menu-button-wide"></i>
                </div>
                <div class="ps-3">
                  <h6>0</h6>
                 </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title">Categories <span>| Total</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-journal-text"></i>
                </div>
                <div class="ps-3">
                  <h6>0</h6>
                 </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card">
            <div class="card-body">
              <h5 class="card-title">Released <span>| Total</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-menu-button-wide"></i>
                </div>
                <div class="ps-3">
                  <h6>0</h6>
                </div>
              </div>

            </div>
          </div>

        </div><!-- End Customers Card -->


        <!-- Recent Movies added -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">
            <div class="card-body">
              <h5 class="card-title">Recent Movies Added <span>| List</span></h5>

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
                    
                 </tbody>
              </table>
            </div>

          </div>
        </div><!-- End Recent Movies added -->

       
      </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">

      <!-- Recent Activity -->
      <div class="card">
        <div class="filter">
          <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <li class="dropdown-header text-start">
              <h6>Filter</h6>
            </li>

            <li><a class="dropdown-item" href="#">Today</a></li>
            <li><a class="dropdown-item" href="#">This Month</a></li>
            <li><a class="dropdown-item" href="#">This Year</a></li>
          </ul>
        </div>

        <div class="card-body">
          <h5 class="card-title">Recent Activity <span>| Today</span></h5>

          <div class="activity">

            <div class="activity-item d-flex">
              <div class="activite-label">32 min</div>
              <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
              <div class="activity-content">
                Kwaku added <a href="#" class="fw-bold text-dark">static data</a> . haha
              </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
              <div class="activite-label">56 min</div>
              <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
              <div class="activity-content">
                Kwaku added <a href="#" class="fw-bold text-dark">static data</a> . haha
              </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
              <div class="activite-label">2 hrs</div>
              <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
              <div class="activity-content">
                Kwaku added <a href="#" class="fw-bold text-dark">static data</a> . haha
              </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
              <div class="activite-label">1 day</div>
              <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
              <div class="activity-content">
                Kwaku added <a href="#" class="fw-bold text-dark">static data</a> . haha
              </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
              <div class="activite-label">2 days</div>
              <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
              <div class="activity-content">
                Kwaku added <a href="#" class="fw-bold text-dark">static data</a> . haha
              </div>
            </div><!-- End activity item-->

            <div class="activity-item d-flex">
              <div class="activite-label">4 weeks</div>
              <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
              <div class="activity-content">
                Kwaku added <a href="#" class="fw-bold text-dark">static data</a> . haha
              </div>
            </div><!-- End activity item-->

          </div>

        </div>
      </div><!-- End Recent Activity -->

    </div><!-- End Right side columns -->

  </div>
</section>

</main><!-- End #main -->
  <?php include '../includes/scripts.php'; ?>
</body>

</html>