function getModal(ModalId) {
    // Get the modal
    var modal = document.getElementById(ModalId);

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById(ModalId);
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;

    // Get the <span> element that closes the modal

}
