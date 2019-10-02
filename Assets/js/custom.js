(function( $ ){
    $.fn.valid = function(ar) {
        if("onMessage" in ar && "onShow" in ar){
            if(ar.onShow == true && ar.onMessage != ''){
                if("onType" in ar){
                    if(ar.onType == 'error'){
                        if(this[0]["id"] != ''){
                            $('#'+this[0]["id"]).tooltip({
                                title : ar.onMessage,
                                trigger: 'manual',
                                template: '<div class="tooltip" role="tooltip"><div class="arrow arrow-error"></div><div class="tooltip-inner tooltip-error"></div></div>'
                            });
            
                            $('#'+this[0]["id"]).tooltip("show");
                        }
                    }
                }
            }
        }else if("onShow" in ar && ar.onShow == false){
            $('#'+this[0]["id"]).tooltip("hide");
        }
       
       return this;
    }; 

    $.fn.telefone = function() {
        var SPMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };

        $('#'+this[0]["id"]).mask(SPMaskBehavior, spOptions);
       
       return this;
    };

    $.fn.validTelefone = function() {
        var telefone = this[0]["value"]; 
        telefone = telefone.replace(/[^\d]+/g,'');
        if(telefone.length < 10 || telefone.length > 11){
            return false;
        }

        return true;
    };

    $.fn.email = function() {
        email = this[0]["value"];
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    };

 })(jQuery);

 function message(message){
    toastr.success(message, 'Sucesso!', {
        progressBar: !0
    });
 }

 function microtime() {
    var s, now, multiplier;

    if(typeof performance !== 'undefined' && performance.now) {
        now = (performance.now() + performance.timing.navigationStart) / 1000;
        multiplier = 1e6;
    }
    else {
        now = (Date.now ? Date.now() : new Date().getTime()) / 1000;
        multiplier = 1e3;
    }

    s = now | 0;
    var x = String((Math.round((now - s) * multiplier ) / multiplier * (Date.now ? Date.now() : new Date().getTime()) / 1e3)/1e20 +s+ (Date.now ? Date.now() : new Date().getTime()) / 1000);
    x = x.replace('.', '');
    return x;
}

 

