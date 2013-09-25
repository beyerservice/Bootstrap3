<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      header.inc.php
* @Package:   GetSimple
* @Action:    Bootstrap3 for GetSimple CMS
*
*****************************************************/

# Get this theme's settings based on what was entered within its plugin.
# This function is in functions.php
$ThemeSettings = Bootstrap3_Settings();
$SelectedTheme = $ThemeSettings->SelectedTheme;
if (!$SelectedTheme) $SelectedTheme = "Default";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php get_theme_url(); ?>/ico/favicon.png">

    <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php get_theme_url(); ?>/css/bootstrap_<?php echo $SelectedTheme; ?>.min.css" rel="stylesheet" class="SelectedTheme">

    <!-- Custom styles for this template -->
    <link href="<?php get_theme_url(); ?>/css/Bootstrap3.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php get_theme_url(); ?>/js/html5shiv.js"></script>
      <script src="<?php get_theme_url(); ?>/js/respond.min.js"></script>
    <![endif]-->

    <?php get_header(); ?>
</head>
  <body id="<?php get_page_slug(); ?>">
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php get_navigation(return_page_slug()); ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">