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

function egtac() {
    disableElements("sube", "btngnd");
    enableElements("egtdurum");
}
function subeac() {
    disableElements("btngnd");
    enableElements("sube");
}

function btnac() {
    enableElements("btngnd");
}

function ProgSil(programId) {
    fetch('delete-prog.php', {
        method: 'POST',
        body: JSON.stringify({ programId: programId })
    })
        .then(response => response.text())
        .then(data => {
            if (data === 'success') {
                toastr.success('Program başarıyla silindi.');
                location.reload();
            } else {
                toastr.error('Program silinirken bir hata oluştu.');
            }
        })
        .catch(error => {
            console.error('Bir hata oluştu:', error);
            toastr.error('Bir hata oluştu. Lütfen tekrar deneyin.');
        });
}
