<?php

function upmobile_post_meta(){
    /* translators: %s: Post Data */
    printf(
        esc_html__('Posted on %s', TEXT_DOMAIN ),
        '<a href="'. esc_url( get_permalink( ) ). '"><time data-time="'. esc_attr__( get_the_date('c') ) .
        '">'. esc_html( get_the_date() ). '</time></a>'
    );
    /* translators: %s: Post Author */
    printf(
        esc_html__(' By %s', TEXT_DOMAIN ),
        '<a href="'. esc_url( get_author_posts_url(get_the_author_meta('ID ')) ) . '">'.
        esc_html( get_the_author() ) . '</a>'
    );
}

function upmobile_read_more_link(){
    echo '<a href="'.  esc_url(  get_the_permalink() ). '" title="'. the_title_attribute( ['echo' => false ] ) .'">';
    /* translators: %s: Post Title */
    printf(
        __('Read More <span class="u-screen-reader-text"> About  %s</span>'),
        get_the_title()
    );
    echo '</a>';
}