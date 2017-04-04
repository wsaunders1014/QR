<!DOCTYPE html>
<html lang="en">
<head>
	<script src="//cdn.optimizely.com/js/575851542.js"></script>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php if(isset($meta_description)): ?>
<meta name="description" content="<?php echo $meta_description;?>">
   <? endif; ?>
   <?php if(isset($meta_keywords)): ?>
<meta name="keywords" content="<?php echo $meta_keywords;?>">
   <? endif; ?>
   <meta name="author" content="Quote Runner">
   <meta http-equiv="cache-control" content="max-age=0" />
   <meta http-equiv="expires" content="0" />
   <meta http-equiv="pragma" content="no-cache" />
   <META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">
   
   <?php if(isset($canocial)): ?>
	  <link rel="canonical" href="<?php echo $canocial;?>" >
<? endif; ?>
   



  
   
   <title><?php echo isset($title) ? $title : 'Quote Runner - Your Source for Online Quotes'; ?></title>


   <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/jquery-ui-1.10.3.custom.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/custom.mobile.css') ?>" rel="stylesheet">

    <!--
   <?php $this->minify->css(array('bootstrap.min.css', 'font-awesome.css', 'jquery-ui-1.10.3.custom.min.css', 'custom.mobile.css')); ?>
   <?php echo $this->minify->deploy_css(false); ?>
     -->
   
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('require', 'displayfeatures');
  ga('create', 'UA-45796295-1', 'quoterunner.co');
  ga('send', 'pageview');

</script>
</head>
<body class="moving-mobile"> 
	 <header>
        <div class="container logo-container">
            <div  class="row">
                <div class="col-sm-12 logo">
                      <img src="<?php echo site_url(); ?>assets/img/qr-logo.png" alt="Quoterunner.co" width="225" height="40" />
                    
                </div>
                <!--
                 <div class="col-sm-6 phone">
                    <a class="btn btn-orange">
                     <i class=" glyphicon glyphicon-earphone"></i> 888 858 888
                    </a>
                </div>
                
                <button type="button" class="btn btn-warning btn-lg center-block"> Call for Quote:
  <span class="glyphicon glyphicon-earphone"></span>  818 222 6541
</button>
-->

           </div>
        </div><!--end header container-->
    </header>  
    
