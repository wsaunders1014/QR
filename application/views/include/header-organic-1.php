<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
    <title>QuoteRunner</title>
    <link href="/assets/css/organic/normalize.css" rel="stylesheet"/>
    <link href="/assets/css/organic/jquery.mCustomScrollbar.css" rel="stylesheet"/>
    <link href="/assets/css/organic/select2.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/assets/css/organic/style.css"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="fullWidth" id="null">
        <!--header-->
        <header class="header">
            <div class="logo">
                <a href="<?php echo base_url(); ?>"><img src="/assets/img/organic/quoterunner.png" alt="QuoteRunner" title="QuoteRunner"/></a>
            </div>
            <div class="menu">
                <!--<i class="fa fa-bars" aria-hidden="true"></i>-->
                <?php 
                $class = isset($menu) && !empty($menu) ? $menu : 'home'; ?>
                <ul>
                    <li class="<?php echo $class == 'home' ? 'active':''; ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="<?php echo $class == 'about' ? 'active':''; ?>" ><a href="<?php echo base_url('about'); ?>">About Us</a></li>
                    <li class="<?php echo $class == 'agents' ? 'active':''; ?>" ><a href="<?php echo base_url('partners/agents'); ?>">Our Agents</a></li>
                    <li class="<?php echo $class == 'partners' ? 'active':''; ?>" ><a href="<?php echo base_url('partners/service-partners'); ?>">Partners</a></li>
                    <li class="<?php echo $class == 'faq' ? 'active':''; ?>" ><a href="<?php echo base_url('faq'); ?>">FAQ</a></li>
                    <li class="<?php echo $class == 'contact' ? 'active':''; ?>" ><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
                </ul>
            </div>
        </header>