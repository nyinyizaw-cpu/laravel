@extends('master')
@section('content')
<form class="my-5 py-5">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3696.6366420978698!2d80.54822825033759!3d22.101689485355582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa1c432ff050d6fc0!2sFRAMING%20HOUSE%20%26%20RECHARG%20POINT!5e0!3m2!1smy!2smm!4v1601749246746!5m2!1smy!2smm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="my-5 py-5"></iframe>
	</form>
	<div class="ml-auto">
	<form  class="my-5 py-5 mt-2 pt-2 bg-dark">
		<label for="user-name" class="text-light text-center">Name</label>
		<input type="text" name="user-name" id="user-name" placeholder="enter name"><br>
		<label for="user-ph" class="text-light text-center">Phone no</label>
		<input type="number" name="user-name" id="user-ph" placeholder="enter ph no"><br>
		<label for="user-mail" class="text-light">Email</label>
		<input type="text" name="user-name" id="user-mail" placeholder="enter email"><br>
		<label for="user-add" class="text-light text-center">Address</label>
		<input type="text" name="user-name" id="user-add" placeholder="enter address"><br>
		<button class="btn btn-dark btn-dd ">Cancel</button>
		<button class="btn btn-dark">OK</button>

	</form>
	</div>
	@endsection