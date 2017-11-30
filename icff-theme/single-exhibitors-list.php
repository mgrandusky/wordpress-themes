<?php
/*
Template Name Posts: Exhibitors List
*/
?>
<?php

include("database-details.php");

try {
    $pdo = new PDO('mysql:host='. $hostname .';dbname=' . $database . ';charset=utf8;', $user, $password);
} catch(PDOException $e) {
    $error = "Unable to connect to database.";
    die($error);
    exit();
}

?>

<?php get_header(); ?>

<style type="text/css">
#exhibitor-list{
    width: 100%;
    background-color: #e3e3e4;
}
#exhibitor-list form{
    padding: 5px;
}
#exhibitor-list form > * {
    float: left;
}
#exhibitor-list form input{
    height: 50px;
    margin: 3px;
    padding: 5px;
}
#exhibitor-list form div.floor{
    display: inline-block;
    overflow: hidden;
    border: 1px solid #aaa;
    width: 19%;
    height: 50px;
    margin: 3px;
}
#exhibitor-list form div.category{
    overflow: hidden;
    display: inline-block;
    border: 1px solid #aaa;
    width: 19%;
    height: 50px;
    margin: 3px;
}
#exhibitor-list form input[name="terms"]{
    width: 33%;
    border: 1px solid #aaa;

}
#exhibitor-list form select[name="floor"]{
    width: 112%;
    height: 50px;
    /*margin: 5px;*/
}
#exhibitor-list form select[name="category"]{
    width: 112%;
    height: 50px;

    /*margin: 5px;*/
}
#exhibitor-list form select{
    background-image: url('<?php bloginfo('stylesheet_directory'); ?>/img/select-d.png');
    background-repeat: no-repeat;
    background-position: 86% 50%;
    border: none;
    -webkit-appearance:none;
    border-radius: 0;
    padding-left: 5px;
}
#exhibitor-list form select option{
    width: 100%;
    height: 50px;
}
#exhibitor-list form input[type="submit"]{
    width: 14%;
    border: 0;
    background-color: #ff5000;
    color: #fff;
}
#exhibitor-list form .reset{
    width: 11%;
    border: 0;
    color: #FFF;
    border-radius: 0px;
    border: none;
    background: #333333;
    outline: 0;
    font-family: 'PT Sans';
    height: 50px;
    margin-top: 3px;
}
#exhibitor-list ul{
    width: 100%;
    margin: 0;
}
#exhibitor-list > ul > li{
    background-color: #f4f4f4;
}
#exhibitor-list > ul > li:nth-of-type(2n){
    background-color: #fff;
}
#exhibitor-list ul li{
    list-style: none;
}
#exhibitor-list > ul > li > div:nth-of-type(1){
    border: 1px solid #ccc;
    padding: 0px;
    cursor: pointer;

}
#exhibitor-list > ul > li.ex-header > div{
    border: 1px solid #ccc;
    border-top: 0;
    padding: 10px;
    display: inline-block;
    float: left;
    font-weight: bold;
}

#exhibitor-list > ul > li > div > span{
    height: 100%;
    padding: 10px;
    display: inline-block;
    float: left;
    cursor: pointer;
    padding-top: 15px;
}
#exhibitor-list > ul > li > div > span:nth-of-type(2){
    border-left: 2px solid #ccc;
}
 #exhibitor-list ul li.ex-header:hover > div{
        background-color: #f4f4f4;
        font-weight: bold;
    }
#exhibitor-list > ul > li:hover > div:nth-of-type(1) {
    background-color: #000;
    color: #fff;
}
#exhibitor-list ul li.ex-header:hover > div{
        background-color: #f4f4f4;
        color:#000;
        font-weight: bold;
    }
#exhibitor-list > ul > li > span.open-detail{
    background-color: #000;
    color: #fff;
}
#exhibitor-list ul li.ex-header{
    /*background-color: #f4f4f4;*/
    font-weight: bold;
}
#exhibitor-list ul .ex-header:hover > div{
    background-color: #f4f4f4;
    font-weight: bold;
    color: #000;
}
#exhibitor-list > ul > li > div:nth-of-type(1){
        width: 100%;
}
#exhibitor-list > ul > li.ex-header > div:nth-of-type(1){
    width: 84%;
}
#exhibitor-list > ul > li.ex-header > div:nth-of-type(2){
    width: 16%;
}

#exhibitor-list > ul > li > div > span:nth-of-type(1){
    width: 84%;
    font-weight: bold;

}
#exhibitor-list > ul > li > div > span:nth-of-type(2){
    width: 16%;
    
}
#exhibitor-list .detail{
    padding: 10px;
    clear: both;
    background-color: #fff;
    border: 1px solid #ccc;
    border-top: none;
    width: 100%!important;
    /*height: 240px;*/
    display: none;
}
#exhibitor-list .detail .logo{
    height: 100%;
    float: left;
    width: 36%;
    border-right: solid #f4f4f4 2px;
    text-align: center;
    padding: 6% 0;
}
#exhibitor-list .detail .logo img{
    max-width: 288px;
    width: 96%;
    max-height: 72px;
    height: auto;
    display: inline-block;
    margin: auto;
    vertical-align: middle;
}
#exhibitor-list .detail .logo span{
    display: inline-block;
    vertical-align: middle;
    height: 100%;
}

#exhibitor-list .detail ul{
    width: 63%;
    float: left;
    list-style-type: none;
}
#exhibitor-list .detail ul li{
    display: block;
    margin: 1%;
    width: 48%;
    float: left;
    font-weight: normal;
    font-family: 'pt sans', arial, sans-serif;
    list-style-position: inside;
    /*list-type:none;*/
    list-style:none;
    list-style-type: none;
}
#exhibitor-list .detail ul li span{
    font-weight: bold;
}
.filter-letter{
    float: right;
    margin-right: 15px;
}
.filter-letter > a{
    color: #888888;
}
.filter-letter > a:hover{
    color: #333;
    text-decoration: none;
}
.filter-letter a{
    cursor: pointer;
    text-decoration: none;
}
.sort-letters{
    width: 300px;
    position: absolute;
    background-color: #fff;
    border: 1px solid #ccc;
    display: none;
}
.sort-letters div{
    background-color: #fff;
    padding: 10px;
}
.sort-letters a{
    text-decoration: underline;
}
.sort-letters p{
    background-color: #f5f5f5;
    color: #333;
    padding: 10px!important;
    margin: 0 !important;
    font-family: 'pt sans';
}
#exhibitor-list ul li.ex-header a{}
#exhibitor-list ul li.ex-header a span{
    color: #888888;
    position: relative;
    padding-left: 18px;
    float: right;
}
#exhibitor-list ul li.ex-header .print img{
    opacity: 0.6;
    position: absolute;
    top: 2px;
    left: -1px;
}
#exhibitor-list ul li.ex-header a:nth-of-type(2) img{
    opacity: 1;
    position: relative;
}
#exhibitor-list ul li.ex-header a:hover span{
    color: #333;
}
#exhibitor-list ul li.ex-header a:hover img{
    opacity: 1;
    
}
.sort-letters .letter{
    display: inline-block;
    margin: 10px;
    width: 5px;
}

/*
@media screen and (min-width: 767px) and (max-width: 959px){
    #exhibitor-list .detail{
        height: 200px;
    }
    #exhibitor-list .detail .logo img {
        
        width: 97%;
    }
}
*/
@media screen and (max-width: 959px){
    #exhibitor-list ul li.ex-header{
        height: 60px;
    }
    #exhibitor-list > ul > li > div > span:nth-of-type(1){
        width: 75%;
    }
    #exhibitor-list > ul > li > div > span:nth-of-type(2){
        width: 25%;
    }
     #exhibitor-list > ul > li > div:nth-of-type(1){
                width: 100%;
        }
        #exhibitor-list > ul > li.ex-header > div:nth-of-type(1){
            width: 75%;
        }
        #exhibitor-list > ul > li.ex-header > div:nth-of-type(2){
            width: 25%;
        }
    #exhibitor-list form select[name="category"] {
            height: 50px;
            width: 113% !important;
            margin:0px !important;
            padding:3px !important;
        }
   #exhibitor-list form div.category {
        margin:0px !important;
    }
    #exhibitor-list form select[name="floor"] {
            height: 50px;
            width: 113% !important;
            margin:0px !important;
            padding:3px !important;
        }
   #exhibitor-list form div.floor {
        margin: 0px !important;
        margin-bottom: 5px !important;
    }
    #exhibitor-list form input, #exhibitor-list form select{
        width: 100%!important;
        display: block;
        margin: 5px 0px !important;
    }
    #exhibitor-list .reset {
        width: 100%!important;
        display: block;
        margin: 5px 0px !important;
    }
    #exhibitor-list form div.floor {
        display: inline-block;
        overflow: hidden;
        border: 1px solid #AAA;
        width: 100%;
        height: 50px;
        margin: 3px;
    }
    #exhibitor-list form div.category {
        display: inline-block;
        overflow: hidden;
        border: 1px solid #AAA;
        width: 100%;
        height: 50px;
        margin: 3px;
    }
    #exhibitor-list > ul > li > div{
        height: 100%;
    }
    #exhibitor-list .detail .logo img {
    margin-bottom:15px;
    }
    #exhibitor-list .detail {
        padding: 10px;
        clear: both;
        background-color: #fff;
        border: 1px solid #ccc;
        border-top: none;
        width: 100%!important;
        height: auto;
    }
    #exhibitor-list .detail .logo{
        float: none;
        width: 100%;
        border-right: none;
    }
    #exhibitor-list .detail ul {
        width: 100%;
        float: none;
        list-style-type: none;
    }
    #exhibitor-list .detail ul li {
        display: block;
        margin: 1%;
        width: 98%;
        float: none;
        list-style-type: none;
    }
    #exhibitor-list .detail .logo img{
        display: block;
    }
    #exhibitor-list .detail .logo span{
        display: none;
    }
}
@media screen and (max-width: 767px){
    #exhibitor-list ul li.ex-header {
        height: 80px;
    }
    #exhibitor-list .detail .logo img {
      max-width: 288px;
    }
    .ex-header div > span{
        display: block;
        float: none !important;
    }
    .filter-letter{
        width: 185px;
        float: none;
        display: block;
        float:right;
        text-align:right;
        margin:10px 0px;
    }
    .sort-letters {
        text-align:left;
    }
}
.loadmore {
color: #FFF;
border-radius: 0px;
border:none;
width: 50%;
height: 50px;
background: #ff5000;
outline: 0;
font-family: 'PT Sans'; 
}
 .loadbutton{
    padding-top:10px;
    text-align: center;
}
</style>
        <section id="main" class="cf">
            <div id="content">
                <article class="entry page">
                <h2 class="entry-title"><?php the_title(); ?></h2>
					<?php 
                    if ( have_posts() ) {
                        while ( have_posts() ) {
							
                            the_post(); 
                            //
                            ?>
						
                            <?php
                            // Post Content here
                            the_content();
                            //
                        } // end while
                    } // end if
                    ?>
                    <div id="exhibitor-list">
						<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
                        <form id="search" class="cf" action="<?php bloginfo('stylesheet_directory'); ?>/exhibitor-list.php">
                            <input name="terms" placeholder="Company or Keyword" type="text" value="<?php echo (isset($_POST['terms'])) ? $_POST['terms'] : ''; ?>">
                            <div class="floor">
                                <select name="floor">
                                    <option value="All Floors">Floor</option>
									<?php 
										$sql = "SELECT * FROM goexpo_exhibitors_floors order by `name` asc";
                                        $s = $pdo->prepare($sql);
                                        $s->execute();
										foreach ($s->fetchAll() as $floors_data) {
									?>
									<option value="<?php echo $floors_data['name'] ?>" <?php if($_POST['floor'] == $floors_data['name']){ echo 'selected'; } ?>><?php echo $floors_data['name'] ?></option>
								    <?php
									   }
									?>
                                </select>
                            </div>
                            <div class="category">
                                <select name="category">
                                    <option value="All Categories">Category</option>
									<?php 
										$sql = "SELECT * FROM goexpo_exhibitors_category order by `category` asc";
                                        $s = $pdo->prepare($sql);
                                        $s->execute();
										foreach ($s->fetchAll() as $categories_data) {
									?>
									<option value="<?php echo $categories_data['category'] ?>" <?php if($_POST['category'] == $categories_data['category']){ echo 'selected'; } ?>><?php echo $categories_data['category'] ?></option>
								    <?php
									   }
									?>
                                </select>
                            </div>
                            <input value="Submit" type="submit" class="submit">
							<button class="reset">Reset</button>
                        </form>
                        <ul class="exhibitors">
                            <?php include('exhibitor-list.php'); ?>
                        </ul>
                    </div>
					<div class="loadbutton" style="background-color:none;background:#fff"><button class="loadmore">Load More</button></div>
                </article>
            </div>
			<div id="script">
		        <script type="text/javascript">
		        $('document').ready(function(){
                    // form submit handler                        
                    $('form#search input[type="submit"]').click(function(){
                        $('form#search').unbind('submit').submit(function(e){
                            e.preventDefault();
                            $('.loadmore').hide();
                            $('.ex-header').hide();
                            $('ul.exhibitors').html('<li class="loading"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/loading.gif"/></li>');
                            var url = $('form#search').attr('action');
                            var myData = "";
                            myData = {
                                terms: $('form#search input[name="terms"]').val(),
                                floor: $('form#search select[name="floor"]').val(),
                                category: $('form#search select[name="category"]').val()
                            }
                            $.ajax({
                                type: 'POST',
                                url: url,
                                dataType: 'text',
                                data: myData,
                                success: function(response){
                                    $('ul.exhibitors').fadeIn('fast').html(response);
                                    if($('.exhibitors .exhibitor').length <= items_per_page) {
                                        $('.loadmore').hide();
                                    }
                                }
                            });
                        });
                    });

                    // form reset
                    $('.reset').on('click',function(e){
                        e.preventDefault();
                        $('.loadmore').hide();
                        $('ul.exhibitors').html('<li class="loading"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/loading.gif"/></li>');
                        $('form#search input[name="terms"]').val("");
                        $('form#search select[name="floor"]').val("All Floors");
                        $('form#search select[name="category"]').val("All Categories");
                        $('ul.exhibitors').load('<?php bloginfo('stylesheet_directory'); ?>/exhibitor-list.php');
                    });

                    //load more
                    $(".loadmore").click(function(){
                        $(".exhibitors .exhibitor:lt("+(displaycount+items_per_page+1)+")").show();
                        // if after adding another items_per_page, the displaycount would be greater than the number of records, add only what is not yet showing to the displaycount; otherwise, add another items_per_page.
                        displaycount = ((displaycount + items_per_page+1) > records) ? displaycount + (records - displaycount) : displaycount + items_per_page+1;
                        if(displaycount >= records) $(this).hide();
                    });
		        });
		        </script>
			</div>
            <?php get_sidebar(); ?>
        </section>
<?php get_footer(); ?>