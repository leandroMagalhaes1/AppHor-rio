
let totalGastos = 0;
const submit = function(){
    let text = document.getElementById("i_text").value;
    let textArea = document.getElementById("text_area");
    let price = document.getElementById("i_textPrice").value;
    let gastos = document.getElementById("i_gastos");
  

    if(text != "" && price != ""){
        textArea.value += text +" "+ price + " \n";
        totalGastos += Number(price);
        gastos.textContent = totalGastos.toFixed(2);
    }

}

