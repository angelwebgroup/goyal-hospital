<?php
$page_title = "Book an Appointment – Goyal Robotic Hospital | Contact Us";
$active_page = "contact";
include 'includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="hero-grid-lines"></div>
  <h2>Contact &amp; Bookings</h2>
  <p>Reach Out to Our Clinical Scheduling Desk to Secure Your Appointment with Our Robotic Specialists.</p>
</section>

<!-- CONTACT GRID & FORM SECTION -->
<section class="section" style="background: var(--offwhite);">
  <div class="why-grid" style="align-items: start;">
    
    <!-- Contact Info Cards -->
    <div style="display:flex; flex-direction:column; gap:24px;">
      
      <!-- Contact card -->
      <div style="background:white; border-radius:var(--border-radius); border:1px solid var(--light); padding:40px; box-shadow:0 10px 30px rgba(6, 18, 36, 0.03);">
        <div class="section-label">Connect Directly</div>
        <h3 style="font-family:'Playfair Display',serif; font-size:26px; margin-bottom:24px; color:var(--navy);">Clinic Contact Channels</h3>
        
        <div class="contact-details" style="display:flex; flex-direction:column; gap:24px; margin-bottom: 28px;">
          <!-- Address -->
          <div class="contact-item">
            <div class="contact-item-icon" style="background:rgba(12, 90, 222, 0.08); color:var(--blue);"><i class="fa-solid fa-location-dot"></i></div>
            <div class="contact-item-text">
              <strong style="color:var(--navy);">Hospital Address</strong>
              <span style="color:var(--gray);">Thana Road, Infront of Nagar Palika, Kosi Kalan, Chhata (Mathura)</span>
            </div>
          </div>
          
          <!-- Helpline -->
          <div class="contact-item">
            <div class="contact-item-icon" style="background:rgba(255, 59, 48, 0.08); color:var(--red);"><i class="fa-solid fa-phone-volume"></i></div>
            <div class="contact-item-text">
              <strong style="color:var(--navy);">24/7 Emergency Trauma Helpline</strong>
              <span style="color:var(--red); font-weight:700;"><a href="tel:+917900299245" style="color:var(--red); text-decoration:none;">+91-7900299245</a></span>
            </div>
          </div>

          <!-- Appointments -->
          <div class="contact-item">
            <div class="contact-item-icon" style="background:rgba(0, 235, 212, 0.08); color:var(--teal);"><i class="fa-brands fa-whatsapp"></i></div>
            <div class="contact-item-text">
              <strong style="color:var(--navy);">OPD Bookings (WhatsApp)</strong>
              <span style="color:var(--gray);"><a href="https://wa.me/917900299245" target="_blank" style="color:var(--blue); text-decoration:none; font-weight:600;">+91-7900299245</a></span>
            </div>
          </div>

          <!-- Email -->
          <div class="contact-item">
            <div class="contact-item-icon" style="background:rgba(12, 90, 222, 0.08); color:var(--blue);"><i class="fa-solid fa-envelope"></i></div>
            <div class="contact-item-text">
              <strong style="color:var(--navy);">Official Clinical Email</strong>
              <span style="color:var(--gray);"><a href="mailto:goyalhospital.kosi@gmail.com" style="color:var(--blue); text-decoration:none;">goyalhospital.kosi@gmail.com</a></span>
            </div>
          </div>
        </div>

        <!-- Google Review Button -->
        <a href="https://www.google.com/maps/place/Goyal+Hospital/@27.7897675,77.4412,17z/data=!4m16!1m7!3m6!1s0x39733c43d0cb00c7:0xb07f522fa1890eb1!2sGoyal+Hospital!8m2!3d27.7897675!4d77.4412!16s%2Fg%2F12m956l83!3m7!1s0x39733c43d0cb00c7:0xb07f522fa1890eb1!8m2!3d27.7897675!4d77.4412!9m1!1b1!16s%2Fg%2F12m956l83?entry=ttu&g_ep=EgoyMDI2MDUxMy4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener" class="btn-primary" style="background: linear-gradient(135deg, var(--teal), var(--blue)); box-shadow: 0 4px 15px rgba(0, 235, 212, 0.2); padding: 14px 24px; font-size: 13.5px; text-decoration: none; border-radius: 50px; display: inline-flex; align-items: center; justify-content: center; gap: 8px; color: white; font-weight: 700; transition: transform 0.3s ease; width: 100%; border: none;">
          <i class="fa-solid fa-star" style="color: var(--gold);"></i> Write a Review for Us on Google Maps
        </a>
      </div>
      
      <!-- OPD timings card -->
      <div style="background:linear-gradient(135deg, var(--navy), #061830); border-radius:var(--border-radius); padding:40px; color:white; border:1px solid rgba(0,235,212,0.1);">
        <h4 style="font-family:'Playfair Display',serif; font-size:20px; color:var(--teal); margin-bottom:16px;"><i class="fa-solid fa-clock"></i> OPD Consulting Hours</h4>
        <table style="width:100%; border-collapse:collapse; font-size:13.5px; color:rgba(255,255,255,0.75);">
          <tr style="border-bottom:1px solid rgba(255,255,255,0.1);">
            <td style="padding:10px 0; font-weight:600;">Monday – Saturday:</td>
            <td style="padding:10px 0; text-align:right; color:white;">9:00 AM – 8:00 PM</td>
          </tr>
          <tr style="border-bottom:1px solid rgba(255,255,255,0.1);">
            <td style="padding:10px 0; font-weight:600;">Sunday Emergency:</td>
            <td style="padding:10px 0; text-align:right; color:var(--red); font-weight:700;">24/7 Trauma Service Only</td>
          </tr>
          <tr>
            <td style="padding:10px 0; font-weight:600;">Ambulance Dispatch:</td>
            <td style="padding:10px 0; text-align:right; color:var(--teal); font-weight:700;">Active 24 Hours</td>
          </tr>
        </table>
      </div>

    </div>

    <!-- Booking Form -->
    <div class="contact-form" style="box-shadow: 0 15px 40px rgba(6, 18, 36, 0.05); border: 1px solid var(--light);">
      <h3 style="font-family:'Playfair Display',serif; font-size:26px; margin-bottom:12px; color:var(--navy);">Schedule a Consultation</h3>
      <p style="color:var(--gray); font-size:14px; margin-bottom:28px; line-height:1.6;">Fill out the form completely. Submissions are securely processed and immediately emailed to our hospital’s administrative desk at <strong>goyalhospital.kosi@gmail.com</strong>.</p>
      
      <form action="send_email.php" method="POST" id="appointmentForm">
        <div class="form-row">
          <div class="form-group">
            <label for="first_name">First Name <span style="color:var(--red);">*</span></label>
            <input type="text" id="first_name" name="first_name" placeholder="Ramesh" required>
          </div>
          <div class="form-group">
            <label for="last_name">Last Name <span style="color:var(--red);">*</span></label>
            <input type="text" id="last_name" name="last_name" placeholder="Sharma" required>
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group">
            <label for="phone">Phone Number <span style="color:var(--red);">*</span></label>
            <input type="tel" id="phone" name="phone" placeholder="+91-XXXXXXXXXX" required>
          </div>
          <div class="form-group">
            <label for="email">Email Address (Optional)</label>
            <input type="email" id="email" name="email" placeholder="ramesh@gmail.com">
          </div>
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
          <label for="message">Describe Symptoms / Message (Optional)</label>
          <textarea id="message" name="message" placeholder="Provide any details about knee swelling, back pain duration, previous diagnosis, or preferred timings..."></textarea>
        </div>
        
        <button type="submit" class="btn-submit" style="padding: 16px;"><i class="fa-solid fa-paper-plane"></i> Secure Appointment Request</button>
      </form>
    </div>

  </div>
</section>

<!-- CLINIC MAP SHOWCASE -->
<section class="section" style="border-top:1px solid var(--light);">
  <div class="section-header" style="text-align: center; margin-bottom:40px;">
    <div class="section-label">Find Us Locally</div>
    <h2 class="section-title">Clinical Location <span>Map</span></h2>
    <p class="section-sub" style="margin: 0 auto;">Conveniently located near the central Bus Stand, making patient arrivals highly accessible.</p>
  </div>
  
  <!-- Interactive clinical map placeholder (Standard beautiful clinical location iframe) -->
  <div class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3529.649645881065!2d77.4412!3d27.789767500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39733c43d0cb00c7%3A0xb07f522fa1890eb1!2sGoyal%20Hospital!5e0!3m2!1sen!2sin!4v1779207193912!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>

<?php
include 'includes/footer.php';
?>
