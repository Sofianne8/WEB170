
                                                

                                                <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Consecutive by TEMPLATED</title>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css' />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="#">Consecutive</a></h1>
            </div>
            <div id="menu">
                <ul> <?php get_header(); ?>

                    <li class="current_page_item"><a href="#">Homepage</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <div id="banner">
            <div class="content"><img src="http://lorempixel.com/output/city-q-c-1000-400-9.jpg" width="1000" height="400" alt="" /></div>
        </div>
    </div>
    <!-- end #header -->
  
    </div>
    <div id="content">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <h2></h2>
             <p>Written on
                <time datetime="<?php the_time('Y-m-d'); ?>">
                    <?php the_time('M j'); ?>
                </time>
                by <?php the_author(); ?>
             <p><?php get_sidebar('nice-bar'); ?></p>
             </p>

            <
        </article>
    <?php endwhile; else: ?>
        <p>Sorry no posts</p>
    <?php endif; ?>
</div>        
    <div id="page">
        <div id="content">
            <div class="post">
                <h2 class="title"><a href="#">Welcome to Consecutive </a></h2>
                <div class="entry">
                    <p>This is <strong>Consecutive</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.   The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
                    <p>Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget, tempus et, tellus. Etiam neque. Vivamus consequat lorem at nisl. Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Duis pretium velit ac mauris. Proin eu wisi suscipit nulla suscipit interdum. Aenean lectus lorem, imperdiet at, ultrices eget, ornare et, wisi. Pellentesque adipiscing purus ac magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Consectetuer adipiscing elit. Nam pede erat, porta.<br />
                    </p>
                    <p class="links"><a href="#" class="more">Read More</a><a href="#" title="b0x" class="comments">Comments</a></p>
                </div>
            </div>
        </div>
        <!-- end #content -->
        <div id="sidebar">
            <ul>
                <li>
                    <h2>Categories</h2>
                    <ul>
                        <li><a href="#"><?php get_sidebar('nice-bar'); ?></a></li>
                        
                    </ul>
                </li>
            </ul>
        </div>
        <!-- end #sidebar -->
        <div style="clear: both;">&nbsp;</div>
    </div>
    <!-- end #page --> 
</div>
<div id="footer">
    <p><?php get_footer(); ?></a>.</p>
</div>
<!-- end #footer -->
</body>
</html>


