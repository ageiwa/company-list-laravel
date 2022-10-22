window.addEventListener('load', () => {
    const btnShowFormAdd = document.querySelector('.companies__add-button');

    if (!btnShowFormAdd.classList.contains('link')) {

        btnShowFormAdd.addEventListener('click', () => {
            const formAdd = document.querySelector('#form-add');
            
            if (formAdd.classList.contains('form-add_hide')) {
                formAdd.classList.remove('form-add_hide');
            }
            else formAdd.classList.add('form-add_hide');
        });
        
    }
})