<ul class="tag_nav list-unstyled">
        <li @if($sub=='about')class="active" @endif><a href="{{ route('about') }}">About Us</a></li>
        <li @if($sub=='management')class="active" @endif><a href="#">Management</a></li>
        <li @if($sub=='sponsors')class="active" @endif><a href="#">Sponsors</a></li>
        <li @if($sub=='partners')class="active" @endif><a href="#">Partners</a></li>
        <li @if($sub=='team')class="active" @endif><a href="#">Full Team</a></li>
        <li @if($sub=='advisors')class="active" @endif><a href="#">Advisors</a></li>
        <li @if($sub=='jobs')class="active" @endif><a href="#">Jobs</a></li>
        <li @if($sub=='contact')class="active" @endif><a href="{{ route('contact') }}">Contact Us</a></li>
        <li @if($sub=='faqs')class="active" @endif><a href="#">FAQs</a></li>
        <li @if($sub=='current')class="active" @endif><a href="#">Current Info</a></li>
        <div class="clearfix"></div>
</ul>
<div class="news_letter">
    <h4>news letter</h4>
        <form>
            <span><input type="text" placeholder="Your email address"></span>
            <span  class="pull-right fa-btn btn-1 btn-1e" style="dispaly:block!important"><input type="submit" value="subscribe"></span>
        </form>
</div>
