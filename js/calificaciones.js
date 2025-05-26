window.addEventListener("DOMContentLoaded", () => {
  const starRating = new StarRating("form");
});

class StarRating {
  constructor(qs) {
    this.ratings = [
      { id: 1, name: "Terrible" },
      { id: 2, name: "Bad" },
      { id: 3, name: "OK" },
      { id: 4, name: "Good" },
      { id: 5, name: "Excellent" },
    ];
    this.rating = null;
    this.el = document.querySelector(qs);

    this.el?.addEventListener("change", this.updateRating.bind(this));

    // Detener Firefox de preservar datos del formulario entre recargas
    try {
      this.el?.reset();
    } catch (err) {
      console.error("El elemento no es un formulario.");
    }
  }

  // Enviar la calificación al servidor y actualizar el conteo
  updateRating(e) {
    const ratingValue = e.target.value;

    fetch("includes/guardar_calificacion.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ rating: ratingValue }),
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          console.log("Calificación registrada.");

          // ❗ Desactivar inputs para evitar recalificación
          this.el.querySelectorAll('input[type="radio"]').forEach((input) => {
            input.disabled = true;
          });

          // Mostrar el mensaje de agradecimiento
          const messageEl = document.getElementById("thanks-message");
          if (messageEl) {
            messageEl.hidden = false;
          }
        } else {
          console.log(data.message);
        }
      })
      .catch((error) => {
        console.error("Error al enviar la calificación:", error);
      });
  }
}
