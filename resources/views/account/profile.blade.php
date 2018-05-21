@extends('account/account')

@section('main')
    <div class="container">
            <div class="page-section">
                <div class="row">
                    <div class="col-md-9">
                        <!-- Tabbable Widget -->
                        <div class="tabbable paper-shadow relative" data-z="0.5">
                            <!-- Tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#account" data-toggle="tab"><i class="fa fa-fw fa-lock"></i> <span class="hidden-sm hidden-xs">Personal Profile</span></a></li>
                                <li><a href="#code-s" data-toggle="tab"><i class="fa fa-code"></i> <span class="hidden-sm hidden-xs"><i>CODE-S </i> Profile</span></a></li>
                            </ul>
                            <!-- // END Tabs -->
                            <!-- Panes -->
                            <div class="tab-content">
                                <div id="account" class="tab-pane active">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Avatar</label>
                                            <div class="col-md-6">
                                                <div class="media v-middle">
                                                    <div class="media-left">
                                                        <div class="icon-block width-100 bg-grey-100">
                                                            <i class="fa fa-photo text-light"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#" class="btn btn-white btn-sm paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated> Add Image<i class="fa fa-upl"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-md-2 control-label">Full Name</label>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-control-material">
                                                            <input type="email" class="form-control" id="exampleInputFirstName" placeholder="Your first name">
                                                            <label for="exampleInputFirstName">First name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-control-material">
                                                            <input type="email" class="form-control" id="exampleInputLastName" placeholder="Your last name">
                                                            <label for="exampleInputLastName">Last name</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-md-2 control-label">Email</label>
                                            <div class="col-md-6">
                                                <div class="form-control-material">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                        <label for="inputEmail3">Email address</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-md-2 control-label">Website</label>
                                            <div class="col-md-6">
                                                <div class="form-control-material">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                                        <input type="text" class="form-control used" id="website" value="www.mosaicpro.biz">
                                                        <label for="website">Website</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-md-2 control-label">Change Password</label>
                                            <div class="col-md-6">
                                                <div class="form-control-material">
                                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                    <label for="inputPassword3">Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group margin-none">
                                            <div class="col-md-offset-2 col-md-10">
                                                <button type="submit" class="btn btn-primary paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>Save Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="code-s" class="tab-pane">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Avatar</label>
                                            <div class="col-md-6">
                                                <div class="media v-middle">
                                                    <div class="media-left">
                                                        <div class="icon-block width-100 bg-grey-100">
                                                            <i class="fa fa-photo text-light"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="#" class="btn btn-white btn-sm paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated> Add Image<i class="fa fa-upl"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-md-2 control-label">Full Name</label>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-control-material">
                                                            <input type="email" class="form-control" id="exampleInputFirstName" placeholder="Your first name">
                                                            <label for="exampleInputFirstName">First name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-control-material">
                                                            <input type="email" class="form-control" id="exampleInputLastName" placeholder="Your last name">
                                                            <label for="exampleInputLastName">Last name</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-md-2 control-label">Email</label>
                                            <div class="col-md-6">
                                                <div class="form-control-material">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                        <label for="inputEmail3">Email address</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-md-2 control-label">Website</label>
                                            <div class="col-md-6">
                                                <div class="form-control-material">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                                        <input type="text" class="form-control used" id="website" value="www.mosaicpro.biz">
                                                        <label for="website">Website</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword3" class="col-md-2 control-label">Change Password</label>
                                            <div class="col-md-6">
                                                <div class="form-control-material">
                                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                    <label for="inputPassword3">Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group margin-none">
                                            <div class="col-md-offset-2 col-md-10">
                                                <button type="submit" class="btn btn-primary paper-shadow relative" data-z="0.5" data-hover-z="1" data-animated>Save Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- // END Panes -->
                        </div>
                        <!-- // END Tabbable Widget -->
                        <br/>
                        <br/>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                            <div class="panel-heading panel-collapse-trigger">
                                <h4 class="panel-title">My Account</h4>
                            </div>
                            @include('account/account-panel')
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
