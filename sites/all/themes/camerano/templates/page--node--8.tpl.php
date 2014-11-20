<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page">

  <header class="header" id="header" role="banner">

    <?php print render($page['header']); ?>

  </header>

  <div id="main">

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div>

    <div id="navigation">
  
      <?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

      <?php print render($page['navigation']); ?>

      <section class="services-intro">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, cupiditate eum repudiandae omnis vitae pariatur perferendis ut, exercitationem optio sunt dolorum perspiciatis iste architecto eaque. Perspiciatis error nostrum, praesentium voluptatum?
          <br /><strong>Our services can change your life!</strong>

          <a href="#" class="action-btn-services">Let's do it!</a>
        </p>
      </section>

      <section class="rassurance">
        <h2>Not convinced ? Hear our customers</h2>

        <article class="customer">
          <figure class="customer-photo">
            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/joshuasortino/128.jpg" alt="">
          </figure>

          <blockquote>
            "Working with Hipster Company was the best professionnal experience of my entire life. I'd recommend it to ANYONE considering changing his life."
            <span class="customer-signature">— Mohammed Ali</span>
          </blockquote>
          
          <div style="clear:both;"></div>
        </article>

        <article class="customer">
          <figure class="customer-photo">
            <img src="https://s3.amazonaws.com/uifaces/faces/twitter/soffes/128.jpg" alt="">
          </figure>

          <blockquote>
            "I have yet to find anyone THIS professionnal. Hipster Company helped me build my e-reputation and my business VERY successfully. What are you waiting for ?"
            <span class="customer-signature">— Marc Zuckerberg</span>
          </blockquote>
          
          <div style="clear:both;"></div>
        </article>

      </section>

      <section class="actual-services">
        <h2>Pricing &amp; features table</h2>

        <table id="pricing-table">
          <tr>
            <th>Basic</th>
            <th>Advanced</th>
            <th>Pro</th>
          </tr>

          <tr>
            <td>Access to 150 free ressources for your projects</td>
            <td>Access to 900 ressources for your projects</td>
            <td>Access to <strong>over 9000 ressources</strong> for your projects</td>
          </tr>

          <tr>
            <td>—</td>
            <td>6 months access</td>
            <td><strong>Lifetime</strong> access + <strong>updates</strong></td>
          </tr>

          <tr>
            <td>Free</td>
            <td>$12,49 / month</td>
            <td><strong>$89</strong></td>
          </tr>

          <tr>
            <td><a href="#" class="action-btn-services table">Order Now!</a></td>
            <td><a href="#" class="action-btn-services table">Order Now!</a></td>
            <td><a href="#" class="action-btn-services table">Order Now!</a></td>
          </tr>
        </table>
      </section>

    </div>

    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['sidebar_first']);
      $sidebar_second = render($page['sidebar_second']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_first; ?>
        <?php print $sidebar_second; ?>
      </aside>
    <?php endif; ?>

  </div>

  <?php print render($page['footer']); ?>

</div>

<?php print render($page['bottom']); ?>
