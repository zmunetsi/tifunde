@extends('layouts.dashboard')

@section('content')
<section id="user-dashboard">

<div class="grid surface-0 p-4 shadow-4 border-round">
<div class="col-12 md:col-7">
  <div >
    <div class="grid w-full p-4">
        <div class="col-12 md:col-4">
            <img style="width: 100%; height: auto" class="p-avatar" src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
            <div id="coach-rating" data-rating="4">

            </div>
        </div>
        <div class="col-12 md:col-8">
            <div class="text-3xl font-medium text-900 mb-3">{{ $appointment->coach->name }}</div>
            <div class="font-medium text-500 mb-3">AWS recrutment manager</div>
            <div style="width: 150px;" class="border-2 border-dashed border-300"></div>
            <div class="font-medium text-900 pt-4 pb-2">About</div>
            <div class="font-medium text-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id perferendis tempora totam officia eum doloremque culpa in vel iste, quidem obcaecati dicta voluptas at minima velit commodi alias autem? Suscipit.</div>
        </div>
    
    </div>
    <div class="grid w-full p-4">
    <div class="font-medium text-900 pt-4 pb-2">ARCHTECT | AWS</div>
    </div>  
</div>
  </div>
  
  <div class="col-12 md:col-5">
  <!-- @include('appointment.partials.checkout-form') -->
  </div>

  <div>


</section>
@endsection
