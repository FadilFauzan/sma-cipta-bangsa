document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener("scroll", function() {
        var scrollPosition = window.scrollY;
        var navbar = document.querySelector(".navbar"); // Pilih class atau id yang mau diubah keadaannya

        if (scrollPosition) {
            navbar.classList.remove("bg-transparent");
            navbar.classList.add("nav-color");
        } else {
            navbar.classList.remove("nav-color");
            navbar.classList.add("bg-transparent");
        }
    });
});

// redirect setelah mengirim pesan pada section contact
window.addEventListener("load", function() {
    const form = document.getElementById('my-form');
    form.addEventListener("submit", function(e) {
        e.preventDefault();
        const data = new FormData(form);
        const action = e.target.action;
        fetch(action, {
            method: 'POST',
            body: data,
        })
        .then(() => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Terimakasih! Pesan berhasil terkirim.',
                showConfirmButton: false,
                timer: 2500
            })
        })
    });
});