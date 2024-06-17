function validateStudentForm() {
    var isValid = true;
  
    // Validate first name
    var firstNameInput = document.getElementById('firstname').value.trim();
    var firstNameErrorElement = document.getElementById('firstname-error');
    if (firstNameInput === '' || !/^[a-zA-Z]+$/.test(firstNameInput)) {
      firstNameErrorElement.style.display = 'block';
      isValid = false;
    } else {
      firstNameErrorElement.style.display = 'none';
    }
  
    // Validate address
    var addressInput = document.getElementById('address').value.trim();
    var addressErrorElement = document.getElementById('address-error');
    if (addressInput === '') {
      addressErrorElement.style.display = 'block';
      isValid = false;
    } else {
      addressErrorElement.style.display = 'none';
    }
  
    // Validate password
    var passwordInput = document.getElementById('password').value.trim();
    var passwordErrorElement = document.getElementById('password-error');
    if (passwordInput.length < 5) {
      passwordErrorElement.style.display = 'block';
      passwordErrorElement.textContent = 'Password must be at least 5 characters long.';
      isValid = false;
    } else {
      passwordErrorElement.style.display = 'none';
    }
  
    // Validate last name
    var lastNameInput = document.getElementById('lastname').value.trim();
    var lastNameErrorElement = document.getElementById('lastname-error');
    if (lastNameInput === '' || !/^[a-zA-Z]+$/.test(lastNameInput)) {
      lastNameErrorElement.style.display = 'block';
      isValid = false;
    } else {
      lastNameErrorElement.style.display = 'none';
    }
  
    // Validate email
    var emailInput = document.getElementById('email').value.trim();
    var emailErrorElement = document.getElementById('email-error');
    if (emailInput === '' || !/\S+@\S+\.\S+/.test(emailInput)) {
      emailErrorElement.style.display = 'block';
      isValid = false;
    } else {
      emailErrorElement.style.display = 'none';
    }
  
    // Validate phone
    var phoneInput = document.getElementById('phone').value.trim();
    var phoneErrorElement = document.getElementById('phone-error');
    if (phoneInput === '' || !/^\d+$/.test(phoneInput)) {
      phoneErrorElement.style.display = 'block';
      isValid = false;
    } else {
      phoneErrorElement.style.display = 'none';
    }
     // Validate grade
     var gradeInput = document.getElementById('grade').value;
    var gradeErrorElement = document.getElementById('grade-error');
    if (gradeInput === '') {
      gradeErrorElement.style.display = 'block';
      isValid = false;
    } else {
      gradeErrorElement.style.display = 'none';
    }
     // Validate section
     var sectionInput = document.getElementById('section').value;
    var sectionErrorElement = document.getElementById('section-error');
    if (sectionInput === '') {
      sectionErrorElement.style.display = 'block';
      isValid = false;
    } else {
      sectionErrorElement.style.display = 'none';
    }
     // Validate stream
     var streamInput = document.getElementById('stream').value;
    var streamErrorElement = document.getElementById('stream-error');
    if (streamInput === '') {
      streamErrorElement.style.display = 'block';
      isValid = false;
    } else {
      streamErrorElement.style.display = 'none';
    }
     // Validate Year
     var yearInput = document.getElementById('year').value;
    var yearErrorElement = document.getElementById('year-error');
    if (yearInput === '') {
      yearErrorElement.style.display = 'block';
      isValid = false;
    } else {
      yearErrorElement.style.display = 'none';
    }
     
    // Validate sex
    var sexInput = document.querySelector('input[name="sex"]:checked');
    var sexErrorElement = document.getElementById('sex-error');
    if (!sexInput) {
      sexErrorElement.style.display = 'block';
      isValid = false;
    } else {
      sexErrorElement.style.display = 'none';
    }
  
    return isValid;
  }