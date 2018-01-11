<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
 
// Récupération des données ACF
if ( !function_exists('get_field') ) return;
$UCATCHIT_IS_ACTIVE = get_field('ucatchit_is_active');
$TITRELONG = get_field('titrelong');
$RESUME = get_field('resume');
$MESSAGE = get_field('message');
$LIEN_UNIQUE_1 = get_field('lien_unique_1');
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- Contenu Wordpress -->
	<article class="entry-content">
		<p id="wordpressTitle"><?php echo get_the_title() ?></p>
		<?php the_content(); ?>
	</article>

	<!-- Contenu Ucatchit -->
	<?php if($UCATCHIT_IS_ACTIVE == 'yes') { ?>
		<article id="seoContent" class="entry-content">
			<h1><?php echo $TITRELONG ?></h1>
			<p><?php echo $RESUME ?></p>
			<p><?php echo $MESSAGE ?></p>
			<h2>Voir aussi</h2>
			<ul>
				<li><a href="<?php echo $LIEN_UNIQUE_1 ?>"><?php echo $LIEN_UNIQUE_1 ?></a></li>
				<!-- Vous devez définir les autres liens dans ACF -->
			</ul>
		</article>
	<?php } ?>
</section><!-- #post-## -->
