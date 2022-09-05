const hexcolor = ["0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F"]
const button = document.getElementById("buttonChanger")
const color = document.getElementById("color")

//text content & inner text | inner HTML
// console.log(button)
// color.textContent = 'HALLO SELAMAT DATANG'
// color.innerText = 'HALLO SELAMAT DATANG'
// color.innerHTML = <h1>'HALLO SELAMAT DATANG'</h1>

function changeColor(){
    //alert('wadidaw')
    let warna = "#"
    for(let i=1;i<=6;i++){
        warna += hexcolor[randomNumber()]
    }

    console.log(warna)
    color.textContent = warna
    document.body.style.backgroundColor = warna

}

    function randomNumber(){
        return Math.floor(Math.random()  * hexcolor.length)
    }