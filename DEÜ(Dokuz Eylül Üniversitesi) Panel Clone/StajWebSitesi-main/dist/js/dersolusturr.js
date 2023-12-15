function disableElements(...elementIds) {
    elementIds.forEach((id) => {
        const element = document.getElementById(id);
        if (element) {
            element.disabled = true;
        }
    });
}


function enableElements(...elementIds) {
    elementIds.forEach((id) => {
        const element = document.getElementById(id);
        if (element) {
            element.disabled = false;
        }
    });
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
