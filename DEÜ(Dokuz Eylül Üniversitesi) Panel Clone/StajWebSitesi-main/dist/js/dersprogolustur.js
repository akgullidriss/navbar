function disableElements(...elementIds) {
  elementIds.forEach((id) => {
    document.getElementById(id).disabled = true;
  });
}

function enableElements(...elementIds) {
  elementIds.forEach((id) => {
    document.getElementById(id).disabled = false;
  });
}

function donemac() {
  disableElements(
    "egt",
    "lisans",
    "bolum",
    "1",
    "2",
    "3",
    "4",
    "label3",
    "label4",
    "sube",
    "btngnd",
    "start-date",
    "end-date"
  );
  enableElements("donem");
}

function lisansac() {
  disableElements(
    "egt",
    "bolum",
    "1",
    "2",
    "3",
    "4",
    "label3",
    "label4",
    "sube",
    "btngnd",
    "start-date",
    "end-date"
  );
  enableElements("lisans");
}

function bolumac() {
  disableElements(
    "egt",
    "1",
    "2",
    "3",
    "4",
    "label3",
    "label4",
    "sube",
    "btngnd",
    "start-date",
    "end-date"
  );
  enableElements("bolum");
}
function egtac() {
  disableElements(
    "1",
    "2",
    "3",
    "4",
    "label3",
    "label4",
    "sube",
    "btngnd",
    "start-date",
    "end-date"
  );
  enableElements("egt");
}
function sinifac() {
  disableElements("sube", "btngnd", "start-date", "end-date");
  enableElements("1", "2", "3", "4", "label3", "label4");
}
function subeac() {
  disableElements("btngnd", "start-date", "end-date");
  enableElements("sube");
}
function tarihac() {
  disableElements("btngnd");
  enableElements("start-date", "end-date");
}
function btnac() {
  enableElements("btngnd");
}
function yilac() {
  var lisans_id = document.getElementById("lisans").value;
  var url = "get-lisans.php?lisans_id=" + lisans_id;

  fetch(url)
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      var inputRadio3 = document.getElementById("3");
      var label3 = document.getElementById("label3");
      var inputRadio4 = document.getElementById("4");
      var label4 = document.getElementById("label4");

      // Elementleri gizle veya göster
      if (data.lisans_yil === "2") {
        inputRadio3.style.visibility = "hidden"; // Gizle
        label3.style.visibility = "hidden"; // Gizle
        inputRadio4.style.visibility = "hidden"; // Gizle
        label4.style.visibility = "hidden"; // Gizle
      } else if (data.lisans_yil === "4") {
        inputRadio3.style.visibility = "visible"; // Göster
        label3.style.visibility = "visible"; // Göster
        inputRadio4.style.visibility = "visible"; // Göster
        label4.style.visibility = "visible"; // Göster
      }
    });
}

function bolumDurumu() {
  var lisans_id = document.getElementById("lisans").value;
  var url = "get-bolum.php?lisans_id=" + lisans_id;
  fetch(url)
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      var bolumSelect = document.getElementById("bolum");
      bolumSelect.innerHTML =
        "<option disabled selected>Bölüm Seçiniz</option>";

      data.forEach(function (bolum) {
        var option = document.createElement("option");
        option.value = bolum.bolum_id;
        option.text = bolum.bolum_ad;
        bolumSelect.appendChild(option);
      });
    });
}

function sinifDurumu() {
  var sinif1 = document.getElementById("1").checked;
  var sinif2 = document.getElementById("2").checked;
  var sinif3 = document.getElementById("3").checked;
  var sinif4 = document.getElementById("4").checked;

  if (sinif1) {
    // 1. sınıf seçildiyse, şubeleri getir
    var bolumid = document.getElementById("bolum").value;
    // Şube verilerini veritabanından almak için AJAX veya fetch işlemi yapabilirsiniz.
    // Örneğin:
    fetch("get-subeler.php?bolumid=" + bolumid + "&sinif=1") // get-subeler.php dosyasını oluşturmanız gerekiyor
      .then((response) => response.json())
      .then((data) => {
        var subeSelect = document.getElementById("sube");
        data.forEach((sube) => {
          var option = document.createElement("option");
          option.value = sube.sube_id;
          option.text = sube.sube_ad;
          subeSelect.appendChild(option);
        });
      });
  } else if (sinif2) {
    // 2. sınıf seçildiyse, şubeleri getir
    var bolumid = document.getElementById("bolum").value;
    // Şube verilerini veritabanından almak için AJAX veya fetch işlemi yapabilirsiniz.
    // Örneğin:
    fetch("get-subeler.php?bolumid=" + bolumid + "&sinif=2") // get-subeler.php dosyasını oluşturmanız gerekiyor
      .then((response) => response.json())
      .then((data) => {
        var subeSelect = document.getElementById("sube");
        data.forEach((sube) => {
          var option = document.createElement("option");
          option.value = sube.sube_id;
          option.text = sube.sube_ad;
          subeSelect.appendChild(option);
        });
      });
  } else if (sinif3) {
    // 3. sınıf seçildiyse, şubeleri getir
    var bolumid = document.getElementById("bolum").value;
    // Şube verilerini veritabanından almak için AJAX veya fetch işlemi yapabilirsiniz.
    // Örneğin:
    fetch("get-subeler.php?bolumid=" + bolumid + "&sinif=3") // get-subeler.php dosyasını oluşturmanız gerekiyor
      .then((response) => response.json())
      .then((data) => {
        var subeSelect = document.getElementById("sube");
        data.forEach((sube) => {
          var option = document.createElement("option");
          option.value = sube.sube_id;
          option.text = sube.sube_ad;
          subeSelect.appendChild(option);
        });
      });
  } else if (sinif4) {
    // 4. sınıf seçildiyse, şubeleri getir
    var bolumid = document.getElementById("bolum").value;
    // Şube verilerini veritabanından almak için AJAX veya fetch işlemi yapabilirsiniz.
    // Örneğin:
    fetch("get-subeler.php?bolumid=" + bolumid + "&sinif=4") // get-subeler.php dosyasını oluşturmanız gerekiyor
      .then((response) => response.json())
      .then((data) => {
        var subeSelect = document.getElementById("sube");
        data.forEach((sube) => {
          var option = document.createElement("option");
          option.value = sube.sube_id;
          option.text = sube.sube_ad;
          subeSelect.appendChild(option);
        });
      });
  }
}
function sinifdurumsifirla() {
  var subeSelect = document.getElementById("sube");
  subeSelect.innerHTML = "<option disabled selected>Şube Seçiniz</option>";
}
function DersSil(dersprog_id, gun_id, saat_id) {
  fetch("delete-ders.php", {
    method: "POST",
    body: JSON.stringify({
      dersprog_id: dersprog_id,
      gun_id: gun_id,
      saat_id: saat_id,
    }),
  })
    .then((response) => response.text())
    .then((data) => {
      if (data === "success") {
        toastr.success("Program başarıyla silindi.");
        location.reload();
      } else {
        toastr.error("Program silinirken bir hata oluştu.");
      }
    })
    .catch((error) => {
      console.error("Bir hata oluştu:", error);
      toastr.error("Bir hata oluştu. Lütfen tekrar deneyin.");
    });
}
