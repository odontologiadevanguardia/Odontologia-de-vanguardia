<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Cita - Consultorio Dental</title>
    <link rel="stylesheet" href="cita.css">
</head>
<body>
    <div class="appointment-container">
        <div class="appointment-box">
            <h2>Gestión de Citas</h2>
            <div class="form-grid">
                <div class="form-item">
                    <h3>Guardar Cita</h3>
                    <form id="form-solicitar-cita" action="guardar_cita.php" method="post">
                        <div class="form-group">
                            <label for="name">Nombre Completo:</label>
                            <input type="text" id="name" name="name" placeholder="Tu nombre completo" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico:</label>
                            <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono:</label>
                            <input type="tel" id="phone" name="phone" placeholder="Tu número de teléfono" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Fecha de la Cita:</label>
                            <input type="date" id="date" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="time">Hora de la Cita:</label>
                            <input type="time" id="time" name="time" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensaje Adicional:</label>
                            <textarea id="message" name="message" placeholder="Escribe cualquier detalle adicional aquí" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn-submit">Guardar Cita</button>
                    </form>
                </div>

                <div class="form-item">
                    <h3>Consultar Cita</h3>
                    <form id="form-consultar-cita" action="consultar_cita.php" method="get">
                        <div class="form-group">
                            <label for="name-consulta">Nombre Completo:</label>
                            <input type="text" id="name-consulta" name="name-consulta" placeholder="Tu nombre completo" required>
                        </div>
                        <button type="submit" class="btn-consultar">Consultar Cita</button>
                        <div id="resultado-cita" class="resultado-cita"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Manejo del formulario de consulta de citas
        document.getElementById('form-consultar-cita').addEventListener('submit', function(event) {
            event.preventDefault();
            const nombre = document.getElementById('name-consulta').value;
    
            fetch(`consultar_cita.php?name-consulta=${encodeURIComponent(nombre)}`)
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        document.getElementById('resultado-cita').innerHTML = `<p>${data.error}</p>`;
                    } else {
                        document.getElementById('resultado-cita').innerHTML = `
                            <div class="resultado-box">
                                <p><strong>Nombre:</strong> ${data.nombre}</p>
                                <p><strong>Correo Electrónico:</strong> ${data.email}</p>
                                <p><strong>Teléfono:</strong> ${data.telefono}</p>
                                <p><strong>Fecha:</strong> ${data.fecha}</p>
                                <p><strong>Hora:</strong> ${data.hora}</p>
                                <p><strong>Mensaje:</strong> ${data.mensaje}</p>
                            </div>
                        `;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('resultado-cita').innerHTML = '<p>Ocurrió un error al consultar la cita.</p>';
                });
        });
    </script>
    
</body>
</html>
