

const addBtn = document.getElementsByClassName('btnAdd')[0];
const invoice = document.getElementsByClassName('invoice')[0];

let btnSubmit = document.querySelector('.btnSubmit');
btnSubmit.onclick = formSubmit;
let subTotal1 = document.querySelector('.subtotal');
subTotal1.onfocus = calculateSubtotal;

console.log(addBtn);
addBtn.onclick = addRow;
function addRow() {
    let div_row = document.createElement('div');
    console.log(div_row);
    div_row.classList.add('row');
    div_row.classList.add('m-2');
    div_row.classList.add('d-flex');
    div_row.classList.add('justify-content-between');
    console.log(div_row);
    let div_col1 = document.createElement('div');
    div_col1.classList.add('col-md-3');
    let product = document.createElement('input');
    product.setAttribute('type', 'text');
    product.setAttribute('name', 'product[]');
    product.classList.add('form-control');
    product.classList.add('title');
    div_col1.appendChild(product);
    // console.log(div_col1);

    let div_col2 = document.createElement('div');
    div_col2.classList.add('col-md-2');
    let price = document.createElement('input');
    price.setAttribute('type', 'number');
    price.setAttribute('name', 'price[]');
    price.classList.add('form-control');
    price.classList.add('price');
    div_col2.appendChild(price);
    // console.log(div_col2);

    let div_col3 = document.createElement('div');
    div_col3.classList.add('col-md-2');
    let qty = document.createElement('input');
    qty.setAttribute('type', 'number');
    qty.setAttribute('name', 'qty[]');
    qty.classList.add('form-control');
    qty.classList.add('qty');
    div_col3.appendChild(qty);
    // console.log(div_col3);

    let div_col4 = document.createElement('div');
    div_col4.classList.add('col-md-3');
    let subTotal = document.createElement('input');
    subTotal.setAttribute('type', 'number');
    subTotal.setAttribute('name', 'subTotal[]');
    subTotal.classList.add('form-control');
    subTotal.classList.add('subtotal');
    div_col4.appendChild(subTotal);
    subTotal.onfocus = calculateSubtotal;
    // console.log(div_col4);

    let div_col5 = document.createElement('div');
    div_col5.classList.add('col-md-2');
    let btnDelete = document.createElement('button');
    btnDelete.classList.add('btn');
    btnDelete.classList.add('btn-danger');
    btnDelete.classList.add('deleteBtn');

    btnDelete.innerHTML = "Delete";
    div_col5.appendChild(btnDelete);
    btnDelete.onclick = deleteRow;
 
    div_row.appendChild(div_col1);
    div_row.appendChild(div_col2);
    div_row.appendChild(div_col3);
    div_row.appendChild(div_col4);
    div_row.appendChild(div_col5);

    // console.log(div_row);
    invoice.appendChild(div_row);
}
function deleteRow(event) {
    event.preventDefault();
    // console.log(event.target.parentElement.parentElement);
    invoice.removeChild(event.target.parentElement.parentElement);
}

function formSubmit(event) {
    event.preventDefault();
    let priceElements = document.querySelectorAll('.price');
    // console.log(priceElements);
    let prices = [];
    for(let index=0; index<priceElements.length; index++) {
        prices[index] = priceElements[index].value;
    }
     console.log(prices);

    let titleElements = document.querySelectorAll('.title');
    let titles = [];
    for(let index=0; index<titleElements.length; index++) {
        titles[index] = titleElements[index].value;
    }
    console.log(titles);
    let qtyElements = document.querySelectorAll('.qty');
    let qty = [];
    for(let index=0; index<qtyElements.length; index++) {
        qty[index] = qtyElements[index].value;
    }
    let customer = document.querySelector('.cname').value;


    let customerDate = document.querySelector('.cdate').value;
    
    //console.log(qty);
    $.ajax({
        url:'add_invoice.php',
        method:'post',
        data:{price:prices, title:titles, qty:qty, cname:customer, cdate:customerDate},
        success: function(response){
            //console.log(response);
            if(response=='success'){
                alert ('added invoice to list');
                document.querySelector('#invoiceForm').reset();
            }
        }
    })
}

function calculateSubtotal(event) {
    //console.log(event.target);
    let div_qty = event.target.parentElement.previousElementSibling;
    console.log(div_qty);
    let qty = div_qty.firstElementChild.value;
    // console.log(qty);

    let div_price = div_qty.previousElementSibling;
    let price = div_price.firstElementChild.value;
    // console.log(price);

    event.target.value = price * qty;
     
};
const total = document.querySelector('#total');
console.log(total);
total.onfocus = totalItem;
function totalItem() {
    let subTotals = document.querySelectorAll('.subtotal');
    let sub_total = [];
    let result = 0;
    for(let index=0; index<subTotals.length; index++) {
        sub_total[index] = subTotals[index].value;
        result += parseInt(sub_total[index]);
    }
    total.value = result;
}
let balance = document.getElementsByClassName('balance')[0];

balance.onfocus = balanceResult;
function balanceResult(event) {
    let discount_div = event.target.parentElement.nextElementSibling;
    //console.log(event.target.parentElement.nextElementSibling);
    let discount = discount_div.lastElementChild.value;

    let result = (discount / 100) * total.value;
    balance.value = total.value - result;

}
