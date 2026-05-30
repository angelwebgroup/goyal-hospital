<?php
$page_title = "Goyal Robotic Hospital – Premium Robotic Joint Replacement & Trauma Centre";
$active_page = "home";
include 'includes/header.php';
?>

<!-- HERO SECTION -->
<section class="hero">
  <div class="hero-grid-lines"></div>
  <div class="hero-content">
    <div class="hero-badge"><i class="fa-solid fa-microchip"></i> Premium Robotic surgery Active</div>
    <h2>Precision Redefined.<br><span>Restore Your Knee</span></h2>
    <h3>Walk Freely Within 24 Hours</h3>
    <p>Experience the next generation of clinical care at the best hospital in Kosi Kalan, Mathura. Goyal Hospital introduces state-of-the-art fully active Robotic Joint Replacement, offering unmatched precision, sub-millimeter alignment, minimal discomfort, and lifetime structural durability.</p>
    <div class="hero-ctas">
      <a href="contact.php" class="btn-primary"><i class="fa-solid fa-calendar-check"></i> Book Appointment</a>
      <a href="robotic-surgery.php" class="btn-outline"><i class="fa-solid fa-microscope"></i> Explore Robotics</a>
    </div>
  </div>

  <!-- Hero Visual Image Block -->
  <div class="hero-visual">
    <div class="hero-visual-inner">
      <div class="scan-container" style="width: 100%; height: 100%;">
        <img src="images/Aman-Goyal.jpeg" alt="Robotic Surgery Suite" style="width: 100%; height: 100%; object-fit: cover; display: block;">
      </div>
    </div>
  </div>

  <!-- Floating Stats Panel -->
  <!-- <div class="hero-stat-bubble s1">
    <strong>5000+</strong>
    <span>Joint Surgeries</span>
  </div>
  <div class="hero-stat-bubble s2">
    <strong>99%<span style="color:var(--teal); font-size:16px;">+</span></strong>
    <span>Robotic Precision</span>
  </div> -->

  <div class="scroll-indicator">
    <div class="scroll-line"></div> Scroll to explore
  </div>
</section>

<!-- TICKER / MARQUEE -->
<div class="ticker">
  <div class="ticker-inner">
    <span class="ticker-item"><span class="ticker-dot"></span><i class="fa-solid fa-microchip" style="color: var(--teal);"></i> Fully Active Robotic Knee Surgery</span>
    <span class="ticker-item"><span class="ticker-dot"></span>Robotic Spine Procedures</span>
    <span class="ticker-item"><span class="ticker-dot"></span>Robotic Hip Replacement</span>
    <span class="ticker-item"><span class="ticker-dot"></span>Minimally Invasive Keyhole Arthroscopy</span>
    <span class="ticker-item"><span class="ticker-dot"></span>Complex Trauma &amp; Fracture Reconstruction</span>
    <span class="ticker-item"><span class="ticker-dot"></span>Computer-Assisted Navigation</span>
    <span class="ticker-item"><span class="ticker-dot"></span>Advanced Physiotherapy &amp; Rehab</span>
    <span class="ticker-item"><span class="ticker-dot"></span>Painless Recovery Protocol</span>
    <!-- Duplicate for endless loop -->
    <span class="ticker-item"><span class="ticker-dot"></span><i class="fa-solid fa-microchip" style="color: var(--teal);"></i> Fully Active Robotic Knee Surgery</span>
    <span class="ticker-item"><span class="ticker-dot"></span>Robotic Spine Procedures</span>
    <span class="ticker-item"><span class="ticker-dot"></span>Robotic Hip Replacement</span>
    <span class="ticker-item"><span class="ticker-dot"></span>Minimally Invasive Keyhole Arthroscopy</span>
    <span class="ticker-item"><span class="ticker-dot"></span>Complex Trauma &amp; Fracture Reconstruction</span>
    <span class="ticker-item"><span class="ticker-dot"></span>Computer-Assisted Navigation</span>
    <span class="ticker-item"><span class="ticker-dot"></span>Advanced Physiotherapy &amp; Rehab</span>
    <span class="ticker-item"><span class="ticker-dot"></span>Painless Recovery Protocol</span>
  </div>
</div>

<!-- STATS DASHBOARD -->
<!-- <div class="stats">
  <div class="stat-card">
    <div class="num">5000<span>+</span></div>
    <p>Patients Realigned</p>
  </div>
  <div class="stat-card">
    <div class="num">15<span>+</span></div>
    <p>Years of Clinical Excellence</p>
  </div>
  <div class="stat-card">
    <div class="num">98<span>%</span></div>
    <p>Patient Satisfaction Rate</p>
  </div>
  <div class="stat-card">
    <div class="num">24<span>/7</span></div>
    <p>Emergency &amp; Trauma Care</p>
  </div>
</div> -->

<!-- ACCREDITATIONS & HIGHLIGHTS -->
<div class="highlight-band">
  <div class="highlight-item"><span>🏥</span> NABH Accredited Standards</div>
  <div class="highlight-item"><span>🔬</span> Ultra-Modern Modular Robotic OTs</div>
  <div class="highlight-item"><span>💊</span> Zero-Pain Post-Op Protocols</div>
  <div class="highlight-item"><span>👨‍⚕️</span> Internationally Certified Surgeons</div>
</div>





<!-- FULLY RESPONSIVE AUTO-SCROLLING OFFERS CAROUSEL -->
<style>
  .offers-slide {
    flex: 0 0 calc(33.333% - 13.33px);
    box-sizing: border-box;
    transition: transform 0.4s ease;
  }
  .offers-slide:hover {
    transform: translateY(-4px);
  }
  @media (max-width: 1023px) {
    .offers-slide {
      flex: 0 0 calc(50% - 10px) !important;
    }
  }
  @media (max-width: 767px) {
    .offers-slide {
      flex: 0 0 100% !important;
    }
  }
</style>

<section class="section" style="padding: 60px 0; background: var(--offwhite); overflow: hidden; border-bottom: 1px solid var(--light);">
  <!-- <div class="section-header" style="text-align: center; margin-bottom: 30px;">
    <div class="section-label">Exclusive Clinical Offers</div>
    <h2 class="section-title">Special <span>Offers &amp; Packages</span></h2>
    <p class="section-sub" style="margin: 0 auto; max-width: 650px;">Explore our ongoing robotic joint surgery consultations, health packages, and diagnostic savings.</p>
  </div> -->
  
  <div class="offers-carousel-container" style="position: relative; padding: 0 20px; overflow: hidden;">
    <div class="offers-carousel-track" id="offersTrack" style="display: flex; gap: 20px; transition: transform 0.5s cubic-bezier(0.25, 1, 0.5, 1); width: 100%; align-items: stretch;">
      <!-- Slide 1: Slogan Banner Image -->
      <div class="offers-slide">
        <div style="width: 100%; height: 100%; border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(6,18,36,0.06); background: white;">
          <img src="images/robo 01.jpeg" alt="Special Offer 1" style="width: 100%; height: 100%; object-fit: contain; display: block;">
        </div>
      </div>
      <!-- Slide 2: Autoplay Robotic Surgery Video -->
      <div class="offers-slide">
        <div style="width: 100%; height: 100%; border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(6,18,36,0.06); background: black;">
          <video autoplay loop muted playsinline poster="images/OT.jpeg" style="width: 100%; height: 100%; object-fit: contain; display: block;">
            <source src="videos/01.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
          </video>
        </div>
      </div>
      <!-- Slide 4: Autoplay Facility Walkthrough Video -->
      <div class="offers-slide">
        <div style="width: 100%; height: 100%; border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(6,18,36,0.06); background: black;">
          <video autoplay loop muted playsinline poster="images/building1.jpeg" style="width: 100%; height: 100%; object-fit: contain; display: block;">
            <source src="videos/02.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
          </video>
        </div>
      </div>
    </div>
    
    <!-- Navigation Arrows -->
    <div style="display: flex; justify-content: center; gap: 16px; margin-top: 30px;">
      <button class="slider-arrow" id="prevOffer" style="width: 48px; height: 48px; border-radius: 50%; border: 1px solid var(--light); background: white; cursor: pointer; color: var(--navy); display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(6,18,36,0.05);" onmouseover="this.style.background='var(--teal)'; this.style.color='white'; this.style.borderColor='var(--teal)';" onmouseout="this.style.background='white'; this.style.color='var(--navy)'; this.style.borderColor='var(--light)';"><i class="fa-solid fa-arrow-left"></i></button>
      <button class="slider-arrow" id="nextOffer" style="width: 48px; height: 48px; border-radius: 50%; border: 1px solid var(--light); background: white; cursor: pointer; color: var(--navy); display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(6,18,36,0.05);" onmouseover="this.style.background='var(--teal)'; this.style.color='white'; this.style.borderColor='var(--teal)';" onmouseout="this.style.background='white'; this.style.color='var(--navy)'; this.style.borderColor='var(--light)';"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
      const track = document.getElementById('offersTrack');
      const prevBtn = document.getElementById('prevOffer');
      const nextBtn = document.getElementById('nextOffer');
      
      let slideInterval;
      let isAnimating = false;
      
      function nextSlide() {
          if (isAnimating) return;
          isAnimating = true;
          
          const first = track.firstElementChild;
          const slideWidth = first.getBoundingClientRect().width;
          
          track.style.transition = 'transform 0.5s cubic-bezier(0.25, 1, 0.5, 1)';
          track.style.transform = `translateX(-${slideWidth + 20}px)`;
          
          setTimeout(() => {
              track.style.transition = 'none';
              track.appendChild(first);
              track.style.transform = 'translateX(0)';
              isAnimating = false;
          }, 500);
      }
      
      function prevSlide() {
          if (isAnimating) return;
          isAnimating = true;
          
          const last = track.lastElementChild;
          const slideWidth = last.getBoundingClientRect().width;
          
          track.style.transition = 'none';
          track.insertBefore(last, track.firstElementChild);
          track.style.transform = `translateX(-${slideWidth + 20}px)`;
          
          // Force reflow
          void track.offsetWidth;
          
          track.style.transition = 'transform 0.5s cubic-bezier(0.25, 1, 0.5, 1)';
          track.style.transform = 'translateX(0)';
          
          setTimeout(() => {
              isAnimating = false;
          }, 500);
      }
      
      function startAutoplay() {
          stopAutoplay();
          slideInterval = setInterval(nextSlide, 4000);
      }
      
      function stopAutoplay() {
          if (slideInterval) {
              clearInterval(slideInterval);
          }
      }
      
      if (track && prevBtn && nextBtn) {
          nextBtn.addEventListener('click', function(e) {
              e.preventDefault();
              nextSlide();
              startAutoplay();
          });
          
          prevBtn.addEventListener('click', function(e) {
              e.preventDefault();
              prevSlide();
              startAutoplay();
          });
          
          track.addEventListener('mouseenter', stopAutoplay);
          track.addEventListener('mouseleave', startAutoplay);
          
          startAutoplay();
      }
  });
</script>

<!-- ROBOTIC TECHNOLOGY INTRO SECTION -->
<section class="section">
  <div class="why-grid">
    <div class="scan-container">
      <img src="images/OT.jpeg" alt="Goyal Robotic Surgical OT" style="width:100%; height:100%; object-fit:cover; display:block;">
    </div>
    <div>
      <div class="section-label">State-of-the-Art Technology</div>
      <h2 class="section-title">The Robotic Advantage is <span>Clear</span></h2>
      <p style="margin-bottom: 24px; color: var(--gray); font-size:15px; line-height: 1.7;">Goyal Hospital's fully active robotic surgery system is the ultimate leap forward in orthopaedic operations. Unlike conventional manual procedures which rely purely on standard instruments, our robotic technology provides structural virtual boundaries and sub-millimeter precision tailored to the patient’s exact bone morphology.</p>
      
      <div class="why-points">
        <div class="why-point">
          <div class="why-point-icon"><i class="fa-solid fa-compass" style="color:var(--blue);"></i></div>
          <div class="why-point-text">
            <h4>Pre-operative 3D Planning</h4>
            <p>CT scan slices generate a exact 3D virtual copy of your joint, letting the surgeon plan the perfect implant fit before the operation even begins.</p>
          </div>
        </div>
        <div class="why-point">
          <div class="why-point-icon"><i class="fa-solid fa-shield-halved" style="color:var(--teal);"></i></div>
          <div class="why-point-text">
            <h4>Virtual Safety Barriers</h4>
            <p>The surgical robotic arm respects strict safety boundaries, protecting critical nerves, tendons, and surrounding soft tissues from accidental damage.</p>
          </div>
        </div>
        <div class="why-point">
          <div class="why-point-icon"><i class="fa-solid fa-heart" style="color:var(--red);"></i></div>
          <div class="why-point-text">
            <h4>Extended Implant Lifespan</h4>
            <p>Perfect placement results in highly balanced joint alignment, reducing friction and extending the lifetime of the artificial joint.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SERVICES SUMMARY SECTION -->
<section class="section section-alt" id="services">
  <div class="section-header" style="text-align: center;">
    <div class="section-label">Our Clinical Specialties</div>
    <h2 class="section-title">Specialised Orthopaedic <span>Care</span></h2>
    <p class="section-sub" style="margin: 0 auto;">From advanced robotic joint reconstruction to complex high-impact trauma restoration, we combine high clinical capability with gentle patient comfort.</p>
  </div>
  
  <div class="services-grid">
    <!-- Robotic Joint replacement -->
    <div class="service-card robotic-specialty" onclick="window.location.href='robotic-knee.php'" style="cursor: pointer;">
      <div class="robotic-badge"><i class="fa-solid fa-microchip"></i> Robotic Enhanced</div>
      <div class="service-icon"><i class="fa-solid fa-microchip" style="color: var(--teal);"></i></div>
      <h3>Robotic Knee Replacement</h3>
      <p>Completely zero-error bone cuts using robotic precision. Restores natural movement, minimizes soft tissue injury, and enables faster discharge.</p>
      <a href="robotic-knee.php" class="service-link">Learn About Robotics →</a>
    </div>

    <!-- Spine surgery -->
    <div class="service-card" onclick="window.location.href='spine-care.php'" style="cursor: pointer;">
      <div class="service-icon"><i class="fa-solid fa-bone" style="color: var(--blue);"></i></div>
      <h3>Spine Surgery</h3>
      <p>Micro-endoscopic decompression, spinal fusion, and herniated disc repairs using computer guidance for high spinal nerve protection.</p>
      <a href="spine-care.php" class="service-link">View Spine Care →</a>
    </div>

    <!-- Hip replacement -->
    <div class="service-card robotic-specialty" onclick="window.location.href='robotic-hip.php'" style="cursor: pointer;">
      <div class="robotic-badge"><i class="fa-solid fa-microchip"></i> Robotic Enhanced</div>
      <div class="service-icon"><i class="fa-solid fa-person-running" style="color: var(--teal);"></i></div>
      <h3>Robotic Hip Replacement</h3>
      <p>Robotic-guided acetabular cup orientation and exact leg length calibration to prevent post-surgical hip dislocations.</p>
      <a href="robotic-hip.php" class="service-link">Learn About Robotics →</a>
    </div>

    <!-- Arthroscopy -->
    <div class="service-card" onclick="window.location.href='joint-scope.php'" style="cursor: pointer;">
      <div class="service-icon"><i class="fa-solid fa-eye" style="color: var(--blue);"></i></div>
      <h3>Arthroscopy (Keyhole)</h3>
      <p>Minimally invasive diagnostic and restorative treatment of shoulder rotator cuff tears, ACL/MCL ligament ruptures, and meniscus tears.</p>
      <a href="joint-scope.php" class="service-link">View Joint Scope →</a>
    </div>

    <!-- Trauma & Fracture -->
    <div class="service-card" onclick="window.location.href='emergency-care.php'" style="cursor: pointer;">
      <div class="service-icon"><i class="fa-solid fa-kit-medical" style="color: var(--blue);"></i></div>
      <h3>Trauma &amp; Fracture Care</h3>
      <p>Expert 24/7 trauma emergency care managing poly-trauma accidents, complex joint fractures, pelvic-acetabular injuries, and non-unions.</p>
      <a href="emergency-care.php" class="service-link">View Emergency Care →</a>
    </div>

    <!-- Physiotherapy -->
    <div class="service-card" onclick="window.location.href='rehabilitation.php'" style="cursor: pointer;">
      <div class="service-icon"><i class="fa-solid fa-hand-holding-hand" style="color: var(--blue);"></i></div>
      <h3>Physiotherapy &amp; Rehab</h3>
      <p>Dedicated post-surgical recovery program utilizing electromagnetic clinical therapy, ultrasound, and exercises to maximize mobility.</p>
      <a href="rehabilitation.php" class="service-link">Explore Rehabilitation →</a>
    </div>
  </div>
</section>

<!-- DOCTORS HIGHLIGHT SECTION -->
<section class="section" id="doctors">
  <div class="section-header" style="text-align: center;">
    <div class="section-label">Medical Staff Leaders</div>
    <h2 class="section-title">Robotic Surgery <span>Experts</span></h2>
    <p class="section-sub" style="margin: 0 auto;">Our medical personnel hold decades of clinical experience combined with certified international training on robotic surgery systems.</p>
  </div>
  
  <div class="doctors-grid">
    <!-- Dr Aman Goyal -->
    <div class="doctor-card certified-robotic">
      <div class="doctor-photo" style="height:260px; overflow:hidden;"><img src="<?php echo get_doctor_image('DrAmanGoyal.jpeg'); ?>" alt="Dr. Aman Goyal"></div>
      <div class="doctor-info">
        <h3>Dr. Aman Goyal</h3>
        <div class="specialty"><i class="fa-solid fa-certificate"></i> Senior Robotic Joint Surgeon</div>
        <p>MBBS (Gold Medalist), MS (Orthopaedic Surgery), DNB (Gold Medalist), M.R.C.S. (Glasgow), M.N.A.M.S. — 15+ years of clinical tenure. Extensively trained in fully active robotic joint replacement and revision arthroplasties.</p>
        <div class="doctor-tags">
          <span class="tag robotic-tag">Robotic Arthroplasty</span>
          <span class="tag">Knee Joint</span>
          <span class="tag">Revision Surgery</span>
        </div>
        <a href="contact.php" class="btn-consult">Book Consultation</a>
      </div>
    </div>
    
    <!-- Dr Smita Goyal -->
    <div class="doctor-card">
      <div class="doctor-photo" style="height:260px; overflow:hidden;"><img src="<?php echo get_doctor_image('DrSmitaGoyal.jpg'); ?>" alt="Dr. Smita Goyal"></div>
      <div class="doctor-info">
        <h3>Dr. Smita Goyal</h3>
        <div class="specialty"><i class="fa-solid fa-user-doctor"></i> Obs &amp; Gyn</div>
        <p>MBBS, DGO, DNB — Dr. Smita Goyal provides expert care in Obstetrics and Gynaecology, specializing in high-risk pregnancy management.</p>
        <div class="doctor-tags">
          <span class="tag">Obs &amp; Gyn</span>
          <span class="tag">Women's Health</span>
          <span class="tag">Antenatal Care</span>
        </div>
        <a href="contact.php" class="btn-consult">Book Consultation</a>
      </div>
    </div>

    <!-- Dr. Usha Goyal -->
    <div class="doctor-card">
      <div class="doctor-photo" style="height:260px; overflow:hidden;"><img src="<?php echo get_doctor_image('DrUshaGoyal.jpg'); ?>" alt="Dr. Usha Goyal"></div>
      <div class="doctor-info">
        <h3>Dr. Usha Goyal</h3>
        <div class="specialty"><i class="fa-solid fa-desktop"></i> Ultrasound Specialist</div>
        <p>MBBS — Dr. Usha Goyal brings precision and extensive clinical expertise as our dedicated Ultrasound Specialist, providing high-quality diagnostic imaging.</p>
        <div class="doctor-tags">
          <span class="tag">Ultrasound</span>
          <span class="tag">Diagnostics</span>
          <span class="tag">Sonography</span>
        </div>
        <a href="contact.php" class="btn-consult">Book Consultation</a>
      </div>
    </div>
  </div>
  
  <div style="text-align: center; margin-top: 40px;">
    <a href="doctors.php" class="btn-primary" style="background:linear-gradient(135deg, var(--blue), var(--sky)); box-shadow: 0 4px 15px rgba(12, 90, 222, 0.2);"><i class="fa-solid fa-user-doctor"></i> View Complete Medical Team</a>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="section section-alt" style="overflow: hidden;">
  <div class="section-header" style="text-align: center;">
    <div class="section-label">Patient Stories</div>
    <h2 class="section-title">Mobility Restored, <span>Lives Renewed</span></h2>
    <p class="section-sub" style="margin: 0 auto;">Read how our state-of-the-art robotic surgical system changed the quality of life for our orthopaedic patients.</p>
  </div>
  
  <div class="testimonials-slider-container" id="testimonialsSlider">
    <div class="testimonials-wrapper" id="testimonialsWrapper">
      <!-- Slide 1 -->
      <div class="testimonial-slide">
        <div class="testimonial" style="margin: 0 auto; max-width: 780px; background: white; border: 1px solid var(--light); border-radius: var(--border-radius); padding: 40px; box-shadow: 0 10px 30px rgba(6,18,36,0.03);">
          <div class="stars" style="margin-bottom:16px; color: var(--gold);"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
          <p style="font-size: 15.5px; font-style: italic; line-height: 1.8; color: var(--gray); margin-bottom: 24px;">"I suffered from severe knee arthritis for 6 years and dreaded surgery. Dr. Aman Goyal recommended robotic knee replacement. I was walking on my own feet within 18 hours of surgery! Totally pain-free now."</p>
          <div class="testimonial-author" style="display: flex; align-items: center; gap: 14px;">
            <div class="author-avatar" style="width: 44px; height: 44px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 16px; background: var(--blue); color: white;">R</div>
            <div class="author-info">
              <strong style="display: block; font-size: 15px; color: var(--navy);">Ramesh Sharma</strong>
              <span style="font-size: 12px; color: var(--gray);">Robotic Knee Patient</span>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Slide 2 -->
      <div class="testimonial-slide">
        <div class="testimonial" style="margin: 0 auto; max-width: 780px; background: white; border: 1px solid var(--light); border-radius: var(--border-radius); padding: 40px; box-shadow: 0 10px 30px rgba(6,18,36,0.03);">
          <div class="stars" style="margin-bottom:16px; color: var(--gold);"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
          <p style="font-size: 15.5px; font-style: italic; line-height: 1.8; color: var(--gray); margin-bottom: 24px;">"A spinal stenosis had severely limited my walking distance. Dr. Sneha Goyal performed a micro-decompression surgery. The recovery was remarkably painless. Exceptional standard of medical care."</p>
          <div class="testimonial-author" style="display: flex; align-items: center; gap: 14px;">
            <div class="author-avatar" style="width: 44px; height: 44px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 16px; background: var(--teal); color: var(--navy);">P</div>
            <div class="author-info">
              <strong style="display: block; font-size: 15px; color: var(--navy);">Priya Verma</strong>
              <span style="font-size: 12px; color: var(--gray);">Micro Spine Surgery Patient</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="testimonial-slide">
        <div class="testimonial" style="margin: 0 auto; max-width: 780px; background: white; border: 1px solid var(--light); border-radius: var(--border-radius); padding: 40px; box-shadow: 0 10px 30px rgba(6,18,36,0.03);">
          <div class="stars" style="margin-bottom:16px; color: var(--gold);"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
          <p style="font-size: 15.5px; font-style: italic; line-height: 1.8; color: var(--gray); margin-bottom: 24px;">"My father underwent robotic hip replacement. The balance is so natural, and his recovery was unbelievably rapid. The pricing was transparent and Ayushman Bharat card support was extremely smooth."</p>
          <div class="testimonial-author" style="display: flex; align-items: center; gap: 14px;">
            <div class="author-avatar" style="width: 44px; height: 44px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 16px; background: var(--navy); color: white;">S</div>
            <div class="author-info">
              <strong style="display: block; font-size: 15px; color: var(--navy);">Suresh Mehta</strong>
              <span style="font-size: 12px; color: var(--gray);">Robotic Hip Patient</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Slider Controls -->
    <div class="testimonial-slider-controls">
      <button class="slider-arrow" id="prevSlide" aria-label="Previous Testimonial"><i class="fa-solid fa-arrow-left"></i></button>
      <div class="slider-dots" id="sliderDots">
        <span class="slider-dot active" data-index="0"></span>
        <span class="slider-dot" data-index="1"></span>
        <span class="slider-dot" data-index="2"></span>
      </div>
      <button class="slider-arrow" id="nextSlide" aria-label="Next Testimonial"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
  </div>
</section>

<!-- Carousel Logic Script -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
      const wrapper = document.getElementById('testimonialsWrapper');
      const dots = document.querySelectorAll('#sliderDots .slider-dot');
      const prevBtn = document.getElementById('prevSlide');
      const nextBtn = document.getElementById('nextSlide');
      const container = document.getElementById('testimonialsSlider');
      
      let currentIndex = 0;
      const totalSlides = dots.length;
      let slideInterval;
      
      function updateSlider() {
          wrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
          dots.forEach((dot, index) => {
              if (index === currentIndex) {
                  dot.classList.add('active');
              } else {
                  dot.classList.remove('active');
              }
          });
      }
      
      function nextSlide() {
          currentIndex = (currentIndex + 1) % totalSlides;
          updateSlider();
      }
      
      function prevSlide() {
          currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
          updateSlider();
      }
      
      function startAutoplay() {
          stopAutoplay();
          slideInterval = setInterval(nextSlide, 5000);
      }
      
      function stopAutoplay() {
          if (slideInterval) {
              clearInterval(slideInterval);
          }
      }
      
      if (prevBtn && nextBtn && wrapper) {
          nextBtn.addEventListener('click', function() {
              nextSlide();
              startAutoplay();
          });
          
          prevBtn.addEventListener('click', function() {
              prevSlide();
              startAutoplay();
          });
          
          dots.forEach(dot => {
              dot.addEventListener('click', function() {
                  currentIndex = parseInt(this.getAttribute('data-index'));
                  updateSlider();
                  startAutoplay();
              });
          });
          
          container.addEventListener('mouseenter', stopAutoplay);
          container.addEventListener('mouseleave', startAutoplay);
          
          startAutoplay();
      }
  });
</script>

<!-- INSURANCE & TPA PARTNERS TICKER -->
<section class="section" style="padding: 60px 0; background: #ffffff; border-top: 1px solid var(--light); overflow: hidden;">
  <div class="section-header" style="text-align: center; margin-bottom: 40px;">
    <h2 class="section-title" style="color: #9b1c1c;">Our <span>Partners</span></h2>
  </div>
  
  <style>
    @keyframes tpaMarquee {
      0% { transform: translateX(0); }
      100% { transform: translateX(calc(-50% - 20px)); } /* Half of total width + half of gap */
    }
    .tpa-ticker-container {
      width: 100%;
      overflow: hidden;
      white-space: nowrap;
      position: relative;
    }
    .tpa-ticker-container::before,
    .tpa-ticker-container::after {
      content: '';
      position: absolute;
      top: 0;
      width: 150px;
      height: 100%;
      z-index: 2;
      pointer-events: none;
    }
    .tpa-ticker-container::before {
      left: 0;
      background: linear-gradient(to right, #ffffff, rgba(255,255,255,0));
    }
    .tpa-ticker-container::after {
      right: 0;
      background: linear-gradient(to left, #ffffff, rgba(255,255,255,0));
    }
    .tpa-ticker-track {
      display: inline-flex;
      gap: 40px;
      animation: tpaMarquee 35s linear infinite;
    }
    .tpa-ticker-track:hover {
      animation-play-state: paused;
    }
    .tpa-logo-item {
      flex: 0 0 auto;
      width: 180px;
      height: 90px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 10px;
      background: #fff;
      border-radius: 8px;
    }
    .tpa-logo-item img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
      filter: grayscale(15%);
      transition: filter 0.3s ease, transform 0.3s ease;
      mix-blend-mode: multiply;
    }
    .tpa-logo-item:hover img {
      filter: grayscale(0%);
      transform: scale(1.08);
    }
  </style>

  <div class="tpa-ticker-container">
    <div class="tpa-ticker-track">
      <?php
      $tpa_dir = 'images/TPA-LOGO';
      $tpa_html = '';
      if (is_dir($tpa_dir)) {
          $files = scandir($tpa_dir);
          foreach($files as $file) {
              if ($file !== '.' && $file !== '..' && $file !== '.DS_Store') {
                  $tpa_html .= '<div class="tpa-logo-item">';
                  $tpa_html .= '<img src="' . $tpa_dir . '/' . htmlspecialchars($file) . '" alt="TPA Insurance Partner">';
                  $tpa_html .= '</div>';
              }
          }
      }
      // Output the logos twice to create a seamless infinite loop
      echo $tpa_html;
      echo $tpa_html;
      ?>
    </div>
  </div>
</section>

<!-- CONTACT & IMMEDIATE APPOINTMENT BOOKING FORM -->
<section class="contact-section">
  <div class="contact-info">
    <div class="section-label">Book Consultation</div>
    <h2 class="section-title">Reclaim Your Pain-Free <span>Active Life</span></h2>
    <p>Don't let chronic joint, spine, or knee pain hold you back. Send us your contact details and requested surgical specialty, and our clinical scheduling office will secure your appointment slot.</p>
    
    <div class="contact-details">
      <div class="contact-item">
        <div class="contact-item-icon"><i class="fa-solid fa-location-dot"></i></div>
        <div class="contact-item-text">
          <strong>Hospital Address</strong>
          <span>Near Bus Stand, Main Road, Goyal Robotic Hospital, Dist.</span>
        </div>
      </div>
      <div class="contact-item">
        <div class="contact-item-icon"><i class="fa-solid fa-phone-volume"></i></div>
        <div class="contact-item-text">
          <strong>Phone &amp; WhatsApp Support</strong>
          <span>+91-9876543210</span>
        </div>
      </div>
      <div class="contact-item">
        <div class="contact-item-icon"><i class="fa-solid fa-envelope"></i></div>
        <div class="contact-item-text">
          <strong>Clinical Email Contact</strong>
          <span>info@goyalrobotichospital.com</span>
        </div>
      </div>
    </div>
  </div>
  
  <div class="contact-form" id="book-now">
    <h3>Request Appointment</h3>
    <form action="send_email.php" method="POST">
      <div class="form-row">
        <div class="form-group">
          <label for="first_name">First Name <span style="color:var(--red);">*</span></label>
          <input type="text" id="first_name" name="first_name" placeholder="e.g. Ramesh" required>
        </div>
        <div class="form-group">
          <label for="last_name">Last Name <span style="color:var(--red);">*</span></label>
          <input type="text" id="last_name" name="last_name" placeholder="e.g. Sharma" required>
        </div>
      </div>
      
      <div class="form-group">
        <label for="phone">Phone Number <span style="color:var(--red);">*</span></label>
        <input type="tel" id="phone" name="phone" placeholder="+91-XXXXXXXXXX" required>
      </div>
      
      <div class="form-group">
        <label for="service">Service Required <span style="color:var(--red);">*</span></label>
        <select id="service" name="service" required>
          <option value="">-- Choose a Clinical Specialty --</option>
          <option value="Robotic Knee Replacement">Robotic Knee Replacement</option>
          <option value="Robotic Hip Replacement">Robotic Hip Replacement</option>
          <option value="Advanced Spine Surgery">Advanced Spine Surgery</option>
          <option value="Minimally Invasive Arthroscopy">Minimally Invasive Arthroscopy (Keyhole)</option>
          <option value="Complex Trauma &amp; Fractures">Complex Trauma &amp; Fractures</option>
          <option value="Advanced Physiotherapy Program">Advanced Physiotherapy Program</option>
          <option value="General Orthopaedic Consultation">General Orthopaedic Consultation</option>
        </select>
      </div>
      
      <div class="form-group">
        <label for="message">Message / Symptoms (Optional)</label>
        <textarea id="message" name="message" placeholder="Please describe your joint stiffness, pain duration, or specific clinical query..."></textarea>
      </div>
      
      <button type="submit" class="btn-submit"><i class="fa-solid fa-paper-plane"></i> Submit Request →</button>
    </form>
  </div>
</section>

<?php
include 'includes/footer.php';
?>
