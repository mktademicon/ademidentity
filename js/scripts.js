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

const touch_ = {
  start: 0
  , end: 0
  , move: 0
  , action: false
} 

touchStart = (ev) => { 
  touch_.start = ev.changedTouches[0].clientX
} 

touchMove = (ev) => { 
  touch_.move = ev.changedTouches[0].clientX 
} 

touchEnd = (ev,act) => {
  touch_.end = ev.changedTouches[0].clientX
  touch_.action = act
  var count = (touch_.start - touch_.end)
  var acao
  
  if((count > 100)){
    move = true;
    acao = 'next'
  }else if((count < 100)){
    move = true;
    acao = 'prev'
  }else {
    acao = false
    move = false;
  }

  if(touch_.start == touch_.end){
    acao = false;
    return false;
  }

  if (acao == 'next') {
    navigateScroll(act, 'next')
  }else {
    navigateScroll(act, 'prev')
  }
  
  touch_.start = 0
  touch_.move = 0
  touch_.action = false
}