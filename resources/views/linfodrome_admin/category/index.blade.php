@extends('master')
<!-- @section('title', 'Categories') -->

@section('content')
<div class="uk-container uk-container-large">
<table id="example" class="uk-table uk-table-hover uk-table-striped" style="width:100%">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Created At</th>
			<th>Updated At</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($categories as $category)
		<tr>
			
			<td>{{$category->id}}</td>
			<td>{{$category->name}}</td>
			<td><{{$category->created_at}}</td>
			<td>{{$category->updated_at}}</td>
			<td><a href="">edit</a></td>
			
			
		</tr>
		@endforeach
	
		<tbody>
		</table>
		@endsection

		@section('js')
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.uikit.min.js"></script>
	<script type="text/javascript">
			$(document).ready(function () {
				
				var table = $('#example').DataTable( {
					"aProcessing": true,
					"aServerSide": true,
					responsive: true
				} );
				
				new $.fn.dataTable.FixedHeader( table );
			});
		</script>
		@endsection
		</div>