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
        const data = {};
        for (const [key, value] of formData.entries()) {
            data[key] = value;
        }
        sendEmail(data);
    }

    function sendEmail(data) {
        const emailBody = `Name: ${data['user-name']}
Phone: ${data['user-phone']}
Email: ${data['user_email']}
Comment: ${data['user-comment']}`;

        // Send email using mailto
        window.location.href = `mailto:OsmachkoM@gMail.com?subject=Contact Form Submission&body=${encodeURIComponent(emailBody)}`;
    }
})();
