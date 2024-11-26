"use strict";

const LoginAccount = document.getElementById('account');
const MenuAccount = document.getElementById('manu-account');

LoginAccount.addEventListener('click', function(){
    event.preventDefault();
    MenuAccount.classList.toggle('header__login-menu--active')
})

$(document).ready(function(){
    $('.watches__offers').slick({
        arrows: true,
        dots: false,
        slidesToShow: 3,
        infinite: false,
    });
});