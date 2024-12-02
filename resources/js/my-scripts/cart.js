let quantity = 0;

function updateQuantityOrder() {
    document.getElementById('quantity-order').innerText = quantity;
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

        if (quantity < availableStock) {
            quantity++;
            updateQuantityOrder();
            showMessage('Product added to cart');
        } else {
            showMessage('No more stock available to add');
        }
    });
});

