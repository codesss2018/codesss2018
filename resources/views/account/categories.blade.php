@forelse ($categories as $key => $value)
    @if ($value->id == $course->id)
        <li class="list-group-item active">
            <a href="{{ route('course-comments',['courseid'=>$value->id,'sessid'=>$sessid]) }}"><i class="fa fa-chevron-right fa-fw"></i> {{$value->title}}</a>
        </li>
    @else
        <li class="list-group-item">
            <a href="{{ route('course-comments',['courseid'=>$value->id,'sessid'=>$sessid]) }}"><i class="fa fa-chevron-right fa-fw"></i> {{$value->title}}</a>
        </li>
    @endif

@empty

@endforelse
