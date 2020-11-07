@extends('week3.main')

@section('content')
    <div>
        <h1>I am content</h1>
    </div>
@endsection

{{-- if statements example --}}

@section('if')
    <?php
        $a=1;
    ?>
    {{--
    @if(1<2)
    <p>{{ $a }}</p>
    @elseif(1>2)
        @if()
        @else
        @endif
    @endif

    @foreach($array as $element)
    @endforeach

    @for($i = 0; $i < 10; $i++)
        {{ $i }} -secure
        {!! $i !!}
    @endfor

    @while($a<15)
        {{ $a++ }}
    @endwhile


    {{-- to import assets: href="{{ asset('assets/css/style.css') }}" --}}
    {{-- alert(document.cookies) --}}
    --}}
@endsection

@push("scripts")
@endpush

@prepend("scripts")
@endprepend
