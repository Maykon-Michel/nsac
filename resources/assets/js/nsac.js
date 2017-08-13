window.onresize = function (event) {
};

$('.nav-tabs-dropdown').each(function (i, elm) {

    $(elm).text($(elm).next('ul').find('li.active a').text());

});

$('.nav-tabs-dropdown').on('click', function (e) {

    e.preventDefault();

    $(e.target).toggleClass('open').next('ul').slideToggle();

});

$('#nav-tabs-wrapper a[data-toggle="tab"]').on('click', function (e) {

    e.preventDefault();

    $(e.target).closest('ul').hide().prev('a').removeClass('open').text($(this).text());

});

function sendEmailTo(email) {
    $('#modalEmail').modal('toggle');
}

$(document).ready(function () {

    $('[data-toggle="tooltip"]').tooltip();

    $('#custom_carousel').on('slide.bs.carousel', function (evt) {
        $('#custom_carousel .controls li.active').removeClass('active');
        $('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
    })
    $('#custom_carousel2').on('slide.bs.carousel', function (evt) {
        $('#custom_carousel2 .controls li.active').removeClass('active');
        $('#custom_carousel2 .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
    })

    /* Mask */
    var phoneBehavior = function (value) {
        return value.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    };
    var phoneOptions = {
        onKeyPress: function (value, e, field, options) {
            field.mask(phoneBehavior.apply({}, arguments), options);
        }
    };
    $('#phone').mask(phoneBehavior, phoneOptions);
    $('#zipCode').mask('00000-000');
    $('#number').mask('9999999');
    /* End Mask */

    /* Form login validator *
    $('#frm-login').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                validators: {
                    notEmpty: {
                    },
                    emailAddress: {
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                    }
                }
            }
        }
    });
    /* End Form login validator */

    /* Form signup validator */
    $('#frm-signup').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            full_name: {
                validators: {
                    notEmpty: {},
                    stringLength: {
                        min: 3
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {},
                    emailAddress: {}
                }
            },
            password: {
                validators: {
                    notEmpty: {}
                }
            },
            cpfCnpj: {
                validators: {
                    notEmpty: {},
                    callback: {
                        callback: function (cc) {
                            var value = cc = cc.replace(/\D/g, "");
                            if (value.length < 14) { //CPF
                                value = value.replace(/(\d{3})(\d)/, "$1.$2");
                                value = value.replace(/(\d{3})(\d)/, "$1.$2");
                                value = value.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
                            }
                            else {	//CNPJ
                                value = value.replace(/^(\d{2})(\d)/, "$1.$2");
                                value = value.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");
                                value = value.replace(/\.(\d{3})(\d)/, ".$1/$2");
                                value = value.replace(/(\d{4})(\d)/, "$1-$2");
                            }
                            document.getElementById("cpfCnpj").value = value;

                            var flag = false;
                            for (var k = 1; k < value.length; k++) {
                                if (value.charAt(0) != value.charAt(k)) {
                                    flag = true;
                                }
                            }
                            if (!flag) {
                                return false;
                            }
                            if (cc.length == 11) {	//CPF
                                var sum = 0;
                                for (k = 0; k < 9; k++) {
                                    sum += parseInt(cc.charAt(k)) * (10 - k);
                                }

                                var rest = 11 - (sum % 11);
                                if (rest == 10 || rest == 11) {
                                    rest = 0;
                                }
                                if (rest != parseInt(cc.charAt(9))) {
                                    return false;
                                }

                                sum = 0;
                                for (k = 0; k < 10; k++) {
                                    sum += parseInt(cc.charAt(k)) * (11 - k);
                                }
                                rest = 11 - (sum % 11);
                                if (rest == 10 || rest == 11) {
                                    rest = 0;
                                }
                                if (rest != parseInt(cc.charAt(10))) {
                                    return false;
                                }
                            }
                            else if (cc.length == 14) {	//CNPJ
                                for (var i = 0; i < 2; i++) {
                                    var sum = 0;
                                    var p = 5 + i;
                                    for (k = 0; k < 12 + i; k++) {
                                        sum += parseInt(cc.charAt(k)) * p--;
                                        if (p < 2) {
                                            p = 9;
                                        }
                                    }
                                    var rest = sum % 11 < 2 ? 0 : 11 - sum % 11;
                                    if (rest != parseInt(cc.charAt(12 + i))) {
                                        return false;
                                    }
                                }
                            }
                            else {
                                return false;
                            }
                            return true;
                        }
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {},
                    stringLength: {
                        min: 14
                    }
                }
            },
            zipCode: {
                validators: {
                    notEmpty: {},
                    callback: {
                        callback: function (zipCode) {
                            zipCode = zipCode.replace(/\D/g, '');
                            if (zipCode.length != 8) {
                                return false;
                            }
                            $('#uf').val('uf');
                            $('#city').val('city');
                            $('#street').val('');
                            $('#neighborhood').val('');

                            $.ajax({
                                async: false,
                                type: "get",
                                dataType: "xml",
                                url: "https://viacep.com.br/ws/" + zipCode + "/xml/?callback=?",
                                success: function (data) {
                                    data = $(data).find('xmlcep');
                                    if (data.find('erro').text()) {
                                        return zipCode = false;
                                    }
                                    $('#uf').val(data.find('uf').text());
                                    $('#city').val(data.find('localidade').text());
                                    $('#street').val(data.find('logradouro').text());
                                    $('#neighborhood').val(data.find('bairro').text());
                                    if ($('#uf')[0].selectedIndex == -1 || $('#city')[0].selectedIndex == -1) {
                                        $('#uf').val("uf");
                                        $('#city').val("city");
                                        $('#street').val('');
                                        $('#neighborhood').val('');
                                        return zipCode = false;
                                    }
                                }
                            });

                            return zipCode;

                        }
                    }
                }
            },
            uf: {
                validators: {
                    callback: {
                        callback: function (value) {
                            return value != 'uf';
                        }
                    }
                }
            },
            city: {
                validators: {
                    callback: {
                        callback: function (value) {
                            return value != 'city';
                        }
                    }
                }
            },
            neighborhood: {
                validators: {
                    notEmpty: {}
                }
            },
            street: {
                validators: {
                    notEmpty: {},
                    callback: {
                        callback: function (value) {
                            return value != 'city';
                        }
                    }
                }
            },
            number: {
                validators: {
                    notEmpty: {}
                }
            },
            complement: {
                validators: {
                    stringLength: {
                        min: 0
                    }
                }
            },
            plan: {
                validators: {
                    notEmpty: {}
                }
            }
        }
    });
    /* End Form signup validator */

    /* SecurePass *
    $('#password').keypress(function() {
        var pw = $('#password').val();
        var strength = 0;
        if(pw.length < 4) {
            strength += 1;
        }
        else if(pw.length >= 4  &&  pw.length < 8) {
            strength += 3;
        }
        else if(pw.length >= 8  &&  pw.length < 10) {
            strength += 4;
        }
        else if(pw.length >= 10  &&  pw.length < 12) {
            strength += 5;
        }
        else if(pw.length >= 12) {
            strength += 6;
        }
        if(pw.match(/[a-z]+/)){
            strength += 1;
        }
        if(pw.match(/[A-Z]+/)){
            strength += 1;
        }
        if(pw.match(/[0-9]+/)){
            strength += 1;
        }
        if(pw.match(/[@!#$%&*+=?|-]/)){
            strength += 1;
        }
        var color;
        if(strength <= 3) {
            color = "#FF0000";
        }
        else if(strength <= 5) {
            color = "#FF9900";
        }
        else if(strength <= 7) {
            color = "#FFFF00";
        }
        else {
            color = "#00FF00";
        }
        document.getElementById('icon-pw').style.color = color;
    });
    /* End SecurePass */

});