<script>

function submit_btn() {
  // Get the input field values
  var firstName = document.getElementById('first-name').value;
  var lastName = document.getElementById('last-name').value;
  var age = document.getElementById('age').value;
  var email = document.getElementById('email').value;
  var gender = document.querySelector('input[name="gen"]:checked');
  var collectionCheckboxes = document.querySelectorAll('input[name="course"]');
  var dob = document.getElementById('dob').value;
  var location = document.getElementById('location').value;
  var description = document.getElementById('description').value;

  // Check if any required fields are empty
  if (firstName === '') {
    alert('Please enter your First Name.');
    document.getElementById('first-name').style.borderColor = 'red';
    return;
  }
  if (lastName === '') {
    alert('Please enter your Last Name.');
    document.getElementById('last-name').style.borderColor = 'red';
    return;
  }
  if (age === '') {
    alert('Please enter your Age.');
    document.getElementById('age').style.borderColor = 'red';
    return;
  }
  if (email === '') {
    alert('Please enter your Email.');
    document.getElementById('email').style.borderColor = 'red';
    return;
  }
  if (!gender) {
    alert('Please select your Gender.');
    return;
  }

  // Check if at least one collection checkbox is selected
  var isChecked = false;
  for (var i = 0; i < collectionCheckboxes.length; i++) {
    if (collectionCheckboxes[i].checked) {
      isChecked = true;
      break;
    }
  }
  if (!isChecked) {
    alert('Please select at least one Collection checkbox.');
    return;
  }

  // If all fields are filled, display success message
  alert('Registration saved successfully.');

  // Reset field borders and form
  document.getElementById('first-name').style.borderColor = '';
  document.getElementById('last-name').style.borderColor = '';
  document.getElementById('age').style.borderColor = '';
  document.getElementById('email').style.borderColor = '';
  document.getElementById('registration-form').reset();
}

</script>


