let imgInp = document.querySelector('#imgInp');
let previewAvt = document.querySelector('.preview-avatar');

imgInp.addEventListener('change', function(e) {
  let [file] = imgInp.files;
  const typeFile = file.type.slice(6);
  let sizeImg = (file.size / Math.pow(1024, 2)).toFixed(2);
  if (typeFile === 'png' || typeFile === 'jpeg' && sizeImg <= 2) {
    previewAvt.src = URL.createObjectURL(file);
    return;
  }
  if (sizeImg > 2) {
    file = {};
    imgInp.value = "";
    previewAvt.src = "https://bossstack.vn/image/not-img.png";
    alert('Upload file size is more than 2 MB.');
    return;
  }
  if (typeFile !== 'png' || typeFile !== 'jpeg') {
    file = {};
    imgInp.value = "";
    previewAvt.src = "https://bossstack.vn/image/not-img.png";
    alert('File upload in wrong format.');
    return;
  }
})

let fileUpload = document.querySelector('#docInp');
let previewFile = document.querySelector('.preview-file');

fileUpload.addEventListener('change', function(e) {
  let file = e.target.files;
  for (let i = 0; i < file.length; i++) {
    let typeFile = file[i].name;
    let sizeFile = (file[i].size / Math.pow(1024, 2)).toFixed(2);
    let iconType;
    if (typeFile.includes('docx')) iconType = 'https://bossstack.vn/image/icon-word.png';
    if (typeFile.includes('pdf')) iconType = 'https://bossstack.vn/image/icon-pdf.png';
    if (typeFile.includes('docx') || typeFile.includes('pdf') && sizeFile <= 5){
      previewFile.insertAdjacentHTML('afterbegin', `<img class='preview-file__item' src='${iconType}'/>`);
    }
    if (sizeFile > 5) {
      file[i] = {};
      fileUpload.value = "";
      previewFile.insertAdjacentHTML('afterbegin', '');
      alert('Upload file size is more than 5 MB.');
      return;
    }
    if (!typeFile.includes('docx') && !typeFile.includes('pdf')) {
      file[i] = {};
      fileUpload.value = "";
      previewFile.querySelectorAll('.preview-file__item').forEach(element => {
        element.remove();
      });
      alert('File upload in wrong format.');
    }
  }
})