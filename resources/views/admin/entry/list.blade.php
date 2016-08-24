@extends('admin.master') @section('controller','Product')
@section('action','List') @section('content')
<table class="table table-striped table-bordered table-hover"
	id="dataTables-example">
	<thead>
		<tr align="center">
			<th>ID</th>
			<th>Name</th>
			<th>Date</th>
			<th>Delete</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
	@foreach($entryList as $item)
		<tr class="odd gradeX" align="center">
			<td>{!! $item->id !!}</td>
			<td>{!! $item->name !!}</td>
			<td>{!! $item->created_at !!}</td>
			<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route('admin.entry.getDelete',$item->id) !!}" onclick="return xacnhanxoa('Do you want to delete this Product?')">
					Delete</a></td>
			<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.entry.getEdit',$item->id) !!}">Edit</a></td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection()
