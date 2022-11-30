document.querySelector('#btn_modal_form').addEventListener('click', () => {
    document.getElementById('add-books').style.display = 'flex';
})
document.querySelector('#close_modal_form_add').addEventListener('click', () => {
    document.getElementById('add-books').style.display = 'none';
})
