<?php
$page_title = "Advanced Spine Care – Goyal Robotic Hospital";
$active_page = "services";
include 'includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="hero-grid-lines"></div>
  <h2>Advanced Spine Care</h2>
  <p>Comprehensive, minimally invasive solutions for spinal disorders, back pain, and spinal cord injuries.</p>
</section>

<!-- MAIN CONTENT -->
<section class="section">
  <div class="why-grid">
    <div>
      <div class="section-label">Spine Surgery Excellence</div>
      <h2 class="section-title">Restore Your <span>Spinal Health</span></h2>
      <p style="margin-bottom: 20px; color: var(--gray); font-size:15px; line-height: 1.75;">At Goyal Robotic Hospital, our spine clinic is dedicated to the diagnosis and treatment of a wide range of spinal conditions. Using the latest advancements in medical technology, our expert spine surgeons aim to alleviate pain, restore function, and improve your overall quality of life.</p>
      
      <p style="margin-bottom: 24px; color: var(--gray); font-size:15px; line-height: 1.75;">We specialize in micro-endoscopic decompression, spinal fusion, herniated disc repairs, and the management of spinal stenosis. Our computer-assisted navigation systems ensure unparalleled accuracy and maximum protection of delicate spinal nerves.</p>

      <ul style="list-style:none; padding:0; margin-bottom: 24px; font-size: 14.5px; color: var(--navy); font-weight:600; line-height: 2;">
        <li><i class="fa-solid fa-check" style="color:var(--teal); margin-right:8px;"></i> Micro-endoscopic keyhole techniques</li>
        <li><i class="fa-solid fa-check" style="color:var(--teal); margin-right:8px;"></i> Rapid recovery with minimal tissue damage</li>
        <li><i class="fa-solid fa-check" style="color:var(--teal); margin-right:8px;"></i> Advanced pain management protocols</li>
        <li><i class="fa-solid fa-check" style="color:var(--teal); margin-right:8px;"></i> Comprehensive pre-and post-operative care</li>
      </ul>
      
      <a href="contact.php" class="btn-primary" style="margin-top: 10px;"><i class="fa-solid fa-calendar-check"></i> Book Spinal Consultation</a>
    </div>

    <div class="scan-container" style="aspect-ratio: 4 / 3; width: 100%; height: auto; box-shadow: 0 10px 30px rgba(6, 18, 36, 0.05); border-radius: var(--border-radius); overflow: hidden;">
      <img src="images/OTs.jpeg" alt="Advanced Spine Care" style="width: 100%; height: 100%; object-fit: cover; display: block;">
    </div>
  </div>
</section>

<!-- CONDITIONS TREATED -->
<section class="section section-alt">
  <div class="section-header" style="text-align: center;">
    <div class="section-label">What We Treat</div>
    <h2 class="section-title">Common <span>Spinal Conditions</span></h2>
    <p class="section-sub" style="margin: 0 auto;">Our specialized team is experienced in managing complex spinal deformities and degenerative conditions.</p>
  </div>

  <div class="services-grid">
    <div class="service-card">
      <div class="service-icon"><i class="fa-solid fa-compact-disc" style="color: var(--blue);"></i></div>
      <h3>Herniated Discs</h3>
      <p>Targeted treatment for slipped or ruptured discs that press against spinal nerves, causing severe pain and numbness.</p>
    </div>
    <div class="service-card">
      <div class="service-icon"><i class="fa-solid fa-compress" style="color: var(--blue);"></i></div>
      <h3>Spinal Stenosis</h3>
      <p>Advanced decompression procedures to relieve pressure on the spinal cord caused by narrowing of the spinal canal.</p>
    </div>
    <div class="service-card">
      <div class="service-icon"><i class="fa-solid fa-user-injured" style="color: var(--blue);"></i></div>
      <h3>Scoliosis & Deformities</h3>
      <p>Correction of abnormal spinal curvature using state-of-the-art fixation and fusion techniques.</p>
    </div>
  </div>
</section>

<?php
include 'includes/footer.php';
?>
