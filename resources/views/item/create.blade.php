@extends('dashboard.home')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">add new item</h1>
    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="/item/"> view all items</a></li>
        </ul>
    </nav>
    @if(Session::has('item_create'))
    <div class='alert alert-success'>
        <em>
            {!! session('item_create') !!}
        </em>
        <button type="button" class="close" data-dismiss='alert' aria-label='close'>
            <span aria-hidden="true">&times</span>
        </button>
    </div>
    @endif
    <div class="panel-body">
        @include('common.errors')
        {!! Form ::open(array('url' => 'item','files'=>true))  !!}
        
        {!! Form ::label('name', 'Item name')  !!}
        {!! Form ::text('name' , null , array('placeholder'=>'enter item name...', 'class' => 'form-control'))  !!}
        
        {!! Form ::label('quantity', 'Quantity')  !!}
        {!! Form ::text('quantity' , null , array('placeholder'=>'enter quantity...','class' => 'form-control'))  !!}
        
        {!! Form ::label('price', 'Price')  !!}
        {!! Form::number('price' , null , array('placeholder'=>'enter price...','class' => 'form-control')) !!}
        
        
        {!! Form ::submit('create post' , array('class' => ' btn btn-primary btn-sm')) !!}
        {!! Form ::close()!!}
    </div>
@endsection
