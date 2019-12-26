function validation() {
    var form=document.forms['form'];
    var pass=form['pass'].value;
    var pass2=form['conpass'].value;
    if(pass!=pass2){
        document.getElementById('error').innerHTML="password and confirm password don't match";
        return false;
    }
    return true;
}