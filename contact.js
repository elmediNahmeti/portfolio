function myBtn() {
    var myContact = document.getElementsByClassName('input-f');

    if(myContact[0].value.length == 0 || myContact[1].value.length == 0 ||myContact[2].value.length == 0 ||myContact[3].value.length == 0) {
        alert('Please fill all fields!');
        return false;
    }
    else if(myContact[0].value.length <=4){
        alert('Name should be more then 4 characters');
        return false;
    }
    else if(!(emailIsValid(myContact[1].value))){
        alert('Please fix your email');
        return false;
    }
    else if(myContact[2].value.length <=4){
        alert('Subject should be more then 4 characters');
        return false;
    }
    else if(myContact[3].value.length <=10){
        alert('Message should be more then 10 characters');
        return false;
    }
    else {
        return true;
    }
}

function emailIsValid(email){
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}











