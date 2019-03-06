<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">
      Statistiques
    </h3>
  </div>
  <div class="panel-body">
    <table class="table table-bordered">
      <tr>
        <td>Total des actes</td>
        <td><span class="badge badge-primary">{{$statistiques['total']}}</span></td>
        <td>Total des utilisateur</td>
        <td><span class="badge badge-primary">{{\App\User::All()->count()}}</span></td>
        <td>Mes actes</td>
        <td><span class="badge badge-primary">{{$statistiques['name']}}</span></td>
      </tr>
      <tr>
        <td>Nature</td>
       <td>
         <table class="table table-bordered">
           <tr>
             <td>Location</td>
             <td><span class="badge badge-primary">{{$statistiques['Location']}}</span></td>
           </tr>
           <tr>
             <td>Assignation</td>
             <td><span class="badge badge-primary">{{$statistiques['Assignation']}}</span></td>
           </tr>
           <tr>
             <td>Pv de Constat</td>
             <td><span class="badge badge-primary">{{$statistiques['pv de constat']}}</span></td>
           </tr>
           <tr>
             <td>Signification</td>
             <td><span class="badge badge-primary">{{$statistiques['signification']}}</span></td>
           </tr>
         </table>
       </td>
      </tr>
    </table>
  </div>

</div>
</br>


<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title">
      Liste des documents
    </h3>
  </div>
  <div class="panel-body">
<table class="table table-striped table-bordered table-hovered">
                		<tr>
                			<td>Description</td>
                			<td>Nature</td>
                			<td>Utilisateur</td>
                			<td>Date de creation</td>
                         <td>Details</td>
                         <td>Editer</td>
                      <td>Supprimer</td>
                		</tr>
                		@foreach($actes as $acte)
                		<tr>
                  			<td>{{$acte->description}}</td>
                  			<td>{{$acte->nature->nom}}</td>
                  			<td>{{$acte->user->name}}</td>
                        <td>{{$acte->created_at}}</td>
                			
                			 <td>
                               <a href="{{url('acte/'.$acte->id.'/consulter')}}" class="btn btn-info">Consulter</a>
                           </td>
                           <td>    
                  <a href="{{route('acte.edit',['id'=>$acte->id])}}" class="btn btn-sm btn-warning">Editer</a>
                          </td>
                          
                          <td>
                  <a href="" class="btn btn-sm btn-danger">Supprimer</a>
                          
                        </td>
                		</tr>
                		@endforeach
                	</table>
                    {{$actes->render()}}
     </div>
     </div>               