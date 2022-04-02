(function($) {
    $(function() {

        $('.sidenav').sidenav();
        $('.parallax').parallax();

    }); // end of document ready
})(jQuery); // end of jQuery name space

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, options);
});

// Or with jQuery

$(document).ready(function() {
    $('.slider').slider();
});


document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
});

// Or with jQuery

$(document).ready(function() {
    $('select').formSelect();
});


document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems, options);
});

// Or with jQuery

$(document).ready(function() {
    $('.materialboxed').materialbox();
});

document.addEventListener('DOMContentLoaded', () => {
    const imgLightBox = documento.querySelectorAll('.materialboxed');
    M.Materialbox.init(imgLightBox, {
        inDuration: 500,
        outDuration: 500
    });
});