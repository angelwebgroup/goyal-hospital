<?php
/**
 * Goyal Robotic Hospital – Photo Gallery Portal
 * Displays responsive infrastructure, modular cleanroom, and robotics photography with vanilla JS Lightbox modal.
 */
$page_title = "Photo Gallery – Goyal Robotic Hospital | Advanced Facilities & Technology Showcase";
$active_page = "photos";
include 'includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <h2>Hospital Photo Gallery</h2>
  <p>Take a virtual tour of our modern infrastructure, modular cleanrooms, advanced robotic suites, and clinical operations.</p>
</section>

<!-- PHOTO GALLERY GRID -->
<section class="section">
  <div class="gallery-grid">
    
    <!-- Item 1: Building Exterior -->
    <div class="gallery-item" data-src="images/Building-Image.jpg" data-caption="Goyal Hospital primary clinical facility building.">
      <img src="images/Building-Image.jpg" alt="Primary Hospital Facility">
      <div class="gallery-overlay">
        <h4>Goyal Hospital Building</h4>
        <span>Primary Facility</span>
      </div>
      <div class="gallery-zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
    </div>
    
    <!-- Item 2: Building Exterior Alternative -->
    <div class="gallery-item" data-src="images/building1.jpeg" data-caption="Goyal Robotic Hospital Main Entrance &amp; OPD Reception Frontage.">
      <img src="images/building1.jpeg" alt="Goyal Hospital Entrance">
      <div class="gallery-overlay">
        <h4>Hospital Frontage</h4>
        <span>Robotics Wing</span>
      </div>
      <div class="gallery-zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
    </div>
    
    <!-- Item 3: Robotic Operating Theatre -->
    <div class="gallery-item" data-src="images/OT.jpeg" data-caption="Advanced Modular Operating Theatre configured for high-precision robotic joint replacements.">
      <img src="images/OT.jpeg" alt="Robotic Surgery Suite">
      <div class="gallery-overlay">
        <h4>Modular Robotic OT</h4>
        <span>Operating Theatre</span>
      </div>
      <div class="gallery-zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
    </div>
    
    <!-- Item 4: Cleanroom OT -->
    <div class="gallery-item" data-src="images/OTs.jpeg" data-caption="Class-100 sterile environment operating suites ensuring near-zero surgical site infection rates.">
      <img src="images/OTs.jpeg" alt="Sterile Cleanrooms">
      <div class="gallery-overlay">
        <h4>Class-100 Sterile OT</h4>
        <span>Infection Safeguards</span>
      </div>
      <div class="gallery-zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
    </div>

    <!-- Item 5: Surgical Robotics Logo -->
    <div class="gallery-item" data-src="images/Robotic Logo.jpeg" data-caption="State-of-the-art robotic surgical system logo representing robotic bone-cutting and joint alignment.">
      <img src="images/Robotic Logo.jpeg" alt="Surgical Robotics Logo">
      <div class="gallery-overlay">
        <h4>Robotic Surgery Hub</h4>
        <span>Medical Technology</span>
      </div>
      <div class="gallery-zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
    </div>

    <!-- Item 6: Lab & Pathology -->
    <div class="gallery-item" data-src="images/01.jpeg" data-caption="Advanced pathology laboratories and clinical testing departments inside Goyal Hospital.">
      <img src="images/01.jpeg" alt="Pathology Laboratory">
      <div class="gallery-overlay">
        <h4>Diagnostics &amp; Lab</h4>
        <span>Clinical Testing</span>
      </div>
      <div class="gallery-zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
    </div>

    <!-- Item 7: Private Recovery Rooms -->
    <div class="gallery-item" data-src="images/02.jpeg" data-caption="Comfortable, sterile recovery rooms and spacious OPD consultation channels.">
      <img src="images/02.jpeg" alt="Private Recovery Rooms">
      <div class="gallery-overlay">
        <h4>Patient Wards &amp; OPD</h4>
        <span>Recovery Rooms</span>
      </div>
      <div class="gallery-zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
    </div>

    <!-- Item 8: Clinical Board Credentials -->
    <div class="gallery-item" data-src="images/MBBS-DGO-DNB.jpg" data-caption="Recognized board certifications, medical qualifications, and certified surgical fellowships.">
      <img src="images/MBBS-DGO-DNB.jpg" alt="Board Credentials">
      <div class="gallery-overlay">
        <h4>Accreditations</h4>
        <span>Board Credentials</span>
      </div>
      <div class="gallery-zoom-icon"><i class="fa-solid fa-magnifying-glass-plus"></i></div>
    </div>

  </div>
</section>

<!-- LIGHTBOX MODAL CONTAINER -->
<div class="lightbox-modal" id="lightboxModal">
  <div class="lightbox-content">
    <span class="lightbox-close" id="lightboxClose">&times;</span>
    <img src="" alt="Enlarged View" class="lightbox-img" id="lightboxImg">
    <div class="lightbox-caption" id="lightboxCaption"></div>
    <span class="lightbox-nav lightbox-prev" id="lightboxPrev"><i class="fa-solid fa-chevron-left"></i></span>
    <span class="lightbox-nav lightbox-next" id="lightboxNext"><i class="fa-solid fa-chevron-right"></i></span>
  </div>
</div>

<!-- LIGHTBOX CONTROLLER SCRIPT -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
      const items = document.querySelectorAll('.gallery-item');
      const modal = document.getElementById('lightboxModal');
      const modalImg = document.getElementById('lightboxImg');
      const modalCaption = document.getElementById('lightboxCaption');
      const closeBtn = document.getElementById('lightboxClose');
      const prevBtn = document.getElementById('lightboxPrev');
      const nextBtn = document.getElementById('lightboxNext');
      
      let currentIndex = -1;
      const imagesArray = Array.from(items).map(item => ({
          src: item.getAttribute('data-src'),
          caption: item.getAttribute('data-caption')
      }));
      
      function openLightbox(index) {
          currentIndex = index;
          modalImg.src = imagesArray[index].src;
          modalCaption.textContent = imagesArray[index].caption;
          modal.classList.add('active');
          document.body.style.overflow = 'hidden'; // Disable scroll
      }
      
      function closeLightbox() {
          modal.classList.remove('active');
          document.body.style.overflow = 'auto'; // Enable scroll
      }
      
      function showNext() {
          currentIndex = (currentIndex + 1) % imagesArray.length;
          modalImg.src = imagesArray[currentIndex].src;
          modalCaption.textContent = imagesArray[currentIndex].caption;
      }
      
      function showPrev() {
          currentIndex = (currentIndex - 1 + imagesArray.length) % imagesArray.length;
          modalImg.src = imagesArray[currentIndex].src;
          modalCaption.textContent = imagesArray[currentIndex].caption;
      }
      
      items.forEach((item, index) => {
          item.addEventListener('click', () => {
              openLightbox(index);
          });
      });
      
      if (closeBtn && nextBtn && prevBtn) {
          closeBtn.addEventListener('click', closeLightbox);
          nextBtn.addEventListener('click', showNext);
          prevBtn.addEventListener('click', showPrev);
          
          // Close modal on background click
          modal.addEventListener('click', function(e) {
              if (e.target === modal) {
                  closeLightbox();
              }
          });
          
          // Keyboard controls
          document.addEventListener('keydown', function(e) {
              if (!modal.classList.contains('active')) return;
              
              if (e.key === 'Escape') {
                  closeLightbox();
              } else if (e.key === 'ArrowRight') {
                  showNext();
              } else if (e.key === 'ArrowLeft') {
                  showPrev();
              }
          });
      }
  });
</script>

<?php
include 'includes/footer.php';
?>
