document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("contactForm");
    const estado = document.getElementById("mensaje-estado");

    form.addEventListener("submit", (e) => {
        e.preventDefault(); // Evita el envío real

        // Obtener valores
        const nombre = document.getElementById("nombre").value.trim();
        const email = document.getElementById("email").value.trim();
        const mensaje = document.getElementById("mensaje").value.trim();
        const archivo = document.getElementById("upload").files[0];

        // Validar campos
        if (!nombre || !email || !mensaje || !archivo) {
            estado.textContent = "Por favor, completa todos los campos.";
            estado.style.color = "red";
            return;
        }

        // Validar formato del correo
        const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!regexEmail.test(email)) {
            estado.textContent = "Introduce un correo electrónico válido.";
            estado.style.color = "red";
            return;
        }

        // Si pasa las validaciones
        estado.textContent = "¡Gracias por tu mensaje! Nos pondremos en contacto pronto.";
        estado.style.color = "green";

        form.reset();
    });
});
