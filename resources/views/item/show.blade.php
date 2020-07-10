@extends('layouts.app')

@section('content')
  <div>
    <div>
      <a href="{{route('itemShow',['id'=>$item->id])}}">{{$item->name}}</a>
    </div>
    <div>
      {{$item->amount}}
    </div>
  </div>
@endsection