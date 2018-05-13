@extends('about/alayout')

@section('asection')
    <div class="row">
        <h2>Contact Us</h2>
        <address>
            <p>Kumasi-KNUST, Ghana</p>
            <p>Phone:(+233) 55-333-9728 </p>
            <p>Email: <a href="mailto:codesss2018@gmail.com">codesss2018@gmail.com</a></p>
        </address>
          <div class="contact-form">
            <h2>Contact Us</h2>
            <form method="post" action="contact-post.html">
                <div>
                    <span>name</span>
                    <span><input type="username" class="form-control" id="userName"></span>
                </div>
                <div>
                    <span>e-mail</span>
                    <span><input type="email" class="form-control" id="inputEmail3"></span>
                </div>
                <div>
                    <span>subject</span>
                    <span><textarea name="userMsg"> </textarea></span>
                </div>
               <div>
                    <label class="fa-btn btn-1 btn-1e"><input type="submit" value="submit us"></label>
              </div>
            </form>
          </div>
    <div class="clearfix"></div>
</div>
@endsection
