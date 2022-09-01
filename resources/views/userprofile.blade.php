@include('header')

<div class="container p-5" id="page2" style="border: 3px solid black">
    <h3>User Detail</h3>
    @if (session('success'))
    <div class="alert alert-success">
    {!! session('success') !!}
    </div>
@endif
<a href="/add/postdata" class="btn btn-primary btn-sm" >Add</a>

    <table class="table" id="datatable"  cellspacing="0" cellpadding="3"  width="100%" >
        <thead class="tablehead">
            <tr>    
                
                
                <th scope="col">Id</th>
                <th scope="col">Name </th>
                <th scope="col">Email</th> 
                <th scope="col">Mo</th> 
                <th scope="col">Username</th>
                <th scope="col">Role</th>
                {{-- <th scope="col">Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($maindata->all() as $item)
            {{-- {{dd($item)}} --}}
            
             <tr class="pt-3">
                
                <td class="pt-3">{{$item->id}}</td>
                <td class="pt-3">{{$item->name}}</td>
                <td class="pt-3">{{$item->email}}</td>
                <td class="pt-3">{{$item->mobile_no}}</td>
                <td class="pt-3">{{$item->username}}</td>
                <td>{{$item->role}}</td>
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            
          </tr>
          @endforeach
        </tbody>   
    </table>   
</div>
