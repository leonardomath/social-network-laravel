$('.post .interaction .edit').on('click', function(event) {
    event.preventDefault()

    let postBody = event.target.parentNode.parentNode.childNodes[1].textContent;
    $('#post-body').val(postBody)
    $('#edit-modal').modal();
})