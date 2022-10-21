window.addEventListener('load', () => {
    const formAddCommets = document.querySelector('#form-add-comment');
    const selectField = document.querySelector('#select-field');

    formAddCommets.addEventListener('submit', (e) => {
        e.preventDefault();

        const text_com = formAddCommets.elements.text_com.value;
        const fieldId = selectField.value;

        createComment(text_com, fieldId);
    });
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
            console.log(xhr.responseText);
        }
    });
    xhr.send(params);
}