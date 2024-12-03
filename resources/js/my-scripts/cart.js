let quantities = {};

function updateQuantityOrder() {
    const totalQuantity = Object.values(quantities).reduce((sum, qty) =>
    sum + qty, 0);//totalQuantity holds the sum (starting at 0) of all product quantities in the cart, calculated by summing the values from the quantities object.
    document.getElementById('quantity-order').innerText = totalQuantity;
}

function showMessage(message) {
    const messageSpan = document.getElementById('add-message');
    messageSpan.innerText = message;
    messageSpan.style.display = 'inline';
    setTimeout (() => {
        messageSpan.style.display = 'none';
        messageSpan.innerText = '';
    }, 2000);
}

document.querySelectorAll('.add').forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault(); //to prevent default form or link submission/behavior
        const stockEl = button.closest('.card-body').querySelector('.stock-quantity');
        const availableStock = parseInt(stockEl.dataset.stock); //retrieves available stock from data attribute
        const productId = button.closest('.card').dataset.productId;

        if (!quantities[productId]) {
            quantities[productId] = 0;
        }//initialize quantity for this product if it doesn't exist

        if (quantities[productId] < availableStock) {
            quantities[productId]++;
            updateQuantityOrder();
            showMessage('Product added to cart');
        } else {
            showMessage('No more stock available to add');
        }
    });
});

document.querySelectorAll('.remove').forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault();

        const productId = button.closest('.card').dataset.productId;

        if (quantities[productId] > 0) {
            quantities[productId]--;
            updateQuantityOrder();
            showMessage('Product removed from cart');
        } else {
            showMessage('No products in your cart to remove');
        }
    });
});

