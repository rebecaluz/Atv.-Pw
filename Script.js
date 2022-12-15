$('#btnAdicionar').click((event) => {
    event.preventDefault();
    alertify.confirm("Tem certeza?", (e) => {
        if(e) {
            $('#adicionar').submit();
            return true;
        } else {
            return false;
        }
    });
});

$('#btnAtualizar').click((event) => {
    event.preventDefault();
    alertify.confirm("Tem certeza?", (e) => {
        if(e) {
            $('#atualizar').submit();
            return true;
        } else {
            return false;
        }
    });
}); 
