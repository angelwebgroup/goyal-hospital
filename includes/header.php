<?php
/**
 * Global Header for Goyal Robotic Hospital
 * Provides standard head elements, top bar, dynamic active navigation, and brand elements.
 */
if (!isset($page_title)) {
    $page_title = "Goyal Hospital | Best Hospital in Kosi Kalan, Mathura";
}
if (!isset($active_page)) {
    $active_page = "home";
}

// Global helper function to get doctor image with fallback placeholder
if (!function_exists('get_doctor_image')) {
    function get_doctor_image($filename) {
        if (empty($filename)) {
            return 'images/doctors/placeholder-man.jpg';
        }
        
        $path = 'images/doctors/' . $filename;
        if (file_exists($path)) {
            return $path;
        }
        
        // Handle potential case mismatches (e.g. Snehagoyal.jpg vs snehagoyal.jpg)
        $alternatives = [
            strtolower($filename),
            ucfirst($filename),
            ucwords($filename)
        ];
        foreach ($alternatives as $alt) {
            $alt_path = 'images/doctors/' . $alt;
            if (file_exists($alt_path)) {
                return $alt_path;
            }
        }
        
        return 'images/doctors/placeholder-man.jpg';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="Goyal Hospital is recognized as the Best Hospital in Kosi Kalan, Mathura, offering state-of-the-art Robotic Joint Replacement, Knee Replacements, Spine Surgery, Obstetrics, and advanced trauma care.">
  
  <!-- Preconnect and Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700&family=DM+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- Centralized Style -->
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
  
  <!-- FontAwesome for medical & clinical icons (CSS only) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

  <!-- EMERGENCY BAND -->
  <!-- <div class="emergency-band">
    <span>🚨</span> <strong>24/7 Trauma &amp; Emergency Helpline:</strong> <a href="tel:+919876543210">+91-9876543210</a>
  </div> -->

  <!-- TOPBAR -->
  <div class="topbar">
    <div class="topbar-info">
      <span><i class="fa-solid fa-location-dot"></i> Near Bus Stand, Main Road, Goyal Hospital</span>
      <span><i class="fa-solid fa-clock"></i> Mon – Sat: 9:00 AM – 8:00 PM</span>
    </div>
    <div>
      <a href="tel:+919876543210"><i class="fa-solid fa-phone"></i> +91-9876543210</a>
      <a href="mailto:info@goyalrobotichospital.com" style="margin-left: 14px;"><i class="fa-solid fa-envelope"></i> info@goyalrobotichospital.com</a>
    </div>
  </div>

  <!-- HEADER / NAVIGATION -->
  <header>
    <a href="index.php" class="logo" style="display: flex; align-items: center; gap: 12px; text-decoration: none;">
      <!-- <img src="images/logo.jpg" alt="Goyal Robotic Hospital Logo" style="height: 52px; width: auto; max-height: 52px; object-fit: contain; border-radius: 6px;"> -->
      <div class="logo-text">
        <h1 style="font-family: 'Playfair Display', serif; font-size: 22px; font-weight: 700; color: var(--navy); line-height: 1.1; margin: 0;">Goyal Hospital</h1>
        <p style="font-size: 9px; color: var(--blue); text-transform: uppercase; letter-spacing: 2px; font-weight: 700; margin: 2px 0 0 0;">Robotic Surgery &amp; Trauma Centre</p>
      </div>
    </a>
    
    <button class="mobile-nav-toggle" id="mobile-toggle" aria-label="Toggle Navigation">
      <i class="fa-solid fa-bars"></i>
    </button>
    
    <nav id="navbar">
      <a href="index.php" class="<?php echo ($active_page == 'home') ? 'active' : ''; ?>">Home</a>
      <a href="about.php" class="<?php echo ($active_page == 'about') ? 'active' : ''; ?>">About Us</a>
      <a href="robotic-surgery.php" class="<?php echo ($active_page == 'robotic') ? 'active' : ''; ?>">Robotic Surgery</a>
      <a href="services.php" class="<?php echo ($active_page == 'services') ? 'active' : ''; ?>">Services</a>
      <a href="doctors.php" class="<?php echo ($active_page == 'doctors') ? 'active' : ''; ?>">Our Doctors</a>
      <a href="photo-gallery.php" class="<?php echo ($active_page == 'photos') ? 'active' : ''; ?>">Photos</a>
      <a href="video-gallery.php" class="<?php echo ($active_page == 'videos') ? 'active' : ''; ?>">Videos</a>
      <a href="contact.php" class="btn-appt <?php echo ($active_page == 'contact') ? 'active' : ''; ?>">Book Appointment →</a>
    </nav>
  </header>
