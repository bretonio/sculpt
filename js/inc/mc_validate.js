var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';
 
jQuery(document).ready( function($) {
  var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
  var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
  $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
  options = { url: '//launcheffectapp.us4.list-manage.com/subscribe/post-json?u=33c10252aa31436bff8c0da9a&amp;id=20229dee7c&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
                beforeSubmit: function(){
                    $('#mce_tmp_error_msg').remove();
                    $('.datefield','#mc_embed_signup').each(
                        function(){
                            var txt = 'filled';
                            var fields = new Array();
                            var i = 0;
                            $(':text', this).each(
                                function(){
                                    fields[i] = this;
                                    i++;
                                });
                            $(':hidden', this).each(
                                function(){
                                    var bday = false;
                                    if (fields.length == 2){
                                        bday = true;
                                        fields[2] = {'value':1970};//trick birthdays into having years
                                    }
                                    if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
                                        this.value = '';
                                    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
                                        this.value = '';
                                    } else {
                                        if (/\[day\]/.test(fields[0].name)){
                                            this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;                                           
                                        } else {
                                            this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
                                        }
                                    }
                                });
                        });
                    return mce_validator.form();
                }, 
                success: mce_success_cb
            };
  $('#mc-embedded-subscribe-form').ajaxForm(options);
   
});
function mce_success_cb(resp){
    jQuery(document).ready( function($) {
        $('.signUp-form').removeClass('error-response--is-visible, success-response--is-visible');
        if (resp.result=="success"){
            $('#mce-'+resp.result+'-response').html('Thanks, friend!');
            $('#mc-embedded-subscribe-form').each(function(){
                $('.signUp-form').addClass('success-response--is-visible');
                this.reset();
            });
        } else {
            var index = -1;
            var msg;
            try {
                var parts = resp.msg.split(' - ',2);
                if (parts[1]==undefined){
                    msg = resp.msg;
                } else {
                    i = parseInt(parts[0]);
                    if (i.toString() == parts[0]){
                        index = parts[0];
                        msg = parts[1];
                    } else {
                        index = -1;
                        msg = resp.msg;
                    }
                }
            } catch(e){
                index = -1;
                msg = resp.msg;
            }
            try{
                if (index== -1){
                    $('#mce-'+resp.result+'-response').show();
                        $('.signUp-form').addClass('error-response--is-visible');
                    $('#mce-'+resp.result+'-response').html(msg);            
                } else {
                    err_id = 'mce_tmp_error_msg';
                    html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                    
                    var input_id = '#mc_embed_signup';
                    var f = $(input_id);
                    if (ftypes[index]=='address'){
                        input_id = '#mce-'+fnames[index]+'-addr1';
                        f = $(input_id).parent().parent().get(0);
                    } else if (ftypes[index]=='date'){
                        input_id = '#mce-'+fnames[index]+'-month';
                        f = $(input_id).parent().parent().get(0);
                    } else {
                        input_id = '#mce-'+fnames[index];
                        f = $().parent(input_id).get(0);
                    }
                    if (f){
                        $(f).append(html);
                        $(input_id).focus();
                    } else {
                        $('#mce-'+resp.result+'-response').show();
                            $('.signUp-form').addClass('error-response--is-visible');
                        $('#mce-'+resp.result+'-response').html(msg);
                    }
                }
            } catch(e){
                $('#mce-'+resp.result+'-response').show();
                    $('.signUp-form').addClass('error-response--is-visible');
                $('#mce-'+resp.result+'-response').html(msg);
            }
        }

        if (resp.result=="error"){
            setTimeout(function(){
                $('.signUp-form').removeClass('error-response--is-visible');
            }, 4000);
        }

    });
}