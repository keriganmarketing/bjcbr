<?php
/**
 * @package KMA
 * @subpackage kmaslim
 * @since 1.0
 * @version 1.2
 */
$headline = ($post->page_information_headline != '' ? $post->page_information_headline : $post->post_title);
$subhead  = ($post->page_information_subhead != '' ? $post->page_information_subhead : '');
$featuredPhoto = get_the_post_thumbnail( $post, 'post-thumbnail');
print_r($featuredPhoto);
include(locate_template('template-parts/partials/top.php'));
?>
    <div id="mid">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <section class="header section">
                <div class="header-container">
                    <div class="container">
                        <h1 class="title is-1"><?php echo $headline; ?></h1>
                        <?php echo($subhead != '' ? '<p class="subtitle">' . $subhead . '</p>' : null); ?>
                    </div>
                </div>
            </section>
            <?php include(locate_template('template-parts/partials/breadcrumbs.php')); ?>
            <section id="content" class="content section">
                <div class="container">
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
            <section class="section appointment-form">

                <?php include(locate_template('template-parts/partials/appointment-request.php')); ?>

            </section>
        </article>
    </div>
<?php include(locate_template('template-parts/partials/bot.php')); ?>
