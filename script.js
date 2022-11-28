const togglebtn = document.querySelector('.toggle-button');
const item = document.querySelector(".nav-items");

togglebtn.addEventListener('click',()=>{
    item.classList.toggle('active');
    console.log(item.classList)
})