
@extends('layouts.master')
@section('content')




<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"> {{__('messages.Offer Name ')}}   </th>
        <th scope="col"> {{__('messages.Offer Price')}}</th>
        <th scope="col">{{__('messages.Offer Details ')}}</th>
        <th scope="col">{{__('messages.operations')}}</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach ($offers as $offer)
          
      
        <tr>
        <th scope="row">{{$offer->id}}</th>
        <td>{{$offer->name}}</td>
        <td>{{$offer->price}}</td>
        <td>{{$offer->details}}</td>
        <td><a href="{{url('offers/edit/'.$offer->id)}}" class="btn btn-success">{{__('messages.update')}}</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection