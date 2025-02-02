const CartItems=document.querySelector("#body-cart-table");
const HeadCartTable=document.querySelector("#head-cart-table");
const update=document.querySelector(".update");
const cartFoot=document.querySelector(".cart-foot");
const empty=document.querySelector(".empty");
const arr=[];
function displayCartItems(){
    const items=JSON.parse(localStorage.getItem("cart"));
    if(items!=null && items.length>0){
        empty.classList.add('display_empty');
        HeadCartTable.innerHTML=`
        <tr>
                        <th>Delete</th>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
        `;
        update.innerHTML=`<button class="upd-btn" onclick="clearCart()">Update Cart</button>`;
        cartFoot.innerHTML=`
        <h2 id="cart-total">Cart Total</h2>
                    <div class="total-cost">
                        <p>SUB-TOTAL:  <span class="total">${total()}</span></p>
                        <P>SHIPPING:  <span>FREE SHIPPING</span></P>
                        <p>TOTAL:  <span id="cart-total2" >${total()}</span></p>
                    </div>
                    <div class="checkout">
                        <button id="checkout-btn" onclick="goToCheckout()" >Checkout</button>
                    </div>
        `;
    }

    let a=[];
    // let a2=[];
    items.forEach((item ,idx) => {
        const cartItem=document.createElement("tr");
        cartItem.className="cart-item";
        if(a.includes(item.id)){
            console.log(5);
  
        }
        else{
            a.push(item.id);
            cartItem.innerHTML=`
            <td><button class="delete" onclick="del(${idx})">Delete</button></td>
            <td class="product-image"><img src="${item.image}" alt=""></td>
            <td>${item.title}</td>
            <td>$${item.price}</td>
            <td>
            <div class="add">
            <button class="minus" onclick="minus(${idx})">-</button>
            <button class="num">${item.quantity}</button>
            <button class="plus" onclick="plus(${idx})">+</button>
            </div>
            </td>
            <td class="total">${item.price*item.quantity}</td>
            `      

            CartItems.appendChild(cartItem);
            console.log(item.quantity);
            console.log(typeof items);
            // cin
            arr.push(cartItem);
        }

        
    })    
    } 
displayCartItems();

function plus(idx){
    let num=document.querySelectorAll(".num");
    let total=document.querySelectorAll(".total");
    let price=document.querySelectorAll(".price");
    let a=JSON.parse(localStorage.getItem("cart"));
    a[idx].quantity++;
    localStorage.setItem("cart",JSON.stringify(a));
    num[idx].innerHTML=a[idx].quantity;
    total[idx].innerHTML=a[idx].price*a[idx].quantity;
        updateCartQuantity();
        updateCartTotal();
}


function minus(idx){
    let num=document.querySelectorAll(".num");
    let total=document.querySelectorAll(".total");
    let price=document.querySelectorAll(".price");
    let a=JSON.parse(localStorage.getItem("cart"));
    if(a[idx].quantity>1){
        a[idx].quantity--;
        localStorage.setItem("cart",JSON.stringify(a));
        num[idx].innerHTML=a[idx].quantity;
        total[idx].innerHTML=a[idx].price*a[idx].quantity;
    }
        // Update Span_Cart dynamically
        updateCartQuantity();

        // Update the total amount of the cart
        updateCartTotal();

        
}
function del(idx) {
    let a = JSON.parse(localStorage.getItem("cart"));
    
    // Remove the item from the cart (localStorage)
    a.splice(idx, 1);  
    
    // Update the cart in localStorage
    localStorage.setItem("cart", JSON.stringify(a));
    
    // Remove the item from the DOM (index may shift after removing an item)
    let cartItemRow = document.querySelectorAll(".cart-item")[idx];
    if (cartItemRow) {
        cartItemRow.remove();  // Remove the corresponding row
    }
    
    // Update the total amount of the cart
    updateCartQuantity(); // Update the total quantity in Span_Cart
    updateCartTotal();    // Update the total price in the cart
}


function total(){
    let a=JSON.parse(localStorage.getItem("cart"));
    let sum=0;
    for(let i=0;i<a.length;i++){
        sum+=a[i].price*a[i].quantity;
    }
    return sum;
}

function updateCartTotal(){
    const items = JSON.parse(localStorage.getItem("cart"));
    if (items != null && items.length > 0) {
        let totalAmount = 0;
        items.forEach(item => {
            totalAmount += item.price * item.quantity;
        });
        
        // Update the displayed total cost in the cart
        document.querySelector('.total-cost .total').innerHTML = `${totalAmount}`;
        document.querySelector('#cart-total2').innerHTML = `${totalAmount}`;
    }
    else {

        empty.classList.remove('display_empty');
        HeadCartTable.innerHTML="";
        update.innerHTML="";
        cartFoot.innerHTML="";

    }
}

function updateCartQuantity() {
    const Quantities = JSON.parse(localStorage.getItem("cart"));
    let counts = 0;

    // Sum the quantities of all items in the cart
    if (Quantities != null) {
        Quantities.forEach((item) => {
            counts += item.quantity;
        });
    }

    // Update the Span_Cart innerHTML with the total quantity
    const Span_Cart = document.querySelector(".Span_Cart");
    Span_Cart.innerHTML = counts;
}

// Update the cart quantity on page load
document.addEventListener("DOMContentLoaded", () => {
    updateCartQuantity();
});


function goToCheckout() {
    // You can pass query parameters if needed, like the cart total or other data
    window.location.href = 'checkout.php';  // This will redirect the user to checkout.php
}


function clearCart() {
    // Remove all items from localStorage
    localStorage.removeItem("cart");

    // Clear the cart items table in the DOM
    const CartItems = document.getElementById("CartItems");
    CartItems.innerHTML = ""; // This clears the cart items table

    // Update the cart footer to reflect the empty cart
    const cartFoot = document.getElementById("cartFoot");
    cartFoot.innerHTML = `
        <h2 id="cart-total">Cart Total</h2>
        <div class="total-cost">
            <p>SUB-TOTAL:  <span class="total">0</span></p>
            <P>SHIPPING:  <span>FREE SHIPPING</span></P>
            <p>TOTAL:  <span id="cart-total2">0</span></p>
        </div>
        <div class="checkout">
            <button id="checkout-btn" onclick="goToCheckout()" disabled>Checkout</button>
        </div>
    `;

    // Remove the 'empty cart' message if there is one
    const empty = document.getElementById("empty");
    empty.classList.remove('display_empty');

    // Optionally, you can also remove the "Update Cart" button or disable it
    const update = document.getElementById("update");
    update.innerHTML = ""; // This removes the update button
}
