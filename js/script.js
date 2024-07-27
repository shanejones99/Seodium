function winner(){
    const jsConfetti = new JSConfetti()
    jsConfetti.addConfetti()
}

function validateMyForm()
{
    console.log("validate");
    const email = document.getElementById('email');
    const name = document.getElementById('name');
    const date_of_birth = document.getElementById('date_of_birth');
    let errors = false;

    if(!name.value) {
        name.classList.add("border", "border-danger", "border-2") 
        document.getElementById('name_error').innerHTML = "Please provide a name"
        errors = true;
    }

    if(!email.value || !email.value.includes('@')) {
        email.classList.add("border", "border-danger", "border-2") 
        document.getElementById('email_error').innerHTML = "Please provide a valid email address"
        errors = true;
    }

    if(!date_of_birth.value) {
        date_of_birth.classList.add("border", "border-danger", "border-2") 
        document.getElementById('date_of_birth_error').innerHTML = "Please provide a date of birth"
        errors = true;
    }

    if(!errors) {
        console.log("validate");
        document.getElementById("form").submit();
    }

}