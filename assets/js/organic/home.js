$(document).ready(function () {
       var success_btn = '<span id="works-input-label" class="works-input-label"><span class="works-check-icon"><svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 24 24"><path class="works-check-icon-first" d="M 10 15 l -4 -4" stroke-dasharray="5.6568" stroke-width="2" stroke="#fff" /><path class="works-check-icon-last" d="M 9 15 l 8 -7" stroke-dasharray="10.6301" stroke-width="2" stroke="#fff" /></svg></span></span>';
        $('.phone_number').mask('(000)-000-0000');
        var x = $('.what-we-do').height();
        var y = $('.what-we-do-img').height();
        var z = $('.how-we-do-it-img').height();
        var final = Math.round(x - y) / 2;
        var total = Math.round(x - z);
        $('.what-we-do-img').css('margin-top', final);
        $('.how-we-do-it-img').css('margin-top', total);
      
        $("#SubmitInfo").validate({
            rules: {
                your_name: "required",
                your_message: {
                    required: true
                },
                email : {
                    email : true
                },
                phone_number: {
                    minlength: 10,
                    remote: {
                        type: 'post',
                        url: '/validate/phone'
                    }
                },
            },
            messages: {
                full_name: "Please enter your full name",
                your_message: "Please enter your message"
            },
            errorElement: "em",
            errorPlacement: function (error, element) {
                // Add the `help-block` class to the error element
                error.addClass("help-block");
                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                } else {
                    error.insertAfter(element);
                }
            },
            highlight: function (element, errorClass, validClass) {
                $(element).parents(".block").addClass("has-error").removeClass("has-success");
                $(element).parents(".block-full").addClass("has-error").removeClass("has-success");
            },
            unhighlight: function (element, errorClass, validClass) {
            	if($(element).attr('id') != 'email') {
	                $(element).parents(".block").addClass("has-success").removeClass("has-error");
	                $(element).parents(".block-full").addClass("has-success").removeClass("has-error");
            	}
            },
            submitHandler: function (form) {
                //console.log($(form));
                var send = $(form).serialize();
                 $.ajax({
                        type: "POST",
                        url: "/contact/submit",
                        data: send,
                        success:function(result){
                        	
                            if(result == 'true') {
                                $(form).trigger("reset");
                                $(".submit-info").html(success_btn);
                                var _dest = document.getElementById('works-input-label');
                                var className = _dest.className;
                                var addClassName = 'works-input-label-active';
                                var regExp = new RegExp(addClassName, 'gi');
                                if(!regExp.test(className)) {
                                    _dest.className += ' ' + addClassName;
                                } 
                                
                                $('.error-message').show().html("Thanks for your submission, we'll get back to you shortly!");
                            } else {
                                $('.error-message').show().html("Something went wrong, please try again later.!");
                            }
                        }
                 });
            }
        });
        
    });