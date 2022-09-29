function verificaImg(arquivo) {
    caminho = `../img/fotos/${arquivo}`;
    if(is_null(arquivo) || !file_exists(caminho)) {
        return `../img/fotos/default.png`
    } else {
        return caminho;
    }
}