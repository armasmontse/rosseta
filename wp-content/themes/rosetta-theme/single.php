<?php

get_header();

if (have_posts()) : while (have_posts()) : the_post();

    $obj = get_post_type_object( $post_type );


    $tags = get_the_tags() ?: [];

    if($tags) {
        $tags = array_map(function($tag) {
            return $tag->name;
        }, $tags);
    }

    $networks = [
    'facebook' => [
        'href' => 'https://www.facebook.com/sharer/sharer.php?u=' . get_the_permalink(),
        'name' => 'facebook'
    ],
    'twitter' => [
        'href' => 'https://twitter.com/intent/tweet?url=' . get_the_permalink() . '&text=' . get_the_title() . '&hashtags=' . implode(',', $tags),
        'name' => 'Twitter'
    ]
];

?>

<div class="single-post">

    Este es el single.php
    <br>
    <?php the_title(); ?>

</div>


<?php get_footer(); ?>