window.addEventListener('load', () => {
    const formAddCommets = document.querySelector('#form-add-comment');

    const selectField = document.querySelector('#select-field');
    outputComment(selectField.value);

    formAddCommets.addEventListener('submit', (e) => {
        e.preventDefault();

        const text_com = formAddCommets.elements.text_com.value;
        const fieldId = selectField.value;

        createComment(text_com, fieldId);
    });

    selectField.addEventListener('change', () => outputComment(selectField.value));
});

function createComment(text_com, fieldId) {
    const params = 'text_com=' + text_com + '&fieldId=' + fieldId;

    const metaCSRFToken = document.head.querySelector("[name=csrf-token]").getAttribute('content');

    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/create.comment');

    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.setRequestHeader("X-CSRF-TOKEN", metaCSRFToken);

    xhr.addEventListener('readystatechange', () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const formAddCommets = document.querySelector('#form-add-comment');
            formAddCommets.elements.text_com.value = '';
            formAddCommets.classList.add('form-comment_hide');

            const selectField = document.querySelector('#select-field');
            outputComment(selectField.value);
        }
    });
    
    xhr.send(params);
}

function outputComment(field) {
    const params = 'field=' + field;

    const metaCSRFToken = document.head.querySelector("[name=csrf-token]").getAttribute('content');

    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/output.comment');

    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.setRequestHeader("X-CSRF-TOKEN", metaCSRFToken);

    xhr.addEventListener('readystatechange', () => {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const commentsCount = document.querySelector('.panel__comment-count');
            const commentsList = document.querySelector('#comments-list');
            const response = JSON.parse(xhr.responseText);

            commentsCount.innerText = 'Комментарии: ' + response.length;
            commentsList.innerHTML = '';
            response.forEach(elem => commentsList.innerHTML += elem);
        }
    });
    
    xhr.send(params);
}