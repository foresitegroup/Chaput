<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$TopDir = substr(home_url(), 0, strrpos(home_url(), '/')+1);

$FooterForm = "no";

include "../footer.php";
?>