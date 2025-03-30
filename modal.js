const contact = document.getElementById("contact")

const CloseContact = document.getElementById("CloseContact")
const ButtonContact = document.getElementById("ButtonContact")
const BuyContact = document.getElementById("BuyContact");

BuyContact.addEventListener("click", ()=>{
    contact.showModal()
})

CloseContact.addEventListener("click",()=>{
    contact.close()
})
ButtonContact.addEventListener("click", ()=>{
    contact.close()
})
