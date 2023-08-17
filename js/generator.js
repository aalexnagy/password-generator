// VARIABLE DEFINITION
let inputs = document.getElementsByTagName("input");
let len = document.getElementById("passLength");
let pass = document.getElementById("passOut");

// EVENT LISTENER
document.getElementById("generate").addEventListener("click", function(){showPassword()});

// SHOW PASSWORD
function showPassword(){ 
    pass.textContent = generatePassword(generateCharset(inputs), len);
} 

// GENERATE CHARSET
function generateCharset(){ 
    let charset = ""; 
    for(let i = 0; i < inputs.length; i++){
        if(inputs[i].checked && inputs[i].type == "checkbox"){
            charset = charset + inputs[i].value;
        }
    } 
    return charset;
} 

// GENERATE PASSWORD
function generatePassword(charset, len){ 
    let retVal = ""; 
    length = len.value; 
    for(var i = 0, n = charset.length; i < length; ++i){
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    pass.textContent = retVal;
    return retVal; 
}