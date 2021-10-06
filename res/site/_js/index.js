console.log("Jquery Works");

$('#message').val('New Text');
M.textareaAutoResize($('#message'));

$(document).ready($(".dropdown-trigger").dropdown());


$(document).ready(function () {
    M.updateTextFields();
});

const list = document.querySelectorAll('.list');
function activeLink() {
    list.forEach((item) =>
        item.classList.remove('active'));
    this.classList.add('active');
}
list.forEach((item) =>
    item.addEventListener('click', activeLink));