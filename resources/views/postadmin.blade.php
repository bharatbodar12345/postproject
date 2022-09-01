@include('header')

    
  

        <div class="container p-5" id="page2" style="border: 3px solid black">
            <h3>User Post </h3>
            @if (session('success'))
            <div class="alert alert-success">
            {!! session('success') !!}
            </div>
        @endif
        {{-- <a href="/add/postdata" class="btn btn-primary btn-sm" >Add</a> --}}
        {{-- <a href="/admin/allposts" class="btn btn-primary btn-sm" >All Post</a> --}}


            <table class="table" id="datatable"  cellspacing="0" cellpadding="3"  width="100%" >
                <thead class="tablehead">
                    <tr>    
                        
                        
                        <th scope="col">Id</th>
                        <th scope="col">User Id</th>
                        <th scope="col">Image Id</th> 
                        <th scope="col">Category Id </th> 
                        <th scope="col">Description</th>
                        <th scope="col">Access</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($postdata->all() as $user)
                        <tr class="pt-3">
                            {{-- {{dd($postdata)}} --}}

                        <td class="pt-3">{{$user->id}}</td>
                        <td class="pt-3">{{$user->user->name}}</td>
                        <td class="pt-3"><img width="100px" height="100px" src="{{url("public/uploads")}}/{{$user->image->image}}" ></td>
                        <td class="pt-3">{{$user->category->name}}</td>
                        <td class="pt-3">{{$user->description}}</td>
                        <td class="pt-3">{{$user->access}}</td>
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        
                           
                        <td>
                            <form action="/delete/post/{{$user->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button  class='deletee btn btn-primary btn-sm'>Delete</button>
                            </form> 

                            @if($user->access == 0) 
                                <form action="/admin/accept/{{$user->id}}" method="POST">
                                    {{ csrf_field() }}                          
                                    <button type="submit" class="btn btn-success btn-sm" name="changeStatus" value="1">Accept</button>

                                    
                                </form>
                                @endif                    
                            
                                
                        </td>
                            
                            {{-- <a href="/admin/accept" class='edit1 btn btn-primary btn-sm'>Accept</a></td> --}}
                  </tr>
                  @endforeach
                </tbody>
                  
            </table>
                
        </div>

    @include('footer')
    


