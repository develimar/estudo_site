import './bootstrap';
import './maskara.js';

//Jquery
$(document).ready(function() {
    $('.modal').modal();
    $('.sidenav').sidenav();
    $('.slider').slider();
    $('.materialboxed').materialbox();
    $('.parallax').parallax();


    //Configurações Jquery Mask
    $('#telefone').mask('(00) 0 0000-0000');

});


