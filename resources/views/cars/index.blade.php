@section('title')
    All cars
@endsection

@section('content')
        @foreach($cars as $car)
          <div class="car">

            <h2 class="car-title">
                <a href=" {{ route(
                                'single-car',
                                [ 'id' => $car->id ]
                             )
                         }} ">
                    {{ $car->title }}
                </a>
            </h2>
            <p>{{ $car->producer }} </p>
        </div>
        @endforeach
@endsection
