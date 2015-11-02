<header role="banner" class="site-header">
  <div class="wrap">
    <!-- Main Navigation -->
    <?php if ($page['main_nav']): ?>
      <nav role="navigation" class="main-navigation">
        <?php print render($page['main_nav']); ?>
      </nav>
    <?php endif; ?>
      <!-- Logo -->
      <div class="logo">
        <a href="<?php print $GLOBALS['base_url'] . '/'; ?>" title="Hayden Co">
          <img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'hayden'); ?>/assets/images/logos/logo.png" alt="Hayden">
        </a>
      </div>
  </div>
</header>
<!-- Close Header -->

<?php if ($page['preface']): ?>
  <div class="preface cleafix">
      <?php print render($page['preface']); ?>
  </div>
<?php endif; ?>
<!-- Close Preface -->

<div class="wrap">
  <?php if ($page['help']): ?>
    <?php print render($page['help']); ?>
  <?php endif; ?>
</div>

  <main role="main" id="content">  
    <div class="wrap">
    <?php if ($page['content']): ?>
        <?php print render($page['content']); ?>
    <?php endif; ?>
    </div>
  </main>

  <?php if ($page['sidebar_second']): ?>
    <aside class="sidebar-second" role="complementary">
      <?php print render($page['sidebar_second']); ?>
    </aside>
  <?php endif; ?>


<?php if ($page['postscript']): ?>
  <div class="postscript wrap">
    <?php print render($page['postscript']); ?>
  </div>
<?php endif; ?>

<footer>
    <div class="wrap">
      <p><strong>The Hayden Company</strong><span>208 South Main Street</span><span>Nicholasville, KY 40356</span></br>
      <span>P: 859-885-3388</span><span>F: 859-887-5741</span><span>E: info@haydenco.com</span></br>
      Copyright © 2015 The Hayden Company. All Rights Reserved.</br>
      <a href="http://www.trifectaky.com" target="_blank">Website: Trifecta!</a></p>
      <img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'hayden'); ?>/assets/images/us-green-seal.png" alt="Hayden">
    </div>
</footer>