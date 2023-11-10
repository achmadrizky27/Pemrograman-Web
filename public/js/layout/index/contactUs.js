const scriptURL =
    "https://script.google.com/macros/s/AKfycby6Xh4tG62T-fj2xmr7RW40-GrbmDeQY8Fjlh123Jshup7T7Zv11YYoASyQD_lYEUdOTA/exec";
const form = document.forms["contact-form"];
const btnKirim = document.querySelector(".btn-Kirim");
const btnLoading = document.querySelector(".btn-Loading");
const myAlert = document.querySelector(".my-alert");

form.addEventListener("submit", (e) => {
    e.preventDefault();

    // Ketika tombol submit diklik
    // Tampilkan tombol loading, hilangkan tombol kirim
    btnLoading.classList.toggle("d-none");
    btnKirim.classList.toggle("d-none");

    fetch(scriptURL, { method: "POST", body: new FormData(form) })
        .then((response) => {
            //Tampilkan "btn kirim", hilangkan "btn loading"
            btnLoading.classList.toggle("d-none");
            btnKirim.classList.toggle("d-none");
            //Tampilkan "my Alert"
            myAlert.classList.toggle("d-none");
            //Bersihkan input data
            form.reset();
            console.log("Success!", response);
        })
        .catch((error) => console.error("Error!", error.message));
});
