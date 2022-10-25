@extends('layouts.master')

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="manage-blogs">
    <form role="form" action="{{ route('blogs-index') }}" method="get" name="frm" id="frm">
      {{ csrf_field() }}
      <input type='hidden' name='typereport' value=''>

      {{-- <a href="{{ route('blogs-add') }}">Thêm mới</a><br>
      <a href="{{ route('blogs-detail', ['id' => 1]) }}">Chi tiết</a><br>
      <a href="{{ route('blogs-edit', ['id' => 1]) }}">Sửa tin</a> --}}

      <div class="admin-control">
        <h1 class="admin-heading">
          <img src="{{ asset('image/circle-disc-blue-1.png') }}" alt="">
          <span>{{ $title->sub_heading }}</span>
          {{ $title->heading }}
        </h1>

        <div class="admin-button">
          <a href="{{ route('blogs-add') }}" class="btn btn-primary btn-exprort">
            <img src="{{ asset('image/icon-export.svg') }}" alt="">
            Xuất DS
          </a>
          <a href="#" class="btn btn-primary btn-add">
            <img src="{{ asset('image/icon-add.svg') }}" alt="">
            Thêm mới
          </a>
        </div>
      </div>

    </form>
  </div>
@endsection

@section('scripts')
@endsection
