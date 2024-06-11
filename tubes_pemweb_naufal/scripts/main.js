document.addEventListener("DOMContentLoaded", function () {
  var consultationForm = document.getElementById("consultationForm");
  if (consultationForm) {
    consultationForm.addEventListener("submit", function (event) {
      var name = document.getElementById("name").value;
      var job = document.getElementById("job").value;
      var email = document.getElementById("email").value;
      var complaint = document.getElementById("complaint").value;

      if (!name || !job || !email || !complaint) {
        alert("Semua field harus diisi.");
        event.preventDefault();
      }
    });
  }

  var registrationForm = document.getElementById("registrationForm");
  if (registrationForm) {
    registrationForm.addEventListener("submit", function (event) {
      var nama = document.getElementById("nama").value;
      var nik = document.getElementById("nik").value;
      var noHp = document.getElementById("noHp").value;
      var alamat = document.getElementById("alamat").value;

      if (!nama || !nik || !noHp || !alamat) {
        alert("Semua field harus diisi.");
        event.preventDefault();
      }
    });
  }

  var searchForm = document.getElementById("searchForm");
  if (searchForm) {
    searchForm.addEventListener("submit", function (event) {
      var query = document.getElementById("searchQuery").value;
      if (!query) {
        alert("Masukkan kata kunci pencarian.");
        event.preventDefault();
      }
    });
  }
});
