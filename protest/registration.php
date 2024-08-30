<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration form</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script src="projects/pro_test/registration.php"></script> -->
</head>

<body> 
    <h1 class="title">Registration to P-kart</h1>
    <form class="registration-form">
        <table>
            <tr>
                <td>
                    <label class="form-label" for="first-name">First Name:</label>
                </td>
                <td>
                    <input class="form-input" type="text" id="first-name" name="fn" action="" onclick="" >
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-label" for="last-name">Last Name:</label>
                </td>
                <td>
                    <input class="form-input" type="text" id="last-name" name="ln">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-label" for="age">Age:</label>
                </td>
                <td>
                    <input class="form-input" type="number" id="age" name="Age">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-label" for="email">Email:</label>
                </td>
                <td>
                    <input class="form-input" type="email" id="email" name="mail">
                </td>
            </tr>

            <tr>
               <td>
                 <label class="form-label">Gender:</label>
               </td>
               <td>
                 <div class="form-radio">
                   <input type="radio" id="male" name="gen">
                   <label class="radio-label" for="male">Male</label>
                 </div>
                 <div class="form-radio">
                   <input type="radio" id="female" name="gen">
                   <label class="radio-label" for="female">Female</label>
                 </div>
                 <div class="form-radio">
                   <input type="radio" id="other" name="gen">
                   <label class="radio-label" for="other">Other</label>
                 </div>
              </td>
            </tr>

            <tr>
                <td>
                    <label class="form-label">New Collection:</label>
                </td>
                <td>
                    <label class="checkbox-label"><input class="form-checkbox" type="checkbox" name="course">Offers</label>
                    <label class="checkbox-label"><input class="form-checkbox" type="checkbox" name="course">Discounts</label>
                    <label class="checkbox-label"><input class="form-checkbox" type="checkbox" name="course">Best Deals</label>
                    <label class="checkbox-label"><input class="form-checkbox" type="checkbox" name="course">Top Brands</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-label" for="dob">Date Of Birth:</label>
                </td>
                <td>
                    <input class="form-input" type="datetime-local" id="dob" name="Date of joining">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-label" for="location">Select Location:</label>
                </td>
                <td>
                    <select class="form-select" id="location">
                        <option>Delhi</option>
                        <option>Hyderabad</option>
                        <option>Benguluru</option>
                        <option>Visakhapatnam</option>
                        <option>Chennai</option>
                        <option>Pune</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="form-label" for="description">Description:</label>
                </td>
                <td>
                    <textarea class="form-textarea" id="description" rows="5" cols="40" placeholder="Let us know about your fashion preferences..."></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label class="form-label">By continuing, I agree to the terms of use & Privacy Policy</label>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input class="form-button" type="reset" name="reset button" value="Reset" >
                    <input class="form-button" type="submit" name="submit button" value="Submit" action="" onclick="submit_btn()">
                </td>
            </tr>
        </table>
    </form>


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



</body>
</html>
