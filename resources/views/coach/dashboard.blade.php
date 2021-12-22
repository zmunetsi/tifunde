@extends('layouts.dashboard')

@section('content')
<section id="user-dashboard">
<div class="grid">
    <h1>Welcome back,  {{ Auth::user()->name }}</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero quae distinctio similique dolorum ut maxime eligendi officiis, corporis harum? Unde, hic. Autem sint voluptates saepe recusandae cupiditate, iste at obcaecati?
</div>
<div class="grid py-4">
  <div class="col-12 md:col-4">
  <div class="surface-0 p-4 shadow-4 border-round">
    <div class="text-3xl font-medium text-900 mb-3">Card Title</div>
    <div class="font-medium text-500 mb-3">Vivamus id nisl interdum, blandit augue sit amet, eleifend mi.</div>
    <div style="width: 150px;" class="border-2 border-dashed border-300"></div>
</div>
  </div>
  <div class="col-12 md:col-8">
  <div class="surface-0 p-4 shadow-4 border-round">
    <div class="text-3xl font-medium text-900 mb-3">Practice Interviews</div>
    <div class="font-medium text-500 mb-3">Vivamus id nisl interdum, blandit augue sit amet, eleifend mi.</div>
    <div style="width: 150px;" class="border-2 border-dashed border-300"></div>
    <div id="coach-list">
        <ul class="p-component p-listbox p-0 border-none">
            @foreach ($coaches as $coach)
                <li class="p-listbox-item">
                    <div class="grid w-full p-4">
                        <div class="col-12 md:col-2">
                            <img style="width: 100%; height: auto" class="p-avatar" src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                        </div>
                        <div class="col-12 md:col-8">
                            <div class="text-3xl font-medium text-900 mb-3">{{ $coach->name }}</div>
                            <div class="font-medium text-500 mb-3">AWS recrutment manager</div>
                        </div>
                        <div class="col-12 md:col-2">
                                <button class="p-button p-button-elevated p-button-primary">Book Now</button>
                        </div>
                    </div>
                </li>
            @endforeach
   
        </ul>
     </div>
</div>
  </div>
  <div>


</section>
@endsection
