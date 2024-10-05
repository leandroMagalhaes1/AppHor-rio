const submit = function(){
    let text = document.getElementById("i_text").value;
    let textArea = document.getElementById("text_area");
 
    console.log(text);
    if(text != ""){
        //console.log(text.value);
        textArea.value += text + "\n";
    }
}