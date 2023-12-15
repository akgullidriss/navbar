function DersSil(dersprog_id, gun_id, saat_id) {
    fetch('delete-ders.php', {
        method: 'POST',
        body: JSON.stringify({ dersprog_id: dersprog_id, gun_id: gun_id, saat_id: saat_id })
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