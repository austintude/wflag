<?php
/**
 * Template part for contentMiddleBlock
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$block1_sectioncards	= get_field('block1_sectioncards');


?>

	<div class="sectionHeader">
					<!-- <h2 class="serviceTitle" id="services">Services</h2> -->
</div>

                    <div class="sectionCardsBlock">

					<?php while (have_rows('block1_sectioncards')) : the_row();
						//vars
						$sectioncard_id	= get_sub_field('sectioncard_id');
						$sectioncard_title	= get_sub_field('sectioncard_title');
						$sectioncard_img	= get_sub_field('sectioncard_img');
						$sectioncard_content	= get_sub_field('sectioncard_content');
						$sectioncard_link	= get_sub_field('sectioncard_link');
					?>
                        <div class="sectionCard" id="<?php echo $sectioncard_id; ?>">
						<amp-img src="<?php echo $sectioncard_img['url']; ?>" width="1000"
										height="800" layout="responsive" alt="<?php echo $sectioncard_img['alt']; ?>" class=""></amp-img>
										<h3 class="mb1"><?php echo $sectioncard_title; ?></h3>
                            <p class="mb1"><?php echo $sectioncard_content; ?></p>
                            <div class="ctaButton"><a
                                    class="ampstart-btn caps text-decoration-none inline-block"
                                    href="<?php echo $sectioncard_link; ?>">Learn More</a></div>
						</div>
						<?php endwhile; ?>




                    </div>
