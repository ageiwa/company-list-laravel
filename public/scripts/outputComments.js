window.addEventListener('load', () => {
    const selectField = document.querySelector('#select-field');
    outputComment(selectField.value);

    selectField.addEventListener('change', () => {
        outputComment(selectField.value);
    })
});

function outputComment(field) {
    const params = 'field=' + field;

    const metaCSRFToken = document.head.querySelector("[name=csrf-token]").getAttribute('content');

    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/output.comment');

    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.setRequestHeader("X-CSRF-TOKEN", metaCSRFToken);

    xhr.addEventListener('readystatechange', () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const commentsList = document.querySelector('#comments-list');
            const response = JSON.parse(xhr.responseText);

            commentsList.innerHTML = '';
            response.forEach(elem => commentsList.innerHTML += elem);
        }
    });
    
    xhr.send(params);
}