// Importuojame jQuery ir priskiriame jį globaliai prie "window.$" ir "window.jQuery"
window.$ = window.jQuery = require('jquery');

// Importuojame flatpickr ir bootstrap
import flatpickr from 'flatpickr';
import './bootstrap';

// Sukuriame „DOMContentLoaded“ įvykio klausiklį, kad užtikrintume, jog DOM yra pilnai užkrautas
document.addEventListener('DOMContentLoaded', function() {
    // Pasirenkame visus elementus su klase "datepicker" ir inicializuojame flatpickr kiekvienam
    document.querySelectorAll('.datepicker').forEach(function(item) {
        flatpickr(item, {
            mode: 'range'
        });
    });
});
