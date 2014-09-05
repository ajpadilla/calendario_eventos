 <table class="table table-striped table-bordered">
       <thead>
           <tr>
               <td>Id</td>
               <td>Nombre</td>
               <td>Editar</td>
               <td>Borrar</td>
           </tr>
       </thead>
          <tbody>
              @foreach($municipios as $municipio)
              <tr>
                  <td>{{ $municipio->id }}</td>
                  <td>{{ $municipio->nombre }}</td>
                  <td><button  type="button" class="editarEstado btn btn-primary">Editar</button></td>
                  <td><button  type="button" class="borrarEstado btn btn-danger">Borrar</button></td>
              </tr>
              @endforeach
          </tbody>
  </table>

