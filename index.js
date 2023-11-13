const button = document.getElementById("ChangePrice")

const ChangePrice = () => {

    const options = document.querySelectorAll("input");
    let newValue = undefined;

    options.forEach((option)=>{
        if(option.checked){
            newValue = option.value; 
        };
    })

    const PriceDisplay = document.getElementById("ShowingPrice")
    PriceDisplay.innerHTML = newValue;
}
button.addEventListener('click',ChangePrice)
button.click();