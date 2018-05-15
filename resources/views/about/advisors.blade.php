@extends('about/alayout')

@section('asection')
    <h2>Council of Advisors</h2>
    <p class="para"> Our Council of Advisors is made of individuals with prestigious holdings in their respective organizations from various sectors of the economy. They advise us on pertinent issues relating to our cause and even the organization as a whole as to how we can improve, sustain and maintain our goals. Since they are professional players in their respective fields, they help us tailor our activities in order to meet professional trends as well as to create output to meet current needs in the actual field of work. In effect they bridge the gap between being a student here and doing actual work out there and make sure we offer a standard input.</p><br/><br/>
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="">
            <img src="{{ asset('images/child-5.webp') }}" alt="Management" style="width:100%">
            <div class="caption">
              <h4>Name // Title</h4>
              <p>Lorem ipsum...</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="">
            <img src="{{ asset('images/child-5.webp') }}" alt="Management" style="width:100%">
            <div class="caption">
              <h4>Name // Title</h4>
              <p>Lorem ipsum...</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="">
            <img src="{{ asset('images/child-5.webp') }}" alt="Management" style="width:100%">
            <div class="caption">
            <h4>Name // Title</h4>
              <p>Lorem ipsum...</p>
              <p>Lorem ipsum...</p>
            </div>
          </a>
        </div>
    </div>
    </div>
@endsection
