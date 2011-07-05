<?php
/**
 * @file views-view-unformatted--banners--block.tpl.php
 * Template for block display of selected banners.
 * 
 * @author Raymond Jelierse
 */
?>

<?php foreach ($rows as $id => $row): ?>
  <div id="banner-<?php print $id; ?>" class="<?php print $classes[$id]; ?>">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>