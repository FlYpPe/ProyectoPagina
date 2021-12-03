function validacion() {
    var id = document.getElementById('Id');
    var nombre = document.getElementById('Nombre');
    var cantidad = document.getElementById('Cantidad');
    var precio = document.getElementById('Precio');
    var stock = document.getElementById('Stock');
    var descont = document.getElementById('Descont');


    if (id.value === '' || nombre.value==='' || cantidad.value==='' || precio.value==='' || stock.value==='' || descont.vale==='') 
    {
        alert("Por favor, introduzca todos los datos");
        return false; 
    }
    return true;
}