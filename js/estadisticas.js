// Fallback por si easing "swing" no está definido (para evitar errores)
if (!jQuery.easing.swing) {
  jQuery.easing.swing = function (p) {
    return 0.5 - Math.cos(p * Math.PI) / 2;
  };
}

// Plugin personalizado: jQuerySimpleCounter con loop infinito y pausa
$.fn.jQuerySimpleCounter = function (options) {
  var settings = $.extend(
    {
      start: 0,
      end: 100,
      easing: "swing",
      duration: 400,
      loop: false,
      pauseTime: 0, // tiempo en ms para pausar después de completar animación
      complete: function () {},
    },
    options
  );

  var thisElement = $(this);

  function runAnimation() {
    $({ count: settings.start }).animate(
      { count: settings.end },
      {
        duration: settings.duration,
        easing: settings.easing,
        step: function () {
          var mathCount = Math.ceil(this.count);
          thisElement.text(mathCount);
        },
        complete: function () {
          settings.complete();

          if (settings.loop) {
            setTimeout(() => {
              runAnimation();
            }, settings.pauseTime);
          }
        },
      }
    );
  }

  runAnimation();
};

// Llamadas al contador para cada estadística con loop infinito y pausa de 5 segundos (5000 ms)
$("#number1").jQuerySimpleCounter({ end: 10325, duration: 4000, loop: true, pauseTime: 5000 });
$("#number2").jQuerySimpleCounter({ end: 52567, duration: 4000, loop: true, pauseTime: 5000 });
$("#number3").jQuerySimpleCounter({ end: 16463, duration: 4000, loop: true, pauseTime: 5000 });
$("#number4").jQuerySimpleCounter({ end: 80118, duration: 4000, loop: true, pauseTime: 5000 });

// Efecto hover para mostrar ventana del autor
$(".about-me-img").hover(
  function () {
    $(".authorWindowWrapper").stop().fadeIn("fast").find("p").addClass("trans");
  },
  function () {
    $(".authorWindowWrapper").stop().fadeOut("fast").find("p").removeClass("trans");
  }
);
