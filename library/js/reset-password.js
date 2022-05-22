document.getElementById('reset-password').addEventListener('click', function(){
    Swal.fire({
        title: 'Reset Password',
        html: `<p>Your OTP will be sent to your email shortly.</p>
        <input type="text" id="email" class="swal2-input" placeholder="Email">`,
        confirmButtonText: 'Submit',
        focusConfirm: false,
        preConfirm: () => {
          const login = Swal.getPopup().querySelector('#email').value
          if (!email) {
            Swal.showValidationMessage(`Please enter a valid email.`)
          }
          return { email: email}
        }
      })
      
})