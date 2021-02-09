{{-- {{route('brand-index')}} --}}
<header>
    <nav id="navbar">
        <ul>
            <li><a href="{{route('employees-index')}}">EMPLOYEES</a></li>
            <li><a href="{{route('tasks-index')}}">TASKS</a></li>
            <li><a href="{{route('typology-index')}}">TYPOLOGIES</a></li>
        </ul>
    </nav> 

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul id="error">
                @foreach ($errors->all() as $error)
                    <h1>!</h1>
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</header>  