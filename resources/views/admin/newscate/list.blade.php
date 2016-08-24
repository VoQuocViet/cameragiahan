@extends('admin.master') 
@section('controller','Category')
@section('action','List') 
@section('content')
<table class="table table-striped table-bordered table-hover"
	id="dataTables-example">
	<thead>
		<tr align="center">
			<th>ID</th>
			<th>Name</th>
			<th>Alias</th>
			<th>Menu</th>
			<th>Delete</th>
			<th>Edit</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($data as $item)
		<tr class="odd gradeX" align="center">
			<td>{!! $item["id"] !!}</td>
			<td>{!! $item["name"] !!}</td>
			<td>{!! $item["alias"] !!}</td>
			<td>{!! $item["menu"] !!}</td>
			<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onClick="return xacnhanxoa('Bạn có chắc muốn xóa không?')" href="{!! URL::route('admin.newscate.getDelete', $item['id']) !!}">
					Delete</a></td>
			<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.newscate.getEdit', $item['id']) !!}">Edit</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection()
