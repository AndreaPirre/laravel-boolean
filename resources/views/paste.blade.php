@extends('layouts.main-layout')

@section('content')

<h1>LE LUNGHE</h1>
    <ul>
    @foreach ($data as $pasta)
        @if ($pasta['tipo'] ==='lunga')
        <li>
            <!-- <h2>{{ $pasta['titolo'] }}</h2> -->
            <img class="img_pasta" src="{{ $pasta['src'] }}" alt="">
        </li>
        @endif
    @endforeach
    </ul>


<h1>LE CORTE</h1>
    <ul>
    @foreach ($data as $pasta)
        @if ($pasta['tipo'] ==='corta')

        <li>
            <!-- <h2>{{ $pasta['titolo'] }}</h2> -->
            <img class="img_pasta" src="{{ $pasta['src'] }}" alt="">
        </li>
        @endif
    @endforeach
    </ul>


<h1>LE CORTISSIME</h1>
    <ul>
    @foreach ($data as $pasta)
        @if ($pasta['tipo'] ==='cortissima')
        <li>
            <!-- <h2>{{ $pasta['titolo'] }}</h2> -->
            <img class="img_pasta" src="{{ $pasta['src'] }}" alt="">
        </li>
        @endif
    @endforeach
    </ul>


@endsection
