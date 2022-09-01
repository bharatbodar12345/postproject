@include('header')

<style>
.error{
    color: red;
}
#page1{
    background-color: rgb(180, 228, 212);
}

</style>

    <div class="container pt-5 pb-5" id="page1" style="border: 3px solid black">
        <h1>Register</h1>
        @if (session('success'))
        <div class="alert alert-success">
        {!! session('success') !!}
        </div>
    @endif

        <form id="form" enctype='multipart/form-data' method="POST" action="/submit" class="pt-5">
            @csrf

            {{-- name --}}
            <div class="col-lg-12">
                <div class=" row form-group ">
                    <div class="col-lg-2">
                        <label for="name">Name :</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" id="name">
                        <input type="hidden" id="id" name="id" value="">
                    </div>
                    <div class="col-lg-2">
                        <span class="error">*</span>
                    </div>
                </div>
            </div>

            {{-- email --}}
            <div class="col-lg-12 pt-3">
                <div class=" row form-group ">
                    <div class="col-lg-2">
                        <label for="name">Email  :</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" id="email">
                    </div>
                    <div class="col-lg-2">
                        <span class="error">*</span>
                    </div>
                </div>
            </div>
            {{-- password --}}
            <div class="col-lg-12 pt-3">
                <div class=" row form-group ">
                    <div class="col-lg-2">
                        <label for="name">Password  :</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" id="password">
                    </div>
                    <div class="col-lg-2">
                        <span class="error">*</span>
                    </div>
                </div>
            </div>

            {{-- mo --}}
            <div class="col-lg-12 pt-3">
                <div class=" row form-group ">
                    <div class="col-lg-2">
                        <label for="name">MO  :</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="number" class="form-control" id="mo" placeholder="Enter Mo" name="mo">
                    </div>
                    <div class="col-lg-2">
                        <span class="error">*</span>
                    </div>
                </div>
            </div>

            {{-- uasername --}}
            <div class="col-lg-12 pt-3">
                <div class=" row form-group ">
                    <div class="col-lg-2">
                        <label for="name">Username  :</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" placeholder="Enter UserName" name="username" id="username">
                    </div>
                    <div class="col-lg-2">
                        <span class="error">*</span>
                    </div>
                </div>
            </div>

            {{-- Role --}}
            <div class="col-lg-12 pt-3">
                <div class="form-group row ">
                    <div class="col-lg-2">
                        <label for="name">Role : </label>
                    </div>
                    <div class="col-lg-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input radio" type="radio" name="radio" id="Radio1" value="0">
                            <label class="form-check-label" for="user">User</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input radio" type="radio" name="radio" id="Radio2" value="1">
                            <label class="form-check-label" for="inlineRadio2">Admin</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 pt-3">
                <div class="row">
                    <div class="col-lg-2">
                        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-lg-2">
                        <a href="/login" id="login" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>



        </form>
    </div>






    @include('footer')
