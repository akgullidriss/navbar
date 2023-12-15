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

function lisansac() {
    disableElements(
        "bolum", "1", "2", "3", "4", "label3", "label4", "sube", "donem",
        "dersler", "uygtip", "derstip", "yerleske", "yerleskeblok",
        "yerleskekat", "yerleskederslik", "akademik", "gun", "saat", "btngnd"
    );
    enableElements("lisans");
}

function bolumac() {
    disableElements(
        "1", "2", "3", "4", "label3", "label4", "sube", "donem", "dersler",
        "uygtip", "derstip", "yerleske", "yerleskeblok", "yerleskekat",
        "yerleskederslik", "akademik", "gun", "saat", "btngnd"
    );
    enableElements("bolum");
}
function sinifac() {
    disableElements(
        "sube", "donem", "dersler",
        "uygtip", "derstip", "yerleske", "yerleskeblok", "yerleskekat",
        "yerleskederslik", "akademik", "gun", "saat", "btngnd"
    );
    enableElements("1", "2", "3", "4", "label3", "label4");
}
function subeac() {
    disableElements(
        "donem", "dersler", "uygtip", "derstip", "yerleske", "yerleskeblok",
        "yerleskekat", "yerleskederslik", "akademik", "gun", "saat", "btngnd"
    );
    enableElements("sube");
}
function donemac() {
    disableElements(
        "dersler", "uygtip", "derstip", "yerleske", "yerleskeblok", "yerleskekat",
        "yerleskederslik", "akademik", "gun", "saat", "btngnd"
    );
    enableElements("donem");
}

function dersac() {
    disableElements(
        "uygtip", "derstip", "yerleske", "yerleskeblok", "yerleskekat",
        "yerleskederslik", "akademik", "gun", "saat", "btngnd"
    );
    enableElements("dersler");
}
function uygac() {
    disableElements(
        "derstip", "yerleske", "yerleskeblok", "yerleskekat",
        "yerleskederslik", "akademik", "gun", "saat", "btngnd"
    );
    enableElements("uygtip");
}
function dersuygac() {
    disableElements(
        "yerleske", "yerleskeblok", "yerleskekat",
        "yerleskederslik", "akademik", "gun", "saat", "btngnd"
    );
    enableElements("derstip");
}
function yerleskeac() {
    disableElements(
        "yerleskeblok", "yerleskekat",
        "yerleskederslik", "akademik", "gun", "saat", "btngnd"
    );
    enableElements("yerleske");
}
function blokac() {
    disableElements(
        "yerleskekat", "yerleskederslik", "akademik", "gun", "saat", "btngnd"
    );
    enableElements("yerleskeblok");
}
function katac() {
    disableElements(
        "yerleskederslik", "akademik", "gun", "saat", "btngnd"
    );
    enableElements("yerleskekat");
}
function derslikac() {
    disableElements(
        "akademik", "gun", "saat", "btngnd"
    );
    enableElements("yerleskederslik");
}
function akademiac() {
    disableElements(
        "gun", "saat", "btngnd"
    );
    enableElements("akademik");
}
function gunac() {
    disableElements(
        "saat", "btngnd"
    );
    enableElements("gun");
}
function saatac() {
    disableElements(
        "btngnd"
    );
    enableElements("saat");
}
function btnac() {
    enableElements("btngnd");
}


function yilac() {
    var lisans_ad = document.getElementById("lisans").value;
    var url = "get-lisans.php?lisans_ad=" + encodeURIComponent(lisans_ad);

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
            if (data[0].lisans_yil === "2") {
                inputRadio3.style.visibility = "hidden"; // Gizle
                label3.style.visibility = "hidden"; // Gizle
                inputRadio4.style.visibility = "hidden"; // Gizle
                label4.style.visibility = "hidden"; // Gizle
            } else if (data[0].lisans_yil === "4") {
                inputRadio3.style.visibility = "visible"; // Göster
                label3.style.visibility = "visible"; // Göster
                inputRadio4.style.visibility = "visible"; // Göster
                label4.style.visibility = "visible"; // Göster
            }
        });
}
function bolumDurumu() {
    var lisans_ad = document.getElementById("lisans").value;
    var url = "get-bolum.php?lisans_ad=" + encodeURIComponent(lisans_ad);
    fetch(url)
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            var bolumSelect = document.getElementById("bolum");
            bolumSelect.innerHTML = "<option disabled selected>Bölüm Seçiniz</option>";

            data.forEach(function (bolum) {
                var option = document.createElement("option");
                option.value = bolum.bolum_id;
                option.text = bolum.bolum_ad + " " + bolum.egt_durum;
                bolumSelect.appendChild(option);
            });
        });
}
function dersDurumu() {
    var bolumid = document.getElementById("bolum").value;
    var sinif1 = document.getElementById("1").checked;
    var sinif2 = document.getElementById("2").checked;
    var sinif3 = document.getElementById("3").checked;
    var sinif4 = document.getElementById("4").checked;
    var subeid = document.getElementById("sube").value;
    var donem = document.getElementById("donem").value;

    if (sinif1) {
        var secim = 1;
    } else if (sinif2) {
        var secim = 2;
    } else if (sinif3) {
        var secim = 3;
    } else if (sinif4) {
        var secim = 4;
    }

    var url = "get-dersler.php?bolumid=" + bolumid + "&secim=" + secim + "&subeid=" + subeid + "&donem=" + donem;

    fetch(url)
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            // Seçenek menüsünü temizle
            var derslerSelect = document.getElementById("dersler");
            derslerSelect.innerHTML = "<option disabled selected>Ders Seçiniz</option>";

            // Ders adlarını seçenek menüsüne ekle
            data.forEach(function (ders) {
                var option = document.createElement("option");
                option.value = ders.ders_id;
                option.text = ders.ders_ad;
                derslerSelect.appendChild(option);
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
            .then(response => response.json())
            .then(data => {
                var subeSelect = document.getElementById("sube");
                data.forEach(sube => {
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
            .then(response => response.json())
            .then(data => {
                var subeSelect = document.getElementById("sube");
                data.forEach(sube => {
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
            .then(response => response.json())
            .then(data => {
                var subeSelect = document.getElementById("sube");
                data.forEach(sube => {
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
            .then(response => response.json())
            .then(data => {
                var subeSelect = document.getElementById("sube");
                data.forEach(sube => {
                    var option = document.createElement("option");
                    option.value = sube.sube_id;
                    option.text = sube.sube_ad;
                    subeSelect.appendChild(option);
                });
            });
    }
}
function blokDurum() {
    var yerleske_id = document.getElementById("yerleske").value;
    var url = "get-blok.php?yerleske_id=" + yerleske_id;
    fetch(url)
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            var yerleskeblok = document.getElementById("yerleskeblok");
            yerleskeblok.innerHTML = "<option disabled selected>Blok Seçiniz</option>";

            data.forEach(function (blok) {
                var option = document.createElement("option");
                option.value = blok.blok_id;
                option.text = blok.blok_ad;
                yerleskeblok.appendChild(option);
            });
        });
}
function katDurum() {
    var yerleske_id = document.getElementById("yerleske").value;
    var blok_id = document.getElementById("yerleskeblok").value;
    var url = "get-kat.php?yerleske_id=" + yerleske_id + "&blok_id=" + blok_id + "";
    fetch(url)
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            var yerleskeblok = document.getElementById("yerleskekat");
            yerleskeblok.innerHTML = "<option disabled selected>Kat Seçiniz</option>";

            data.forEach(function (kat) {
                var option = document.createElement("option");
                option.value = kat.kat_id;
                option.text = kat.kat_ad;
                yerleskeblok.appendChild(option);
            });
        });
}
function derslikDurum() {
    var yerleske_id = document.getElementById("yerleske").value;
    var blok_id = document.getElementById("yerleskeblok").value;
    var kat_id = document.getElementById("yerleskekat").value;
    var url = "get-derslik.php?yerleske_id=" + yerleske_id + "&blok_id=" + blok_id + "&kat_id=" + kat_id + "";
    fetch(url)
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            var yerleskekat = document.getElementById("yerleskederslik");
            yerleskekat.innerHTML = "<option disabled selected>Derslik Seçiniz</option>";

            data.forEach(function (derslik) {
                var option = document.createElement("option");
                option.value = derslik.derslik_id;
                option.text = derslik.derslik_ad;
                yerleskekat.appendChild(option);
            });
        });
}

function sinifdurumsifirla() {
    var subeSelect = document.getElementById("sube");
    subeSelect.innerHTML = "<option disabled selected>Şube Seçiniz</option>";
}
function donemsifirla() {
    var subeSelect = document.getElementById("donem");
    subeSelect.innerHTML = "<option disabled selected>Dönem Seçiniz</option>"
}
function veritest() {
    var yilIcerik = document.getElementById("yil").options[document.getElementById("yil").selectedIndex].text;
    var lisansIcerik = document.getElementById("lisans").options[document.getElementById("lisans").selectedIndex].text;
    var bolumIcerik = document.getElementById("bolum").options[document.getElementById("bolum").selectedIndex].text;
    var subeIcerik = document.getElementById("sube").options[document.getElementById("sube").selectedIndex].text;
    var donemIcerik = document.getElementById("donem").options[document.getElementById("donem").selectedIndex].text;
    var derslerIcerik = document.getElementById("dersler").options[document.getElementById("dersler").selectedIndex].text;
    var uygtipIcerik = document.getElementById("uygtip").options[document.getElementById("uygtip").selectedIndex].text;
    var derstipIcerik = document.getElementById("derstip").options[document.getElementById("derstip").selectedIndex].text;
    var yerleskeIcerik = document.getElementById("yerleske").options[document.getElementById("yerleske").selectedIndex].text;
    var yerleskeblokIcerik = document.getElementById("yerleskeblok").options[document.getElementById("yerleskeblok").selectedIndex].text;
    var yerleskekatIcerik = document.getElementById("yerleskekat").options[document.getElementById("yerleskekat").selectedIndex].text;
    var yerleskederslikIcerik = document.getElementById("yerleskederslik").options[document.getElementById("yerleskederslik").selectedIndex].text;
    var akademikIcerik = document.getElementById("akademik").options[document.getElementById("akademik").selectedIndex].text;
    var gunIcerik = document.getElementById("gun").options[document.getElementById("gun").selectedIndex].text;
    var saatIcerik = document.getElementById("saat").options[document.getElementById("saat").selectedIndex].text;
    var sinifIcerik = document.querySelector('input[name="fav_language"]:checked').id;

    var sonucDiv = document.getElementById("listele");
    sonucDiv.innerHTML =
        "Dönem Yılı: " + yilIcerik + "<br>" + "<br>" +
        "Lisans Durumu: " + lisansIcerik + "<br>" +"<br>" +
        "Bölüm: " + bolumIcerik + "<br>" +"<br>" +
        "Sınıf: " + sinifIcerik + "<br>" +"<br>" +
        "Şube: " + subeIcerik + "<br>" +"<br>" +
        "Dönem: " + donemIcerik + "<br>" +"<br>" +
        "Ders: " + derslerIcerik + "<br>" +"<br>" +
        "Uygulama Tipi: " + uygtipIcerik + "<br>" +"<br>" +
        "Ders İşleniş Tipi: " + derstipIcerik + "<br>" +"<br>" +
        "Yerleşke Yeri: " + yerleskeIcerik + "<br>" +"<br>" +
        "Blok: " + yerleskeblokIcerik + "<br>" +"<br>" +
        "Kat: " + yerleskekatIcerik + "<br>" +"<br>" +
        "Derslik: " + yerleskederslikIcerik + "<br>" +"<br>" +
        "Akademik Görevli: " + akademikIcerik + "<br>" +"<br>" +
        "Gün: " + gunIcerik + "<br>" +"<br>" +
        "Saat Aralığı: " + saatIcerik;
}





