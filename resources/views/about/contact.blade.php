@extends('about/alayout')

@section('asection')
    <div class="row">
        <h2 class="text-red-text">Contact Us</h2>
        <address>
            <p>Location: <span class="text-red-text"> KNUST, Kumasi Ghana</span> </p>
            <p>Phone: <span class="text-red-text"> (+233) 55-333-9728</span></p>
            <p>Email: <a href="mailto:codesss2018@gmail.com" class="text-red-text">codesss2018@gmail.com</a></p>
        </address>
          @include('about/message')
    <div class="clearfix"></div>
</div>
@endsection
