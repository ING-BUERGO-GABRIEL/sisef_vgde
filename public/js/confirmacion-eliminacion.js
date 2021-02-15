function eliminar(_id) {
    console.log(document.querySelector('.eliminar'+_id))

        var form = this;
        console.log(_id)
        //e.preventDefault();
        Swal.fire({
             title: 'Esta seguro de eliminar este Registro ??',
             text: "Si Confirma la accion no podra recuperar los datos !!",
             //icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#004c99',
             cancelButtonColor: '#b50000',
             confirmButtonText: 'Si, Eliminar !'
         }).then((result) => {
             if (result.value) {
                 form.submit();
             }
         })

}
function confirmEliminar(id) {
    //eliminar(id);
    Swal.fire({
        title: 'Esta seguro de eliminar este Registro ??',
        text: "Si Confirma la accion no podra recuperar los datos !!",
        //icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#004c99',
        cancelButtonColor: '#b50000',
        confirmButtonText: 'Si, Eliminar !'
    }).then((result) => {
        if (result.value) {
            //form.submit();
            $( "#eliminar"+id ).submit()
        }
    })
}
