<?php
/*
Template Name Posts: The Market Seminars
*/
?>
	
<?php get_header(); ?>
<style>
table {
    width: 100%;
}
table {
    background-color: transparent;
}
table {
    border-collapse: collapse;
    border-spacing: 0px;
}
table tr td {
    padding: 13px;
    font-weight: 400 !important;
    width: 50%;
}
table tr td {
    padding: 13px;
    font-weight: 600;
    width: 50%;
}
td, th {
    padding: 0px;
}
table tr:nth-of-type(2n) {
    background-color: #F5F5F5;
}
table tr {
    border-bottom: 1px solid #EAEAEA;
}
.rwd-table tr {
    border-bottom: 1px solid #DDD;
}
.hentry h2 {
    font-size: 1.5em;
    color: #000;
    line-height: 26px;
    text-transform: uppercase;
    margin: 0px;
    margin-top: 15px;
}
</style>
<div id="main" class="cf">
    <div id="content">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
         <article class="hentry gallery">
            <h2 class="entry-title"><?php the_title(); ?></h2>

			<div id="tabs">
                <ul>
                    <li><a href="#tabs-1">Seminar Overview</a></li>
                    <li><a href="#tabs-2">At-A-Glance</a></li>
                    <li><a href="#tabs-3">Seminar Details</a></li>
                   
                </ul>
                <div id="tabs-1">
                    <?php echo the_field('seminar_overview'); ?>
				</div>
                <div id="tabs-2">
                    <?php echo the_field('at-a-glance'); ?>
                </div>
                <div id="tabs-3">

                </div>
			
            </div>
        </article>
		<?php endwhile; ?>
		
		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>