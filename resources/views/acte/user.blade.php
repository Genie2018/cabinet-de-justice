
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
                		</tr>
                		@foreach($actes as $acte)
                		<tr>
                  			<td>{{$acte->description}}</td>
                			<td>{{$acte->nature->nom}}</td>
                            <td>{{$acte->created_at}}</td>
                			            
                		</tr>
                		@endforeach
                	</table>
{{$actes->render()}}
</div>
</div>