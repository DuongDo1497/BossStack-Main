<script>
  $(document).ready(function() {
    $('.category-list').select2();
    $('.time-list').select2();
    $('.status-list').select2();
  });

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

<script>
  ClassicEditor
    .create(document.querySelector('#shortcontent'), {
      ckfinder: {
        uploadUrl: '/funds_manage/public/bower_components/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
      },
      //            toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
    })
    .then(editor => {
      window.editor = editor;
    })
    .catch(err => {
      console.error(err.stack);
    });

  ClassicEditor
    .create(document.querySelector('#content'), {
      ckfinder: {
        uploadUrl: '/funds_manage/public/bower_components/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
      },
      //            toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
    })
    .then(editor => {
      window.editor = editor;
    })
    .catch(err => {
      console.error(err.stack);
    });
</script>

<script>
  $(function() {
    $('.btn-delete').click(function() {
      var id = $(this).data('id');
      swal({
          title: "Bạn có chắc không?",
          text: "Nội dung xóa sẽ được đưa vào thùng rác",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((value) => {
          console.log(value);
          if (value) {
            document.forms['form-delete-' + id].submit();
          }
        });
    });

    $('.btn-save').click(function() {
      $('#frm').submit();
    });

  });
</script>
