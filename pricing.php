<?php
$pageTitle = 'Pricing — OnlineConvert.co Premium Plans';
$metaDesc  = 'Upgrade to OnlineConvert.co Pro for larger file limits, batch processing, ad-free experience, and more.';
require_once 'includes/header.php';
?>

<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="label-tag">💎 Premium Plans</div>
      <h1>Simple, Transparent Pricing</h1>
      <p>Start free, upgrade when you need more. No hidden fees, cancel anytime.</p>
    </div>

    <div class="grid-3" style="max-width:960px;margin:0 auto">
      <!-- Free -->
      <div class="pricing-card">
        <h3>Free</h3>
        <div class="price"><sup>$</sup>0</div>
        <p class="price-period">forever</p>
        <ul>
          <li>10MB file size limit</li>
          <li>Browser-based processing</li>
          <li>All basic tools</li>
          <li>Ad-supported</li>
          <li>Community support</li>
        </ul>
        <a href="/auth/register.php" class="btn btn-secondary btn-full">Get Started Free</a>
      </div>

      <!-- Pro -->
      <div class="pricing-card featured">
        <span class="badge-featured">Most Popular</span>
        <h3>Pro</h3>
        <div class="price"><sup>$</sup>9<span style="font-size:1.5rem">.99</span></div>
        <p class="price-period">per month</p>
        <ul>
          <li>100MB file size limit</li>
          <li>Batch processing</li>
          <li>Conversion history</li>
          <li>Ad-free experience</li>
          <li>Priority support</li>
          <li>All tools access</li>
        </ul>
        <a href="/auth/register.php?plan=pro" class="btn btn-primary btn-full">Start Pro Trial</a>
      </div>

      <!-- Lifetime -->
      <div class="pricing-card">
        <h3>Lifetime</h3>
        <div class="price"><sup>$</sup>199</div>
        <p class="price-period">one-time payment</p>
        <ul>
          <li>Unlimited file size</li>
          <li>Batch processing</li>
          <li>Full history forever</li>
          <li>Ad-free forever</li>
          <li>VIP support</li>
          <li>All current & future tools</li>
        </ul>
        <a href="/auth/register.php?plan=lifetime" class="btn btn-orange btn-full">Get Lifetime Access</a>
      </div>
    </div>

    <!-- Payment Methods -->
    <div class="card text-center mt-32" style="max-width:600px;margin:32px auto 0">
      <h3 style="margin-bottom:12px">💳 Payment Options</h3>
      <p style="margin-bottom:20px">We accept the following payment methods:</p>
      <div style="display:flex;justify-content:center;gap:16px;flex-wrap:wrap">
        <span class="badge badge-cyan">🏦 Bank Transfer</span>
        <span class="badge badge-cyan">📱 Mobile Payment</span>
        <span class="badge badge-cyan">🔗 Payment Link</span>
      </div>
      <p style="margin-top:16px;font-size:.85rem">After selecting a plan, you'll receive payment instructions via email. Account is upgraded within 24 hours of payment confirmation.</p>
    </div>

    <!-- FAQ -->
    <div class="mt-48 container-sm" style="max-width:700px;margin:48px auto 0">
      <h2 style="text-align:center;margin-bottom:24px">Pricing FAQ</h2>
      <div class="faq-item"><button class="faq-q">Can I cancel anytime? <span class="chevron">▼</span></button><div class="faq-a">Yes. You can cancel your subscription at any time. Your Pro access continues until the end of your current billing period.</div></div>
      <div class="faq-item"><button class="faq-q">What payment methods do you accept? <span class="chevron">▼</span></button><div class="faq-a">We currently accept bank transfer, mobile payment, and payment links. Credit card support is coming soon.</div></div>
      <div class="faq-item"><button class="faq-q">Is there a free trial? <span class="chevron">▼</span></button><div class="faq-a">The Free plan gives you unlimited access to all basic tools forever. Pro features can be tested by contacting our support team for a trial.</div></div>
      <div class="faq-item"><button class="faq-q">What is the Lifetime plan? <span class="chevron">▼</span></button><div class="faq-a">A one-time payment that gives you Pro access forever, including all future tool additions. No recurring billing.</div></div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
