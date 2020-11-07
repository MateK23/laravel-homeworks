<!DOCTYPE html>
<html lang="en">
<head>
    <title>Week 3</title>
</head>
<body>
    <p>Hello</p>

    <p>Section goes here</p>

    @yield('content')

    <p>Here goes included part</p>
    @include('week3.inc.included')

    {{-- @includeFirst(['view.name', 'variable'], ['some' => 'data']) --}}
    {{-- @includeWhen($boolean, 'view.name', ['some' => 'data'])      --}}
    {{-- @includeIf('view.name', ['some' => 'data']) --}}

    @stack("scripts")
</body>
</html>
