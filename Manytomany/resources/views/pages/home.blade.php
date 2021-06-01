


@extends('layouts.main-layout')
@section('content')

  <main>
    {{-- Tabella fake di Matches --}}
    <ul>

      {{-- Numero di Match --}}
      <li>
        <h2>Number</h2>
        @for ($i = 1; $i <= $employees -> count(); $i++)
          <div>
            {{ $i }}
          </div>
        @endfor
      </li>

      {{-- Team 1 --}}
      <li>
        <h2>FirstName</h2>
        @foreach ($employees as $employee)
          <div>
            {{ $employee -> firstname }}
          </div>
        @endforeach
      </li>

      {{-- Team 2 --}}
      <li>
        <h2>LastName</h2>
        @foreach ($employees as $employee)
          <div>
            {{ $employee -> lastname }}
          </div>
        @endforeach
      </li>

      {{-- Clicare per sapere di piu sul Match --}}
      <li>
        <h2>Information</h2>
        @foreach ($employees as $employee)
          <div>
            <a href="{{route('employee', $employee -> id)}}">
              <i class="fas fa-info-circle"></i>
            </a>
          </div>
        @endforeach
      </li>

      {{-- Clicare per Modificare un Match --}}
      <li>
        <h2>Edit</h2>
        @foreach ($employees as $employee)
          <div>
            <a href="{{route('edit', $employee -> id)}}">
              <i class="edit fas fa-user-edit"></i>
            </a>
          </div>
        @endforeach
      </li>

    </ul>

  </main>
@endsection
