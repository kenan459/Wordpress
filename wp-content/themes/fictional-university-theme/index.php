<?php get_header(); 


while(have_posts()) {

    the_post(); ?>
    
    <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
        </a>
    </h2>

    <?php 

        the_content();  

    }

    get_footer();
    
?>



<!-- <?php
    $names = array('Brad', 'John', 'Jane', 'My name');
    $count = 0;

    while($count < count($names)) {
        echo "<li>name: $names[$count]</li>";
        $count++;
    }

    ?> -->


<!-- <?php 

    function myFunction($name, $type) {
        echo "<p>my function $name type $type</p>";
    }

    myFunction('one', 1);
    myFunction('two', 2);

?>

<h1><?php bloginfo('name'); ?></h1>
<h1><?php bloginfo('description'); ?></h1> -->