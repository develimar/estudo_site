import './bootstrap';
import './maskara.js';

//Jquery
$(document).ready(function() {
    $('.modal').modal();
    $('.sidenav').sidenav();
    $('.slider').slider();
    $('.materialboxed').materialbox();
    $('.parallax').parallax();



    //Configurações Jquery Mask - Banner
    $('#telefone').mask('(00) 0 0000-0000');

    //Configurações Jquery Mask - Contato
    $('#telefone_contato').mask('(00) 0 0000-0000');

    //Configuração do TextArea
    $('#textarea1').textarea();

});


