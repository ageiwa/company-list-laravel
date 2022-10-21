window.addEventListener('load', () => {
    const formAdd = document.querySelector('#form-add');

    formAdd.addEventListener('submit', (e) => {
        e.preventDefault();

        const name = formAdd.elements.name.value;
        const inn = formAdd.elements.inn.value;
        const info = formAdd.elements.info.value;
        const gen_director = formAdd.elements.gen_director.value;
        const address = formAdd.elements.address.value;
        const tel = formAdd.elements.tel.value;

        requestCreateCompany(name, inn, info, gen_director, address, tel);
    });
})

function requestCreateCompany(name, inn, info, gen_director, address, tel) {
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
}