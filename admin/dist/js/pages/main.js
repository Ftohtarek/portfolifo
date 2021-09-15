let cansalBtn = document.querySelectorAll('.cansal')
let updataBtn = Array.from(document.querySelectorAll('.updataBtn'));
updataBtn.map((btn, index) => {
    // updata btn remove class d-none
    btn.addEventListener('click', function () {
        let form = btn.parentElement.parentElement.nextElementSibling
        form.classList.remove('d-none')
    })
    // cansal btn add class d-none
    cansalBtn[index].addEventListener('click', function () {
        let form = cansalBtn[index].parentElement.parentElement
        form.classList.add('d-none')
    })
})
