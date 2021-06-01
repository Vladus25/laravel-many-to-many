@extends('layouts.main-layout')
@section('content')

  <main>
    <div>
      <ol>
        @foreach ($employees as $employee)
          <li>
            <div class="line">
              FirstName: {{ $employee -> firstname }} | LastName: {{ $employee -> lastname }}
              <div >
                State: {{ $employee -> location -> state }} | Street: {{ $employee -> location -> street }}
              </div>
                <ol>
                  @foreach ($employee -> tasks as $task)
                    <li>
                      <div>
                        Name: {{$task -> name}}
                      </div>
                    </li>
                  @endforeach
                </ol>
            </div>
          </li>
        @endforeach
      </ol>
    </div>
  </main>
@endsection
