@extends('layouts.master')

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="manage-blogs">
    <div class="admin-control">
      <h1 class="admin-heading">
        <img src="{{ asset('image/circle-disc-blue-1.png') }}" alt="">
        <span>{{ $title->sub_heading }}</span>
        {{ $title->heading }}
      </h1>

      <div class="admin-button">
        <a href="#" class="btn btn-primary btn-cancel">
          <img src="{{ asset('image/icon-cancel.svg') }}" alt="">
          Hủy
        </a>
        <a href="#" class="btn btn-primary btn-save">
          <img src="{{ asset('image/icon-save.svg') }}" alt="">
          Lưu
        </a>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  @include('product-manage.blog.partials.script')
@endsection
