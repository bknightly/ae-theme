// console.log('Toggle Content block loaded (editor)');
function toggleContainer(el) {
  if (el.target && el.target.classList.contains('block-toggle-content_list-item_title')) {
    var next = el.target.parentElement.parentElement;
    if (next.className == "block-toggle-content_list-item") {
      next.classList.toggle('toggled');
    } else {
      next.classList.toggle('toggled');
    }
  }
}
document.addEventListener('click', toggleContainer, true);