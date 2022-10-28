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
          <a href="#" class="btn btn-primary btn-exprort">
            <img src="{{ asset('image/icon-export.svg') }}" alt="">
            Xuất DS
          </a>
          <a href="{{ route('blogs-add') }}" class="btn btn-primary btn-add">
            <img src="{{ asset('image/icon-add.svg') }}" alt="">
            Thêm mới
          </a>
        </div>
      </div>

      @include('product-manage.blog.partials.search')

      <div class="table-list blogs-list">
        <table class="table table-condensed">
          <thead>
            <tr>
              <th>STT</th>
              <th>Ảnh</th>
              <th>Tiêu đề</th>
              <th>Danh mục</th>
              <th>Trạng thái</th>
              <th>Ngày khởi tạo</th>
              <th>Ngày chỉnh sửa</th>
              <th>Hành động</th>
            </tr>
          </thead>

          <tbody>
            {{-- <tr>
              <td>1</td>
              <td>
                <img class="avatar" src="{{ asset('image/client-1.jpg') }}" alt="">
              </td>
              <td class="title">
                Lorem Ipsum is simply dummy text of the printing Ipsum
              </td>
              <td>Đầu tư</td>
              <td><span class="alert alert-success" role="alert">Hiện</span></td>
              <td>10/09/2022</td>
              <td>10/10/2022</td>
              <td>
                <div class="control">
                  <a class="btn btn-primary btn-edit" href="{{ route('blogs-edit', ['id' => 1]) }}"><i
                      class="fas fa-pencil-alt"></i></a>
                  <a class="btn btn-primary btn-delete" href="#"><i
                      class="fas fa-trash"></i></a>
                </div>
              </td>
            </tr>

            <tr>
              <td>2</td>
              <td>
                <img class="avatar" src="{{ asset('image/client-1.jpg') }}" alt="">
              </td>
              <td class="title">
                Lorem Ipsum is simply dummy text of the printing Ipsum
              </td>
              <td>Đầu tư</td>
              <td><span class="alert alert-hide" role="alert">Ẩn</span></td>
              <td>10/09/2022</td>
              <td>10/10/2022</td>
              <td>
                <div class="control">
                  <a class="btn btn-primary btn-edit"
                    href="{{ route('blogs-edit', ['id' => 1]) }}"><i
                      class="fas fa-pencil-alt"></i></a>
                  <a class="btn btn-primary btn-delete" href="#"><i
                      class="fas fa-trash"></i></a>
                </div>
              </td>
            </tr> --}}
          </tbody>
        </table>

        <nav class="paginations" aria-label="Page navigation">
          <ul class="pagination">
            <li>
              <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li><a class="active" href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
              <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </form>
  </div>
@endsection

@section('scripts')
  @include('product-manage.blog.partials.script')

  <script>
    let newArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    newArr.reverse().forEach(element => {
      let demo = `
      <tr>
        <td>${element}</td>
        <td>
          <img class="avatar" src="{{ asset('image/client-1.jpg') }}" alt="">
        </td>
        <td class="title">
          Lorem Ipsum is simply dummy text of the printing Ipsum
        </td>
        <td>Đầu tư</td>
        <td><span class="alert alert-${element % 2 === 0 ? 'success' : 'hide'}" role="alert">${element % 2 === 0 ? 'Hiện' : 'Ẩn'}</span></td>
        <td>10/09/2022</td>
        <td>10/10/2022</td>
        <td>
          <div class="control">
            <a class="btn btn-primary btn-edit" href="{{ route('blogs-edit', ['id' => 1]) }}"><i
                class="fas fa-pencil-alt"></i></a>
            <a class="btn btn-primary btn-delete" href="#"><i
                class="fas fa-trash"></i></a>
          </div>
        </td>
      </tr>
    `;

      document.querySelector('.blogs-list tbody').insertAdjacentHTML('afterbegin', demo);
    });
  </script>
@endsection
