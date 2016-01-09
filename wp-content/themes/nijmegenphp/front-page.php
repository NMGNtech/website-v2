<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nijmegenphp
 */

$nextEvent = (new \NijmegenPHP\Services\Meetup())->nextEvent();

//echo $nextEvent['description'];

$context = Timber::get_context();
$context['meetup'] = $nextEvent;

//$x = wp_localize_script( 'map', 'mapOptions', array('lon' => $nextEvent['venue']['lon'], 'lat' => $nextEvent['venue']['lat']) );
//var_dump($x);
Timber::render('front-page.twig', $context);
