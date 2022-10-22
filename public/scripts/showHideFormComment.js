window.addEventListener('load', () => {
    const btnShowCommentForm = document.querySelector('#show-form-comment');
    const btnHideCommentForm = document.querySelector('#hide-form-comment');

    const formAddComment = document.querySelector('#form-add-comment');

    btnShowCommentForm.addEventListener('click', () => {
        formAddComment.classList.remove('form-comment_hide');
    });

    btnHideCommentForm.addEventListener('click', () => {
        formAddComment.classList.add('form-comment_hide');
    });
});