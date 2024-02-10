// inpName = document.querySelector("#name")
// inpPhone = document.querySelector("#phone")
// inpEmail = document.querySelector("#email")
// inpMarka = document.querySelector("#marka")
// inpModel = document.querySelector("#model")
// inpPet = document.querySelector("#pet-select")
// inpProblem = document.querySelector("#problem")
// button = document.querySelector(".action-button")

function validation(form){

    let result = true;

    function removeError(input){
        const parent = input.parentNode;

        if(parent.classList.contains('error')){
            parent.querySelector('.error-label').remove()
            parent.classList.remove('error')
        }
    }
    
    function createError(input, text){
        const parent = input.parentNode;
        const errorLabel = document.createElement('label');

        errorLabel.classList.add('error-label');
        errorLabel.textContent = text;

        parent.classList.add('error');

        parent.append(errorLabel);
    }

    const allInputs = form.querySelectorAll('input');

    for (const input of allInputs) {
        removeError(input);
        if(input.value == ""){
            console.log('ошибка');
            createError(input, 'Поле пустое');
            result = false;
        }
       
    }
    return result;

  
}

document.getElementById('msform').addEventListener('submit', function(event){
    event.preventDefault()
    if(validation(this) == true){
        console.log('Успешно!');
        // window.location.href = "../php/checkPriem.php";
    }
    else{
        console.log('Ошибка!');
    }
})