<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (including Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo e(asset('css/sidebar.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/search.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('css/dashboard.css')); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>">
</head>

<body>
  <nav>
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bi bi-chevron-left'></i>
      </span>
      <h3 class="hide" style="display: flex; align-items: center; justify-content: center;">
        <i class="bi bi-gear-fill" style="margin-right: 10px;"></i> <!-- Second icon -->
        ADMIN <!-- Text -->
      </h3>
    
    </div>
    <hr class="my-2">
    <div class="sidebar-links">
      <ul>
          <div class="active-tab"></div>
          <li class="tooltip-element" data-tooltip="0">
            <a href="/dashboard" class="active" data-active="0">
              <div class="icon">
                <i class='bi bi-speedometer2'></i>
                <i class='bi bi-speedometer2'></i>
              </div>
              <span class="link hide">Dashboard</span>
            </a>
          </li>
          <li class="tooltip-element" data-tooltip="1">
            <a href="/lokasi_kos" data-active="1">
              <div class="icon">
                <i class='bi bi-house-door'></i>
                <i class='bi bis-house-door'></i>
              </div>
              <span class="link hide">Data Lokasi</span>
            </a>
          </li>
          <li class="tooltip-element" data-tooltip="2">
            <a href="/kamar" data-active="2">
              <div class="icon">
                <i class='bi bi-door-closed'></i>
                <i class='bi bi-door-closed'></i>
              </div>
              <span class="link hide">Data Kamar</span>
            </a>
          </li>
          <li class="tooltip-element" data-tooltip="3">
            <a href="#" data-active="3">
              <div class="icon">
                <i class='bi bi-person'></i>
                <i class='bi bi-person'></i>
              </div>
              <span class="link hide">Data Penyewa</span>
            </a>
          </li>
          <li class="tooltip-element" data-tooltip="4">
            <a href="/penghuni" data-active="4">
              <div class="icon">
                <i class='bi bi-person-plus'></i>
                <i class='bi bi-person-plus'></i>
              </div>
              <span class="link hide">Data Penghuni</span>
            </a>
          </li>
          <li class="tooltip-element" data-tooltip="5">
            <a href="/logout" data-active="5">
              <div class="icon">
                <i class='bi bi-box-arrow-right'></i>
                <i class='bi bi-box-arrow-right'></i>
              </div>
              <span class="link hide">Log Out</span>
            </a>
          </li>         
          <div class="tooltip">
            <span class="show">Dashboard</span>
            <span>Data Kamar</span>
            <span>Data Lokasi</span>
            <span>Data Penghuni</span>
            <span>Data Penyewa</span>
            <span>Log Out</span>
          </div>
        </ul>
  </div>
  </nav>

  <div class="centered-content">
  <main >
    
        <?php echo $__env->yieldContent('content'); ?>
   
</main>

 <script>
const shrink_btn = document.querySelector(".shrink-btn");
const sidebar_links = document.querySelectorAll(".sidebar-links a");
const active_tab = document.querySelector(".active-tab");
const shortcuts = document.querySelector(".sidebar-links h4");
const tooltip_elements = document.querySelectorAll(".tooltip-element");

let activeIndex;

shrink_btn.addEventListener("click", () => {
  document.body.classList.toggle("shrink");
  setTimeout(moveActiveTab, 400);

  shrink_btn.classList.add("hovered");

  setTimeout(() => {
    shrink_btn.classList.remove("hovered");
  }, 500);
});

function moveActiveTab() {
  let topPosition = activeIndex * 58 + 2.5;

  if (activeIndex > 5) {
    topPosition += shortcuts.clientHeight;
  }

  active_tab.style.top = `${topPosition}px`;
}

function changeLink() {
  sidebar_links.forEach((sideLink) => sideLink.classList.remove("active"));
  this.classList.add("active");

  activeIndex = this.dataset.active;

  moveActiveTab();

  // Trigger the tooltip hover effect for the clicked menu
  tooltip_elements[activeIndex].dispatchEvent(new Event("mouseover"));
}

sidebar_links.forEach((link) => link.addEventListener("click", changeLink));

function showTooltip() {
  let tooltip = this.parentNode.lastElementChild;
  let spans = tooltip.children;
  let tooltipIndex = this.dataset.tooltip;

  Array.from(spans).forEach((sp) => sp.classList.remove("show"));
  spans[tooltipIndex].classList.add("show");

  tooltip.style.top = `${(100 / (spans.length * 2)) * (tooltipIndex * 2 + 1)}%`;
}

tooltip_elements.forEach((elem) => {
  elem.addEventListener("mouseover", showTooltip);
});
 </script>
</body>

</html><?php /**PATH C:\kost-skripsi\resources\views/layout/template.blade.php ENDPATH**/ ?>