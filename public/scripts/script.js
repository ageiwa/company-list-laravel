const btnAddCompany = document.querySelector('.companies__add-button');
const formAdd = document.querySelector('.companies__add-form');

btnAddCompany.addEventListener('click', () => {
    if (formAdd.classList.contains('add-form_disable')) {
        formAdd.classList.remove('add-form_disable');
    }
    else formAdd.classList.add('add-form_disable');
});