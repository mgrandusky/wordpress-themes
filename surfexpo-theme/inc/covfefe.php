<?php if(is_single('press-coverage')): ?>
  <?php
  // check if the repeater field has rows of data
  if( have_rows('press_coverage') ):
    // loop through the rows of data
      while ( have_rows('press_coverage') ) : the_row(); ?>
          <a class="press" href="<?= (get_sub_field('press_url') != '' ? get_sub_field('press_url') : ''); ?>">
            <img src="<?= (get_sub_field('press_item') != '' ? get_sub_field('press_item') : ''); ?>">
          </a>
          <a class="link" href="<?= (get_sub_field('press_url') != '' ? get_sub_field('press_url') : ''); ?>" target="_blank"><b>Read it on website</b></a>
      <?php endwhile;
  else :
      // no rows found
  endif; ?>
  <style type="text/css">
    .inner .main section{
      max-width: calc(100% - 20px);
    }
    #contentInfo section .press{
      display: block;
      margin-bottom: 5px;
    }
    #contentInfo section .link{
      margin-bottom: 25px;
      display: block;
    }
    #contentInfo section .press img{
      /*width: 100%;*/
      max-width: 100%;
    }
  </style>
<?php endif; ?>