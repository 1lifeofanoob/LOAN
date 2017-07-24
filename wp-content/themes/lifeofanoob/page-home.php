<?php
/*
  Template Name: Home Page
*/

// Advanced Custom Fields
// https://www.advancedcustomfields.com/resources/



get_header(); ?>

<?php get_template_part('content', 'hero'); ?>

<?php get_template_part('content', 'optin'); ?>

<?php get_template_part('content', 'boost'); ?>

<?php get_template_part('content', 'explain'); ?>

<?php get_template_part('content', 'loanfeatures'); ?>

<?php get_template_part('content', 'ziele'); ?>

<?php get_template_part('content', 'bio'); ?>

<?php get_template_part('content', 'testimonials'); ?>

<?php
get_footer();
?>
