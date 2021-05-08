const buttons = document.getElementsByClassName('addBtn');
const items = []

function addItem() {
    let item = {
        image: event.target.offsetParent.previousElementSibling.children[1].src,
        name: event.target.offsetParent.firstElementChild.innerText,
        price: event.target.offsetParent.children[1].innerText,
        total: parseInt(event.target.offsetParent.children[1].innerText),
        quantity: 1
    }
    itemToLocalStore(item)
    window.alert("Your product has been added to your cart!");
}

function itemToLocalStore(item) {
    let itemInCart = JSON.parse(localStorage.getItem('cartItem'))
    if (itemInCart === null) {
        items.push(item)
        localStorage.setItem('cartItem', JSON.stringify(items))
    } else {
        itemInCart.forEach(product => {
            if (item.name == product.name) {
                item.quantity = product.quantity += 1;
                item.total = product.total += item.total;
            } else {
                items.push(item)
            }
        });
        items.push(item)
    }
    localStorage.setItem('cartItem', JSON.stringify(items))
    window.location.reload()
}

function displayCart() {
    let summary = '';
    let itemInCart = JSON.parse(localStorage.getItem('cartItem'))
    itemInCart.forEach(product => {
        summary += `
    <div class="proInfo">
        <div class="product">
            <img class="pro-img" src="${product.image}">
            <p>${product.name}</p>
        </div>
        <div id="price" class="price">$${product.price}</div>
        <div class="quantity">${product.quantity}</div>
        <div class="subtotal">$${product.total}</div>
    </div>`

    });
    document.querySelector('.proInfo').innerHTML = summary;
}
displayCart();

function Payment() {
    payment = 0;
    let itemInCart = JSON.parse(localStorage.getItem('cartItem'))
    itemInCart.forEach(product => {
        subtotal = product.total += payment;
        dispSubtotal = '$' + subtotal;
    });
    document.querySelector('.payment p').textContent = dispSubtotal;
}
Payment();


function addCoupon() {
    Payment();
    let coupon20 = 'COSC2430-HD';
    let coupon10 = 'COSC2430-DI';
    let input = document.getElementById('discount').value;
    if (input === coupon20) {
        beforeDiscount = subtotal;
        discount = 0.2;
        discountAmount = beforeDiscount * discount;
        finalTotal = beforeDiscount - discountAmount;
        document.querySelector('.payment section:nth-child(2) p').textContent = '- $' + discountAmount;
        document.querySelector('.payment section:last-child p').textContent = '$' + finalTotal;
        document.getElementById('correct-Msg').innerHTML = "Coupon applied!";
        document.getElementById('error-Msg').innerHTML = "";
        return true;
    } else if (input === coupon10) {
        beforeDiscount = subtotal;
        discount = 0.1;
        discountAmount = beforeDiscount * discount;
        finalTotal = beforeDiscount - discountAmount;
        document.querySelector('.payment section:nth-child(2) p').textContent = '- $' + discountAmount;
        document.querySelector('.payment section:last-child p').textContent = '$' + finalTotal;
        document.getElementById('correct-Msg').innerHTML = "Coupon applied!";
        document.getElementById('error-Msg').innerHTML = "";
        return true;
    } else {
        finalTotal = subtotal;
        document.querySelector('.payment section:nth-child(2) p').textContent = '$0';
        document.getElementById('error-Msg').innerHTML = "Invalid coupon!";
        document.getElementById('correct-Msg').innerHTML = "";
        return false;
    }
}
addCoupon();