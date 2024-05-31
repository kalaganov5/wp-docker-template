const qrModalLinks = document.querySelectorAll('.modal-qr');

qrModalLinks.forEach((item) => {
  item.addEventListener('click', () => {
    MicroModal.show('modal-qr')
  })
})
