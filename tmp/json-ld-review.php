<?php
//JSON-LDに関する記述
//https://developers.google.com/search/docs/data-types/articles
//https://schema.org/NewsArticle
//https://fantastech.net/review-snippet-customize

/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if ( !defined( 'ABSPATH' ) ) exit;

$author = (get_the_author_meta('nickname') ? get_the_author_meta('nickname') : get_bloginfo('name'));
 ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Review",
  "itemReviewed": {
    "@type": "Thing",
    "name": "<?php echo esc_attr(get_the_review_name()); ?>"
  },
  "reviewRating": {
    "@type": "Rating",
    "ratingValue": "<?php echo esc_attr(get_the_review_rate()); ?>",
    "bestRating": "5",
    "worstRating": "0"
  },
  "datePublished": "<?php echo esc_attr(get_seo_post_time()); ?>",
  "author": {
    "@type": "Person",
    "name": "<?php echo esc_attr($author); ?>"
  },
  "publisher": {
    "@type": "Organization",
    "name": "<?php echo esc_attr(get_bloginfo( 'name' )); ?>"
  }
}
</script>
