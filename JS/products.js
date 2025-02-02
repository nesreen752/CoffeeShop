// ----------------------------------------------------------//
let filterItem =document.querySelector('.item_list');
let filterImages= document.querySelectorAll('.product-img');
let container =document.getElementsByClassName('.container');

window.addEventListener('load' ,()=>{
    filterItem.addEventListener('click',(selectedItem)=>{
        if(selectedItem.target.classList.contains('item_link')){
            document.querySelector('.menu-active').classList.remove('menu-active');
            selectedItem.target.classList.add('menu-active');
            let filterName = selectedItem.target.getAttribute('data-name');
            filterImages.forEach((image)=>{
                let filterImages =image.getAttribute('data-name');
                if((filterImages == filterName) || filterName == 'all'){
                    image.style.display='block';
                    // filterImages.style.justifyContent= 'left';
                }else{
                    image.style.display='none';
                }
            })
        }
    })
})
// Add to Cart start
function updateCartQuantity() {
    const cart = JSON.parse(localStorage.getItem("cart")) || [];  // Get cart from localStorage
    let totalQuantity = 0;

    // Sum up all quantities in the cart
    cart.forEach(item => {
        totalQuantity += item.quantity;
    });

    // Update the Span_Cart element with the total quantity
    const Span_Cart = document.querySelector(".Span_Cart");
    if (Span_Cart) {
        Span_Cart.innerHTML = totalQuantity;
    }
}
// window.onload=()=>{JSON.parse(localStorage.clear())};
const ADD_TO_CART=document.querySelectorAll(".ADD_TO_CART");
let a=[];
ADD_TO_CART.forEach((button)=>{
    button.addEventListener("click",()=>{
        const id=button.getAttribute("data-id");
        const title=button.getAttribute("data-title");
        const image=button.getAttribute("data-image");
        const price=parseInt(button.getAttribute("data-price"));
        const quantity=parseInt(button.getAttribute("data-quantity"));
        const cartItem={id,title,image,price,quantity};
        const cart=JSON.parse(localStorage.getItem("cart")) || [];
        const itemExists = cart.some(cartIt => cartIt.id === cartItem.id);
        if (!itemExists) {
            // If the item does not exist, add it to the cart
            cart.push(cartItem);
            console.log(cart);
            
        }
        else{
            // If the item exists, increment its quantity
            const index = cart.findIndex(cartIt => cartIt.id === cartItem.id);
            cart[index].quantity += 1;
        }
        localStorage.setItem("cart",JSON.stringify(cart));
        // Call the function to update the cart quantity displayed in Span_Cart
        updateCartQuantity();
    })
    
});

// When the page loads, update the cart quantity in Span_Cart
document.addEventListener("DOMContentLoaded", () => {
    updateCartQuantity();
});
// Add to Cart end


// get the src of images start
const pic=document.querySelectorAll(".pic");
pic.forEach((button)=>{
    button.addEventListener("click",()=>{
        let product=button.getAttribute("data-product");
        let quantity=parseInt(button.getAttribute("data-quantity"));
        let Products={product,quantity};
        const ProductsItem=JSON.parse(localStorage.getItem("ProductsItem")) || [];
        ProductsItem.push(Products);
        localStorage.setItem("ProductsItem",JSON.stringify(ProductsItem));
    });
});
console.log(localStorage.getItem("ProductsItem"))
// get the src of images end
