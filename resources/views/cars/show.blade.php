@section('title')
    {{ $car->title }}
@endsection

@section('content')
    <h1 class="car-title"> {{ $car->title }} </h1>
    <p>{{ $car->producer }}</p>
@endsection