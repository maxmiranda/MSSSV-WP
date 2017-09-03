<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package msssv
 */

?>

	</div><!-- #content -->

	<footer>
			<div id = "betweenheader">
				<div class = "wholecontact">
					<a href = "mailto:mmiranda@msssv.com" id = "emailfooter" class = "contactfooter" >
						<p> email: mmiranda@msssv.com</p>
						<img class = "footericon" src = "/wp-content/themes/msssv/img/001-web.png"/>
					</a>

					<a href = "tel:5167519060"class = "contactfooter" >
						<p> fax: 516.741.9060 </p>
						<img class = "footericon" src = "/wp-content/themes/msssv/img/002-phone-receiver-1.png"/>
					</a>
					<a href = "tel:5167417676" class = "contactfooter">
						<p> tel: 516.741.7676</p>
						<img class = "footericon" src = "/wp-content/themes/msssv/img/003-phone-receiver.png"/>
					</a>
				</div>

				<p id = "copyright">
					MSSSV ©  2017  |   <u> <a style = "color: #fcfcfc; cursor: pointer" href = "mailto:maxmiranda@berkeley.edu"> Website Design </a> </u><br> <br>
					2430 Piedmont Ave, Berkeley, Ca 94720
				</p>

			</div>
		</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
