let counter = 0;

function addCustomer(){
    window.location.href = "/weave/view/customer-form_add.php"
}

function addAddressForm(){
    const addressContainer = document.querySelector('#add-address_container');
    let htmlElemnt = `<label>Address</label><input type="text" name="address${counter}" required><label>Latitude</label><input type="text" name="latitude${counter}" required><label>Longitude</label><input type="text" name="longitude${counter}" required>`
    addressContainer.innerHTML += htmlElemnt
    counter++
}