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
        quantity++;
        updateQuantityOrder();
        showMessage('Product added to cart');
    });
});

