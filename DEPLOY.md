# OnlineConvert.co — Deployment Guide

## Project Structure

```
onlineconvert/
├── index.php               ← Homepage
├── pricing.php             ← Pricing page
├── about.php               ← About page
├── contact.php             ← Contact page
├── privacy.php             ← Privacy policy
├── terms.php               ← Terms of service
├── sitemap.php             ← Auto-generated XML sitemap
├── robots.txt              ← Search engine rules
├── .htaccess               ← URL rewriting + security + caching
├── database.sql            ← Run this first to create DB
│
├── config/
│   └── db.php              ← ⚠ EDIT: DB credentials + SITE_URL
│
├── includes/
│   ├── header.php          ← Shared header (navigation)
│   └── footer.php          ← Shared footer + scripts
│
├── assets/
│   ├── css/style.css       ← All styles (dark theme)
│   └── js/main.js          ← All JS (converters, QR, JSON, etc.)
│
├── tools/                  ← All 24 tool pages
│   ├── png-to-jpg.php      ← Full converter with JS
│   ├── image-compressor.php
│   ├── qr-code-generator.php
│   ├── json-formatter.php
│   ├── base64-encoder.php
│   ├── url-encoder.php
│   ├── html-minifier.php
│   ├── css-minifier.php
│   ├── color-converter.php
│   ├── image-tools.php     ← Image tools listing
│   ├── pdf-tools.php       ← PDF tools listing
│   ├── utility-tools.php   ← Utility tools listing
│   └── [16 more tool pages...]
│
├── auth/
│   ├── login.php           ← Login with CSRF protection
│   ├── register.php        ← Registration with validation
│   └── logout.php          ← Session destruction
│
├── dashboard/
│   └── index.php           ← User dashboard with stats + history
│
├── admin/
│   └── index.php           ← Admin panel
│
├── blog/
│   ├── index.php           ← Blog listing page
│   └── png-vs-jpg/
│       └── index.php       ← Sample blog post
│
├── api/
│   └── track.php           ← Tool usage analytics endpoint
│
└── uploads/                ← Server-side upload directory (chmod 755)
```

## Step 1: Edit config/db.php

```php
define('DB_HOST', 'localhost');
define('DB_USER', 'your_mysql_username');
define('DB_PASS', 'your_mysql_password');
define('DB_NAME', 'onlineconvert');
define('SITE_URL', 'https://yourdomain.com');  // ← Change this!
```

## Step 2: Create MySQL Database

In cPanel → MySQL Databases (or phpMyAdmin):
1. Create database: `onlineconvert`
2. Create user and grant ALL privileges
3. Import `database.sql` via phpMyAdmin or:
   ```bash
   mysql -u username -p onlineconvert < database.sql
   ```

## Step 3: Upload Files

Upload the entire project to your hosting's `public_html` folder.

## Step 4: Set Permissions

```bash
chmod 755 uploads/
chmod 644 .htaccess
```

## Step 5: Enable mod_rewrite

In cPanel → Apache Handlers or ensure .htaccess is allowed.

## Step 6: Add Google AdSense

In `includes/header.php`, uncomment and replace:
```html
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-YOUR_ID" crossorigin="anonymous"></script>
```

## Step 7: Test

- Visit your domain → Homepage should load
- Try `/tools/png-to-jpg` → Image converter should work
- Try `/auth/register` → Create test account
- Try `/admin` → Admin panel (login with admin@onlineconvert.co / Admin@123)
- Try `/sitemap.xml` → Should output XML

## Default Admin Credentials

- Email: `admin@onlineconvert.co`
- Password: `Admin@123`

⚠ **Change the admin password immediately after first login!**

## HTTPS

Enable free SSL via cPanel → Let's Encrypt SSL.
Then uncomment the HTTPS redirect in `.htaccess`:
```apache
RewriteCond %{HTTPS} off
RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

## SEO Checklist

- [ ] Submit sitemap to Google Search Console: `https://yourdomain.com/sitemap.xml`
- [ ] Add Google Analytics tracking code to header.php
- [ ] Update meta descriptions in each tool page
- [ ] Add OG image (1200×630px) at `/assets/images/og-image.png`
- [ ] Set up Google AdSense and replace placeholder comments

## Key Features Included

✅ 24 tool pages (fully functional: PNG/JPG, compressor, QR, JSON, Base64, URL, HTML/CSS minifier, color converter)
✅ Dark precision design (Syne + DM Sans fonts, navy + cyan theme)
✅ Mobile-first responsive layout
✅ Sticky header with mobile hamburger menu
✅ User registration, login, logout (with CSRF protection + password hashing)
✅ User dashboard with conversion history and stats
✅ Admin panel with user management and analytics
✅ Pricing page with 3 tiers (Free, Pro $9.99/mo, Lifetime $199)
✅ Blog system (index + sample post)
✅ FAQ accordion
✅ SEO-optimized pages (meta tags, canonical URLs, OG tags)
✅ Sitemap generator
✅ robots.txt
✅ .htaccess (URL rewriting, security headers, caching, gzip)
✅ Google AdSense placeholder
✅ Contact form with database storage
✅ About, Privacy Policy, Terms pages
✅ Tool analytics tracking (tool_stats table)
