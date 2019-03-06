$(document).ready(function(){
    // Click en el botón de validar de cualquier opción seleccionada
    $('div#datos').on('click', 'button', function(e){
        e.preventDefault();
        //Se verifica si se cancela para recargar página
        if($(this).attr('id') == 'cancel') location.reload();

        //Se obtiene cual validar y su string del input.
        var cual = $('div#datos').find('input').attr('id');
        var valor = $('div#datos').find('input').val();

        if(valor.length != 0){
            //Selecciona depende del input
            //Agregar los demás casos
            switch(cual){
                case 'curp':
                    var regex = /^(([A-Z]{4})([0-9]{2})((04|06|09|11)(0[1-9]|1[0-9]|2[0-9]|30)|(01|03|05|07|08|10|12)(0[1-9]|1[0-9]|2[0-9]|3[0-1])|(02)(0[1-9]|1[0-9]|2[0-9]))(H|M)(AS|BC|BS|CC|CS|CH|DF|CL|CM|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QO|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)((B|C|D|F|G|H|J|K|L|M|N|P|Q|R|S|T|V|W|X|Y|Z){3})([\d]{2}))$/
                    if(regex.test(valor)){
                        alertify.success('CURP valida.');
                    }else{
                        alertify.error('CURP <b>NO</b> valida.');
                    }
                    break;
                case 'rfc':
                    var regex = /^([A-Z]{3}|[A-Z][AEIOU][A-Z]{2})[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[A-Z0-9]{3}$/
                    if (regex.test(valor)) {
                        alertify.success('RFC valida.');
                    } else {
                        alertify.error('RFC <b>NO</b> valida.');
                    }
                    break;
                case 'nombre':
                    var regex = /^(1|9)[0-9](12)(1|0)[0-9]{34}$/
                    if(regex.test(valor)){
                      alert("fswdefrewws")
                        alertify.success('No. Control valido.')
                    }else{
                        alertify.error('No. Control <b>NO</b> valido.')
                    }
                    break;
                case 'cadenax':
                    var regex = /^\.(.*[A-Z]+.*[0-9]+.*)|(.*[0-9]+.*[A-Z]+.*)\.$/
                    if (regex.test(valor)) {
                        alertify.success('Cadena .x. valida.');
                    } else {
                        alertify.error('Cadena .x. <b>NO</b> valida.');
                    }
                    break;
                case 'vocales':
                    var regex = /^[\S]*[a|á|A|Á].*[e|é|E|É].*[i|í|I|Í].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[a|á|A|Á].*[e|é|E|É].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó][\S]*|[\S]*[a|á|A|Á].*[e|é|E|É].*[o|O|ó|Ó].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[a|á|A|Á].*[e|é|E|É].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í][\S]*|[\S]*[a|á|A|Á].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[o|O|ó|Ó][\S]*|[\S]*[a|á|A|Á].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[i|í|I|Í][\S]*|[\S]*[a|á|A|Á].*[i|í|I|Í].*[e|é|E|É].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[a|á|A|Á].*[i|í|I|Í].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó][\S]*|[\S]*[a|á|A|Á].*[i|í|I|Í].*[o|O|ó|Ó].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[a|á|A|Á].*[i|í|I|Í].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É][\S]*|[\S]*[a|á|A|Á].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[o|O|ó|Ó][\S]*|[\S]*[a|á|A|Á].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[e|é|E|É][\S]*|[\S]*[a|á|A|Á].*[o|O|ó|Ó].*[e|é|E|É].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[a|á|A|Á].*[o|O|ó|Ó].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í][\S]*|[\S]*[a|á|A|Á].*[o|O|ó|Ó].*[i|í|I|Í].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[a|á|A|Á].*[o|O|ó|Ó].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É][\S]*|[\S]*[a|á|A|Á].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[i|í|I|Í][\S]*|[\S]*[a|á|A|Á].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[e|é|E|É][\S]*|[\S]*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[i|í|I|Í].*[o|O|ó|Ó][\S]*|[\S]*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[o|O|ó|Ó].*[i|í|I|Í][\S]*|[\S]*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[e|é|E|É].*[o|O|ó|Ó][\S]*|[\S]*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[o|O|ó|Ó].*[e|é|E|É][\S]*|[\S]*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[e|é|E|É].*[i|í|I|Í][\S]*|[\S]*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[i|í|I|Í].*[e|é|E|É][\S]*|[\S]*[e|é|E|É].*[a|á|A|Á].*[i|í|I|Í].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[e|é|E|É].*[a|á|A|Á].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó][\S]*|[\S]*[e|é|E|É].*[a|á|A|Á].*[o|O|ó|Ó].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[e|é|E|É].*[a|á|A|Á].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í][\S]*|[\S]*[e|é|E|É].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[o|O|ó|Ó][\S]*|[\S]*[e|é|E|É].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[i|í|I|Í][\S]*|[\S]*[e|é|E|É].*[i|í|I|Í].*[a|á|A|Á].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[e|é|E|É].*[i|í|I|Í].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó][\S]*|[\S]*[e|é|E|É].*[i|í|I|Í].*[o|O|ó|Ó].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[e|é|E|É].*[i|í|I|Í].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á][\S]*|[\S]*[e|é|E|É].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[o|O|ó|Ó][\S]*|[\S]*[e|é|E|É].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[a|á|A|Á][\S]*|[\S]*[e|é|E|É].*[o|O|ó|Ó].*[a|á|A|Á].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[e|é|E|É].*[o|O|ó|Ó].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í][\S]*|[\S]*[e|é|E|É].*[o|O|ó|Ó].*[i|í|I|Í].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[e|é|E|É].*[o|O|ó|Ó].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á][\S]*|[\S]*[e|é|E|É].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[i|í|I|Í][\S]*|[\S]*[e|é|E|É].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[a|á|A|Á][\S]*|[\S]*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[i|í|I|Í].*[o|O|ó|Ó][\S]*|[\S]*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[o|O|ó|Ó].*[i|í|I|Í][\S]*|[\S]*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[a|á|A|Á].*[o|O|ó|Ó][\S]*|[\S]*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[o|O|ó|Ó].*[a|á|A|Á][\S]*|[\S]*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[a|á|A|Á].*[i|í|I|Í][\S]*|[\S]*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[i|í|I|Í].*[a|á|A|Á][\S]*|[\S]*[i|í|I|Í].*[a|á|A|Á].*[e|é|E|É].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[i|í|I|Í].*[a|á|A|Á].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó][\S]*|[\S]*[i|í|I|Í].*[a|á|A|Á].*[o|O|ó|Ó].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[i|í|I|Í].*[a|á|A|Á].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É][\S]*|[\S]*[i|í|I|Í].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[o|O|ó|Ó][\S]*|[\S]*[i|í|I|Í].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[e|é|E|É][\S]*|[\S]*[i|í|I|Í].*[e|é|E|É].*[a|á|A|Á].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[i|í|I|Í].*[e|é|E|É].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó][\S]*|[\S]*[i|í|I|Í].*[e|é|E|É].*[o|O|ó|Ó].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[i|í|I|Í].*[e|é|E|É].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á][\S]*|[\S]*[i|í|I|Í].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[o|O|ó|Ó][\S]*|[\S]*[i|í|I|Í].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[a|á|A|Á][\S]*|[\S]*[i|í|I|Í].*[o|O|ó|Ó].*[a|á|A|Á].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[i|í|I|Í].*[o|O|ó|Ó].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É][\S]*|[\S]*[i|í|I|Í].*[o|O|ó|Ó].*[e|é|E|É].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[i|í|I|Í].*[o|O|ó|Ó].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á][\S]*|[\S]*[i|í|I|Í].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[e|é|E|É][\S]*|[\S]*[i|í|I|Í].*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[a|á|A|Á][\S]*|[\S]*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[e|é|E|É].*[o|O|ó|Ó][\S]*|[\S]*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[o|O|ó|Ó].*[e|é|E|É][\S]*|[\S]*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[a|á|A|Á].*[o|O|ó|Ó][\S]*|[\S]*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[o|O|ó|Ó].*[a|á|A|Á][\S]*|[\S]*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[a|á|A|Á].*[e|é|E|É][\S]*|[\S]*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[e|é|E|É].*[a|á|A|Á][\S]*|[\S]*[o|O|ó|Ó].*[a|á|A|Á].*[e|é|E|É].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[o|O|ó|Ó].*[a|á|A|Á].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í][\S]*|[\S]*[o|O|ó|Ó].*[a|á|A|Á].*[i|í|I|Í].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[o|O|ó|Ó].*[a|á|A|Á].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É][\S]*|[\S]*[o|O|ó|Ó].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[i|í|I|Í][\S]*|[\S]*[o|O|ó|Ó].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[e|é|E|É][\S]*|[\S]*[o|O|ó|Ó].*[e|é|E|É].*[a|á|A|Á].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[o|O|ó|Ó].*[e|é|E|É].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í][\S]*|[\S]*[o|O|ó|Ó].*[e|é|E|É].*[i|í|I|Í].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[o|O|ó|Ó].*[e|é|E|É].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á][\S]*|[\S]*[o|O|ó|Ó].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[i|í|I|Í][\S]*|[\S]*[o|O|ó|Ó].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[a|á|A|Á][\S]*|[\S]*[o|O|ó|Ó].*[i|í|I|Í].*[a|á|A|Á].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[o|O|ó|Ó].*[i|í|I|Í].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É][\S]*|[\S]*[o|O|ó|Ó].*[i|í|I|Í].*[e|é|E|É].*[a|á|A|Á].*[u|ú|ü|U|Ú|Ü][\S]*|[\S]*[o|O|ó|Ó].*[i|í|I|Í].*[e|é|E|É].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á][\S]*|[\S]*[o|O|ó|Ó].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[e|é|E|É][\S]*|[\S]*[o|O|ó|Ó].*[i|í|I|Í].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[a|á|A|Á][\S]*|[\S]*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[e|é|E|É].*[i|í|I|Í][\S]*|[\S]*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[i|í|I|Í].*[e|é|E|É][\S]*|[\S]*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[a|á|A|Á].*[i|í|I|Í][\S]*|[\S]*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[i|í|I|Í].*[a|á|A|Á][\S]*|[\S]*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[a|á|A|Á].*[e|é|E|É][\S]*|[\S]*[o|O|ó|Ó].*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[e|é|E|É].*[a|á|A|Á][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[e|é|E|É].*[i|í|I|Í].*[o|O|ó|Ó][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[e|é|E|É].*[o|O|ó|Ó].*[i|í|I|Í][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[i|í|I|Í].*[e|é|E|É].*[o|O|ó|Ó][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[i|í|I|Í].*[o|O|ó|Ó].*[e|é|E|É][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[o|O|ó|Ó].*[e|é|E|É].*[i|í|I|Í][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[a|á|A|Á].*[o|O|ó|Ó].*[i|í|I|Í].*[e|é|E|É][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[a|á|A|Á].*[i|í|I|Í].*[o|O|ó|Ó][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[a|á|A|Á].*[o|O|ó|Ó].*[i|í|I|Í][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[i|í|I|Í].*[a|á|A|Á].*[o|O|ó|Ó][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[i|í|I|Í].*[o|O|ó|Ó].*[a|á|A|Á][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[o|O|ó|Ó].*[a|á|A|Á].*[i|í|I|Í][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[e|é|E|É].*[o|O|ó|Ó].*[i|í|I|Í].*[a|á|A|Á][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[a|á|A|Á].*[e|é|E|É].*[o|O|ó|Ó][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[a|á|A|Á].*[o|O|ó|Ó].*[e|é|E|É][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[e|é|E|É].*[a|á|A|Á].*[o|O|ó|Ó][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[e|é|E|É].*[o|O|ó|Ó].*[a|á|A|Á][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[o|O|ó|Ó].*[a|á|A|Á].*[e|é|E|É][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[i|í|I|Í].*[o|O|ó|Ó].*[e|é|E|É].*[a|á|A|Á][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[a|á|A|Á].*[e|é|E|É].*[i|í|I|Í][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[a|á|A|Á].*[i|í|I|Í].*[e|é|E|É][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[e|é|E|É].*[a|á|A|Á].*[i|í|I|Í][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[e|é|E|É].*[i|í|I|Í].*[a|á|A|Á][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[i|í|I|Í].*[a|á|A|Á].*[e|é|E|É][\S]*|[\S]*[u|ú|ü|U|Ú|Ü].*[o|O|ó|Ó].*[i|í|I|Í].*[e|é|E|É].*[a|á|A|Á][\S].*$/
                    if (regex.test(valor)) {
                        alertify.success('Cadena con 5 vocales valida.');
                    } else {
                        alertify.error('Cadena con 5 vocales <b>NO</b> valida.');
                    }
                    break;
                case 'fecha':
                    var regex = /^(((0?[1-9])|1[0-9]|2[0-9]|30)\/(04|06|09|11|Abril|abril|Junio|junio|septiembre|Septiembre|noviembre|Noviembre)\/(([\d]{1,4})|\-[\d]{1,4}(\s)?A\.C.))|((([0-9]?[1-9])|1[0-9]|2[0-9]|30|31)\/(01|03|05|7|8|10|12|enero|Enero|Marzo|marzo|mayo|Mayo|julio|Julio|agosto|Agosto|octubre|Octubre|diciembre|Diciembre)\/(([\d]{1,4})|\-[\d]{1,4}(\s)?A\.C.))|(((0?[1-9])|1[0-9]|2[0-9])\/(02|Febrero|febrero)\/(([\d]{1,4}|\-[\d]{1,4}(\s)?A\.C.)))|(((0[1-9])|1[0-9]|2[0-9]|30)\-(04|06|09|11|Abril|abril|Junio|junio|septiembre|Septiembre|noviembre|Noviembre)\-(([\d]{1,4})|\-[\d]{1,4}(\s)?A\.C.))|((([0-9]?[1-9])|1[0-9]|2[0-9]|30|31)\-(01|03|05|7|8|10|12|enero|Enero|Marzo|marzo|mayo|Mayo|julio|Julio|agosto|Agosto|octubre|Octubre|diciembre|Diciembre)\-(([\d]{1,4})|\-[\d]{1,4}(\s)?A\.C.))|(((0?[1-9])|1[0-9]|2[0-9])\-(02|Febrero|febrero)\-(([\d]{1,4}|\-[\d]{1,4}(\s)?A\.C.)))|(((0?[1-9])|1[0-9]|2[0-9]|30)(\s)de(\s)(04|06|09|11|Abril|abril|Junio|junio|septiembre|Septiembre|noviembre|Noviembre)(\s)de(\s)(([\d]{1,4})|\-[\d]{1,4}(\s)?A\.C.))|((([0-9]?[1-9])|1[0-9]|2[0-9]|30|31)(\s)de(\s)(01|03|05|7|8|10|12|enero|Enero|Marzo|marzo|mayo|Mayo|julio|Julio|agosto|Agosto|octubre|Octubre|diciembre|Diciembre)(\s)de(\s)(([\d]{1,4})|\-[\d]{1,4}(\s)?A\.C.))|(((0?[1-9])|1[0-9]|2[0-9])(\s)de(\s)(02|Febrero|febrero)(\s)de(\s)(([\d]{1,4}|\-[\d]{1,4}(\s)?A\.C.)))$/
                    if (regex.test(valor)) {
                        alertify.success('Fecha valida.');
                    } else {
                        alertify.error('Fecha <b>NO</b> valida.');
                    }
                    break;
                case 'placas':
                    var regex = /^(([A-Z]{2,4})\-(([A-Z]|[0-9]){2,4})\-(([A-Z])|[0-9]{1,3}))|(((MU|MT)\-[0-9]{4}\-[A-Z]|[A-Z]\-[0-9]{3}\-[A-Z]))$/
                    if (regex.test(valor)) {
                        alertify.success('Placa valida.');
                    } else {
                        alertify.error('Placas <b>NO</b> valida.');
                    }
                    break;
                case 'acceso':
                    var regex = /^[3-5][H-O][0-9A-Z]{2}-9[A-Z][0-9][A-F]-[0-9A-F]{4}-(WNKL|WNKL|WNLK|WNLK|WNKL|WNLK|WKNL|WKNL|WKLN|WKLN|WKNL|WKLN|WLNK|WLNK|WLKN|WLKN|WLNK|WLKN|WNKL|WNLK|WKNL|WKLN|WLNK|WLKN|NWKL|NWKL|NWLK|NWLK|NWKL|NWLK|NKWL|NKWL|NKLW|NKLW|NKWL|NKLW|NLWK|NLWK|NLKW|NLKW|NLWK|NLKW|NWKL|NWLK|NKWL|NKLW|NLWK|NLKW|KWNL|KWNL|KWLN|KWLN|KWNL|KWLN|KNWL|KNWL|KNLW|KNLW|KNWL|KNLW|KLWN|KLWN|KLNW|KLNW|KLWN|KLNW|KWNL|KWLN|KNWL|KNLW|KLWN|KLNW|LWNK|LWNK|LWKN|LWKN|LWNK|LWKN|LNWK|LNWK|LNKW|LNKW|LNWK|LNKW|LKWN|LKWN|LKNW|LKNW|LKWN|LKNW|LWNK|LWKN|LNWK|LNKW|LKWN|LKNW|WNKL|WNLK|WKNL|WKLN|WLNK|WLKN|NWKL|NWLK|NKWL|NKLW|NLWK|NLKW|KWNL|KWLN|KNWL|KNLW|KLWN|KLNW|LWNK|LWKN|LNWK|LNKW|LKWN|LKNW)$/
                    if (regex.test(valor)) {
                        alertify.success('Clave de acceso valida.');
                    } else {
                        alertify.error('Clave de acceso <b>NO</b> valida.');
                    }
                    break;
                case 'url':
                    var regex = /^((http|https)\:\/\/)?(w{3}\.)?[a-z]+(\.)[a-z]+(\.[a-z]+)*((\/)((\w)|(\?)|(\-)|(=)|(\#)|(\%)|(\_)|(\&)|(\+))+)*$/
                    if (regex.test(valor)) {
                        alertify.success('URL valida.');
                    } else {
                        alertify.error('URL <b>NO</b> valida.');
                    }
                    break;
                case 'curpmejorada':
                    var regex = /^([A-Z]{4})([0-9]{2})((04|06|09|11)(0[1-9]|1[0-9]|2[0-9]|30)|(01|03|05|07|08|10|12)(0[1-9]|1[0-9]|2[0-9]|3[0-1])|(02)(0[1-9]|1[0-9]|2[0-9]))(H|M)(AS|BC|BS|CC|CS|CH|DF|CL|CM|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QO|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS)([A-Z]{1,3})([\d]{1,2})$/
                    if (regex.test(valor)) {
                        alertify.success('CURP valida.');
                    } else {
                        alertify.error('CURP <b>NO</b> valida.');
                    }
                    break;
                }
           }else{
               alertify.error('No puedes dejar el campo vacio...');
           }
    });
// Click en <a> del menú derecho para cambiar formulario
$('div#offcanvas-right').on('click', 'a', function(e){
        e.preventDefault();
        var formulario = $(this).attr('id');

        //Carga archivo correspondiente.
        $('div#datos').load('php/'+formulario+'.php');
    });

// ---- Funcion de AJAX, usar únicamente si quieren usar PHP
    function buscarUser(dato1, dato2) {

		$.ajax({
		data: {'dato1': dato1, 'dato2': dato2},
        url: 'php/algoritmo.php',
        type: 'POST',
		async: false,
        success: function (infoRegreso) {
            console.log(infoRegreso);
            switch(parseInt(infoRegreso)){
                case -1:
                    alertify.error('Mensaje de error');
                    break;
                default:
                    alertify.success(infoRegreso);
                   }
                }
            });
		}
});
