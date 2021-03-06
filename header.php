<?php
require "vendor/autoload.php";
require "app/Includes/facebook_config.php";
?>
<!-- Marcação de microdados adicionada pelo Assistente de marcação para dados estruturados do Google. -->
<!doctype html>
<html xmlns:fb="http://ogp.me/ns/fb#" lang="pt-BR">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# pensamentossoltos: http://ogp.me/ns/fb/pensamentossoltos#">
    <title>
        <?php
        if(is_single()){ single_post_title(); }
        elseif(is_home() || is_front_page()){ bloginfo('name'); print ' | '; bloginfo('description'); }
        elseif(is_page()){ single_post_title(''); }
        elseif(is_404()){ bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); }
        ?>
    </title>
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; <?php bloginfo('charset'); ?>" />
    <!--facebook-->
    <meta property="fb:app_id" content=""/>
    <meta property="fb:admins" content="" />
    <meta property="og:type"   content="pensamentossoltos:poem" />
    <meta property="og:title"  content="<?php
    if(is_single()){ single_post_title(); }
    elseif(is_home() || is_front_page()){ bloginfo('name'); print ' | '; bloginfo('description'); }
    elseif(is_page()){ single_post_title(''); }
    elseif(is_404()){ bloginfo('name'); print ' | Not Found'; }
    else { bloginfo('name'); wp_title('|'); }
    ?>" />
    <meta property="og:image" content="/wp-content/themes/DEOC/libs/img/pensamento.png"/>
    <!--fim facebook-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" type="text/css" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />﻿
    <link rel="shortcut icon" href="/wp-content/themes/DEOC/libs/img/Logos/Favicon.jpg" type="image/x-icon" />
    <?php wp_head(); //diz que é o header ?>
    <style type="text/css">
        html {
            margin-top: -24px !important;
        }
    </style>
</head>
<body>
<?php include "app/Includes/conecta_face.php"; ?>
<fb:recommendations-bar href="http://devaneioseoutrascoisas.esy.es/"></fb:recommendations-bar>