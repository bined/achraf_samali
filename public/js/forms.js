$('document').ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#contact-form1").validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            phone: "required",
            messages: "required"
        },
        messages: {
            name: "Ce champ est requis.",
            phone: "Ce champ est requis.",
            messages: "Ce champ est requis.",
            email: "S'il vous plaît, mettez une adresse email valide",
        },
        submitHandler: function() {
            var form =  $("#contact-form1");
            var nom = form.find('#name').val();
            var email = form.find('#email').val();
            var phone = form.find('#phone').val();
            var messages = form.find('#comment').val();

            var data = { name: nom, email: email, phone:phone, messages:messages}
            $.post('/contact/save', data, function(data) {
                if(data.success== true){
                    $('#successSend').fadeIn(100);
                    form.find('#name').val("");
                    form.find('#email').val("");
                    form.find('#phone').val("");
                    form.find('#comment').val("");
                }
            });

        }
    });

    $("#marchandiseForm1").validate({
        rules: {
            firstName: "required",
            lastName: "required",
            email: {
                required: true,
                email: true
            },
            phone: "required",
            date:{
                required: true,
                date: true
            },
            type: "required",
            tonnage: "required",
            fragile: "required",
            depart: "required",
            arrive: "required",
        },
        messages: {
            firstName: "Ce champ est requis.",
            lastName: "Ce champ est requis.",
            phone: "Ce champ est requis.",
            messages: "Ce champ est requis.",
            email: "S'il vous plaît, mettez une adresse email valide",
            date: "Veuillez entrer une date valide. ",
        },
        submitHandler: function() {
            var form =  $("#marchandiseForm1");
            var firstName = form.find("input[name*='firstName']");
            var lastName = form.find("input[name*='lastName']");
            var email = form.find("input[name*='email']");
            var phone = form.find("input[name*='phone']");
            var date = form.find("input[name*='date']");
            var type = form.find("input[name*='type']");
            var tonnage = form.find("input[name*='tonnage']");
            var fragile = form.find("input[name*='fragile']");
            var depart = form.find("input[name*='depart']");
            var arrive = form.find("input[name*='arrive']");

            var data = { firstName: firstName.val(), lastName: lastName.val(), email: email.val(), phone:phone.val(), date:date.val(), type:type.val(), tonnage:tonnage.val(), fragile:fragile.val(), depart:depart.val(), arrive:arrive.val() }
            $.post('/marchandise/save', data, function(data) {
                if(data.success== true){
                    $('#successSendMarchandise').fadeIn(100);
                    $('#marchandiseForm1').fadeOut(90);
                    firstName.val("");
                    lastName.val("");
                    email.val("");
                    phone.val("");
                    date.val("");
                    type.val("");
                    tonnage.val("");
                    fragile.val("");
                    depart.val("");
                    arrive.val("");
                }
            });

        }
    });

    $("#locationForm").validate({
        rules: {
            firstName: "required",
            lastName: "required",
            email: {
                required: true,
                email: true
            },
            phone: "required",
            transferts: "required",
            passagers: "required",
            heures: "required",
            depart: "required",
            arrive: "required",
        },
        messages: {
            firstName: "Ce champ est requis.",
            lastName: "Ce champ est requis.",
            transferts: "Ce champ est requis.",
            passagers: "Ce champ est requis.",
            heures: "Ce champ est requis.",
            email: "S'il vous plaît, mettez une adresse email valide",
        },
        submitHandler: function() {
            var form =  $("#locationForm");
            var firstName = form.find("input[name*='firstName']");
            var lastName = form.find("input[name*='lastName']");
            var email = form.find("input[name*='email']");
            var phone = form.find("input[name*='phone']");
            var transferts = form.find("input[name*='transferts']");
            var passagers = form.find("input[name*='passagers']");
            var heures = form.find("input[name*='heures']");
            var depart = form.find("input[name*='depart']");
            var arrive = form.find("input[name*='arrive']");

            var data = { firstName: firstName.val(), lastName: lastName.val(), email: email.val(), phone:phone.val(), transferts:transferts.val(), passagers:passagers.val(), heures:heures.val(), depart:depart.val(), arrive:arrive.val() }
            $.post('/location/save', data, function(data) {
                if(data.success== true){
                    $('#successSendLocation').fadeIn(100);
                    $('#locationForm').fadeOut(90);
                    firstName.val("");
                    lastName.val("");
                    email.val("");
                    phone.val("");
                    transferts.val("");
                    passagers.val("");
                    heures.val("");
                    depart.val("");
                    arrive.val("");
                }
            });

        }
    });

    $('.car-item input[name="car"]').on('change', function() {
        $('.car-item').find('label').removeClass('checked');
        var radioChecked = $('input[name="car"]:checked');
        radioChecked.parent().addClass('checked')
    });


});
function openModal(id){
    $("#"+id).modal();

    if(id == 'marchandiseModal'){
        init('divMap','adrDep','adrArr');
        $('#divMap2').html('');
    }else{
        if(id == 'locationModal'){
            init('divMap2','adrDep2','adrArr2');
            $('#divMap').html('');
        }else{
            if(id == 'transfertModal'){
                init('divMap3','adrDep3','adrArr3');
                $('#divMap').html('');
                $('#divMap2').html('');
            }
        }



    }
}
