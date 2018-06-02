<div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    <div class="row" data-toggle="isotope">
                        <div class="item col-xs-12 col-lg-6">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">Site</h4>
                                    <p class="text-subhead text-light">Control Panel</p>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <a href="#" class="text-subhead list-group-link" data-toggle="modal" data-target="#sessionModal">
                                                Create New Session
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="item col-xs-12 col-lg-6">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <h4 class="text-headline margin-none">Sessions</h4>
                                    <p class="text-subhead text-light">Control Panel</p>
                                </div>
                                <ul class="list-group">
                                @forelse($codesessions as $key => $value)
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <a href="{{ route('session-edit',['sessid'=>$value->id]) }}" class="text-subhead list-group-link">
                                                {{$value->name}}<br>
                                                <span class="text-light">{{$value->start_date->format('jS F Y')}} - </span>  <span class="text-light"> {{$value->end_date->format('jS F Y')}}</span>
                                            </a>
                                        </div>
                                    </li>
                                @empty
                                    <li class="list-group-item media v-middle">
                                        <div class="media-body">
                                            <a href="#" class="text-subhead list-group-link">
                                                No Sessions Created
                                            </a>
                                        </div>
                                    </li>
                                @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
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
    <!-- Modal -->
    <div class="modal fade" id="sessionModal" tabindex="-1" role="dialog" aria-labelledby="sessionModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Session Management</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
                @include('account/session-profile')
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>
