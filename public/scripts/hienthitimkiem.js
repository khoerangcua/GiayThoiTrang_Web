const acc_btns = document.querySelectorAll(".filter-header");

acc_btns.forEach(btn => {
    btn.addEventListener('click',() =>{
        btn.classList.toggle("active");
    });
});