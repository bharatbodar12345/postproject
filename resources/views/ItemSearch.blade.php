@include('header')

<div class="col-lg-12">  
    @if(!empty($items))  
        @foreach($items as $key => $value)  
            <h3 class="text-danger">{{ $value['title'] }}</h3>  
            <p>{{ $value['description'] }}</p>  
        @endforeach  
        {!! $items->appends(Input::all())->render() !!}  
    @endif  
</div>  