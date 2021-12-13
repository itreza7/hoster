<?php if (!defined('ABSPATH')) exit;?>
<div class="container">
	<?php if (get_field('phone_number', 'option') || get_field('send_ticket', 'option') || get_field('consulting', 'option')): ?>
		<div class="supportbar">
			<div class="row justify-content-center text-center">
				<div class="col-xl-9 col-12 row">
					<?php if (get_field('phone_number', 'option')): ?>
						<div class="col-md-4 col-12">
							<div class="column">
								<div class="phone"></div>
								<span><?php echo get_field('phone_number', 'option'); ?></span>
							</div>
						</div>
					<?php endif; ?>
					<?php if (get_field('send_ticket', 'option')): ?>
						<div class="col-md-4 col-12">
							<div class="column">
								<a href="<?php echo get_field('send_ticket', 'option'); ?>">
									<div class="invoice"></div>
									<span>ارسال تیکت</span>
								</a>
							</div>
						</div>
					<?php endif; ?>
					<?php if (get_field('consulting', 'option')): ?>
						<div class="col-md-4 col-12">
							<div class="column">
								<a href="<?php echo get_field('consulting', 'option'); ?>">
									<div class="customer-service"></div>
									<span>مشاوره فروش</span>
								</a>
							</div>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php if (get_field('summary_company', 'option')): ?>
		<div class="aboutus">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-12">
					<h3>درباره <?php the_field('company_name', 'option'); ?></h3>
					<p><?php the_field('summary_company', 'option'); ?></p>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<footer class="footer">
		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="menu">
					<div class="row">
						<?php for ($x = 1; $x <= 3; $x++): ?>
							<div class="col-sm-4 col-12">
								<?php
								$menu_obj = larateam_hoster_get_menu_by_location('footer' . $x . '-menu');
								wp_nav_menu(
										array(
												'theme_location' => 'footer' . $x . '-menu',
												'items_wrap' => '<div class="title"><p><span>' . esc_html($menu_obj->name) . '</span></p></div><div class="body"><ul>%3$s</ul></div>')
								);
								?>
							</div>
						<?php endfor; ?>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-12">
				<div class="namad">
					<?php the_field('enamad_code', 'option'); ?>
				</div>
			</div>
		</div>
		<?php if (get_field('copyright', 'option')): ?>
			<div class="copyright">
				<p>
					<?php echo get_field('copyright', 'option'); ?>
				</p>
			</div>
		<?php endif; ?>
	</footer>
	<div style="background:#fff !important;padding: 10px 0 20px !important;width: 100% !important;text-align: center !important;display: block !important;">
		<p style="font-size: .875em !important;text-align: center !important;line-height: 3 !important;color: #c4c4c4 !important;display: block !important;">
			طراحی و توسعه منحصر به فرد
			برای <span
					style="color: #6f80ff !important;display: inline !important;"> <?php the_field('company_name', 'option'); ?></span>
			توسط <a rel="nofollow" target="_blank" href="http://larateam.net/"
					style="display: inline !important;"><span
						style="color: #fc72dd !important;display: inline !important;">لارا تیم</span>
			</a>
		</p>
	</div>
	<?php if (get_field('keywords_status', 'option')): ?>
		<div class="tags">
			<p><i class="tag"></i></p>
			<?php while (has_sub_field('site-keywords', 'option')): ?>
				<h3><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('keyword'); ?></a></h3>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</div>
<?php wp_footer();?>
</body>
</html>