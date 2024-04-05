<?php require_once('lib/common.php');  ?>

<div class="d-flex align-self-center justify-content-center mt-4">
  <div class="d-inline border border-2 p-4 bg-body rounded">
    <div class="fs-1 fw-bold text-dark">Welcome To Prasanna's Work</div>
    <h1 class="mt-3 fs-3 fw-bold text-dark">Have a Look Day Wise</h1>
    <ol class="list-group list-group-numbered mt-2">
      <li class="list-group-item d-inline">
        <a class="d-flex justify-content-between align-items-start" href="<?php echo SITE_URL . '/PHPOPS/Day1/Assignment1/practice1.php'; ?>">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Day 1</div>
            Basic PHP
          </div>
          <span class="badge bg-primary rounded-pill">6</span>
        </a>
      </li>
      <li class="list-group-item d-inline">
        <a class="d-flex justify-content-between align-items-start" href="<?php echo SITE_URL . '/PHPOPS/Day2/Assignment1/practice1.php'; ?>">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Day 2</div>
            Basic PHP
          </div>
          <span class="badge bg-primary rounded-pill">10</span>
        </a>
      </li>
      <li class="list-group-item d-inline">
        <a class="d-flex justify-content-between align-items-start" href="<?php echo SITE_URL . '/PHPOPS/Day3/Assignment1/practice1.php'; ?>">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Day 3</div>
            Basic PHP
          </div>
          <span class="badge bg-primary rounded-pill">11</span>
        </a>
      </li>
      <li class="list-group-item d-inline">
        <a class="d-flex justify-content-between align-items-start" href="<?php echo SITE_URL . '/PHPOPS/Day4/Assignment1/practice1.php'; ?>">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Day 4</div>
            Arrays in PHP
          </div>
          <span class="badge bg-primary rounded-pill">9</span>
        </a>
      </li>
      <li class="list-group-item d-inline">
        <a class="d-flex justify-content-between align-items-start" href="<?php echo SITE_URL . '/PHPOPS/Day5/Assignment1/practice1.php'; ?>">
          <div class="ms-2 me-auto">
            <div class="fw-bold">Day 5</div>
            Strings in PHP
          </div>
          <span class="badge bg-primary rounded-pill">11</span>
        </a>
      </li>
    </ol>
  </div>
</div>
<div class="m-5"></div>

<?php
require_once('lib/footer.php');
?>