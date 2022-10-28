@extends('layouts.master')

@section('content')
  @if (session()->has('success'))
    @include('layouts.partials.messages.success')
  @endif

  <div class="manage-blogs">
    <form action="#" method="POST">
      <div class="admin-control">
        <h1 class="admin-heading">
          <img src="{{ asset('image/icon-edit-title.svg') }}" alt="">
          <span>{{ $title->sub_heading }}</span>
          {{ $title->heading }}
        </h1>
        <div class="admin-button">
          <a href="{{ route('blogs-index') }}" class="btn btn-primary btn-cancel">
            <img src="{{ asset('image/icon-cancel.svg') }}" alt="">
            Hủy
          </a>
          <a href="#" class="btn btn-primary btn-save">
            <img src="{{ asset('image/icon-save.svg') }}" alt="">
            Lưu
          </a>
        </div>
      </div>

      <div class="admin-form">
        <div class="box-content-main">
          <h3>Nội dung chính</h3>
          <div class="form-group">
            <label>Tên danh mục</label>
            <select class="category-list form-control" name="category">
              <option value="">Chọn danh mục</option>
              <option value="">Đầu tư</option>
              <option value="">Tài chính</option>
            </select>
          </div>

          <div class="form-group">
            <label for="name">Tiêu đề</label>
            <input type="text" class="form-control" id="name" placeholder="Tên tiêu đề">
          </div>

          <div class="form-group">
            <label for="content">Mô tả</label>
            <textarea class="form-control" id="content"></textarea>
          </div>
        </div>

        <div class="box-info-general">
          <h3>Thông tin chung</h3>
          <div class="post-status">
            <p class="title">Hiển thị bài viết</p>
            <div class="checkbox-group">
              <input type="checkbox" name="display" id="display">
              <label for="display"></label>
            </div>
          </div>
          <span class="line"></span>
          <div class="post-avatar">
            <p class="title">Ảnh giới thiệu</p>
            <div class="upload-wrap flex">
              <img class="preview-avatar" src="{{ asset('image/not-img.png') }}" alt="Your image">
              <div class="upload-avatar">
                <input accept="image/*" type='file' id="imgInp" />
                <ul class="note">
                  <li>Dung lượng hình dưới 2MB</li>
                  <li>Vui lòng tải hình lên có định dạng: png và jpg.</li>
                </ul>
              </div>
            </div>
          </div>
          <span class="line"></span>
          <div class="attached-files">
            <p class="title">Tải tệp đính kèm</p>
            <div class="upload-wrap">
              <div class="preview-file"></div>
              <div class="upload-doc">
                <input type='file' id="docInp" multiple />
                <ul class="note">
                  <li>Dung lượng tệp dưới 5MB</li>
                  <li>Vui lòng tải hình lên có định dạng: doc và pdf.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('public/js/upload.js') }}"></script>
  @include('product-manage.blog.partials.script')
@endsection
