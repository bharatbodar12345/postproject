@include('header')

<div class="container  pt-3">
    <div class="row">
        <h3>All Posts</h3>
      <div>
        <a href="/add/postdata" class="btn btn-primary btn-sm" >Add Post</a>
      </div>

@foreach ($postdata->all() as $item)
{{-- {{dd($item)}} --}}

    <div class="col-lg-4 pt-3">
      <div class="card text-center " style="width:80%; background-color:rgb(181, 193, 197);">
        <div class="card-body">
            <img class="" width="100px" height="100px" src="{{url("public/uploads")}}/{{$item->image->image}}" >
            <h5 class="card-title">{{$item->category->name}}</h5>
            <p class="card-text">{{$item->description}}</p>

            <a href="#" class="btn btn-primary">{{$item->user->name}}</a>
          </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
  <div class="container pt-3">

    <a href="/postshow" class="btn btn-primary">Back</a>
  </div>


