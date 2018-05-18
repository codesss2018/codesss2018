<!-- begind here -->
<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="loginRegisterCancel">
                    &times;</button>
                <h4 class="modal-title" id="myModalLabel">Don't Wait, Login now!</h4>
            </div>
            <div class="modal-body modal-body-sub">
                <div class="row">
                    <div class="col-md-12 modal_body_left modal_body_left1">
                        <div class="sap_tabs">
                            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                                <ul>
                                    <li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
                                    <li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
                                </ul>
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                    <div class="facts">
                                        <div class="register">
                                            <form action="/login" method="post">
                                                {{ $errors }}
                                                {{ csrf_field() }}
                                                <input name="email" placeholder="Email Address" type="text" required="">
                                                <input name="password" placeholder="Password" type="password" required="">
                                                <div class="sign-up">
                                                    <input type="submit" value="Sign in"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
                                    <div class="facts">
                                        <div class="register">
                                            <form action="/register" method="post">
                                                {{ $errors }}
                                                {{ csrf_field() }}
                                                <input placeholder="User Name" name="name" type="text" required="">
                                                <input placeholder="Email Address" name="email" type="email" required="">
                                                <input placeholder="Phone Number" name="phone" type="text" required="" style="margin-top:17px;">
                                                <input placeholder="Password" name="password" type="password" required="">
                                                <input placeholder="Confirm Password" name="password_confirmation" type="password">
                                                <div class="sign-up">
                                                    <input type="submit" value="Create Account"/>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
