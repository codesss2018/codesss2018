@if ($toEdit)
    @include('account/course-edit')
@else
    @include('account/course-new')
@endif
