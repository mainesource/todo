function loginValidate() {
    console.log('Validating...');
    try {
        addr = document.getElementById('email').value;
        pass = document.getElementById('password').value;
        console.log(addr);
        if (addr === null || addr === '' || pass === null || pass === ''){
            alert("Both fields must be filled out");
            return false;
        }
        if (addr.indexOf('@') == -1 ) {
            alert('Invalid email address');
            return false;
        }
        return true;
    } catch (e) {
        return false;
    }
    return false;
}
