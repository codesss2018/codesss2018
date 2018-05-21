<div class="media-right">
    @switch($user->type)
        @case(1)
            <span class="label">
                <a class="label bg-red-000">Learner</a>
            </span>
            @break
        @case(2)
            <span class="label">
                @switch(Session::get('user_mode'))
                    @case(1)
                    <a class="label bg-red-300">Instructor</a>
                    <a class="label bg-red-000">Learner</a>
                    @break
                    @case(2)
                    <a class="label bg-red-000">Instructor</a>
                    <a class="label bg-red-300">Learner</a>
                    @break
                    @default
                    <a class="label bg-red-000">Instructor</a>
                    <a class="label bg-red-000">Learner</a>
                @endswitch
            </span>
            @break
        @case(3)
            <span class="label">
                @switch(Session::get('user_mode'))
                    @case(1)
                    <a class="label bg-red-300">Administrator</a>
                    <a class="label bg-red-300">Instructor</a>
                    <a class="label bg-red-000">Learner</a>
                    @break
                    @case(2)
                    <a class="label bg-red-300">Administrator</a>
                    <a class="label bg-red-000">Instructor</a>
                    <a class="label bg-red-300">Learner</a>
                    @break
                    @case(3)
                    <a class="label bg-red-000">Administrator</a>
                    <a class="label bg-red-300">Instructor</a>
                    <a class="label bg-red-300">Learner</a>
                    @break
                    @default
                    <a class="label bg-red-300">Administrator</a>
                    <a class="label bg-red-300">Instructor</a>
                    <a class="label bg-red-300">Learner</a>
                @endswitch
            </span>
            @break
        @default
            <span class="label">
                <a class="label bg-red-300">Administrator</a>
                <a class="label bg-red-300">Instructor</a>
                <a class="label bg-red-300">Learner</a>
            </span>
    @endswitch
</div>
