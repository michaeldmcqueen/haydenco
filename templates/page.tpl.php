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

  <main role="main" id="content">  
    <?php if ($page['content']): ?>
        <?php print render($page['content']); ?>
    <?php endif; ?>
  </main>

  <?php if ($page['sidebar_second']): ?>
    <aside class="sidebar-second" role="complementary">
      <?php print render($page['sidebar_second']); ?>
    </aside>
  <?php endif; ?>
</div>

<?php if ($page['postscript']): ?>
  <div class="postscript wrap">
    <?php print render($page['postscript']); ?>
  </div>
<?php endif; ?>

<footer>
    <div class="wrap">
      <h6>Jenkins and Morrow</h6>
      <p>216 Fountain Ct., Suite 110, Lexington, KY 40509  •  859-264-1898</p>
      <p>200 City Hill Dr, #102, London, KY 40741  •  606-877-8811</p>
    </div>
</footer>