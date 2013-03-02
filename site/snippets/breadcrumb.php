<nav class="breadcrumb clearfix">
  <ul>
    <?php foreach($site->breadcrumb() as $crumb): ?>
    <?php if( $crumb->isActive() ) { continue; } ?>
    <li>
      <a href="<?php echo $crumb->url(); ?>"><?php echo $crumb->title(); ?></a><span>/</span>
    </li>
    <?php endforeach ?>
  </ul>
</nav>