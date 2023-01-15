const search = () => {
    const searchbox = document.getElementById("search-item").value.toUpperCase();
    const destinationitems = document.getElementById("destination.list")
    const destination = document.querySelectorAll(".destination")
    const destinationname = destinationitems.getElementsByTagName("h2")

    for(var i = 0; i < destinationname.length; i++) {
        let match = destination[i].getElementsByTagName('h2') [0];

        if(match){
            let textvalue = match.textContent || match.innerHTML     

            // dalam if (match) kita akanmemasukkan user value(nama tempat) yang berasa kedalam seacrhbar(pencarian) yang nantinya akan memunculkan (nama tempat yang dimaksud )
            // jika si user mengetik satu nilai(mencari 1nilai) maka if/kondisinya lebih besar dari 1

            if(textvalue.toUpperCase().indexOf(searchbox) > -1){
                // untuk mencocokan kata kunci yang dicari dengan list produk yang ada
                destination[i].style.display = "";
                // jika nilai tidak cocok pada search match maka nilai tersebut akan hilang dari pencarian 
            }else{
                destination[i].style.display = "none";
            }
        }
    }
}