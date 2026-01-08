<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Toko Hakim - Sembako Lengkap & Hemat</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    :root{
      --green:#1faa59;
      --green-dark:#128043;
      --green-soft:#e9f7ef;

      /* secondary accent */
      --accent:#84f1c8;
      --accent-glow:rgba(132,241,200,.45);

      --text:#1f2937;
    }

    *{box-sizing:border-box}
    html{scroll-behavior:smooth}

    body{
      margin:0;
      font-family:'Inter',sans-serif;
      color:var(--text);
      background:#fff;
      line-height:1.6;
    }

    a{text-decoration:none}

    .container{max-width:1100px;margin:auto;padding:24px}

    /* ===== HERO ===== */
    .hero{
      background:
        radial-gradient(1200px 300px at top right,var(--accent-glow),transparent),
        linear-gradient(135deg,var(--green),var(--green-dark));
      color:white;
      padding:80px 24px;
      border-bottom-left-radius:56px;
      border-bottom-right-radius:56px;
      position:relative;
      overflow:hidden;
    }

    .hero::after{
      content:"";
      position:absolute;
      inset:0;
      background:linear-gradient(120deg,transparent 60%,rgba(255,255,255,.08));
      pointer-events:none;
    }

    .hero-grid{
      display:grid;
      grid-template-columns:1.2fr 1fr;
      gap:36px;
      align-items:center;
    }

    .hero h1{
      font-size:44px;
      line-height:1.15;
      margin-bottom:16px;
    }

    .hero p{font-size:18px;opacity:.95}

    .btn{
      display:inline-flex;
      align-items:center;
      gap:8px;
      background:#fff;
      color:var(--green-dark);
      padding:14px 26px;
      border-radius:14px;
      font-weight:600;
      margin-top:26px;
      transition:.3s ease;
      box-shadow:0 10px 30px rgba(0,0,0,.15);
    }

    .btn:hover{
      transform:translateY(-3px);
      box-shadow:0 18px 45px rgba(0,0,0,.25);
    }

    /* ===== 3D CARD ===== */
    .hero-card{
      background:white;
      color:var(--text);
      border-radius:24px;
      padding:32px;
      box-shadow:
        0 25px 50px rgba(0,0,0,.25),
        inset 0 0 0 1px rgba(255,255,255,.6);
      transform:perspective(900px) rotateX(6deg) rotateY(-6deg);
      transition:.5s cubic-bezier(.22,1,.36,1);
    }

    .hero-card:hover{
      transform:perspective(900px) rotateX(0) rotateY(0) translateY(-6px);
    }

    .hero-card ul{padding-left:18px}

    /* ===== FEATURES ===== */
    .features{padding:80px 0}

    .features-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
      gap:28px;
      margin-top:40px;
    }

    .feature{
      background:var(--green-soft);
      padding:30px;
      border-radius:24px;
      position:relative;
      transition:.4s ease;
      box-shadow:0 10px 25px rgba(0,0,0,.1);
    }

    .feature::before{
      content:"";
      position:absolute;
      inset:0;
      border-radius:24px;
      background:linear-gradient(135deg,var(--accent),transparent);
      opacity:.0;
      transition:.4s ease;
    }

    .feature:hover{
      transform:translateY(-6px);
      box-shadow:0 22px 45px rgba(0,0,0,.18);
    }

    .feature:hover::before{opacity:.35}

    .feature h3{margin-top:0}

    /* ===== MAP ===== */
    iframe{
      transition:.4s ease;
    }

    iframe:hover{
      transform:scale(1.015);
    }

    /* ===== CTA ===== */
    .cta{
      background:
        radial-gradient(600px 200px at top center,var(--accent-glow),transparent),
        var(--green-soft);
      padding:72px 24px;
      text-align:center;
      border-radius:40px;
      margin:90px auto;
      max-width:900px;
      box-shadow:0 25px 60px rgba(0,0,0,.15);
    }

    .cta h2{font-size:34px}

    .cta .btn{
      background:var(--green);
      color:white;
    }

    /* ===== ACCORDION ===== */
    .accordion{max-width:900px;margin:80px auto}

    .accordion-item{
      border:1px solid #e5e7eb;
      border-radius:18px;
      margin-bottom:14px;
      overflow:hidden;
      transition:.3s ease;
    }

    .accordion-header{
      padding:20px 24px;
      background:#f9fafb;
      cursor:pointer;
      font-weight:600;
      position:relative;
    }

    .accordion-header::after{
      content:"+";
      position:absolute;
      right:22px;
      top:50%;
      transform:translateY(-50%);
      font-size:22px;
      transition:.3s ease;
    }

    .accordion-item.active .accordion-header::after{
      content:"–";
    }

    .accordion-content{
      padding:0 24px;
      max-height:0;
      overflow:hidden;
      background:white;
      transition:max-height .4s ease,padding .4s ease;
    }

    .accordion-item.active .accordion-content{
      padding:20px 24px;
      max-height:300px;
    }

    /* ===== FOOTER ===== */
    footer{
      background:#0f172a;
      color:#cbd5f5;
      padding:52px 24px;
      margin-top:90px;
    }

    footer h4{color:white}

    @media(max-width:768px){
      .hero-grid{grid-template-columns:1fr}
      .hero h1{font-size:36px}
      .hero-card{transform:none}
    }
  </style>
</head>
<body>

<!-- HERO -->
<section class="hero">
  <div class="container hero-grid">
    <div>
      <h1>Toko Hakim</h1>
      <p>
        Toko sembako terpercaya untuk kebutuhan harian keluarga Anda.
        Harga bersahabat, barang lengkap, dan pelayanan ramah.
      </p>
      <a class="btn" href="https://wa.me/6285645536677" target="_blank">
        📲 Hubungi Kami
      </a>
    </div>

    <div class="hero-card">
      <h3>Kenapa Belanja di Toko Hakim?</h3>
      <ul>
        <li>Sembako lengkap & selalu fresh</li>
        <li>Harga jujur dan bersaing</li>
        <li>Bisa jadi member & dapatkan promo</li>
        <li>Cocok untuk belanja rumah tangga & warung</li>
      </ul>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="features">
  <div class="container">
    <h2 style="text-align:center">Layanan Unggulan Kami</h2>
    <div class="features-grid">
      <div class="feature">
        <h3>🥬 Produk Lengkap</h3>
        <p>Beras, minyak, gula, mie, telur, hingga kebutuhan dapur lainnya tersedia setiap hari.</p>
      </div>
      <div class="feature">
        <h3>💳 Member & Promo</h3>
        <p>Gabung jadi member untuk menikmati harga khusus dan penawaran menarik.</p>
      </div>
      <div class="feature">
        <h3>⚡ Cepat & Praktis</h3>
        <p>Belanja nyaman, pelayanan cepat, cocok untuk kebutuhan mendadak.</p>
      </div>
      <div class="feature">
        <h3>🤝 Toko Tetangga</h3>
        <p>Kami hadir dekat dengan Anda, melayani dengan hati dan kejujuran.</p>
      </div>
    </div>
  </div>
</section>

<!-- MAP -->
<section class="features">
  <div class="container">
    <h2 style="text-align:center">Lokasi Toko Hakim</h2>
    <p style="text-align:center">Datang langsung ke toko kami atau gunakan petunjuk arah.</p>

    <div style="margin-top:36px;border-radius:28px;overflow:hidden;box-shadow:0 20px 45px rgba(0,0,0,.2)">
      <iframe
        src="https://www.google.com/maps?q=GFC4%2B6X8%2C%20Mergelo%2C%20Gunung%20Gedangan%2C%20Magersari%2C%20Mojokerto%2061315&output=embed"
        width="100%" height="380" style="border:0" loading="lazy"></iframe>
    </div>

    <div style="text-align:center;margin-top:28px">
      <a class="btn" style="background:var(--green);color:white"
         href="https://www.google.com/maps/dir/?api=1&destination=GFC4%2B6X8%2C%20Mergelo%2C%20Gunung%20Gedangan%2C%20Magersari%2C%20Mojokerto%2061315"
         target="_blank">
        📍 Petunjuk Arah ke Toko
      </a>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta">
  <h2>Gabung Member Toko Hakim</h2>
  <p>Nikmati kemudahan belanja, catatan transaksi, dan promo khusus member.</p>
  <a class="btn" href="https://wa.me/6285645536677" target="_blank">
    👉 Hubungi Kami
  </a>
</section>

<!-- ACCORDION -->
<section class="accordion">
  <h2 style="text-align:center">Pertanyaan yang Sering Ditanyakan</h2>

  <div class="accordion-item">
    <div class="accordion-header">Apakah harga di Toko Hakim bersaing?</div>
    <div class="accordion-content">
      Ya, kami menjaga harga tetap jujur dan kompetitif agar pelanggan nyaman berbelanja rutin.
    </div>
  </div>

  <div class="accordion-item">
    <div class="accordion-header">Bagaimana cara menjadi member?</div>
    <div class="accordion-content">
      Cukup klik tombol WhatsApp dan kami akan bantu proses pendaftaran member.
    </div>
  </div>

  <div class="accordion-item">
    <div class="accordion-header">Apakah melayani pembelian grosir?</div>
    <div class="accordion-content">
      Ya, kami melayani pembelian untuk warung dan kebutuhan dalam jumlah besar.
    </div>
  </div>

  <div class="accordion-item">
    <div class="accordion-header">Di mana lokasi toko?</div>
    <div class="accordion-content">
      GFC4+6X8, Mergelo, Gunung Gedangan, Magersari, Kota Mojokerto, Jawa Timur 61315.
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <h4>Toko Hakim</h4>
    <p>
      GFC4+6X8, Mergelo, Gunung Gedangan,<br>
      Magersari, Mojokerto City, East Java 61315
    </p>
    <p>📞 WhatsApp: +62 856-4553-6677</p>
    <p style="opacity:.7">© 2026 Toko Hakim</p>
  </div>
</footer>

<script>
  document.querySelectorAll('.accordion-item').forEach(item=>{
    item.querySelector('.accordion-header').onclick=()=>{
      item.classList.toggle('active')
    }
  })
</script>

</body>
</html>
