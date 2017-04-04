<html><head>
<meta charset="utf-8">
<title>Quote Runner Assets</title>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
<style type="text/css">
* {
    box-sizing: border-box;
}
body {
    margin: 0;
	
	
	
	
    padding: 0;
    background-color: #f4f5f6;
}

@media only screen and (max-width:599px) {
/* iPhone 6  */
.view-browser {
    padding-right: 10px !important;
}
.col-container {
    width: 100% !important;
    max-width: 100% !important;
}
.col-container td {
    text-align: center !important;
}
.col-container td .pic {
    width: 80% !important;
    margin: 0 10% !important;
}
}

@media only screen and (max-width:360px) {
/* iPhone 5 */
    
}

@media only screen and (max-width: 600px) {
*[class="gmail-fix"] {
    display: none !important;
}
}
</style>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#f4f5f6; font-family: 'Montserrat', sans-serif;">
    <tbody>
        <tr>
            <td><table width="600" cellspacing="0" cellpadding="0" align="center" style="max-width:600px;margin:0 auto;padding:96px 0px 0px;-webkit-font-smoothing:antialiased;">
                    <tbody>
                        
                    <tr style="background-color:#001D38;text-align:center;">
                        <td><img src="<?php echo base_url('/assets/img/email/QuoteRunner.png'); ?>" style="padding:28px 0px;"/></td>
                    </tr>
                        
                    <tr style="background-color:#FFF;text-align:center;">
                        <td style="font-size: 25px;color: #001D38;letter-spacing: 0;line-height: 26px;padding-top:25px;font-weight:bold;padding-bottom:8px;">
                            Hi <?php echo $name;?>,
                        </td>
                    </tr>    
                    <tr style="background-color:#FFF;text-align:center;">
                        <td style="font-size: 19px;color: #001D38;letter-spacing: 0;line-height: 26px;padding:0px 25px 10px;" class="text_penal">    
                            <p style="margin:0px auto">You’re almost done! <br/>Just one more step and your quotes are on their way.</p> 
                        </td>
                    </tr>
                    
                    <tr style="background-color:#FFF; margin:0px auto;">
                        <td style="padding:25px 0 15px; text-align:center;">
                            <a  href="<?php echo $urldata;?>" style="display:inline;padding:18px 62px;background-color:#F60;width:220px;text-align:center;border-radius:150px;margin:0px auto;font-size:18px;color:#FFF;text-decoration:none;">Get Quotes</a>
                        </td>
                    </tr>
                    
                    <tr style="background-color:#FFF;text-align:center;">
                        <td style="padding:25px 0px 35px 0px;">
                            
                                <table style="font-size:15px;width:458px; margin:0 auto; font-weight:bold;line-height:28px; border:1px solid #CCC; padding:20px;text-align:left;color:#333;" >
                                    <tbody>
                                        <tr>
                                            <td style="text-align:center;padding:0 0px 10px 0px;width:100%;">MOVE DETAILS</td>
                                        </tr>
                                        <tr>
                                            <td>Move Date : <?php echo date('F d, Y',strtotime($movedate));?></td>
                                        </tr>
                                        <tr>
                                            <td>Move Size : <?php echo $movesize; ?></td>
                                        </tr>
                                        <tr>
                                            <td >Zip Code :<?php echo $zipcode; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email : <?php echo $email; ?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                        </td>
                    </tr>
                                        
                    </tbody>
                    </table>
                    <table style="width:515px;padding-bottom:59px;" cellspacing="0" cellpadding="0" align="center">
                        <tbody><tr>
                            <td style="text-align: center;font-family: 'Lato-Light', sans-serif;font-size: 14px;letter-spacing: 0;line-height: 19px;background: #f4f5f6;padding-top: 25px;">
                                <a href="<?php echo base_url('unsubscribe.php'); ?>" style="font-size: 14px;color: #000000;letter-spacing: 0;line-height: 19px;font-weight:bold;text-decoration:underline;">Unsubscribe from this mailing list</a>
                                </td>
                        </tr>
                    </tbody></table>
                </td></tr></tbody></table>
        
        
        <!-- iphone gmail fix -->
        
            <div style="display:none; white-space:nowrap; font:15px courier; line-height:0;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
        
        <!-- close iphone gmail fix -->
        
    



</body></html>
