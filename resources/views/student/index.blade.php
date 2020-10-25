@extends('master')
@section('content')
<div class="container my-5 py-5">
		<div class="row">
			<div class="col-md-6">
		@foreach($students as $row)
		<p>{{$row->id}}|{{$row->rno}}|
			{{$row->name}}| {{$row->email}}|{{$row->phno}}|{{$row->address}} </p>
		@endforeach
			</div>
			<div class="col-md-6 my-5 py-5 mt-2 pt-2">
				<img src="{{asset('mytemplateassets/h1.jpg')}}" align="center">
			</div>
			
		</div>
		
	</div>

@endsection