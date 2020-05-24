<?php
/**
 * Default paged pagination template.
 *
 * @var $args
 * @package @@plugin_name
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

?>

<ul class="<?php echo esc_attr( $args['class'] ); ?> vp-pagination__style-default" data-vp-pagination-type="<?php echo esc_attr( $args['type'] ); ?>"
<?php if ( isset( $args['scroll_top_offset'] ) ) : ?>
    data-vp-pagination-scroll-top="<?php echo esc_attr( $args['scroll_top_offset'] ); ?>"
<?php endif; ?>
>
    <?php
    // phpcs:ignore
    foreach ( $args['items'] as $item ) {
        ?>
        <li class="<?php echo esc_attr( $item['class'] ); ?>">
            <?php if ( $item['url'] ) : ?>
                <a href="<?php echo esc_url( $item['url'] ); ?>">
                    <?php
                    if ( $item['is_prev_arrow'] ) {
                        visual_portfolio()->include_template( 'icons/arrow-left' );
                    } elseif ( $item['is_next_arrow'] ) {
                        visual_portfolio()->include_template( 'icons/arrow-right' );
                    } else {
                        echo esc_html( $item['label'] );
                    }
                    ?>
                </a>
            <?php else : ?>
                <span><?php echo esc_html( $item['label'] ); ?></span>
            <?php endif; ?>
        </li>
        <?php
    }
    ?>
</ul>
