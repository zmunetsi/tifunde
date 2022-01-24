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

  </div>
  <div>


</section>
@endsection
