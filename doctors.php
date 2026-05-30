<?php
$page_title = "Meet Our Specialists – Goyal Robotic Hospital | Robotic Surgery Board Certifications";
$active_page = "doctors";
include 'includes/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <h2>Our Expert Surgeons</h2>
  <p>Providing Leading Clinical Experience Combined with Certified International Training on Surgical Robotics.</p>
</section>

<!-- DOCTORS DIRECTORY SECTION -->
<section class="section">
  <div class="doctors-grid">
    <!-- Doctor 1: Dr Aman Goyal -->
    <div class="doctor-card certified-robotic" style="box-shadow: 0 15px 40px rgba(6, 18, 36, 0.05); border: 1px solid var(--light);">
      <div class="doctor-photo" style="height:280px; overflow:hidden;"><img src="<?php echo get_doctor_image('DrAmanGoyal.jpeg'); ?>" alt="Dr. Aman Goyal"></div>
      <div class="doctor-info" style="padding:32px 28px;">
        <h3 style="font-size:22px; margin-bottom:6px;">Dr. Aman Goyal</h3>
        <div class="specialty" style="color:var(--blue); font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:1px; margin-bottom:14px;">
          <i class="fa-solid fa-medal" style="color:var(--gold);"></i> Senior Robotic Joint Surgeon
        </div>
        <p style="font-size:13.5px; color:var(--gray); line-height:1.65; margin-bottom:20px;">
          <strong>MBBS (Gold Medalist), MS (Orthopaedic Surgery), DNB (Gold Medalist), M.R.C.S. (Glasgow), M.N.A.M.S.</strong> — With over 15 years of dedicated orthopaedic practice, Dr. Aman Goyal is a pioneer in bringing active robotic knee replacements to our community. He has successfully performed more than 3,000 joint replacement operations, holding specialized fellowships in computer-guided surgical navigation and robotic arthroplasty techniques.
        </p>
        
        <div style="background:var(--offwhite); border: 1px solid var(--light); padding:16px; border-radius:12px; margin-bottom:20px; font-size:12.5px; color:var(--navy);">
          <strong style="display:block; margin-bottom:6px;"><i class="fa-solid fa-hospital-user" style="color:var(--blue);"></i> Areas of Clinical Focus:</strong>
          <ul style="list-style:none; padding:0;">
            <li style="margin-bottom:4px;"><i class="fa-solid fa-caret-right" style="color:var(--teal); margin-right:4px;"></i> Fully Active Robotic Total Knee replacement</li>
            <li style="margin-bottom:4px;"><i class="fa-solid fa-caret-right" style="color:var(--teal); margin-right:4px;"></i> Complex Primary &amp; Revision Joint replacements</li>
            <li style="margin-bottom:4px;"><i class="fa-solid fa-caret-right" style="color:var(--teal); margin-right:4px;"></i> Computer-Assisted Navigation Knee Surgeries</li>
          </ul>
        </div>
        
        <div class="doctor-tags" style="margin-bottom:24px;">
          <span class="tag robotic-tag">Robotic Certified</span>
          <span class="tag">Knee Arthroplasty</span>
          <span class="tag">15+ Yrs Exp</span>
        </div>
        <a href="contact.php" class="btn-consult" style="text-align:center;"><i class="fa-solid fa-calendar-days"></i> Request Consultation</a>
      </div>
    </div>

    <!-- Doctor 2: Dr Smita Goyal -->
    <div class="doctor-card" style="box-shadow: 0 15px 40px rgba(6, 18, 36, 0.05); border: 1px solid var(--light);">
      <div class="doctor-photo" style="height:280px; overflow:hidden;"><img src="<?php echo get_doctor_image('DrSmitaGoyal.jpg'); ?>" alt="Dr. Smita Goyal"></div>
      <div class="doctor-info" style="padding:32px 28px;">
        <h3 style="font-size:22px; margin-bottom:6px;">Dr. Smita Goyal</h3>
        <div class="specialty" style="color:var(--blue); font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:1px; margin-bottom:14px;">
          <i class="fa-solid fa-user-doctor"></i> Obs &amp; Gyn
        </div>
        <p style="font-size:13.5px; color:var(--gray); line-height:1.65; margin-bottom:20px;">
          <strong>MBBS, DGO, DNB</strong> — Dr. Smita Goyal provides expert care in Obstetrics and Gynaecology, specializing in high-risk pregnancy management, painless deliveries, and women's health counseling.
        </p>
        
        <div style="background:var(--offwhite); border: 1px solid var(--light); padding:16px; border-radius:12px; margin-bottom:20px; font-size:12.5px; color:var(--navy);">
          <strong style="display:block; margin-bottom:6px;"><i class="fa-solid fa-hospital-user" style="color:var(--blue);"></i> Areas of Clinical Focus:</strong>
          <ul style="list-style:none; padding:0;">
            <li style="margin-bottom:4px;"><i class="fa-solid fa-caret-right" style="color:var(--blue); margin-right:4px;"></i> Obstetrics &amp; Gynaecology</li>
            <li style="margin-bottom:4px;"><i class="fa-solid fa-caret-right" style="color:var(--blue); margin-right:4px;"></i> Women's Health &amp; Wellness</li>
            <li style="margin-bottom:4px;"><i class="fa-solid fa-caret-right" style="color:var(--blue); margin-right:4px;"></i> Antenatal Care</li>
          </ul>
        </div>
        
        <div class="doctor-tags" style="margin-bottom:24px;">
          <span class="tag">Obs &amp; Gyn</span>
          <span class="tag">Women's Health</span>
        </div>
        <a href="contact.php" class="btn-consult" style="text-align:center;"><i class="fa-solid fa-calendar-days"></i> Request Consultation</a>
      </div>
    </div>

    <!-- Doctor 3: Dr. Usha Goyal -->
    <div class="doctor-card" style="box-shadow: 0 15px 40px rgba(6, 18, 36, 0.05); border: 1px solid var(--light);">
      <div class="doctor-photo" style="height:280px; overflow:hidden;"><img src="<?php echo get_doctor_image('DrUshaGoyal.jpg'); ?>" alt="Dr. Usha Goyal"></div>
      <div class="doctor-info" style="padding:32px 28px;">
        <h3 style="font-size:22px; margin-bottom:6px;">Dr. Usha Goyal</h3>
        <div class="specialty" style="color:var(--blue); font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:1px; margin-bottom:14px;">
          <i class="fa-solid fa-desktop"></i> Ultrasound Specialist
        </div>
        <p style="font-size:13.5px; color:var(--gray); line-height:1.65; margin-bottom:20px;">
          <strong>MBBS</strong> — Dr. Usha Goyal brings precision and extensive clinical expertise as our dedicated Ultrasound Specialist, providing high-quality diagnostic imaging to support accurate patient care and diagnosis.
        </p>
        
        <div style="background:var(--offwhite); border: 1px solid var(--light); padding:16px; border-radius:12px; margin-bottom:20px; font-size:12.5px; color:var(--navy);">
          <strong style="display:block; margin-bottom:6px;"><i class="fa-solid fa-hospital-user" style="color:var(--blue);"></i> Areas of Clinical Focus:</strong>
          <ul style="list-style:none; padding:0;">
            <li style="margin-bottom:4px;"><i class="fa-solid fa-caret-right" style="color:var(--blue); margin-right:4px;"></i> Advanced Sonography</li>
            <li style="margin-bottom:4px;"><i class="fa-solid fa-caret-right" style="color:var(--blue); margin-right:4px;"></i> Diagnostic Imaging</li>
            <li style="margin-bottom:4px;"><i class="fa-solid fa-caret-right" style="color:var(--blue); margin-right:4px;"></i> Preventative Screenings</li>
          </ul>
        </div>
        
        <div class="doctor-tags" style="margin-bottom:24px;">
          <span class="tag">Ultrasound</span>
          <span class="tag">Diagnostics</span>
        </div>
        <a href="contact.php" class="btn-consult" style="text-align:center;"><i class="fa-solid fa-calendar-days"></i> Request Consultation</a>
      </div>
    </div>

    <!-- Doctor 4: Dr. Ajay Agrawal -->
    <div class="doctor-card" style="box-shadow: 0 15px 40px rgba(6, 18, 36, 0.05); border: 1px solid var(--light);">
      <div class="doctor-photo" style="height:280px; overflow:hidden;"><img src="<?php echo get_doctor_image('DrAjayAgrawal.jpg'); ?>" alt="Dr. Ajay Agrawal"></div>
      <div class="doctor-info" style="padding:32px 28px;">
        <h3 style="font-size:22px; margin-bottom:6px;">Dr. Ajay Agrawal</h3>
        <div class="specialty" style="color:var(--blue); font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:1px; margin-bottom:14px;">
          <i class="fa-solid fa-user-doctor"></i> General Surgeon
        </div>
        <p style="font-size:13.5px; color:var(--gray); line-height:1.65; margin-bottom:20px;">
          <strong>MBBS, MS, Laparoscopic Surgeon</strong> — Dr. Ajay Agrawal is an expert General and Laparoscopic Surgeon, bringing advanced minimally invasive surgical techniques for faster recovery and precise outcomes in complex abdominal procedures.
        </p>
        
        <div style="background:var(--offwhite); border: 1px solid var(--light); padding:16px; border-radius:12px; margin-bottom:20px; font-size:12.5px; color:var(--navy);">
          <strong style="display:block; margin-bottom:6px;"><i class="fa-solid fa-hospital-user" style="color:var(--blue);"></i> Areas of Clinical Focus:</strong>
          <ul style="list-style:none; padding:0;">
            <li style="margin-bottom:4px;"><i class="fa-solid fa-caret-right" style="color:var(--blue); margin-right:4px;"></i> General Surgery</li>
            <li style="margin-bottom:4px;"><i class="fa-solid fa-caret-right" style="color:var(--blue); margin-right:4px;"></i> Advanced Laparoscopy</li>
            <li style="margin-bottom:4px;"><i class="fa-solid fa-caret-right" style="color:var(--blue); margin-right:4px;"></i> Minimally Invasive Procedures</li>
          </ul>
        </div>
        
        <div class="doctor-tags" style="margin-bottom:24px;">
          <span class="tag">General Surgery</span>
          <span class="tag">Laparoscopy Expert</span>
        </div>
        <a href="contact.php" class="btn-consult" style="text-align:center;"><i class="fa-solid fa-calendar-days"></i> Request Consultation</a>
      </div>
    </div>

    <!-- Doctor 5: Dr. Shrey Srivastave -->
    <div class="doctor-card certified-robotic" style="box-shadow: 0 15px 40px rgba(6, 18, 36, 0.05); border: 1px solid var(--light);">
      <div class="doctor-photo" style="height:280px; overflow:hidden;"><img src="<?php echo get_doctor_image('DrShreySrivastave.jpg'); ?>" alt="Dr. Shrey Srivastave"></div>
      <div class="doctor-info" style="padding:32px 28px;">
        <h3 style="font-size:22px; margin-bottom:6px;">Dr. Shrey Srivastave</h3>
        <div class="specialty" style="color:var(--blue); font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:1px; margin-bottom:14px;">
          <i class="fa-solid fa-tooth"></i> Dentist
        </div>
        <p style="font-size:13.5px; color:var(--gray); line-height:1.65; margin-bottom:20px;">
          <strong>MBBS, BDS, MDS (Maxillofacial Surgeon &amp; Implantologist)</strong> — Dr. Shrey Srivastave is a highly specialized Maxillofacial Surgeon and Implantologist, offering comprehensive dental care, complex extractions, and advanced implant procedures to restore perfect smiles.
        </p>
        
        <div style="background:var(--offwhite); border: 1px solid var(--light); padding:16px; border-radius:12px; margin-bottom:20px; font-size:12.5px; color:var(--navy);">
          <strong style="display:block; margin-bottom:6px;"><i class="fa-solid fa-hospital-user" style="color:var(--blue);"></i> Areas of Clinical Focus:</strong>
          <ul style="list-style:none; padding:0;">
            <li style="margin-bottom:4px;"><i class="fa-solid fa-caret-right" style="color:var(--teal); margin-right:4px;"></i> Maxillofacial Surgery</li>
            <li style="margin-bottom:4px;"><i class="fa-solid fa-caret-right" style="color:var(--teal); margin-right:4px;"></i> Dental Implants</li>
            <li style="margin-bottom:4px;"><i class="fa-solid fa-caret-right" style="color:var(--teal); margin-right:4px;"></i> Advanced Dentistry</li>
          </ul>
        </div>
        
        <div class="doctor-tags" style="margin-bottom:24px;">
          <span class="tag robotic-tag">Implantologist</span>
          <span class="tag">Maxillofacial Expert</span>
        </div>
        <a href="contact.php" class="btn-consult" style="text-align:center;"><i class="fa-solid fa-calendar-days"></i> Request Consultation</a>
      </div>
    </div>
  </div>
</section>

<!-- RESEARCH & CONTINUOUS IMPROVEMENT IN ROTARY MEDICAL SYSTEM -->
<section class="section section-alt" style="border-top:1px solid var(--light);">
  <div class="why-grid">
    <div class="scan-container" style="height: 340px;">
      <img src="images/OTs.jpeg" alt="Robotic Surgery Planning" style="width:100%; height:100%; object-fit:cover; display:block;">
    </div>
    
    <div>
      <div class="section-label">Medical Standards &amp; Safety</div>
      <h2 class="section-title">Clinical Safety &amp; <span>Robotic Safeguards</span></h2>
      <p style="margin-bottom: 16px; color: var(--gray); font-size: 14.5px; line-height: 1.7;">At Goyal Robotic Hospital, our doctors don't just rely on automated systems. Every robotic joint surgery is completely planned, double-checked, and operated directly by our board-certified senior orthopaedic surgeons.</p>
      
      <p style="margin-bottom: 24px; color: var(--gray); font-size: 14.5px; line-height: 1.7;">The robotic system acts as a high-precision clinical assistant. It enforces strict "virtual boundaries" set by the doctor, preventing the bone cutter from moving outside the pre-planned surgical safe zones. This clinical partnership between human experience and digital accuracy yields exceptional safety and recovery speed.</p>
      
      <div style="display:flex; gap:20px; flex-wrap:wrap;">
        <div style="flex:1; min-width:180px;">
          <h4 style="font-size:15px; font-weight:700; margin-bottom:4px; color:var(--navy);"><i class="fa-solid fa-shield-virus" style="color:var(--teal);"></i> Near-Zero Infections</h4>
          <p style="font-size:12px; color:var(--gray); line-height:1.5;">Maintained inside Modular Class-100 Cleanrooms.</p>
        </div>
        <div style="flex:1; min-width:180px;">
          <h4 style="font-size:15px; font-weight:700; margin-bottom:4px; color:var(--navy);"><i class="fa-solid fa-hospital-user" style="color:var(--blue);"></i> Zero Manual Deviations</h4>
          <p style="font-size:12px; color:var(--gray); line-height:1.5;">Sub-millimeter cutting parameters prevent misalignment.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
include 'includes/footer.php';
?>
