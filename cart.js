document.addEventListener('DOMContentLoaded', () => {
    updateCartCount();
    const addToCartBtns = document.querySelectorAll('.btn-dark');

    addToCartBtns.forEach(btn => {
        if (btn.innerText.includes('Add to Cart')) {
            btn.addEventListener('click', function() {
                // DOM manipulation se product ki details nikalna
                const card = this.closest('.card');
                const title = card.querySelector('.card-title').innerText;
                const priceText = card.querySelector('.fs-5').innerText;
                const imgSrc = card.querySelector('.card-img-top').src;

                const product = { title, priceText, imgSrc };
                let cart = JSON.parse(localStorage.getItem('megaTroveCart')) || [];
                cart.push(product);
                localStorage.setItem('megaTroveCart', JSON.stringify(cart));
                alert(title + " cart mein add ho gaya!");
                updateCartCount();
            });
        }
    });
});
function updateCartCount() {
    const cartCountEl = document.getElementById('cart-count');
    if (cartCountEl) {
        let cart = JSON.parse(localStorage.getItem('megaTroveCart')) || [];
        cartCountEl.innerText = cart.length;
    }
}
// Cart page load hote hi items dikhane ke liye
if (window.location.pathname.includes('cart.html')) {
    const cart = JSON.parse(localStorage.getItem('megaTroveCart')) || [];
    const container = document.querySelector('#cart-items'); // Make sure your cart.html has this ID
    
    cart.forEach(item => {
        container.innerHTML += `
            <div class="card mb-3 p-3">
                <h5>${item.title}</h5>
                <p>${item.priceText}</p>
            </div>
        `;
    });
}

// Checkout page ke liye data fetch karne ka function
function loadCheckoutSummary() {
    const cart = JSON.parse(localStorage.getItem('megaTroveCart')) || [];
    const container = document.getElementById('checkout-items');
    const totalElement = document.getElementById('checkout-total');
    let total = 0;

    if (cart.length === 0) {
        container.innerHTML = "<p>Cart is empty!</p>";
        return;
    }

    cart.forEach(item => {
        total += item.price * item.quantity;
        container.innerHTML += `
            <div class="d-flex justify-content-between mb-2">
                <span>${item.title} (x${item.quantity})</span>
                <span>₹${item.price * item.quantity}</span>
            </div>
        `;
    });
    
    totalElement.innerText = "₹" + total;
}

// Page load hote hi chalayein
if (window.location.pathname.includes('checkout.html')) {
    loadCheckoutSummary();
}

function placeOrder() {
    // Database mein data bhej sakte ho (Backend integration)
    alert("Order placed successfully! 🎉");
    
    // Order hote hi cart khali kar do
    localStorage.removeItem('megaTroveCart');
    window.location.href = "home.html";
}