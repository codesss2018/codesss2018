<div class="media-right">
    @switch($user->type)
        @case(1)
            <span class="label">
                <a href="#" class="label bg-red-000">Learner</a>
            </span>
            @break
        @case(2)
            <span class="label">
                @switch(Session::get('user_mode'))
                    @case(1)
                    <a href="{{ route('switch-mode',['mode'=>2]) }}" class="label bg-red-300">Instructor</a>
                    <a href="#" class="label bg-red-000">Learner</a>
                    @break
                    @case(2)
                    <a href="#" class="label bg-red-000">Instructor</a>
                    <a href="{{ route('switch-mode',['mode'=>1]) }}" class="label bg-red-300">Learner</a>
                    @break
                    @default
                    <a href="{{ route('switch-mode',['mode'=>2]) }}" class="label bg-red-300">Instructor</a>
                    <a href="{{ route('switch-mode',['mode'=>1]) }}" class="label bg-red-300">Learner</a>
                @endswitch
            </span>
            @break
        @case(3)
            <span class="label">
                @switch(Session::get('user_mode'))
                    @case(1)
                    <a href="{{ route('switch-mode',['mode'=>3]) }}" class="label bg-red-300">Administrator</a>
                    <a href="{{ route('switch-mode',['mode'=>2]) }}" class="label bg-red-300">Instructor</a>
                    <a href="#" class="label bg-red-000">Learner</a>
                    @break
                    @case(2)
                    <a href="{{ route('switch-mode',['mode'=>3]) }}" class="label bg-red-300">Administrator</a>
                    <a href="#" class="label bg-red-000">Instructor</a>
                    <a href="{{ route('switch-mode',['mode'=>1]) }}" class="label bg-red-300">Learner</a>
                    @break
                    @case(3)
                    <a href="#" class="label bg-red-000">Administrator</a>
                    <a href="{{ route('switch-mode',['mode'=>2]) }}" class="label bg-red-300">Instructor</a>
                    <a href="{{ route('switch-mode',['mode'=>1]) }}" class="label bg-red-300">Learner</a>
                    @break
                    @default
                    <a href="{{ route('switch-mode',['mode'=>3]) }}" class="label bg-red-300">Administrator</a>
                    <a href="{{ route('switch-mode',['mode'=>2]) }}" class="label bg-red-300">Instructor</a>
                    <a href="{{ route('switch-mode',['mode'=>1]) }}" class="label bg-red-300">Learner</a>
                @endswitch
            </span>
            @break
        @default
            <span class="label">
                <a href="{{ route('switch-mode',['mode'=>3]) }}" class="label bg-red-300">Administrator</a>
                <a href="{{ route('switch-mode',['mode'=>2]) }}" class="label bg-red-300">Instructor</a>
                <a href="{{ route('switch-mode',['mode'=>1]) }}" class="label bg-red-300">Learner</a>
            </span>
    @endswitch
</div>
