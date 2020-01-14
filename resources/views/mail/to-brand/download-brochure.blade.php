@extends('layouts.master-email')

@section('main-content')

	<p>
		<b>Caffe Latte </b> Download Brochure<br/><br/>

		<b>Email:</b> {{ $email }}<br/>
		<b>Name:</b> {{ $name }}<br/>
		<b>Occupation:</b> {{ $occupation }}<br/>
		<b>Company:</b> {{ $company }}<br/>
		<b>Country:</b> {{ $country }}<br/>
		<b>City:</b> {{ $city }}<br/>
		<b>Phone number:</b> {{ $phone }}<br/>

    </p>

@endsection
