<script>
  $(document).ready(function() {
    $('.category-list').select2();
    $('.time-list').select2();
    $('.status-list').select2();
  });
</script>

<script>
  ClassicEditor
    .create(document.querySelector('#content'), {
      placeholder: 'Nhập mô tả...',
      ckfinder: {
        uploadUrl: '/funds_manage/public/bower_components/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
      },
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
