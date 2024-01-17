<?php
get_header();

if(have_posts()){
    the_content();
}

get_footer();