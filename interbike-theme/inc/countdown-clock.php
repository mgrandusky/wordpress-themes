
<?php
$displayCountdown = get_field('display_countdown_clock', 'option');

if ($displayCountdown == "Yes"){   
?>

<div id="countdown-clock" class="pe-counter countdown clock-container">
    <div class="wrapper clearfix clock-section">
        
        <div class="clock-left-col">
            <p><?php the_field('countdown_clock_text_1', 'option'); ?></p>                
        </div> 

        <div id="countdown_dashboard"></div>

        <div class="clock-right-col">
            
            <p><?php the_field('countdown_clock_text_2', 'option'); ?></p>
            
        </div>

        <div class="register-button">
            <p class="button-display">
                <a href="<?php the_field('countdown_inquire_now_link', 'option'); ?>" class="reg-btn-rnd" target="_blank">
                    <?php the_field('countdown_inquire_now_text', 'option'); ?>
                </a>
            </p>
        </div> 

    </div>
</div>

<?
}
?>      