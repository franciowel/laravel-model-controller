@extends('layouts.app')

@section('main_content')
    <h1>Film</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>
                <h3>
                    {{$movie -> title}}
                </h3>

                <p>
                    Titolo originale: {{$movie -> original_title}}
                </p>

                <p>
                    Data di uscita: {{$movie -> date}}
                </p>

            </li>
        @endforeach
    </ul>
@endsection