@extends('layouts.master')

@section('content')    

  <div class="container">
      <div class="">

        <ul>
          @foreach $carrito as $item
            <li>$item->producto</li>

          @endforeach 
        </ul> 
              
      </div>
    
  </div>

@endsection