<?php
header('Content-Type: application/xml; charset=utf-8');
$base = 'https://onlineconvert.co';
$tools = [
  '/tools/png-to-jpg', '/tools/jpg-to-png', '/tools/png-to-webp', '/tools/webp-to-jpg',
  '/tools/webp-to-png', '/tools/jpg-to-webp', '/tools/svg-to-png', '/tools/image-compressor',
  '/tools/image-resizer', '/tools/image-cropper', '/tools/image-rotator',
  '/tools/jpg-to-pdf', '/tools/pdf-to-jpg', '/tools/merge-pdf', '/tools/split-pdf',
  '/tools/compress-pdf', '/tools/rotate-pdf',
  '/tools/qr-code-generator', '/tools/json-formatter', '/tools/html-minifier',
  '/tools/css-minifier', '/tools/base64-encoder', '/tools/url-encoder', '/tools/color-converter',
  '/pricing', '/about', '/blog', '/contact',
];
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url><loc><?= $base ?></loc><changefreq>weekly</changefreq><priority>1.0</priority></url>
  <?php foreach ($tools as $t): ?>
  <url><loc><?= $base . $t ?></loc><changefreq>monthly</changefreq><priority>0.8</priority></url>
  <?php endforeach; ?>
</urlset>
