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
