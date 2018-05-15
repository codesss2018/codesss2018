@extends('about/alayout')

@section('asection')
    <div class="row">
        <h2 class="text-red-text">Contact Us</h2>
        <address>
            <p>Location: <span class="text-red-text"> KNUST, Kumasi Ghana</span> </p>
            <p>Phone: <span class="text-red-text"> (+233) 55-333-9728</span></p>
            <p>Email: <a href="mailto:codesss2018@gmail.com" class="text-red-text">codesss2018@gmail.com</a></p>
        </address>
          <div class="contact-form">
            <form method="post" action="">
                <div>
                    <span>name</span>
                    <span><input type="username" class="form-control" id="userName"></span>
                </div>
                <div>
                    <span>e-mail</span>
                    <span><input type="email" class="form-control" id="inputEmail3"></span>
                </div>
                <div>
                    <span>phone-number</span>
                    <span><input type="email" class="form-control" id="inputEmail3"></span>
                </div>
                <div>
                    <span>subject</span>
                    <span><textarea name="userMsg"> </textarea></span>
                </div>
               <div>
                    <label class="fa-btn btn-1 btn-1e"><input type="submit" value="submit"></label>
              </div>
            </form>
          </div>
    <div class="clearfix"></div>
</div>
@endsection
