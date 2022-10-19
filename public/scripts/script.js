const btnShowFormAdd = document.querySelector('.companies__add-button');
const formAdd = document.querySelector('.companies__add-form');

btnShowFormAdd.addEventListener('click', () => {
    if (formAdd.classList.contains('add-form_disable')) {
        formAdd.classList.remove('add-form_disable');
    }
    else formAdd.classList.add('add-form_disable');
});

formAdd.addEventListener('submit', (e) => {
    e.preventDefault();

    const name = formAdd.elements.name.value;
    const inn = formAdd.elements.inn.value;
    const info = formAdd.elements.info.value;
    const gen_director = formAdd.elements.gen_director.value;
    const address = formAdd.elements.address.value;
    const tel = formAdd.elements.tel.value;

    const params = 'name=' + name + '&inn=' + inn + '&info=' + info + '&gen_director=' + gen_director + '&address=' + address + '&tel=' + tel;

    const metaCSRFToken = document.head.querySelector("[name=csrf-token]").getAttribute('content');

    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/create.company');
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.setRequestHeader("X-CSRF-TOKEN", metaCSRFToken);
    xhr.addEventListener('readystatechange', () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const companiesContainer = document.querySelector('.companies').firstElementChild;

            companiesContainer.innerHTML += xhr.responseText;

            console.log(xhr.responseText);
        }
    });
    xhr.send(params);
});