
const text=document.getElementById('text')
const btn=document.getElementById("btn")
btn.addEventListener('click',()=>{
  setTimeout(()=>{
      text.textContent='ボタンがクリックされました';
    
  },2000);
});

