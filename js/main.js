// const search = () => {
//     const searchbox = document.getElementById("search-item").value.toUpperCase();
//     const destinationitems = document.getElementById("destination.list")
//     const destination = document.querySelectorAll(".destination")
//     const destinationname = destinationitems.getElementsByTagName("h2")

//     for(var i = 0; i < destinationname.length; i++) {
//         let match = destination[i].getElementsByTagName('h2') [0];

//         if(match){
//             let textvalue = match.textContent || match.innerHTML

//             // dalam indexOf kita akanmemasukkan user value yang berasa dalam seacrhbar dan akan disimpan di searchbox
//             // jika si user mengetik satu nilai(mencari 1nilai) maka if/kondisinya lebih besar dari 1

//             if(textvalue.toUpperCase().indexOf(searchbox) > -1){
//                 // untuk mencocokan kata kunci yang dicari dengan list produk yang ada
//                 destination[i].style.display = "";
//                 // jika kata kunci tidak cocok menambahkan nilai else, nilai else bernilai benar jika userinput(searchbox) tidak cocok pada textvalue(katakunciyangdiketik)
//             }else{
//                 destination[i].style.display = "none";
//             }
//         }
//     }
// }