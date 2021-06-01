@extends('layouts.main-layout')
@section('content')
  <main>
    <div>

      {{-- Il form serve per inviare le modifiche alla tabella nella database. In questo caso modifichiamo un oggetto--}}
      <form method="POST" action="{{ route('update', $employee -> id) }}">
        @csrf
        @method('POST')

        <ul class="edit">

          <li>
            <h2>Team-1</h2>
            <div>
              <input type="text" name="firstname" placeholder="firstname" value="{{ $employee -> firstname }}">
            </div>
          </li>

          <li>
            <h2>Team-2</h2>
            <div>
              <input type="text" name="lastname" placeholder="lastname" value="{{ $employee -> lastname }}">
            </div>
          </li>

        </ul>

        <div class="button-center">
          <button type="submit" class="home">Update Employee</button>
          <a class="home" href="{{route('home')}}">List Employees</a>
        </div>

      </form>
    </div>
  </main>
@endsection
