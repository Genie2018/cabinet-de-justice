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
        <td><span class="badge badge-primary">{{$statistiques['mesactes']}}</span></td>
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
                      <td>Date de creation</td>
                      <td>Actions</td>
                		</tr>
                		@foreach($actes as $acte)
                		<tr>
                  			<td>{{$acte->description}}</td>
                			<td>{{$acte->nature->nom}}</td>
                      <td>{{$acte->created_at}}</td>
                       <td>
                               <a href="{{url('acte/'.$acte->id.'/consulter')}}" class="btn btn-info">Consulter</a>
                           </td>
                			            
                		</tr>
                		@endforeach
                	</table>
{{$actes->render()}}
</div>
</div>