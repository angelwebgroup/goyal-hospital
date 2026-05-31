<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div class="footer-brand">
      <a href="index.php" class="logo" style="margin-bottom: 20px; display: inline-flex; align-items: center; gap: 12px; text-decoration: none;">
        <!-- <img src="images/logo.jpg" alt="Goyal Robotic Hospital Logo" style="height: 52px; width: auto; max-height: 52px; object-fit: contain; border-radius: 6px; background: white; padding: 2px;"> -->
        <div class="logo-text">
          <h1 style="color: white; font-family: 'Playfair Display', serif; font-size: 22px; font-weight: 700; margin: 0; line-height: 1.1;">Goyal Hospital</h1>
          <p style="color: var(--teal); font-size: 9px; text-transform: uppercase; letter-spacing: 2px; font-weight: 700; margin: 2px 0 0 0;">Robotic Surgery &amp; Trauma Centre</p>
        </div>
      </a>
      <p>Recognized as the best hospital in Kosi Kalan, Mathura, Goyal Hospital is dedicated to restoring painless mobility through state-of-the-art robotic surgical techniques and compassionate patient care.</p>
      <div style="margin: 22px 0;">
        <a href="https://www.google.com/maps/place/Goyal+Hospital/@27.7897675,77.4412,17z/data=!4m16!1m7!3m6!1s0x39733c43d0cb00c7:0xb07f522fa1890eb1!2sGoyal+Hospital!8m2!3d27.7897675!4d77.4412!16s%2Fg%2F12m956l83!3m7!1s0x39733c43d0cb00c7:0xb07f522fa1890eb1!8m2!3d27.7897675!4d77.4412!9m1!1b1!16s%2Fg%2F12m956l83?entry=ttu&g_ep=EgoyMDI2MDUxMy4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener" class="btn-primary" style="background: linear-gradient(135deg, var(--teal), var(--blue)); box-shadow: 0 4px 15px rgba(0, 235, 212, 0.3); padding: 10px 20px; font-size: 13px; text-decoration: none; border-radius: 50px; display: inline-flex; align-items: center; gap: 8px; color: white; font-weight: 700; transition: transform 0.3s ease;">
          <i class="fa-solid fa-star" style="color: var(--gold);"></i> Write a Review for Us
        </a>
      </div>
      <div class="social-links">
        <a class="social-btn" href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
        <a class="social-btn" href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
        <a class="social-btn" href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
        <a class="social-btn" href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
      </div>
    </div>
    
    <div class="footer-col">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="robotic-surgery.php">Robotic Surgery</a></li>
        <li><a href="services.php">Specialties</a></li>
        <li><a href="doctors.php">Our Doctors</a></li>
        <li><a href="photo-gallery.php">Photo Gallery</a></li>
        <li><a href="video-gallery.php">Video Gallery</a></li>
        <li><a href="contact.php">Contact &amp; Support</a></li>
      </ul>
    </div>
    
    <div class="footer-col">
      <h4>Specialties</h4>
      <ul>
        <li><a href="robotic-surgery.php">Robotic Joint Surgery</a></li>
        <li><a href="robotic-knee.php">Knee Replacement</a></li>
        <li><a href="robotic-hip.php">Hip Replacement</a></li>
        <li><a href="spine-care.php">Spine Procedures</a></li>
        <li><a href="joint-scope.php">Arthroscopic Surgery</a></li>
        <li><a href="rehabilitation.php">Physiotherapy Unit</a></li>
      </ul>
    </div>
    
    <div class="footer-col">
      <h4>Recognitions</h4>
      <ul>
        <li><a href="#"><i class="fa-solid fa-medal" style="color:var(--gold);"></i> NABH Accredited</a></li>
        <li><a href="#"><i class="fa-solid fa-microscope" style="color:var(--teal);"></i> Modular Robotic OT</a></li>
        <li><a href="#"><i class="fa-solid fa-heart-pulse" style="color:var(--red);"></i> Ayushman Bharat (PM-JAY)</a></li>
        <li><a href="#"><i class="fa-solid fa-shield-halved" style="color:var(--sky);"></i> Cashless Mediclaim Panel</a></li>
        <li><a href="#"><i class="fa-solid fa-briefcase-medical"></i> ESIC Approved Facility</a></li>
      </ul>
    </div>
  </div>
  
  <div class="footer-bottom">
    <p>&copy; <?php echo date("Y"); ?> Goyal Robotic Hospital. All Rights Reserved. Designed by <a href="https://angelwebgroup.in" style="color:var(--teal); font-weight:700;">Angel Web Group</a></p>
    <div class="footer-bottom-links">
      <a href="#">Privacy Policy</a>
      <a href="#">Terms &amp; Conditions</a>
      <a href="#">Disclaimer</a>
    </div>
  </div>
</footer>

<!-- Interactive Mobile Nav Drawer Script -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
      const mobileToggle = document.getElementById('mobile-toggle');
      const navbar = document.getElementById('navbar');
      
      if (mobileToggle && navbar) {
          mobileToggle.addEventListener('click', function(e) {
              navbar.classList.toggle('active');
              // Toggle icon between bars and times (close)
              const icon = mobileToggle.querySelector('i');
              if (navbar.classList.contains('active')) {
                  icon.classList.remove('fa-bars');
                  icon.classList.add('fa-xmark');
              } else {
                  icon.classList.remove('fa-xmark');
                  icon.classList.add('fa-bars');
              }
              e.stopPropagation();
          });
          
          // Close nav when clicking anywhere else
          document.addEventListener('click', function(e) {
              if (!navbar.contains(e.target) && !mobileToggle.contains(e.target)) {
                  navbar.classList.remove('active');
                  const icon = mobileToggle.querySelector('i');
                  icon.classList.remove('fa-xmark');
                  icon.classList.add('fa-bars');
              }
          });
      }
  });
</script>
</body>
</html>
