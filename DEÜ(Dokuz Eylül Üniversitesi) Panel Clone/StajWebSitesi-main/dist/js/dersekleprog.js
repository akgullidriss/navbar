
function ok() {
    document.getElementById("ok").style.display = "block";
}
function no() {
    document.getElementById("no").style.display = "block";
}

function mevcut() {
    document.getElementById("mevcut").style.display = "block";
}
function bos() {
    document.getElementById("bos").style.display = "block";
}

function closeModal() {
    document.getElementById("ok").style.display = "none";
}
function closeModall() {
    document.getElementById("no").style.display = "none";
}
function closeModalll() {
    document.getElementById("mevcut").style.display = "none";
}
function closeModallll() {
    document.getElementById("bos").style.display = "none";
}

let mybutton = document.getElementById("myBtn");


window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


function bolumDurum() {
    var lisans_id = document.getElementById("alan").value;
    var url = "get-alanbolum.php?lisans_id=" + lisans_id;
    fetch(url)
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            var bolumSelect = document.getElementById("bolum"); // Değişiklik: Elementin adını bolumSelect olarak değiştirdik
            bolumSelect.innerHTML = "<option disabled selected>Bölüm Seçiniz</option>";

            data.forEach(function (bolum) {
                var option = document.createElement("option");
                option.value = bolum.bolum_id;
                option.text = bolum.bolum_ad;
                bolumSelect.appendChild(option); // Değişiklik: bolum yerine bolumSelect kullanıldı
            });
        });
}



