import './bootstrap';

import Alpine from 'alpinejs';

import FloatingCart from './script';

window.Alpine = Alpine;

Alpine.start();


// app.js
document.addEventListener('DOMContentLoaded', () => {
    const element = document.getElementById('floating-cart');
    if (element) {
        new FloatingCart(element);
    }
});