<?php
?>
<div class="comment <?php print ($comment->new) ? 'comment-new' : '' ?>"> 
  <p class="header">
    <?php if ($comment->new) { ?> 
      <span class="new">
	    <?php print $new ?>
	  </span>
    <?php }; ?>
    <div class="comment-title">
      <?php print $title ?>
    </div>
  </p>   
  <div class="comment-content">
	  <?php print $content ?>
	</div> 
    <div class="comment-author">
      <?php print $author ?> | <?php print $date ?>
    </div>
  <div id="comment-links">
    <?php print $links ?>
  </div> 
</div>