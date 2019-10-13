<footer class="footer">
	<div class="container">
		<p class="footer__quote">
			大麻合法化の是非について<br class="sp--hidden">考えることは、<br>
			あなた自身の幸福について<br class="sp--hidden">考えることだ。
		</p>
		<span class="footer__quoteAuthor">GLOW</span>

		<div class="footer__nav">
			<div class="footer__categories">
				<ul>
					<?php
					$args = array(
							'orderby' => 'count',
							'order' => 'DSC',
							'parent' => 0
					);
					$categories = get_categories( $args );

					foreach( $categories as $category ){
						echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a> </li> ';
					}
					?>
				</ul>
			</div>
			<div  class="footer__otherLinks">
				<ul>
					<li><a href="<?php echo esc_url( home_url('/') ); ?>statement" target="_blank">当メディアについて</a>
					<li><a href="#" target="_blank">ご利用規約</a>
					<li><a href="#" target="_blank">プライバシーポリシー</a>
				</ul>
				<img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png">
			</div>
		</div>
	</div>
	<p class="footer__copyright">
		© GLOW All Rights Reserved.
	</p>
</footer>
<?php wp_footer(); ?>

</body>
</html>
