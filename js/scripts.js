function triggerFile() {
  $('#upload').trigger('click'); 
  $('#upload').change(function(ev) {
    file = ev.target.files[0]
    getBase64(file)
  });
}
function getBase64(file) {
  var reader = new FileReader();
  reader.readAsDataURL(file);
  reader.onload = (result_) => {
    $('.msg-file').html(file.name)
  return true;
  };
  reader.onerror = function (error) {
  return false;
  };
}

function check() {
  var checking = document.getElementById('checkbox');
  var change = checking.getAttribute('data-status');

  if (change == 'false') {
    checking.setAttribute('data-status', 'true');
    checking.style.backgroundColor = 'var(--color-red)';  
  }else {
    checking.setAttribute('data-status', 'false');  
    checking.style.backgroundColor = '#fff';  
  }
}