@extends('layouts.app')

@section('content')
<section id="login-form"  class="px-4 flex justify-content-center">
    <div class="grid pt-8 justify-content-center align-items-center w-full">
        <div class="col-12 md:col-6">
        <div class="card p-fluid">
        <h5>Login</h5>
        <div class="field">
            <label for="name1">Name</label>
            <input id="name1" type="text" class="p-inputtext p-component">
        </div>
        <div class="field">
            <label for="email1">Email</label>
            <input id="email1" type="text" class="p-inputtext p-component">
        </div>
        <div class="field">
            <label for="age1">Age</label>
            <input id="age1" type="text" class="p-inputtext p-component">
        </div>
    </div>
        </div>
    </div>

</section>
@endsection
