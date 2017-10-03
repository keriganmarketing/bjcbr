<?php

use Includes\Modules\Slider\BulmaSlider;
use Includes\Modules\Team\Physicians;

/**
 * @package KMA
 * @subpackage kmaslim
 * @since 1.0
 * @version 1.2
 */
$headline = ($post->page_information_headline != '' ? $post->page_information_headline : $post->post_title);
$subhead  = ($post->page_information_subhead != '' ? $post->page_information_subhead : '');

include(locate_template('template-parts/partials/top.php'));
?>
<div id="mid">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="section-wrapper home-slider">

            <bulma-slider>
                <?php
                $slider = new BulmaSlider();
                echo $slider->getSlider('home-page-slider');
                ?>
            </bulma-slider>

        </div>

        <div class="section-wrapper home-page-text">

            <div class="container">
                <div class="content is-centered">
                    <h1 class="title is-1"><?php echo $headline; ?></h1>
                    <?php echo($subhead != '' ? '<p class="subtitle">' . $subhead . '</p>' : null); ?>
                    <?php the_content(); ?>
                </div>
            </div>

        </div>

        <div class="section-wrapper doctor-carousel is-centered">
            <div class="container">
                <slick ref="slick" :options="slickOptions">
                    <?php
                    $physicians = new Physicians();
                    foreach ($physicians->getPhysicians() as $num => $physician) { ?>
                        <div class="slick-item">
                            <?php include(locate_template('template-parts/partials/mini-physician-thumb.php')); ?>
                        </div>
                    <?php } ?>
                </slick>
                <a href="/physicians/" class="button is-primary is-outlined">Meet Our Doctors</a>
            </div>
        </div>

        <div class="section-wrapper specialties-area">

            <div class="patient-center-actions">
                <div class="container">
                    <div class="patient-center-action-container columns">
                        <div class="patient-portal column">
                            <a href="#" class="portal-button">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72.01 49.01"><path d="M47.44,20.79H1.85A1.72,1.72,0,0,0,.13,22.51V36.25A1.72,1.72,0,0,0,1.85,38H47.44a1.72,1.72,0,0,0,1.71-1.72V22.51A1.72,1.72,0,0,0,47.44,20.79Zm.28,15.46a.28.28,0,0,1-.28.28H1.85a.28.28,0,0,1-.28-.28V22.51a.28.28,0,0,1,.28-.28H47.44a.28.28,0,0,1,.28.28ZM1.85,17.45H66.61a1.85,1.85,0,0,0,1.85-1.86V1.86A1.85,1.85,0,0,0,66.61,0H1.85A1.85,1.85,0,0,0,0,1.86V15.59A1.85,1.85,0,0,0,1.85,17.45ZM1.7,1.86a.15.15,0,0,1,.14-.14H66.61a.15.15,0,0,1,.14.14V15.59a.15.15,0,0,1-.14.14H1.85a.15.15,0,0,1-.14-.14Zm9.4,25.22-1.68,1,0-2H7.62l0,2L6,27.05,5,28.7l1.72.94L5,30.6,6,32.23l1.68-1,0,2H9.46l0-2,1.68,1L12,30.6l-1.75-1L12,28.7Zm7.92,0-1.68,1,0-2H15.53l0,2-1.68-1L13,28.7l1.72.94L13,30.6l.94,1.63,1.68-1,0,2h1.85l0-2,1.68,1L20,30.6l-1.75-1L20,28.7Zm7.92,0-1.68,1,0-2H23.45l0,2-1.68-1-.94,1.65,1.72.94-1.72,1,.94,1.63,1.68-1,0,2H25.3l0-2,1.68,1,.94-1.65-1.75-1,1.75-.94Zm7.92,0-1.68,1,0-2H31.37l0,2-1.68-1-.94,1.65,1.72.94-1.72,1,.94,1.63,1.68-1,0,2h1.85l0-2,1.68,1,.94-1.65-1.75-1,1.75-.94Zm7.92,0-1.68,1,0-2H39.28l0,2-1.68-1-.94,1.65,1.72.94-1.72,1,.94,1.63,1.68-1,0,2h1.85l0-2,1.68,1,.94-1.65-1.75-1,1.75-.94ZM71.9,38.58,67.39,34.4a8.63,8.63,0,1,0-8,3.51L59.3,44a.33.33,0,0,0,.54.27l3.92-3.14,3.2,7.5a.61.61,0,0,0,.81.32l1.94-.84a.62.62,0,0,0,.32-.81l-3.21-7.52,4.89-.63A.34.34,0,0,0,71.9,38.58Zm-5.57-5.16-6.14-5.7a.33.33,0,0,0-.56.24l-.17,8.49a7.23,7.23,0,1,1,6.88-3ZM6.8,11.22a3.2,3.2,0,0,0,1.48.33,3.14,3.14,0,0,0,1.47-.33,2.29,2.29,0,0,0,1-.93,2.83,2.83,0,0,0,.34-1.41V5.25H9.45V8.88a1.33,1.33,0,0,1-.32.94,1.09,1.09,0,0,1-.84.35,1.16,1.16,0,0,1-.87-.35,1.29,1.29,0,0,1-.34-.93V5.25H5.47V8.88a2.77,2.77,0,0,0,.35,1.41A2.33,2.33,0,0,0,6.8,11.22Zm7.74-1a3,3,0,0,1-1.13-.26,3.87,3.87,0,0,1-1.1-.68l-.62,1.26a4.16,4.16,0,0,0,1.31.74,4.54,4.54,0,0,0,1.52.27,3.45,3.45,0,0,0,1.26-.22,2,2,0,0,0,.89-.66A1.72,1.72,0,0,0,17,9.6a1.58,1.58,0,0,0-.3-1A1.85,1.85,0,0,0,16,8a8.48,8.48,0,0,0-1.06-.37l-.65-.22a1.14,1.14,0,0,1-.37-.22.44.44,0,0,1-.15-.34.36.36,0,0,1,.17-.32.86.86,0,0,1,.47-.11,3.08,3.08,0,0,1,.93.19,5.37,5.37,0,0,1,1,.48L17,5.83a4.32,4.32,0,0,0-1.14-.51,4.66,4.66,0,0,0-1.32-.19,3.33,3.33,0,0,0-1.29.23,1.93,1.93,0,0,0-.86.67,1.71,1.71,0,0,0-.3,1,1.51,1.51,0,0,0,.29,1,1.85,1.85,0,0,0,.71.55,8,8,0,0,0,1,.36l.65.2a1.13,1.13,0,0,1,.39.22.46.46,0,0,1,.15.35.43.43,0,0,1-.21.39A1,1,0,0,1,14.54,10.21Zm8.21-.06H19.42V9h2.93V7.69H19.42V6.54h3.25V5.25H17.82v6.18h4.94Zm2.59-.42h1.19l.9,1.71h1.82L28,9.41a1.94,1.94,0,0,0,.82-.79,2.44,2.44,0,0,0,.28-1.2,2,2,0,0,0-.67-1.6,2.84,2.84,0,0,0-1.89-.57H23.74v6.18h1.61Zm0-3.18h1.17a1.09,1.09,0,0,1,.76.24.89.89,0,0,1,.27.69.92.92,0,0,1-.27.71,1.08,1.08,0,0,1-.76.25H25.34Zm9.28,5.83H29.49v.86h5.13Zm2.1-4.63,2.79,3.69h1.4V5.25H39.42V9l-2.8-3.72H35.22v6.18h1.5Zm6.83,2.6h2.66l.42,1.09h1.71L45.77,5.25H44.12l-2.64,6.18h1.65ZM44.9,6.9l.84,2.2H44Zm5.43.62,1.58,3.3h1l1.57-3.3v3.91h1.42V5.25H54.2L52.42,8.87,50.64,5.25H48.9v6.18h1.43Zm11.75,2.63H58.74V9h2.93V7.69H58.74V6.54H62V5.25H57.14v6.18h4.94Z" transform="translate(0)"/></svg>
                                </span>
                                <span class="button-label">PATIENT PORTAL LOGIN</span>
                            </a>
                        </div>
                        <div class="patient-registration column">
                            <a href="#" class="portal-button">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47 56"><path d="M10.22,13.92h18a1.8,1.8,0,0,0,1.8-1.79V7.6a1.8,1.8,0,0,0-1.8-1.79H24.88c0-.07,0-.14,0-.21a5.65,5.65,0,0,0-11.31,0c0,.07,0,.14,0,.21H10.22A1.8,1.8,0,0,0,8.41,7.6v4.53A1.8,1.8,0,0,0,10.22,13.92Zm9-12.62A1.52,1.52,0,1,1,17.7,2.83,1.53,1.53,0,0,1,19.24,1.3ZM32.71,19H5v.64H32.71Zm0,3.6H5v.64H32.71Zm0,3.6H5v.64H32.71Zm0,3.6H5v.64H32.71Zm0,3.6H5V34H32.71ZM5,37.59H32.71v-.64H5Zm3.27,8.78a34.16,34.16,0,0,0,1.32-3.22c.2-.58-.68-.92-1-.41A11.85,11.85,0,0,0,7.09,46.4a33,33,0,0,1-2.25,3.89c-.39.57.55,1.11.93.54q.86-1.27,1.58-2.61a1.52,1.52,0,0,0,.44.41,2.25,2.25,0,0,0,2.5-.38A20.91,20.91,0,0,0,12.86,46a14.6,14.6,0,0,1-.54,1.56L11.54,50a.54.54,0,0,0,.66.66c2.17-.75,3.76-4,6.36-2.53.93.53,1.28,1.7,2.3,2.11a1.62,1.62,0,0,0,2-.56c.39-.57-.54-1.11-.93-.54-.57.84-2.17-1.48-2.61-1.77a4,4,0,0,0-2.58-.65c-1.67.16-2.58,1.49-3.82,2.36.27-.84.54-1.69.8-2.54s.43-1.47-.2-2a.55.55,0,0,0-.76,0c-.56.58-1.13,1.13-1.73,1.67s-1.33,1.41-2,1.5q-.65.42-.91-.6l.08-.5C8.26,46.52,8.28,46.44,8.29,46.36ZM46.63,26.67a1.26,1.26,0,0,0-1.77,0L38.5,33V11.66a2.76,2.76,0,0,0-2.77-2.75H31.88v1.92h3.85a.83.83,0,0,1,.84.83V34.89l-5.71,5.66H5v.64H30.21l-4.28,4.24a22.66,22.66,0,0,0-1.75,3.42,21.8,21.8,0,0,0,3.53-1.67l8.86-8.78V53.25a.83.83,0,0,1-.84.83h-33a.83.83,0,0,1-.84-.83V11.66a.83.83,0,0,1,.84-.83H6.62V8.91H2.77A2.76,2.76,0,0,0,0,11.66v41.6A2.76,2.76,0,0,0,2.77,56h33a2.76,2.76,0,0,0,2.77-2.75V36.48l8.13-8.05A1.23,1.23,0,0,0,46.63,26.67Z" transform="translate(0 0)"/></svg>
                                </span>
                                <span class="button-label">PATIENT REGISTRATION FORMS</span>
                            </a>
                        </div>
                        <div class="schedule-appointment column">
                            <a href="#" class="portal-button">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51 55"><path d="M48,5.34H44V7.46h4a.92.92,0,0,1,.92.91V20.05H2.13V8.38A.92.92,0,0,1,3,7.46H7V5.34H3a3,3,0,0,0-3,3V52a3,3,0,0,0,3,3H48a3,3,0,0,0,3-3V8.38A3,3,0,0,0,48,5.34Zm0,47.54H3A.92.92,0,0,1,2.13,52V22.17H48.87V52A.92.92,0,0,1,48,52.88Z"/><path d="M33.05,5.34H17.95V7.46h15.1Z"/><path d="M10.43,34.19h4.13V30.07H10.43Z"/><path d="M19.1,34.19h4.13V30.07H19.1Z"/><path d="M27.77,34.19H31.9V30.07H27.77Z"/><path d="M36.44,34.19h4.13V30.07H36.44Z"/><path d="M10.43,43.61h4.13V39.49H10.43Z"/><path d="M19.1,43.61h4.13V39.49H19.1Z"/><path d="M27.77,43.61H31.9V39.49H27.77Z"/><path d="M36.44,43.61h4.13V39.49H36.44Z"/><path d="M12.52,14.61a4.11,4.11,0,0,0,4.11-4.1V4.1a4.11,4.11,0,0,0-8.22,0v6.41A4.11,4.11,0,0,0,12.52,14.61ZM10.44,4.1a2.08,2.08,0,0,1,4.16,0v6.41a2.08,2.08,0,0,1-4.16,0Z"/><path d="M38.48,14.61a4.11,4.11,0,0,0,4.11-4.1V4.1a4.11,4.11,0,0,0-8.22,0v6.41A4.11,4.11,0,0,0,38.48,14.61ZM36.39,4.1a2.08,2.08,0,0,1,4.16,0v6.41a2.08,2.08,0,0,1-4.16,0Z"/></svg>
                                </span>
                                <span class="button-label">SCHEDULE AN APPOINTMENT</span>
                            </a>
                        </div>
                        <div class="faqs column">
                            <a href="#" class="portal-button">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 51 51"><path d="M43.53,7.48A25.5,25.5,0,0,0,5.78,41.67a9.57,9.57,0,0,1-4,4.65,2.38,2.38,0,0,0,.68,4.48,12.16,12.16,0,0,0,1.81.14,16.5,16.5,0,0,0,9.17-3A25.5,25.5,0,0,0,43.53,7.48Zm-2,34A22.64,22.64,0,0,1,14,45a1.44,1.44,0,0,0-1.61.1,13.74,13.74,0,0,1-8,2.94A14.52,14.52,0,0,0,8.8,42a1.45,1.45,0,0,0-.25-1.54,22.62,22.62,0,1,1,32.94,1Zm0,0"/><path d="M19.79,15.57a8.09,8.09,0,0,1,6-2.17A8.89,8.89,0,0,1,31.45,15a5.53,5.53,0,0,1,2.07,4.6,5.42,5.42,0,0,1-.86,3.14,14.72,14.72,0,0,1-2.5,2.67,14.85,14.85,0,0,0-2.1,2.23,3.78,3.78,0,0,0-.68,2.26H22.65a6.94,6.94,0,0,1,.41-2.49,6.07,6.07,0,0,1,1-1.76,21.78,21.78,0,0,1,1.51-1.59A10.72,10.72,0,0,0,27.1,22.4a3,3,0,0,0,.5-1.73q0-2.17-2.42-2.17-2.67,0-2.71,3.17l-4.88,0A8.3,8.3,0,0,1,19.79,15.57ZM27.1,33.46A3,3,0,0,1,28,35.67a3,3,0,0,1-.86,2.23,3,3,0,0,1-2.21.87,2.91,2.91,0,0,1-2.17-.87,3.33,3.33,0,0,1,0-4.44,2.93,2.93,0,0,1,2.19-.85A3,3,0,0,1,27.1,33.46Z"/></svg>
                                </span>
                                <span class="button-label">FREQUENTLY ASKED QUESTIONS</span>
                            </a>
                        </div>
                        <div class="patient-survey column">
                            <a href="#" class="portal-button">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 56"><path d="M10.08,13.92H27.89a1.79,1.79,0,0,0,1.78-1.79V7.6a1.79,1.79,0,0,0-1.78-1.79H24.56c0-.07,0-.14,0-.21a5.58,5.58,0,1,0-11.16,0c0,.07,0,.14,0,.21H10.08A1.79,1.79,0,0,0,8.3,7.6v4.53A1.79,1.79,0,0,0,10.08,13.92ZM19,1.3a1.52,1.52,0,1,1-1.52,1.52A1.52,1.52,0,0,1,19,1.3Z"/><path d="M32.31,22.7H14.15v1.92H32.31Z"/><path d="M4.82,22.17,7.55,26l.77-1.1c1.57-2.24,3.19-4.36,4.93-6.46l-1.47-1.23C10.3,19,8.9,20.78,7.54,22.66L6.37,21Z"/><path d="M32.31,33.91H14.15v1.92H32.31Z"/><path d="M11.79,28.37c-1.5,1.8-2.9,3.61-4.25,5.49L6.37,32.25,4.82,33.37l2.73,3.8.77-1.1c1.57-2.24,3.18-4.36,4.93-6.46Z"/><path d="M14.15,46.79H32.31V44.87H14.15Z"/><path d="M6.37,43.21,4.82,44.34l2.73,3.8L8.33,47c1.57-2.24,3.19-4.36,4.93-6.46l-1.47-1.23c-1.5,1.8-2.89,3.61-4.25,5.49Z"/><path d="M35.26,8.91h-3.8v1.92h3.8a.83.83,0,0,1,.82.83v41.6a.83.83,0,0,1-.82.83H2.74a.83.83,0,0,1-.82-.83V11.66a.83.83,0,0,1,.82-.83h3.8V8.91H2.74A2.75,2.75,0,0,0,0,11.66v41.6A2.75,2.75,0,0,0,2.74,56H35.26A2.75,2.75,0,0,0,38,53.25V11.66A2.75,2.75,0,0,0,35.26,8.91Z"/></svg>
                                </span>
                                <span class="button-label">PATIENT CARE SURVEY</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <h2 class="line-right">Our <strong>specialties</strong><span class="line"></span></h2>

                <div class="specialties-grid columns is-multiline">

                    <div class="column is-6-tablet is-4-desktop specialty-button">
                        <a class="button" href="#">Hand &#9658;</a>
                    </div>
                    <div class="column is-6-tablet is-4-desktop specialty-button">
                        <a class="button" href="#">Foot & Ankle &#9658;</a>
                    </div>
                    <div class="column is-6-tablet is-4-desktop specialty-button">
                        <a class="button" href="#">Arthritis & Osteoporosis &#9658;</a>
                    </div>
                    <div class="column is-6-tablet is-4-desktop specialty-button">
                        <a class="button" href="#">Shoulder &#9658;</a>
                    </div>
                    <div class="column is-6-tablet is-4-desktop specialty-button">
                        <a class="button" href="#">Sports Injuries &#9658;</a>
                    </div>
                    <div class="column is-6-tablet is-4-desktop specialty-button">
                        <a class="button" href="#">Joint Replacement &#9658;</a>
                    </div>
                    <div class="column is-6-tablet is-4-desktop specialty-button">
                        <a class="button" href="#">Spine &#9658;</a>
                    </div>
                    <div class="column is-6-tablet is-4-desktop specialty-button">
                        <a class="button" href="#">Pediatrics &#9658;</a>
                    </div>
                    <div class="column is-6-tablet is-4-desktop specialty-button">
                        <a class="button" href="#">Cartilage Regeneration &#9658;</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-wrapper clinic-news">


        </div>

        <div class="section-wrapper enews-signup">


        </div>

    </article><!-- #post-## -->
</div>
<?php include(locate_template('template-parts/partials/bot.php')); ?>
