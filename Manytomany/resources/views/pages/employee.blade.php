@extends('layouts.main-layout')
@section('content')

  <main>
    <div>
      <h1 class="text-center">Employee</h1>
      <ul class="employee">

        <li>
          <h2>ID</h2>
          <div>
            {{ $employee -> id }}
          </div>
        </li>

        <li>
          <h2>FirstName</h2>
          <div>
            {{ $employee -> firstname }}
          </div>
        </li>

        <li>
          <h2>LastName</h2>
          <div>
            {{ $employee -> lastname }}
          </div>
        </li>

        <li>
          <h2>State</h2>
          <div>
            {{ $employee -> location -> state }}
          </div>
        </li>

        <li>
          <h2>Street</h2>
          <div>
            {{ $employee -> location -> street }}
          </div>
        </li>

      </ul>
    </div>

    <div>
      <h1 class="text-center">All Tasks</h1>
      <ul class="employee">

        <li>
          <h2>Task</h2>
          @for ($i = 1; $i <= $employee -> tasks -> count(); $i++)
            <div>
              {{ $i }}
            </div>
          @endfor
        </li>

        <li>
          <h2>Name</h2>
          @foreach ($employee ->tasks as $task)
            <div>
              {{ $task -> name }}
            </div>
          @endforeach
        </li>

      </ul>
    </div>

    <div class="button-center">
      <a class="home" href="{{route('home')}}">List Employees</a>
    </div>

  </main>
@endsection
