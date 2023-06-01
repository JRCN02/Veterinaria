<div class="container">
   <div class="horario">
        <h1>Tabla de Horarios</h1>
        <div class="btn btn-primary">Modficar horario</div>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Hora</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sabado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>9:00 AM</td>
            <td class="horario-celda" data-dia="lunes" data-hora="9">Disponible</td>
            <td class="horario-celda" data-dia="martes" data-hora="9">Disponible</td>
            <td class="horario-celda" data-dia="miercoles" data-hora="9">Disponible</td>
            <td class="horario-celda" data-dia="jueves" data-hora="9">Disponible</td>
            <td class="horario-celda" data-dia="viernes" data-hora="9">Disponible</td>
          </tr>
          <tr>
            <td>10:00 AM</td>
            <td class="horario-celda" data-dia="lunes" data-hora="10">Disponible</td>
            <td class="horario-celda" data-dia="martes" data-hora="10">Disponible</td>
            <td class="horario-celda" data-dia="miercoles" data-hora="10">Disponible</td>
            <td class="horario-celda" data-dia="jueves" data-hora="10">Disponible</td>
            <td class="horario-celda" data-dia="viernes" data-hora="10">Disponible</td>
          </tr>
          <!-- Agrega más filas según sea necesario -->
        </tbody>
      </table>
      </div>
    
      <script>
        // Obtener todas las celdas de horarios
        const celdasHorario = document.querySelectorAll('.horario-celda');
      
        // Agregar evento de clic a cada celda
        celdasHorario.forEach(function(celda) {
          celda.addEventListener('click', function() {
            const dia = this.getAttribute('data-dia');
            const hora = this.getAttribute('data-hora');
            const mensaje = `Has seleccionado el horario ${hora} AM del ${dia}.`;
            alert(mensaje);
            
            // Puedes realizar otras acciones aquí, como enviar los datos al servidor
          });
        });
      </script>    
</div>