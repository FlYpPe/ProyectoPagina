function validacion() {
    var id = document.getElementById('Id');
    var nombre = document.getElementById('Nombre');



    if (id.value === '' || nombre.value==='' ) 
    {
        alert("Por favor, introduzca todos los datos");
        return false; 
    }
    return true;
}