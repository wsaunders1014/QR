<!DOCTYPE html>
<html lang="en">
<head>




   <script src="//cdn.optimizely.com/js/575851542.js"></script>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
   <?php if(isset($meta_description)): ?>
<meta name="description" content="<?php echo $meta_description;?>">
   <? endif; ?>
   <?php if(isset($meta_keywords)): ?>
<meta name="keywords" content="<?php echo $meta_keywords;?>">
   <? endif; ?>
   <meta name="author" content="Quote Runner">
   <meta http-equiv="cache-control" content="max-age=0" />
   <meta http-equiv="cache-control" content="no-cache" />
   <meta http-equiv="expires" content="0" />
   <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
   <meta http-equiv="pragma" content="no-cache" />

<?php if(isset($alternate)): ?>
	  <link rel="alternate" media="only screen and (max-width: 1024px)" href="<?php echo $alternate;?>" >
<? endif; ?>
   
   
   <title><?php echo isset($title) ? $title : 'Quote Runner - Your Source for Online Quotes'; ?></title>

   <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/validationEngine.jquery.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/jquery-ui-1.10.3.custom.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
   
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
<body>
    <div class="navbar-wrapper">
    	<div class="container">
       		 <div class="row">
                   <div class="col-md-3 navbar-header">
                      <a class="navbar-brand" href="/"><img src="../../../assets/img/qr-logo.png" width="251" height="44"></a>
                    </div>
                     <div class="col-md-9">
                         <div class="col-md-1  top-right">
                            <div class="login"><a href="/login/"><i class="icon-custom-men"></i> Login</a></div>
                        </div>
                        <div class="col-md-3  top-right">
                        Any Questions? <br />
                        <div class="phone">Call Us <span> (307)-200-4898 </span></div>
                        </div>
                    </div>
         	 </div>
         </div>
         
         <?php if($hide_header !== TRUE ): ?>
		 	<div class="nav-section">
             <div class="container">
                 	 <div class="row"> 
                        <div class="col-md-11">
                              <ul class="nav navbar-nav">
                                <li class="active"><a href="/">How it works</a></li>
                                <li><a href="/about/">About Us</a></li>
                                <li><a href="/faq/">FAQ</a></li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Partners</a>
                                  <ul class="dropdown-menu">
                                    <li><a href="/partners/service-partners/">Service Partners</a></li>
                                    <li><a href="/partners/agents/">Agents</a></li>
                                  </ul>
                                </li>
                                
                               <li><a href="/contact/">Contact</a></li>
                               
                               <!-- 
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources</a>
                                  <ul class="dropdown-menu">
                                    <li><a href="/moving/">Moving</a></li>
                                    <li><a href="/solar/">Solar</a></li>
                                    <li><a href="/typography/">Typography</a></li>
                                  </ul>
                                </li>
                                 -->
                              </ul>
                          </div>
                          <div class="col-md-1">
                          <a href="https://www.facebook.com/quoterunner"><i class="icon-custom-facebook"></i></a>
                          <a href="https://twitter.com/QuoteRunnerco"><i class="icon-custom-twitter"></i></a>
                          </div>
                </div>
            </div>
         </div>
		 <? endif; ?>
    
    </div>