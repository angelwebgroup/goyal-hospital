<?php
/**
 * Goyal Robotic Hospital – Video Gallery Portal
 * Displays native HTML5 players for robotic joint surgeries and hospital walkthrough videos.
 */
$page_title = "Video Gallery – Goyal Robotic Hospital | Surgical Procedures & Tour Videos";
$active_page = "videos";
include 'includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <h2>Hospital Video Gallery</h2>
  <p>Watch video records of our state-of-the-art robotic surgical workflows, facility tours, and patient joint rehabilitation journals.</p>
</section>

<!-- VIDEO GALLERY GRID -->
<section class="section">
  <div class="gallery-grid" style="grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); max-width: 900px; margin: 0 auto; gap: 32px;">
    
    <!-- Video Card 1: Robotic Surgery Workflow -->
    <div class="video-card">
      <div class="video-player-container">
        <video controls preload="metadata" poster="images/OT.jpeg">
          <source src="videos/01.mp4" type="video/mp4">
          Your browser does not support the HTML5 video tag.
        </video>
      </div>
      <div class="video-card-info">
        <h3><i class="fa-solid fa-microchip" style="color:var(--teal); margin-right: 6px;"></i> Fully Active Robotic Procedure</h3>
        <p>Witness our next-gen surgical robotics in action. This video shows our active robotic arm system executing precise bone cuts with sub-millimeter clinical parameters configured by Dr. Aman Goyal.</p>
      </div>
    </div>
    
    <!-- Video Card 2: Facility Tour -->
    <div class="video-card">
      <div class="video-player-container">
        <video controls preload="metadata" poster="images/building1.jpeg">
          <source src="videos/02.mp4" type="video/mp4">
          Your browser does not support the HTML5 video tag.
        </video>
      </div>
      <div class="video-card-info">
        <h3><i class="fa-solid fa-hospital" style="color:var(--blue); margin-right: 6px;"></i> Infrastructure &amp; Wards Tour</h3>
        <p>Take an inside tour of Goyal Hospital's clinical departments, Class-100 modular cleanrooms, modern patient wards, 24/7 cardiac ICU setup, and high-performance physical recovery suites.</p>
      </div>
    </div>
    
  </div>
</section>

<?php
include 'includes/footer.php';
?>
