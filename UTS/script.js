// Variabel untuk menunjukkan indeks gambar yang sedang ditampilkan
var slideIndex = 0;
      showSlides();

      // Fungsi untuk menampilkan slide secara otomatis
      function showSlides() {
        var i;
        // Mengambil elemen-elemen dengan kelas "slide"
        var slides = document.getElementsByClassName("slide");
        // Mengambil elemen-elemen dengan kelas "dot" (bulatan)
        var dots = document.getElementsByClassName("dot");
        // Sembunyikan semua slide
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        // Tambahkan 1 ke indeks slideIndex
        slideIndex++;
        // Jika slideIndex melebihi jumlah slide, atur slideIndex kembali menjadi 1
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        // Hapus kelas "active" dari semua bulatan
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        // Tampilkan slide dengan indeks slideIndex-1, dan tambahkan kelas "active" ke bulatan yang sesuai
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Ganti gambar setiap 2 detik
}