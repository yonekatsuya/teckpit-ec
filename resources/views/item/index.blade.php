@extends('layouts.app')

@section('content')
  <div>
    <div>
      @foreach ($items as $item)
        <div>
          <div>
            <div>
              <a href="{{ route('itemShow',['id' => $item->id]) }}">{{$item->name}}</a>
            </div>
            <div>{{$item->amount}}</div>
          </div>
        </div>
      @endforeach
    </div>
    <div>
      {{ $items->appends(['keyword' => Request::get('keyword')])->links() }}
    </div>
  </div>
@endsection