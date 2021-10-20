const inputs = document.querySelectorAll('.instagram__row input'),
      forms = document.querySelectorAll('form'),
      text = document.querySelectorAll('.text-danger');



forms.forEach(form=>{
    form.addEventListener('submit', (e)=>{
            if(inputs[0].value.length < 3){
                text[0].style.display = 'block';
                console.log(inputs[0].value.length);
                e.preventDefault()
            }else{
                text[0].style.display = 'none';
            }

            if(inputs[1].value.length < 3){
                text[1].style.display = 'block';
                console.log(inputs[1].value.length);
                e.preventDefault()
            }else{
                text[1].style.display = 'none';
            }
        })
    })  



// inputs.forEach(item=>{
//     item.addEventListener('input', ()=>{
//         if(item.value.length < 3){
//             text.style.display = 'block';
//         }else{
//             text.style.display = 'none';
//         }
//     })
// })



// if (trim($instaName)== ""){
//     $_SESSION['error_name']= 'Ведите имя';
//     redirct();
// }else if(trim($instaPassword) == ""){
//     $_SESSION['error_password'] = 'Введите пароль';
//     redirct();
// }else{
//     header('Location: https://www.instagram.com');
// }