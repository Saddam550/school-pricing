
<?php
// form থেকে মান নেয়া
$programs = isset($_POST['selectedPrograms']) ? $_POST['selectedPrograms'] : '';
$totalStudents = isset($_POST['totalStudents']) ? (int)$_POST['totalStudents'] : 0;
$totalPrice = isset($_POST['totalPrice']) ? (float)$_POST['totalPrice'] : 0;

// যদি program গুলো array আকারে থাকে (comma separated হলে explode ব্যবহার করা যায়)
$programList = !empty($programs) ? explode(',', $programs) : [];

// Default price per student (client requirement)
$studentPrice = 45;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>School+ Purchase</title>
  <link rel="stylesheet" href="./assets/Purchase-pay.css">

</head>
<body>
<?php include './assets/header.php'; ?>
 <div class="container">
  <h2>School+ Purchase</h2>
  <p class="subtitle">
    Complete the form below to set up your classroom(s). After successful creation, we'll send you an invitation email to access the Educator Center to begin rostering your students. This email will contain everything you need to get started.
  </p>

  <form id="purchaseForm" novalidate>
    <fieldset>
      <legend>Create Organization</legend>

<!-- ✅ PHP dynamic summary -->
      <div id="price-summary" class="price-summary">
        <p class="total-price">
          <b><?php echo "$" . number_format($totalPrice, 2); ?></b>
        </p>
        <p class="qty-price">
          Qty <?php echo $totalStudents; ?>, $<?php echo number_format($studentPrice, 2); ?> per license
        </p>
      </div>

      <!-- ✅ Programs list -->
      <?php if (!empty($programList)): ?>
        <ul>
          <?php foreach ($programList as $p): ?>
            <li><?php echo htmlspecialchars($p); ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <div class="form-group">
        <label for="firstName">First Name <span>*</span></label>
        <p class="input-title"><i>This is the first name of the administrator</i></p>
        <input type="text" id="firstName" name="firstName" placeholder="First Name" required>
        <small class="error">First name is required</small>
      </div>

      <div class="form-group">
        <label for="lastName">Last Name <span>*</span></label>
        <p class="input-title"><i>This is the first name of the administrator</i></p>
        <input type="text" id="lastName" name="lastName" placeholder="Last Name" required>
        <small class="error">Last name is required</small>
      </div>

      <div class="form-group full-width">
        <label for="email">Work Email Address <span>*</span></label>
        <p class="input-title"><i>This is the first name of the administrator</i></p>
        <input type="email" id="email" name="email" placeholder="Work Email Address" required>
        <small class="error">Work email address is required</small>
      </div>

      <div class="form-group">
        <label for="state">State <span>*</span></label>
        <select id="state" required></select>
        <small class="error">State is required</small>
      </div>

      <div class="form-group">
        <label for="timezone">Timezone <span>*</span></label>
        <select id="timezone" required></select>
        <small class="error">Timezone is required</small>
      </div>
<div class=" school-info-groups">


      <div class="form-group">
        <label for="zip">ZIP Code <span>*</span></label>
        <input type="text" id="zip" name="zip" placeholder="ZIP Code" required>
        <small class="error">ZIP code is required</small>
      </div>

      <div class="form-group">
        <label for="school">School <span>*</span></label>
        <p id="school-placeholder">first enter a zip code</p>
        <select id="school" name="school" style="display:none;">
          <option value="">other</option>
        </select>
      </div>
       <div class="form-group" >
        <div style="display:none;" id="other-school-group">


        <label for="email">School Name</label>
        <input type="text" id="text" name="text" placeholder="School Name" >
         </div>
      </div>
      </div>
    </fieldset>

    <div class="form-check">
      <input type="checkbox" id="terms" required>
      <div>
        <label for="terms">
          By clicking "Continue to payment" you confirm that you have the authority to make this purchase on behalf of your school.
          You agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.
        </label>
        <small class="error">You must agree before continuing</small>
      </div>
    </div>

    <div class="cnt-btn">
      <button type="submit" class="btn"><b>Continue to payment</b></button>
    </div>
  </form>
</div>

  <script>


// JSON data
const data = {
  states: [
    { code: "AL", name: "Alabama" },
    { code: "AK", name: "Alaska" },
    { code: "AZ", name: "Arizona" },
    { code: "AR", name: "Arkansas" },
    { code: "CA", name: "California" },
    { code: "CO", name: "Colorado" },
    { code: "CT", name: "Connecticut" },
    { code: "DE", name: "Delaware" },
    { code: "DC", name: "District Of Columbia" },
    { code: "FL", name: "Florida" },
    { code: "GA", name: "Georgia" },
    { code: "HI", name: "Hawaii" },
    { code: "ID", name: "Idaho" },
    { code: "IL", name: "Illinois" },
    { code: "IN", name: "Indiana" },
    { code: "IA", name: "Iowa" },
    { code: "KS", name: "Kansas" },
    { code: "KY", name: "Kentucky" },
    { code: "LA", name: "Louisiana" },
    { code: "ME", name: "Maine" },
    { code: "MD", name: "Maryland" },
    { code: "MA", name: "Massachusetts" },
    { code: "MI", name: "Michigan" },
    { code: "MN", name: "Minnesota" },
    { code: "MS", name: "Mississippi" },
    { code: "MO", name: "Missouri" },
    { code: "MT", name: "Montana" },
    { code: "NE", name: "Nebraska" },
    { code: "NV", name: "Nevada" },
    { code: "NH", name: "New Hampshire" },
    { code: "NJ", name: "New Jersey" },
    { code: "NM", name: "New Mexico" },
    { code: "NY", name: "New York" },
    { code: "NC", name: "North Carolina" },
    { code: "ND", name: "North Dakota" },
    { code: "OH", name: "Ohio" },
    { code: "OK", name: "Oklahoma" },
    { code: "OR", name: "Oregon" },
    { code: "PA", name: "Pennsylvania" },
    { code: "RI", name: "Rhode Island" },
    { code: "SC", name: "South Carolina" },
    { code: "SD", name: "South Dakota" },
    { code: "TN", name: "Tennessee" },
    { code: "TX", name: "Texas" },
    { code: "UT", name: "Utah" },
    { code: "VT", name: "Vermont" },
    { code: "VA", name: "Virginia" },
    { code: "WA", name: "Washington" },
    { code: "WV", name: "West Virginia" },
    { code: "WI", name: "Wisconsin" },
    { code: "WY", name: "Wyoming" },
    { code: "PR", name: "Puerto Rico" }
  ],
  timezones: [
    { value: "Pacific/Honolulu", label: "Hawaii" },
    { value: "America/Anchorage", label: "Alaska" },
    { value: "America/Los_Angeles", label: "Pacific" },
    { value: "America/Phoenix", label: "Arizona" },
    { value: "America/Denver", label: "Mountain" },
    { value: "America/Chicago", label: "Central" },
    { value: "America/New_York", label: "Eastern" },
    { value: "UTC", label: "UTC" }
  ]
};
    document.getElementById("purchaseForm").addEventListener("submit", function(e) {
  e.preventDefault();
  let valid = true;

  // সব input আর select check করব
  const inputs = this.querySelectorAll("input[required], select[required]");
  inputs.forEach(input => {
    const errorMsg = input.parentElement.querySelector(".error");

    if (!input.value.trim()) {
      input.classList.add("error-border");
      if (errorMsg) errorMsg.style.display = "block";
      valid = false;
    } else {
      input.classList.remove("error-border");
      if (errorMsg) errorMsg.style.display = "none";
    }


  input.addEventListener("focus", () => {
    // focus হলে error message লুকানো
    const errorMsg = input.parentElement.querySelector(".error");
    if (errorMsg) {
      errorMsg.style.display = "none";
    }
  });

  });



  // Checkbox validation
  const terms = document.getElementById("terms");
  const termsError = terms.parentElement.querySelector(".error");
  if (!terms.checked) {
    termsError.style.display = "block";
    valid = false;
  } else {
    termsError.style.display = "none";
  }

  if (valid) {
    alert("Form submitted successfully!");
    this.reset();
  }
});

// Focusout এ error hide/show
const requiredFields = document.querySelectorAll("input[required], select[required]");




requiredFields.forEach(field => {
  field.addEventListener("blur", function() {
    const errorMsg = this.parentElement.querySelector(".error");
    if (!this.value.trim()) {
      this.classList.add("error-border");
      if (errorMsg){ errorMsg.style.display = "block";}
    } else {
      this.classList.remove("error-border");
      if (errorMsg) errorMsg.style.display = "none";
    }
  });
});




// Populate dropdowns function
function populateDropdown(id, items, valueKey, textKey) {
  const select = document.getElementById(id);
  items.forEach(item => {
    const option = document.createElement("option");
    option.value = item[valueKey];
    option.textContent = item[textKey];
    select.appendChild(option);
  });
}

// Call functions to populate dropdowns
populateDropdown("state", data.states, "code", "name");
populateDropdown("timezone", data.timezones, "value", "label");

// Example: set default values
document.getElementById("state").value = "AL"; // Default California
document.getElementById("timezone").value = "Pacific/Honolulu"; // Default Pacific









// school zipconst
const zipInput = document.getElementById("zip");
const schoolSelect = document.getElementById("school");
const schoolPlaceholder = document.getElementById("school-placeholder");
const otherSchoolGroup = document.getElementById("other-school-group");
let currentZip = null;
let firstLoad = true; // প্রথমবারের জন্য placeholder দেখানোর flag

zipInput.addEventListener("input", function () {
  const zip = this.value.trim();

  if (zip.length === 5 && zip !== currentZip) {
    fetch('school.json')
      .then(response => response.json())
      .then(data => {
        const schools = data.zips[zip];

        if (schools && schools.length) {
          // ZIP মেলে → p লুকাবে, select দেখাবে
          schoolPlaceholder.style.setProperty('display', 'none', 'important');
          schoolSelect.style.setProperty('display', 'block', 'important');
          schoolSelect.innerHTML = '<option value="">other</option>';

          schools.forEach((school, index) => {
            const option = document.createElement("option");
            option.value = school;
            option.textContent = school;
            schoolSelect.insertBefore(option, schoolSelect.lastElementChild);

            if (index === 0) option.selected = true;
          });

          currentZip = zip;
          firstLoad = false; // একবার ZIP লোড হয়ে গেল
        }
      })
      .catch(err => console.error(err));
  } else if (firstLoad) {
    // প্রথমবারের জন্য ZIP খালি বা মেলেনি
    schoolPlaceholder.style.setProperty('display', 'block', 'important');
    schoolSelect.style.setProperty('display', 'none', 'important');
  }



});
schoolSelect.addEventListener("change", function () {
  if ( schoolSelect.value === "") {
    otherSchoolGroup.style.display = "block";
      console.log(schoolSelect.value);
  } else {
    otherSchoolGroup.style.display = "none";
      console.log(schoolSelect.value);

  }

});

  </script>
</body>
</html>














