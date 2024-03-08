(() => {
  const refs = {
    openModalBtn: document.querySelector("[data-modal-open]"),
    closeModalBtn: document.querySelector("[data-modal-close]"),
    modal: document.querySelector("[data-modal]"),
    form: document.querySelector(".modal-form")
  };

  refs.openModalBtn.addEventListener("click", toggleModal);
  refs.closeModalBtn.addEventListener("click", toggleModal);
  refs.form.addEventListener("submit", handleSubmit);

  function toggleModal() {
    refs.modal.classList.toggle("is-hidden");
  }

  function handleSubmit(event) {
    event.preventDefault();

    const formData = new FormData(refs.form);

    fetch('your_php_script.php', {
      method: 'POST',
      body: formData
    })
    .then(response => {
      if (response.ok) {
        return response.text();
      }
      throw new Error('Network response was not ok.');
    })
    .then(data => {
      console.log(data); // Optional: handle response
      toggleModal(); // Close modal or handle success
    })
    .catch(error => {
      console.error('There has been a problem with your fetch operation:', error);
      // Handle error here, e.g., display error message to user
    });
  }
})();
