<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var string $title
 * @var string $subtitle
 */

if ( empty( $title ) ) {
	return;
}
?>
<div class="<?php echo fw_ext_builder_get_item_width('form-builder', '1_1/frontend_class') ?> form-builder-item">
	<div class="module-heading">
		<h2><?php seosight_render($title); ?></h2>
		<?php if ( ! empty( $subtitle ) ) : ?>
			<p><?php seosight_render($subtitle); ?></p>
		<?php endif ?>
	</div>
</div>