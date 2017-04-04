<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->
    <title>QuoteRunner : Page not found</title>
    <link href="<?php echo base_url('/assets/css/organic/normalize.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('/assets/css/organic/jquery.mCustomScrollbar.css'); ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/organic/select2.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/organic/style.css'); ?>"/>
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
                <ul>
                    <li><a href="<?php echo base_url('partners/service-partners'); ?>">Affiliates</a></li>
                    <li><a href="<?php echo base_url('faq'); ?>">FAQ</a></li>
                    <li class=""><a href="<?php echo base_url('about'); ?>" >About Us</a></li>
                </ul>
            </div>
        </header>
        <!--middle-->
        <section class="inner">
            <div class="row">
                <div class="col-left">
                    <img src="/assets/img/organic/icons/icon-user.jpg" alt="" title="" />
                </div>
                <div class="col-right">
                    <h1 class="heading">Oh Nooooo! <span>404</span></h1>
                    <div class="clearfix"></div>
                    <div class="content-area">
                        <p>Looks like the page you’re looking for does not exist.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php echo $this->load->view('include/footer-organic-1'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/organic/jquery.mousewheel.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/organic/jquery.mCustomScrollbar.js') ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('[data-popup-open]').on('click', function (e) {
            var targeted_popup_class = jQuery(this).attr('data-popup-open');
            $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
            $('body').css('overflow', 'hidden');
            e.preventDefault();
        });

        $('[data-popup-open-1]').on('click', function (e) {
            var targeted_popup_class_1 = jQuery(this).attr('data-popup-open-1');
            $('[data-popup="' + targeted_popup_class_1 + '"]').fadeIn(350);
            $('body').css('overflow', 'hidden');
            e.preventDefault();
        });

        $('[data-popup-close]').on('click', function (e) {
            var targeted_popup_class = jQuery(this).attr('data-popup-close');
            $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

            var targeted_popup_class_1 = jQuery(this).attr('data-popup-close');
            $('[data-popup="' + targeted_popup_class_1 + '"]').fadeOut(350);

            $('body').css('overflow', 'inherit');
            e.preventDefault();
        });
        $(window).on("load", function () {
            $(".popup-content").mCustomScrollbar({
                axis: "y"
            });
        });
    })
</script>
</body>
</html>