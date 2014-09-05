 <table class="table table-striped table-bordered">
  2     <thead>
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
				  <td><a  href="{{URL::to('editarMunicipio/'.$municipio->id)}}" class="btn btn-primary">Editar<i class="fa fa-arrow-circle-right"></i></a></td>
                  <td><a  href="" class="btn btn-danger">Borrar<i class="fa fa-arrow-circle-right"></i></a></td>
              </tr>
              @endforeach
          </tbody>
  </table>

