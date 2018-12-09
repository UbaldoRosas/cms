'use strict';

// Función que incluye utilidades generales.
var util = function () {

    // Variables para detectar navegadores, de ser requeridas pueden retornarse como métodos
    var is_chrome = navigator.userAgent.indexOf('Chrome') > -1;
    var is_explorer = navigator.userAgent.indexOf('MSIE') > -1;
    var is_firefox = navigator.userAgent.indexOf('Firefox') > -1;
    var is_safari = navigator.userAgent.indexOf('Safari') > -1;
    var is_opera = navigator.userAgent.toLowerCase().indexOf('op') > -1;

    if (is_chrome && is_safari) is_safari = false;
    if (is_chrome && is_opera) is_chrome = false;

    // Prevenir la inicalización de eventos
    var preventDefault = function preventDefault() {
        var e = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : window.event;

        if (e.preventDefault) e.preventDefault();
        e.returnValue = false;
    };

    // Códigos de las teclas de navegación
    var navKeys = { 37: 1, 38: 1, 39: 1, 40: 1 };

    // Bloquear los eventos de las teclas de navegación
    var preventDefaultForScrollKeys = function preventDefaultForScrollKeys(e) {
        if (navKeys[e.keyCode]) {
            preventDefault(e);
            return false;
        }
    };

    return {

        // Detecta si la visualización del sitio web ocurre en un entorno móvil
        isMobile: function isMobile() {
            var check = false;
            (function (a) {
                if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))) check = true;
            })(navigator.userAgent || navigator.vendor || window.opera);
            return check;
        },

        // Indica si el navegador que utilizamos es safari
        isSafari: is_safari,

        // Permite tener un video de fondo que ocupe el 100% de su contenedor manteniendo relación de aspecto
        adjustVideo: function adjustVideo(selector) {
            var player = $(selector);
            var mediaAspect = 16 / 9;
            var windowW = $(window)[0].innerWidth;
            var windowH = $(window).height();
            var windowAspect = windowW / windowH;

            if (windowAspect < mediaAspect) {

                player.css({
                    top: 0,
                    left: -(windowH * mediaAspect - windowW) / 2,
                    height: windowH,
                    width: windowH * mediaAspect
                });
            } else {

                player.css({
                    top: -(windowW / mediaAspect - windowH) / 2,
                    left: 0,
                    height: windowW / mediaAspect,
                    width: windowW
                });
            }
        },

        // Mantiene un video en su relación de aspecto
        ratioVideo: function ratioVideo(selector) {

            if ($(selector).length) {

                $(selector).each(function (index, el) {
                    var $videos = $(this);
                    var ratio = 16 / 9;
                    var wVideo = $(this).width();
                    var hVideo = Math.ceil(wVideo / ratio);

                    $videos.css('height', hVideo + 'px');
                });
            }
        },

        // Deshabilitar scroll
        disableScroll: function disableScroll() {
            if (window.addEventListener) // Older FF
                window.addEventListener('DOMMouseScroll', preventDefault, false);
            window.onwheel = preventDefault; // Modern standard
            window.onmousewheel = document.onmousewheel = preventDefault; // Older browsers, IE
            window.ontouchmove = preventDefault; // Mobile
            document.onkeydown = preventDefaultForScrollKeys;
        },

        // Habilitar scroll
        enableScroll: function enableScroll() {
            if (window.removeEventListener) window.removeEventListener('DOMMouseScroll', preventDefault, false);
            window.onmousewheel = document.onmousewheel = null;
            window.onwheel = null;
            window.ontouchmove = null;
            document.onkeydown = null;
        }
    };
}();

/*=============================================
=            Variables útiles            =
=============================================*/

// Variables para dispositivos móviles
var isMobile = util.isMobile();

// Selección de elementos
var _$ = function _$(query) {
    return document.querySelector(query);
};
var _$$ = function _$$(query) {
    return document.querySelectorAll(query);
};

/*=====  End of Variables útiles  ======*/
console.log(mdc);
var material = function () {

    var autoAttachTo = function automaticInstatination(component, elementSelector) {

        var elements = _$$(elementSelector);
        var length = elements.length;

        for (var i = 0; i < length; i += 1) {
            component.attachTo(elements[i]);
        }
    };

    return {

        attachTo: autoAttachTo,

        init: function init() {

            autoAttachTo(window.mdc.textField.MDCTextField, '.mdc-text-field');
            autoAttachTo(window.mdc.select.MDCSelect, '.mdc-select');
            autoAttachTo(window.mdc.checkbox.MDCCheckbox, '.mdc-checkbox');
            autoAttachTo(window.mdc.textField.MDCTextFieldHelperText, '.mdc-text-field-helper-text');
            autoAttachTo(window.mdc.list.MDCList, '.mdc-list');
        }

    };
}();

// Patrón modular para cada sección del sitio
var section = function () {

    // Objeto que guardará como objetos JQuery todos los elementos pertenecientes a la sección
    var elems = {
        elem: $('selector')
    };

    return {

        $: elems

    };
}();

$(document).ready(function () {
    material.init();
});

$(window).on('load', function () {});

$(window).resize(function () {});
//# sourceMappingURL=scripts.js.map
