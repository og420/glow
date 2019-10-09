	<footer class="footer">
		<p class="footer__quote">
			大麻合法化の是非について考えることは、
			あなた自身の幸福について考えることだ。
		</p>
		<span class="footer__quoteAuthor">GLOW</span>

		<div class="footer__nav">
			<div class="footer__categories">
				<ul>
					<?php
					$args = array(
							'orderby' => 'count',
							'order' => 'DSC'
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
					<li><a href="#" target="_blank">当メディアについて</a>
					<li><a href="#" target="_blank">ご利用規約</a>
					<li><a href="#" target="_blank">プライバシーポリシー</a>
				</ul>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
