<?php

/**
 * @file aggregator-item.tpl.php
 * Default theme implementation to format an individual feed item for display
 * on the aggregator page.
 *
 * Available variables:
 * - $feed_url: URL to the originating feed item.
 * - $feed_title: Title of the feed item.
 * - $source_url: Link to the local source section.
 * - $source_title: Title of the remote source.
 * - $source_date: Date the feed was posted on the remote source.
 * - $content: Feed item content.
 * - $categories: Linked categories assigned to the feed.
 *
 * @see template_preprocess()
 * @see template_preprocess_aggregator_item()
 */
?>
<article class="feed-item">
  <header>
    <h2 class="feed-item-title">
      <a href="<?php print $feed_url; ?>"><?php print $feed_title; ?></a>
    </h2>

    <div class="feed-item-meta">
    <?php if ($source_url) : ?>
      <a href="<?php print $source_url; ?>" class="feed-item-source"><?php print $source_title; ?></a> -
    <?php endif; ?>
      <span class="feed-item-date"><?php print $source_date; ?></span>
    </div>
  </header>

<?php if ($content) : ?>
  <div class="feed-item-body">
    <?php print $content; ?>
  </div>
<?php endif; ?>

<?php if ($categories) : ?>
  <footer class="feed-item-categories">
    <?php print t('Categories'); ?>: <?php print implode(', ', $categories); ?>
  </footer>
<?php endif ;?>

</article>
