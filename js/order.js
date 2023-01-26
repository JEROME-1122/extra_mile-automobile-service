function adddata()
{
    var service=document.getElementById('service').value;
    var name=document.getElementById('name').value;
    var number=document.getElementById('number').value;
    var email=document.getElementById('email').value;
    var address=document.getElementById('address').value;
    var state=document.getElementById('state').value;
    var country=document.getElementById('country').value;

    localStorage.setItem("userservice",service);
    localStorage.setItem("username",name);
    localStorage.setItem("usernumber",number);
    localStorage.setItem("ueremail",email);
    localStorage.setItem("useaddress",address);
    localStorage.setItem("userstate",state);
    localStorage.setItem("usercountry",country);
    
    localStorage.userservice=service;
    localStorage.username=name;
    localStorage.usernumber=number;
    localStorage.useremail=email;
    localStorage.useraddress=address;
    localStorage.userstate=state;
    localStorage.usercountry=country;

}