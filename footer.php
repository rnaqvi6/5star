

<footer class="site-footer">

<nav class="site-nav">

<?php
$args = array(
  'theme_location' => 'footer'
 );
wp_nav_menu($args);

 ?>

</nav>

<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>

</footer>

</div> <!-- container-->

<?php wp_footer(); ?>
<div class="modal">
<div class= "modal__inner">
  <h2 class="section-title section-title--less-margin"><span class="icon icon--mail section-title__icon"></span> Get in <strong>Touch</strong></h2>
  <div class ="wrapper wrapper--narrow">
    <p class="modal__discription">We will have our online order system soon! untill then please contact us via any of below platform.</p>
  </div>
<div class="social-icons">
  <a href="#" class="social-icons__icon"><span class ="icon icon--facebook"></span></a>
  <a href="#" class="social-icons__icon"><span class ="icon icon--twitter"></span></a>
  <a href="#" class="social-icons__icon"><span class ="icon icon--instagram"></span></a>
  <a href="#" class="social-icons__icon"><span class ="icon icon--youtube"></span></a>

</div>
</div>
<div class="modal__close">X</div>

</body>
<script src="<?php echo get_template_directory_uri(); ?>/img/App.js"></script>
</html>
