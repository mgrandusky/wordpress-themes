<?php
// check if the repeater field has rows of data
if( have_rows('sponsor_otd') ) : ?>
<h2>Seminar Area and Exhibit Hall Sponsor of the Day</h2>
<br>
    <div class="sponsors">
    <?php // loop through the rows of data
        while ( have_rows('sponsor_otd') ) : the_row(); 
            // display a sub field value ?>
            <div>
                <a href="<?= get_sub_field('sponsor_url'); ?>">
                    <img src="<?= get_sub_field('sponsor_logo'); ?>">
                </a>
                <span style="display: block;"><?php the_sub_field('day_of_week'); ?></span>
            </div>  
    <?php 
        endwhile; ?>
    </div>

<?php 
else :
    // no rows found
endif;

if( have_rows('reg_area_and_lanyards') ) : ?>
<h2>Seminar Area and Exhibit Hall Sponsor of the Day</h2>
<br>
    <div class="sponsors">
    <?php // loop through the rows of data
        while ( have_rows('reg_area_and_lanyards') ) : the_row(); 
            // display a sub field value ?>
            <div>
                <a href="<?= get_sub_field('sponsor_url'); ?>">
                    <img src="<?= get_sub_field('sponsor_logo'); ?>">
                </a>
                <span style="display: block;"><?php the_sub_field('day_of_week'); ?></span>
            </div>  
    <?php 
        endwhile; ?>
    </div>

<?php 
else :
    // no rows found
endif;

if( have_rows('aisle_signs') ) : ?>
<h2>Seminar Area and Exhibit Hall Sponsor of the Day</h2>
<br>
    <div class="sponsors">
    <?php // loop through the rows of data
        while ( have_rows('aisle_signs') ) : the_row(); 
            // display a sub field value ?>
            <div>
                <a href="<?= get_sub_field('sponsor_url'); ?>">
                    <img src="<?= get_sub_field('sponsor_logo'); ?>">
                </a>
                <span style="display: block;"><?php the_sub_field('day_of_week'); ?></span>
            </div>  
    <?php 
        endwhile; ?>
    </div>

<?php 
else :
    // no rows found
endif;

if( have_rows('') ) : ?>
<h2>Seminar Area and Exhibit Hall Sponsor of the Day</h2>
<br>
    <div class="sponsors">
    <?php // loop through the rows of data
        while ( have_rows('') ) : the_row(); 
            // display a sub field value ?>
            <div>
                <a href="<?= get_sub_field('sponsor_url'); ?>">
                    <img src="<?= get_sub_field('sponsor_logo'); ?>">
                </a>
                <span style="display: block;"><?php the_sub_field('day_of_week'); ?></span>
            </div>  
    <?php 
        endwhile; ?>
    </div>

<?php 
else :
    // no rows found
endif;

if( have_rows('sidewalk_billboards') ) : ?>
<h2>Seminar Area and Exhibit Hall Sponsor of the Day</h2>
<br>
    <div class="sponsors">
    <?php // loop through the rows of data
        while ( have_rows('sidewalk_billboards') ) : the_row(); 
            // display a sub field value ?>
            <div>
                <a href="<?= get_sub_field('sponsor_url'); ?>">
                    <img src="<?= get_sub_field('sponsor_logo'); ?>">
                </a>
                <span style="display: block;"><?php the_sub_field('day_of_week'); ?></span>
            </div>  
    <?php 
        endwhile; ?>
    </div>

<?php 
else :
    // no rows found
endif;

if( have_rows('keynote_addresses') ) : ?>
<h2>Seminar Area and Exhibit Hall Sponsor of the Day</h2>
<br>
    <div class="sponsors">
    <?php // loop through the rows of data
        while ( have_rows('keynote_addresses') ) : the_row(); 
            // display a sub field value ?>
            <div>
                <a href="<?= get_sub_field('sponsor_url'); ?>">
                    <img src="<?= get_sub_field('sponsor_logo'); ?>">
                </a>
                <span style="display: block;"><?php the_sub_field('day_of_week'); ?></span>
            </div>  
    <?php 
        endwhile; ?>
    </div>

<?php 
else :
    // no rows found
endif;

if( have_rows('pizza_expo_mobile_app') ) : ?>
<h2>Seminar Area and Exhibit Hall Sponsor of the Day</h2>
<br>
    <div class="sponsors">
    <?php // loop through the rows of data
        while ( have_rows('pizza_expo_mobile_app') ) : the_row(); 
            // display a sub field value ?>
            <div>
                <a href="<?= get_sub_field('sponsor_url'); ?>">
                    <img src="<?= get_sub_field('sponsor_logo'); ?>">
                </a>
                <span style="display: block;"><?php the_sub_field('day_of_week'); ?></span>
            </div>  
    <?php 
        endwhile; ?>
    </div>

<?php 
else :
    // no rows found
endif;

if( have_rows('world_pizza_games_gold_sponsorship') ) : ?>
<h2>Seminar Area and Exhibit Hall Sponsor of the Day</h2>
<br>
    <div class="sponsors">
    <?php // loop through the rows of data
        while ( have_rows('world_pizza_games_gold_sponsorship') ) : the_row(); 
            // display a sub field value ?>
            <div>
                <a href="<?= get_sub_field('sponsor_url'); ?>">
                    <img src="<?= get_sub_field('sponsor_logo'); ?>">
                </a>
                <span style="display: block;"><?php the_sub_field('day_of_week'); ?></span>
            </div>  
    <?php 
        endwhile; ?>
    </div>

<?php 
else :
    // no rows found
endif;

if( have_rows('wpg_silver_sponsorship') ) : ?>
<h2>Seminar Area and Exhibit Hall Sponsor of the Day</h2>
<br>
    <div class="sponsors">
    <?php // loop through the rows of data
        while ( have_rows('wpg_silver_sponsorship') ) : the_row(); 
            // display a sub field value ?>
            <div>
                <a href="<?= get_sub_field('sponsor_url'); ?>">
                    <img src="<?= get_sub_field('sponsor_logo'); ?>">
                </a>
                <span style="display: block;"><?php the_sub_field('day_of_week'); ?></span>
            </div>  
    <?php 
        endwhile; ?>
    </div>

<?php 
else :
    // no rows found
endif;

if( have_rows('ipc_co-sponsors') ) : ?>
<h2>Seminar Area and Exhibit Hall Sponsor of the Day</h2>
<br>
    <div class="sponsors">
    <?php // loop through the rows of data
        while ( have_rows('ipc_co-sponsors') ) : the_row(); 
            // display a sub field value ?>
            <div>
                <a href="<?= get_sub_field('sponsor_url'); ?>">
                    <img src="<?= get_sub_field('sponsor_logo'); ?>">
                </a>
                <span style="display: block;"><?php the_sub_field('day_of_week'); ?></span>
            </div>  
    <?php 
        endwhile; ?>
    </div>

<?php 
else :
    // no rows found
endif;

if( have_rows('icp_preferred_products') ) : ?>
<h2>Seminar Area and Exhibit Hall Sponsor of the Day</h2>
<br>
    <div class="sponsors">
    <?php // loop through the rows of data
        while ( have_rows('icp_preferred_products') ) : the_row(); 
            // display a sub field value ?>
            <div>
                <a href="<?= get_sub_field('sponsor_url'); ?>">
                    <img src="<?= get_sub_field('sponsor_logo'); ?>">
                </a>
                <span style="display: block;"><?php the_sub_field('day_of_week'); ?></span>
            </div>  
    <?php 
        endwhile; ?>
    </div>

<?php 
else :
    // no rows found
endif;

if( have_rows('20k_mega_bucks') ) : ?>
<h2>Seminar Area and Exhibit Hall Sponsor of the Day</h2>
<br>
    <div class="sponsors">
    <?php // loop through the rows of data
        while ( have_rows('20k_mega_bucks') ) : the_row(); 
            // display a sub field value ?>
            <div>
                <a href="<?= get_sub_field('sponsor_url'); ?>">
                    <img src="<?= get_sub_field('sponsor_logo'); ?>">
                </a>
                <span style="display: block;"><?php the_sub_field('day_of_week'); ?></span>
            </div>  
    <?php 
        endwhile; ?>
    </div>

<?php 
else :
    // no rows found
endif;

if( have_rows('p2020_preferred_product') ) : ?>
<h2>Seminar Area and Exhibit Hall Sponsor of the Day</h2>
<br>
    <div class="sponsors">
    <?php // loop through the rows of data
        while ( have_rows('p2020_preferred_product') ) : the_row(); 
            // display a sub field value ?>
            <div>
                <a href="<?= get_sub_field('sponsor_url'); ?>">
                    <img src="<?= get_sub_field('sponsor_logo'); ?>">
                </a>
                <span style="display: block;"><?php the_sub_field('day_of_week'); ?></span>
            </div>  
    <?php 
        endwhile; ?>
    </div>

<?php 
else :
    // no rows found
endif;

if( have_rows('hand_sanitizer_stations') ) : ?>
<h2>Seminar Area and Exhibit Hall Sponsor of the Day</h2>
<br>
    <div class="sponsors">
    <?php // loop through the rows of data
        while ( have_rows('hand_sanitizer_stations') ) : the_row(); 
            // display a sub field value ?>
            <div>
                <a href="<?= get_sub_field('sponsor_url'); ?>">
                    <img src="<?= get_sub_field('sponsor_logo'); ?>">
                </a>
                <span style="display: block;"><?php the_sub_field('day_of_week'); ?></span>
            </div>  
    <?php 
        endwhile; ?>
    </div>

<?php 
else :
    // no rows found
endif;

if( have_rows('beer_and_bull') ) : ?>
<h2>Seminar Area and Exhibit Hall Sponsor of the Day</h2>
<br>
    <div class="sponsors">
    <?php // loop through the rows of data
        while ( have_rows('beer_and_bull') ) : the_row(); 
            // display a sub field value ?>
            <div>
                <a href="<?= get_sub_field('sponsor_url'); ?>">
                    <img src="<?= get_sub_field('sponsor_logo'); ?>">
                </a>
                <span style="display: block;"><?php the_sub_field('day_of_week'); ?></span>
            </div>  
    <?php 
        endwhile; ?>
    </div>

<?php 
else :
    // no rows found
endif;

if( have_rows('pe_block_party') ) : ?>
<h2>Seminar Area and Exhibit Hall Sponsor of the Day</h2>
<br>
    <div class="sponsors">
    <?php // loop through the rows of data
        while ( have_rows('pe_block_party') ) : the_row(); 
            // display a sub field value ?>
            <div>
                <a href="<?= get_sub_field('sponsor_url'); ?>">
                    <img src="<?= get_sub_field('sponsor_logo'); ?>">
                </a>
                <span style="display: block;"><?php the_sub_field('day_of_week'); ?></span>
            </div>  
    <?php 
        endwhile; ?>
    </div>

<?php 
else :
    // no rows found
endif;
?>

<style type="text/css">
    .sponsors{
        display: flex;
        align-content: space-between;
        justify-content: flex-start;
        align-items: flex-end;
        flex-flow: wrap row;
    }
    .sponsors div {
        /*display: block;*/
        width: calc(25% - 10px);
        margin: 0 5px;
    }
    .sponsors div a{
        display: block;
    }
    .sponsors div a img{
        width: 100%;
        height: auto;
    }
    .sponsors div span{
        display: block;
        text-align: center;
        margin: 5px 0;
    }
</style>