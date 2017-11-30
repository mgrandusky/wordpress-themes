<!-- START #right -->
<aside id="right" class="one-third column">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('404') ) : ?>
        <div class="quick-links clearfix">
            <a href="http://registration3.experientevent.com/ShowKBI141/Default.aspx?flowcode=att" target="_blank" class="big-btn att">Register to Attend</a>
            <a href="#" class="big-btn exh">Sign up to Exhibit</a>
            
            <ul class="clearfix">
                <li class="list"><a href="<?php echo home_url(); ?>/show/exhibitor-list"><span>Exhibitor List</span></a></li>
                <li class="floor"><a href="http://n1b.goexposoftware.com/events/kbis14/goExpo/floorPlan/viewFloorPlan.php" target="_blank"><span>Floor Plan</span></a></li>
            </ul>
            
            <a href="http://www.nkba.org/Participate/Join/Why.aspx" target="_blank" class="membership">Become an NKBA Member</a>
        </div>
        
    <?php endif; ?>
    
</aside>
<!-- END #right -->