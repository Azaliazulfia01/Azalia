<!DOCTYPE html>
<html>
  <head>
    <title>Kontak Saya</title>
    <link rel="stylesheet" href="css/hubungi_saya.css" />
  </head>
  <body>
    <form id="formKontak">
      <label for="namaPengontak">Nama Pengontak</label>
      <input type="text" id="namaPengontak" required />
      <br /><br />

      <label for="asalPerusahaan">Asal Perusahaan</label>
      <input type="text" id="asalPerusahaan" required />
      <br /><br />

      <label for="alasanMengontak">Alasan Mengontak</label>
      <select id="alasanMengontak">
        <option value="ingin bekerjasama">ingin bekerjasama</option>
        <option value="ingin menanyakan jasa layanan">
          ingin menanyakan jasa layanan
        </option>
      </select>
      <br /><br />

      <button type="submit" id="btnKirimWA">Kirim WA</button>
    </form>

    <script>
      document
        .getElementById("formKontak")
        .addEventListener("submit", function (event) {
          event.preventDefault(); // Mencegah pengiriman formulir default

          // Mengambil nilai dari input field
          const nama = document.getElementById("namaPengontak").value;
          const perusahaan = document.getElementById("asalPerusahaan").value;
          const alasan = document.getElementById("alasanMengontak").value;

          // Membuat pesan WhatsApp
          const pesan = `Nama: ${nama}%0aPerusahaan: ${perusahaan}%0aAlasan: ${alasan}`;

          // Membuat URL WhatsApp
          const nomorTelepon = "+6285"; // Ganti dengan nomor telepon Anda
          const urlWhatsApp = `https://wa.me/${nomorTelepon}?text=${pesan}`;

          // Mengalihkan ke WhatsApp
          window.location.href = urlWhatsApp;
        });
    </script>
  </body>
</html>