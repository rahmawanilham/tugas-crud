const tombol = document.querySelectorAll(".tombol"),
  konten = document.querySelectorAll(".konten .isi");

tombol.forEach((tab, index) => {
  tab.addEventListener("click", function () {
    konten.forEach((conten) => {
      conten.classList.remove("aktif");
    });
    tombol.forEach((tab) => {
      tab.classList.remove("aktif");
    });

    konten[index].classList.add("aktif");
    tombol[index].classList.add("aktif");
  });
});
