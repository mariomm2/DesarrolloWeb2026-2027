function devuelveUltimaLetra(str){
    let lon=str.length;
    return str.charAt(lon-1);
}
console.log(devuelveUltimaLetra("Mario"));
console.log(devuelveUltimaLetra("Hola mundo"));