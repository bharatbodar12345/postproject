@extends('header')
@section('test')

{{-- <h1>ghgh</h1> --}}



    <div class="container pt-5" style="border: 3px solid">
        <h1 class="">Login to our website</h1>
        @if (session('success'))
            <div class="alert alert-success">
            {!! session('success') !!}
            </div>
        @endif
        <form action="/login/submit" method="POST" class="pt-2">
            @csrf

            {{-- username --}}
            <div class="col-lg-12">
                <div class=" row form-group ">
                    <div class="col-lg-2">
                        <label for="name">Email :</label>
                    </div>
                    <div class="col-lg-6">
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                    </div>
                    <div>
                        {{-- <span class="error">*</span> --}}
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
                        {{-- <span class="error">*</span> --}}
                    </div>
                </div>
            </div>

            <div class="col-lg-12 pt-3 pb-3">
                <div class="row">
                    <div class="col-lg-2">
                        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-lg-2">
                        <a href="/home" id="sing" class="btn btn-primary">Home</a>
                    </div>
                </div>
            </div>
        </form>
       </div>

    </div>
@endsection




