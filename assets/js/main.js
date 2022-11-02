/**
 * Author: Emmanuen Lucio Urbina
 * Date: November 2022
 * 
 * JS que notifica si el archivo es valido o no
 * y muestra el numero total de archivos cargados
 */

document.addEventListener("DOMContentLoaded", ev => {
    const file = document.getElementById("cfdi")
    let text_msg = document.getElementById("inf-text")
    file.addEventListener('change', e => {
        let f_size = file.files.length
        let me = this,
            files = file.files[0],
            name = file.name.replace(/.[^/.]+$/, '');
        if (files.type === 'text/xml') {

            if (files.size < (3000 * 1024)) {
                text_msg.innerHTML = f_size + " Archivo(s) cargado(s)"

            } else {
                text_msg.innerHTML = "File size is too large, please ensure you are uploading a file of less than 3MB"
            }
        } else {
            text_msg.innerHTML = ('Tipo de archivo ' + files.type + ' no permitido');
        }
    })
})

