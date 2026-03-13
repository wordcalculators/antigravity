<?php
$pageTitle    = 'Free Online File Converter — Convert Images, PDF & More';
$metaDesc     = 'OnlineConvert.co — Free browser-based tools to convert images, compress files, and use developer utilities. No signup, no uploads.';
$metaKeywords = 'online converter, png to jpg, image compressor, pdf converter, qr code generator, json formatter';
require_once 'includes/header.php';
?>

<section class="hero">
  <div class="container">
    <div class="label-tag">🚀 100% Free · No Signup Required</div>
    <h1>Convert Files <span class="highlight">Instantly</span><br>Right in Your Browser</h1>
    <p class="lead">Fast, private, free online tools for images, PDFs, and developer utilities. No file uploads — everything runs on your device.</p>
    <div class="hero-cta">
      <a href="#tools" class="btn btn-primary btn-lg">🛠 Explore All Tools</a>
      <a href="/tools/png-to-jpg.php" class="btn btn-secondary btn-lg">⚡ Try PNG to JPG</a>
    </div>
    <div class="hero-stats">
      <div class="hero-stat"><span class="number">2<span>M</span>+</span><span class="label">Conversions Done</span></div>
      <div class="hero-stat"><span class="number">40<span>+</span></span><span class="label">Free Tools</span></div>
      <div class="hero-stat"><span class="number">100<span>%</span></span><span class="label">Browser-Based</span></div>
      <div class="hero-stat"><span class="number">0</span><span class="label">Files Uploaded</span></div>
    </div>
  </div>
</section>

<!-- Quick Converter -->
<section class="section-sm">
  <div class="container">
    <div class="quick-converter">
      <div class="converter-tabs">
        <button class="converter-tab active" data-tab="png-jpg">PNG → JPG</button>
        <button class="converter-tab" data-tab="jpg-png">JPG → PNG</button>
        <button class="converter-tab" data-tab="compress">Compress</button>
        <button class="converter-tab" data-tab="webp">WebP</button>
        <button class="converter-tab" data-tab="qr">QR Code</button>
      </div>
      <div class="tab-panel active" id="tab-png-jpg">
        <div class="dropzone"><span class="dropzone-icon">🖼</span><h3>Drop PNG files here</h3><p>or click to browse — supports PNG, WebP, BMP</p><a href="/tools/png-to-jpg.php" class="btn btn-primary">Open Full Tool</a><input type="file" accept="image/png,image/webp,image/bmp" multiple></div>
      </div>
      <div class="tab-panel" id="tab-jpg-png">
        <div class="dropzone"><span class="dropzone-icon">🔄</span><h3>Drop JPG files here</h3><p>Converts JPG to transparent-ready PNG</p><a href="/tools/jpg-to-png.php" class="btn btn-primary">Open Full Tool</a><input type="file" accept="image/jpeg" multiple></div>
      </div>
      <div class="tab-panel" id="tab-compress">
        <div class="dropzone"><span class="dropzone-icon">🗜</span><h3>Drop images to compress</h3><p>Reduce file size without losing quality</p><a href="/tools/image-compressor.php" class="btn btn-primary">Open Full Tool</a><input type="file" accept="image/*" multiple></div>
      </div>
      <div class="tab-panel" id="tab-webp">
        <div class="dropzone"><span class="dropzone-icon">🌐</span><h3>Convert to/from WebP</h3><p>Optimized format for the modern web</p><a href="/tools/jpg-to-webp.php" class="btn btn-primary">Open Full Tool</a><input type="file" accept="image/*" multiple></div>
      </div>
      <div class="tab-panel" id="tab-qr">
        <div style="text-align:center;padding:20px 0">
          <span style="font-size:3rem;display:block;margin-bottom:14px">📲</span>
          <h3 style="margin-bottom:8px">Generate a QR Code</h3>
          <p style="margin-bottom:20px">Enter any URL or text to create a scannable QR code</p>
          <a href="/tools/qr-code-generator.php" class="btn btn-primary">Open QR Tool</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Image Tools -->
<section class="section" id="tools">
  <div class="container">
    <div class="section-header">
      <div class="label-tag">🖼 Most Popular</div>
      <h2>Image Conversion Tools</h2>
      <p>Convert, compress, and resize images instantly — no uploads, no waiting.</p>
    </div>
    <div class="grid-4">
      <?php
      $imageTools = [
        ['🔄','PNG to JPG','Convert PNG to smaller JPG format','/tools/png-to-jpg.php'],
        ['🔄','JPG to PNG','Convert JPG to PNG with transparency','/tools/jpg-to-png.php'],
        ['🌐','PNG to WebP','Convert PNG to modern WebP format','/tools/png-to-webp.php'],
        ['🌐','WebP to JPG','Convert WebP to widely-supported JPG','/tools/webp-to-jpg.php'],
        ['🌐','WebP to PNG','Convert WebP to transparent PNG','/tools/webp-to-png.php'],
        ['🌐','JPG to WebP','Shrink JPGs with WebP compression','/tools/jpg-to-webp.php'],
        ['✦','SVG to PNG','Render vector SVGs as raster PNG','/tools/svg-to-png.php'],
        ['🗜','Image Compressor','Reduce image size without quality loss','/tools/image-compressor.php'],
        ['📐','Image Resizer','Resize images to any dimension','/tools/image-resizer.php'],
        ['✂️','Image Cropper','Crop images to a custom size','/tools/image-cropper.php'],
        ['↩️','Image Rotator','Rotate and flip images quickly','/tools/image-rotator.php'],
      ];
      foreach ($imageTools as [$icon,$name,$desc,$url]): ?>
      <a href="<?= $url ?>" class="card tool-card">
        <div class="tool-icon"><?= $icon ?></div>
        <h4><?= $name ?></h4>
        <p><?= $desc ?></p>
        <span class="arrow">Use Tool →</span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- PDF Tools -->
<section class="section" style="background:var(--bg-surface)">
  <div class="container">
    <div class="section-header">
      <div class="label-tag">📄 High Demand</div>
      <h2>PDF Tools</h2>
      <p>Merge, split, compress and convert PDF files with ease.</p>
    </div>
    <div class="grid-4">
      <?php
      $pdfTools = [
        ['🖼','JPG to PDF','Turn images into a PDF document','/tools/jpg-to-pdf.php'],
        ['📄','PDF to JPG','Extract pages as JPG images','/tools/pdf-to-jpg.php'],
        ['🔗','Merge PDF','Combine multiple PDFs into one','/tools/merge-pdf.php'],
        ['✂️','Split PDF','Split a PDF into separate pages','/tools/split-pdf.php'],
        ['🗜','Compress PDF','Reduce PDF file size quickly','/tools/compress-pdf.php'],
        ['↩️','Rotate PDF','Rotate PDF pages to any angle','/tools/rotate-pdf.php'],
      ];
      foreach ($pdfTools as [$icon,$name,$desc,$url]): ?>
      <a href="<?= $url ?>" class="card tool-card">
        <div class="tool-icon" style="background:var(--orange-dim);border-color:rgba(255,107,53,.2)"><?= $icon ?></div>
        <h4><?= $name ?></h4><p><?= $desc ?></p><span class="arrow">Use Tool →</span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Utility Tools -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="label-tag">🛠 Developer & Productivity</div>
      <h2>Utility Tools</h2>
      <p>Handy tools for developers, designers, and power users.</p>
    </div>
    <div class="grid-4">
      <?php
      $utilTools = [
        ['📲','QR Code Generator','Create QR codes for any URL or text','/tools/qr-code-generator.php'],
        ['{}','JSON Formatter','Format and validate JSON data','/tools/json-formatter.php'],
        ['</>','HTML Minifier','Minify HTML to reduce load time','/tools/html-minifier.php'],
        ['🎨','CSS Minifier','Remove whitespace from CSS files','/tools/css-minifier.php'],
        ['🔐','Base64 Encoder','Encode and decode Base64 strings','/tools/base64-encoder.php'],
        ['🔗','URL Encoder','Encode and decode URL strings','/tools/url-encoder.php'],
        ['🎨','Color Converter','Convert HEX, RGB, HSL colors','/tools/color-converter.php'],
      ];
      foreach ($utilTools as [$icon,$name,$desc,$url]): ?>
      <a href="<?= $url ?>" class="card tool-card">
        <div class="tool-icon" style="background:rgba(255,107,53,.07);border-color:rgba(255,107,53,.14);font-size:1rem"><?= $icon ?></div>
        <h4><?= $name ?></h4><p><?= $desc ?></p><span class="arrow">Use Tool →</span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Why Choose -->
<section class="section" style="background:var(--bg-surface)">
  <div class="container">
    <div class="section-header">
      <div class="label-tag">✨ Why OnlineConvert</div>
      <h2>Built for Speed, Privacy & Simplicity</h2>
    </div>
    <div class="grid-2">
      <?php
      $features = [
        ['🔒','100% Private','Image and utility tools run entirely in your browser. No files are ever sent to our servers.'],
        ['⚡','Lightning Fast','Browser-based processing means instant results — no upload wait times, no queue.'],
        ['🆓','Always Free','Core tools are permanently free. No hidden fees, no trial periods, no credit card needed.'],
        ['📱','Works Everywhere','Fully responsive — use on desktop, tablet, or mobile with a seamless experience.'],
        ['🔧','40+ Tools','From image conversion to developer utilities — everything you need in one place.'],
        ['🚀','No Signup Needed','Use any tool instantly without an account. Register only to save history.'],
      ];
      foreach ($features as [$icon,$title,$desc]): ?>
      <div class="feature-card">
        <div class="feature-icon"><?= $icon ?></div>
        <div class="feature-body"><h4><?= $title ?></h4><p><?= $desc ?></p></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- How It Works -->
<section class="section">
  <div class="container">
    <div class="section-header"><div class="label-tag">📖 How It Works</div><h2>Convert in 3 Simple Steps</h2></div>
    <div class="steps-row">
      <div class="step"><div class="step-num">1</div><h4>Choose a Tool</h4><p>Pick from 40+ free conversion and utility tools.</p></div>
      <div class="step"><div class="step-num">2</div><h4>Upload or Input</h4><p>Drop your file or enter text — processed in your browser.</p></div>
      <div class="step"><div class="step-num">3</div><h4>Download Result</h4><p>Click download and get your converted file instantly.</p></div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section" style="background:var(--bg-surface)">
  <div class="container-sm">
    <div class="section-header"><div class="label-tag">❓ FAQ</div><h2>Frequently Asked Questions</h2></div>
    <?php
    $faqs = [
      ['Is OnlineConvert.co really free?','Yes! All core tools are completely free with no sign-up required. Premium plans are optional for power users who need larger file limits and batch processing.'],
      ['Are my files kept private?','Absolutely. Image tools and utilities run 100% in your browser using JavaScript. Your files never leave your device and are never uploaded to any server.'],
      ['What is the file size limit?','Free users can process files up to 10MB. Premium users enjoy 100MB limits and batch processing for multiple files at once.'],
      ['Do I need to create an account?','No account needed to use any tool. Create a free account if you want to save your conversion history and favorite tools.'],
      ['What image formats are supported?','We support JPG, PNG, WebP, SVG, BMP, GIF, and HEIC (with compatible browsers). PDF tools support standard PDF files.'],
      ['Can I use these tools on mobile?','Yes! OnlineConvert.co is fully mobile-optimized. All tools work on iOS and Android browsers with a touch-friendly interface.'],
    ];
    foreach ($faqs as [$q,$a]): ?>
    <div class="faq-item">
      <button class="faq-q"><?= htmlspecialchars($q) ?> <span class="chevron">▼</span></button>
      <div class="faq-a"><?= htmlspecialchars($a) ?></div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- Blog -->
<section class="section">
  <div class="container">
    <div class="section-header"><div class="label-tag">✍️ Blog</div><h2>Tips, Guides & Tutorials</h2></div>
    <div class="grid-3">
      <?php
      $posts = [
        ['PNG vs JPG: Which Format Should You Use?','A complete comparison of the two most popular image formats and when to use each one.','Mar 10, 2025','png-vs-jpg'],
        ['How to Compress PDF Without Losing Quality','Learn the best techniques to reduce PDF file size while maintaining crisp text and images.','Mar 5, 2025','how-to-compress-pdf'],
        ['The Complete Guide to WebP Images in 2025','Why WebP is the best image format for websites and how to convert your existing images.','Feb 28, 2025','webp-guide-2025'],
      ];
      foreach ($posts as [$title,$excerpt,$date,$slug]): ?>
      <a href="/blog/<?= $slug ?>.php" class="blog-card">
        <div class="blog-img">📝</div>
        <div class="blog-card-body">
          <div class="blog-meta">📅 <?= $date ?></div>
          <h3><?= htmlspecialchars($title) ?></h3>
          <p><?= htmlspecialchars($excerpt) ?></p>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-32"><a href="/blog" class="btn btn-secondary">View All Posts →</a></div>
  </div>
</section>

<!-- CTA Banner -->
<section class="section-sm">
  <div class="container">
    <div class="card text-center" style="background:linear-gradient(135deg,rgba(0,210,255,.06),rgba(0,210,255,.02));border-color:rgba(0,210,255,.15);padding:56px 40px">
      <h2 style="margin-bottom:12px">Ready to Convert Your Files?</h2>
      <p style="margin-bottom:28px;font-size:1.05rem">Join 2 million users who trust OnlineConvert.co for fast, private file conversions.</p>
      <div style="display:flex;justify-content:center;gap:12px;flex-wrap:wrap">
        <a href="/tools/png-to-jpg.php" class="btn btn-primary btn-lg">Start Converting Free</a>
        <a href="/auth/register.php" class="btn btn-secondary btn-lg">Create Free Account</a>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
