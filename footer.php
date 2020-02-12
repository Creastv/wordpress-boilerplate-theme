  </main>

  <footer>
  <nav>
    <?php wp_nav_menu( array(
				'container'=> false,
				'menu_class'=> false,
				'menu_id'=> 'footer-nav',
				'theme_location' => 'primary'
		) ); ?>
  </nav>
  </footer>
  
  <?php wp_footer(); ?>
 </body>
</html>