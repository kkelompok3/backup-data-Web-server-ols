<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>CV Modern - <?php echo htmlspecialchars($nama); ?></title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&display=swap" rel="stylesheet" />
<style>
  /* Reset & base */
  * {
    margin: 0; padding: 0; box-sizing: border-box;
  }
  body {
    font-family: 'Montserrat', sans-serif;
    background: #f0f2f5;
    color: #333;
    display: flex;
    justify-content: center;
    padding: 40px 20px;
    min-height: 100vh;
  }
  .cv-wrapper {
    background: #fff;
    width: 800px;
    max-width: 95vw;
    border-radius: 16px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    overflow: hidden;
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 40px;
    opacity: 0;
    transform: translateY(40px);
    animation: fadeUp 0.8s forwards ease;
  }
  @keyframes fadeUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  .sidebar {
    background: #4a90e2;
    padding: 40px 30px;
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
  .sidebar img {
    width: 140px;
    height: 140px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid white;
    margin-bottom: 25px;
    box-shadow: 0 0 15px rgba(255 255 255 / 0.7);
    transition: transform 0.3s ease;
  }
  .sidebar img:hover {
    transform: scale(1.1);
    box-shadow: 0 0 30px rgba(255 255 255 / 0.9);
  }
  .sidebar h1 {
    font-weight: 700;
    font-size: 26px;
    margin-bottom: 8px;
  }
  .sidebar p {
    font-weight: 300;
    font-size: 16px;
    opacity: 0.9;
    margin-bottom: 35px;
    line-height: 1.4;
  }
  .contact-info {
    width: 100%;
  }
  .contact-info h3 {
    font-weight: 600;
    margin-bottom: 18px;
    font-size: 18px;
    border-bottom: 2px solid white;
    padding-bottom: 5px;
  }
  .contact-info div {
    font-weight: 400;
    margin-bottom: 12px;
    font-size: 14px;
    display: flex;
    justify-content: space-between;
    opacity: 0.9;
  }
  .main-content {
    padding: 40px 30px;
    display: flex;
    flex-direction: column;
    gap: 30px;
  }
  .section-title {
    font-size: 22px;
    font-weight: 600;
    border-left: 5px solid #4a90e2;
    padding-left: 12px;
    color: #4a90e2;
  }
  .about p {
    font-weight: 300;
    font-size: 16px;
    line-height: 1.6;
    color: #555;
  }
  .skills-list {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
  }
  .skills-list span {
    background: #e4ecfb;
    color: #357abd;
    font-weight: 600;
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 14px;
    cursor: default;
    box-shadow: 0 2px 6px rgba(53,122,189,0.3);
    transition: background-color 0.3s ease, color 0.3s ease;
  }
  .skills-list span:hover {
    background: #357abd;
    color: white;
  }
  .experience-item {
    margin-bottom: 18px;
  }
  .experience-item h4 {
    font-weight: 600;
    font-size: 18px;
    color: #222;
  }
  .experience-item .company-year {
    font-size: 14px;
    font-style: italic;
    color: #666;
    margin-bottom: 8px;
  }
  .experience-item p {
    font-weight: 300;
    font-size: 15px;
    line-height: 1.5;
    color: #444;
  }

  /* Responsive */
  @media (max-width: 720px) {
    .cv-wrapper {
      grid-template-columns: 1fr;
      gap: 0;
    }
    .sidebar, .main-content {
      padding: 30px 20px;
    }
    .sidebar {
      flex-direction: row;
      justify-content: flex-start;
      gap: 20px;
      text-align: left;
      align-items: center;
    }
    .sidebar img {
      margin-bottom: 0;
    }
    .sidebar h1 {
      font-size: 20px;
      margin-bottom: 4px;
    }
    .sidebar p {
      font-size: 14px;
      margin-bottom: 0;
    }
    .contact-info {
      margin-top: 18px;
    }
  }
</style>
</head>
<body>

<div class="cv-wrapper" id="cv">
  <aside class="sidebar" aria-label="Informasi pribadi">
    <img src="<?php echo htmlspecialchars($foto); ?>" alt="Foto <?php echo htmlspecialchars($nama); ?>" />
    <h1><?php echo htmlspecialchars($nama); ?></h1>
    <p><?php echo htmlspecialchars($judul); ?></p>
    <div class="contact-info">
      <h3>Kontak</h3>
      <div><strong>Umur:</strong> <span><?php echo htmlspecialchars($umur); ?> tahun</span></div>
      <div><strong>Alamat:</strong> <span><?php echo htmlspecialchars($alamat); ?></span></div>
      <div><strong>Email:</strong> <span><?php echo htmlspecialchars($email); ?></span></div>
      <div><strong>Telepon:</strong> <span><?php echo htmlspecialchars($telepon); ?></span></div>
    </div>
  </aside>

  <main class="main-content" aria-label="Detail biodata dan pengalaman">
    <section class="about">
      <h2 class="section-title">Profil Singkat</h2>
      <p><?php echo htmlspecialchars($deskripsi); ?></p>
    </section>

    <section class="skills">
      <h2 class="section-title">Keahlian</h2>
      <div class="skills-list">
        <?php foreach($skills as $skill): ?>
          <span><?php echo htmlspecialchars($skill); ?></span>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="experience">
      <h2 class="section-title">Pengalaman Kerja</h2>
      <?php foreach($pengalaman as $exp): ?>
      <article class="experience-item">
        <h4><?php echo htmlspecialchars($exp['posisi']); ?></h4>
        <div class="company-year"><?php echo htmlspecialchars($exp['perusahaan'] . " | " . $exp['tahun']); ?></div>
        <p><?php echo htmlspecialchars($exp['deskripsi']); ?></p>
      </article>
      <?php endforeach; ?>
    </section>
  </main>
</div>

<script>
  // Animate sections fade in staggered (modern subtle)
  window.addEventListener('load', () => {
    const wrapper = document.querySelector('.cv-wrapper');
    // already animated by CSS keyframe fadeUp on wrapper

    // Optionally, animate internal sections fade in staggered
    const sections = document.querySelectorAll('main > section, aside .contact-info');
    sections.forEach((el, i) => {
      el.style.opacity = 0;
      el.style.transform = "translateY(20px)";
      setTimeout(() => {
        el.style.transition = "opacity 0.5s ease, transform 0.5s ease";
        el.style.opacity = 1;
        el.style.transform = "translateY(0)";
      }, i * 300 + 300);
    });
  });
</script>

</body>
</html>
