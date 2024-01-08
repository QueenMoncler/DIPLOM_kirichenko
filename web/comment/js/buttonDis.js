inp = document.querySelector(".textareaComm")
button = document.querySelector(".inputSub")
button.setAttribute('disabled', true)
inp.oninput = function(){
  if(inp.value.length < 8){
    button.setAttribute('disabled', true);
  }
  else{
    button.removeAttribute('disabled');
  }
}