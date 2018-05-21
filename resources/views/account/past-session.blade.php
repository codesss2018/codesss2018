<div class="panel-body list-group">
    <ul class="list-group list-group-menu">

            @forelse ($codesessions as $key => $value)
                <li class="list-group-item">
                <a href="{{ route('session',['sessid'=>$value->id]) }}">{{$value->name}}
                    <div class="text-light">
                        <span>{{ $value->start_date->format('jS F Y') }}</span> - <span>{{ $value->end_date->format('jS F Y') }}</span>
                    </div>
                </a>
                </li>
            @empty
                <li class="list-group-item">
                <a href="">No Sessions Available
                </a>
                </li>
            @endforelse


    </ul>
</div>
