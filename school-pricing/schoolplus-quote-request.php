<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>schoolplus-quote-request</title>


<link rel="stylesheet" href="./assets/schoolplus-quote-request.css">
</head>
<body>
<?php include './assets/header.php'; ?>
<div class="container">
<header>
  <div class="logo">
    <img src="./assets/img/logo.webp" width="100%" height="100%"  alt="SchoolPlus Logo">
  </div>
</header>
  <h1 class="Quote-Request"> Quote Request</h1>
  <p class="Accounts-Des">Enterprise Accounts are available for an entire school or district and include:</p>
  <ul class="  schoolpushlus-features">
    <li>Unlimited Teacher, Administrator, and Student Accounts   </li>
    <li>Administrator Dashboards and Reports  </li>
    <li>Dedicated Customer Success Manager to Support Rostering, Implementation, and Training throughout the Subscription </li>
  </ul>


<div class="user-parsonal-info">
  <div class="titles">
    Your Contact Information

  </div>
 <form action="submit_quote_request.php" method="post" id="quoteForm" class="quote-request-form">
<div class=" name-to-job" >


  <!-- Contact Info -->
  <div class="names">
    <label for="fname">First Name<span>*</span></label>
    <input type="text" id="fname" name="Fname" required>
    <span class="fname-error">Please complete this required field.</span>
  </div>

  <div class="names">
    <label for="lname">Last Name<span>*</span></label>
    <input type="text" id="lname" name="Lname" required>
      <span class="lname-error">Please complete this required field.</span>
  </div>

  <div class="email">
    <label for="email">Work Email<span>*</span></label>
    <input type="email" id="email" name="Email" required>
      <span class="email-error">Please complete this required field.</span>
  </div>

  <div class="phone">
    <label for="phone">Phone Number<span>*</span></label>
    <input type="text" id="phone" name="Phone" required>
      <span class="phone-error">Please complete this required field.</span>
  </div>

  <!-- Dropdowns -->
  <div class="role">
    <label for="primaryRole">Primary Role<span>*</span></label>
    <select id="primaryRole" name="PrimaryRole" required>
      <option value="">Please Select</option>
    </select>
      <span class="primaryRole-error">Please complete this required field.</span>
  </div>

  <div class="job-title">
    <label for="jobTitle">Job Title<span>*</span></label>
    <input type="text" id="jobTitle" name="JobTitle" required>
      <span class="job-error">Please complete this required field.</span>
  </div>
</div>

  <p class="titles">Your School / District Information</p>
  <div class="state-country-organization" >

  <div class="state">
    <label for="state">State<span>*</span></label>
    <select id="state" name="State" required>
      <option value="">Please Select</option>
    </select>
      <span class="state-error">Please complete this required field.</span>
  </div>

<div class="meeting-area" >
  <a href="https://meetings.hubspot.com/lisa-padilla1" target="_blank" class="meeting-link" rel="noopener noreferrer">Click here to book a meeting with your Account Executive, Lisa Padilla!</a>
  <p class="meeting-des"></p>
  <a href="https://meetings.hubspot.com/lisa-padilla1" target="_blank" class="meeting-link-to" rel="noopener noreferrer">Click here to book a meeting with your Account Executive, Lisa Padilla!</a>
  <p class="meeting-des-two"></p>
</div>

  <div class="country">
    <label for="country">Country<span>*</span></label>
    <select id="country" name="Country" required>
      <option value="" disabled selected>Please Select</option>
    </select>
      <span class="fname-error">Please complete this required field.</span>
  </div>
  <div class="organization">
    <label for="organizationType">Organization Type<span>*</span></label>
    <select id="organizationType" name="OrganizationType" required>
      <option value="">Please Select</option>
    </select>
      <span class="organization-error">Please complete this required field.</span>
  </div>


 <div class="District">
    <label for="District">School District<span>*</span></label>
    <select id="District" name="State" required>
      <option value="">Please Select a State</option>
    </select>
      <span class="District-error">Please complete this required field.</span>
  </div>


  <div class="school">
    <label for="schoolOrganization">School or Organization name<span>*</span></label>
    <input type="text" id="schoolOrganization" name="schoolOrganization" required>
      <span class="schoolOrganization-error">Please complete this required field.</span>
  </div>

    <div class="Address">
    <label for="Street-Address">Street Address <span>*</span></label>
    <input type="text" id="Address" name="Address" required>
      <span class="Address-error">Please complete this required field.</span>
  </div>

    <div class="City">
    <label for="City">City <span>*</span></label>
    <input type="text" id="City" name="City" required>
      <span class="City-error">Please complete this required field.</span>
  </div>
    <div class="Postal">
    <label for="Postal"> Postal Code <span>*</span></label>
    <input type="text" id="Code" name="Code" required>
      <span class="Code-error">Please complete this required field.</span>
  </div>

  <div class="Website">
    <label for="WebsiteWebsite">Website URL <span>*</span></label>
    <input type="text" id="Website" name="Website" required>
      <span class="Website-error">Please complete this required field.</span>
  </div>

<br>

  <p class="titles">Your Implementation</p>
  <div class="license">
    <label for="type-license">Type of License <span>*</span></label>
    <select id="typeLicense" name="typeLicense" required>
      <option value="">Please Select</option>
    </select>
      <span class="typeLicense-error">Please complete this required field.</span>
  </div>

  </div>
  <!-- Subjects -->
<div class="subjects-grades">
    <div class="subjects">
    <label class="footer-s-g-title"><b>Subjects<span>*</span></b> </label>
    <div id="subjectsContainer"></div>
      <span class="subjects-error">Please complete this required field.</span>
  </div>

  <div class="student-grade">
    <label class="footer-s-g-title"><b>Student Grade Level(s)<span>*</span></b> </label>
    <div id="gradeContainer"></div>
      <span class="grade-error">Please complete this required field.</span>
  </div>
</div>
<div style=" display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0 52px;
    margin-top: 20px;" class="number-of-licenses-to-purchase">

  <div>
    <label for="studentLicenses">Number of Student Licenses<span>*</span></label>
    <input type="number" id="studentLicenses" name="StudentLicenses" required>
      <span class="studentLicenses-error">Please complete this required field.</span>
  </div>

  <div class="Licenses-Teacher">
    <label for="teacherLicenses" >Number of Teacher Licenses<span>*</span></label>
    <input type="number" id="teacherLicenses" name="TeacherLicenses" required>
  <span class="teacherLicenses-error">Please complete this required field.</span>
  </div>

</div>

<div class="message">
  <label for="message">Any additional background information/questions?</label><br>
  <textarea id="message" name="Message" rows="4" cols="50"></textarea>

</div>
  <input type="submit" class="Request-submit" value="Submit">


</form>
</div>


</div>


<script>
  const jsonData = {
    "formData": {
          "Country": [
            "Afghanistan",
            "Aland Islands",
            "Albania",
            "Algeria",
            "Andorra",
            "Angola",
            "Anguilla",
            "Antarctica",
            "Antigua and Barbuda",
            "Argentina",
            "Armenia",
            "Aruba",
            "Australia",
            "Austria",
            "Azerbaijan",
            "Bahamas",
            "Bahrain",
            "Bangladesh",
            "Barbados",
            "Belarus",
            "Belgium",
            "Belize",
            "Benin",
            "Bermuda",
            "Bhutan",
            "Bolivia, Plurinational State of",
            "Bonaire, Sint Eustatius and Saba",
            "Bosnia and Herzegovina",
            "Botswana",
            "Bouvet Island",
            "Brazil",
            "British Indian Ocean Territory",
            "Brunei Darussalam",
            "Bulgaria",
            "Burkina Faso",
            "Burundi",
            "Cambodia",
            "Cameroon",
            "Canada",
            "Cape Verde",
            "Cayman Islands",
            "Central African Republic",
            "Chad",
            "Chile",
            "China",
            "Chinese Taipei",
            "Christmas Island",
            "Cocos (Keeling) Islands",
            "Colombia",
            "Comoros",
            "Congo",
            "Congo, the Democratic Republic of the",
            "Cook Islands",
            "Costa Rica",
            "Cote d'Ivoire",
            "Croatia",
            "Cuba",
            "Curaçao",
            "Cyprus",
            "Czech Republic",
            "Denmark",
            "Djibouti",
            "Dominica",
            "Dominican Republic",
            "Ecuador",
            "Egypt",
            "El Salvador",
            "Equatorial Guinea",
            "Eritrea",
            "Estonia",
            "Ethiopia",
            "Falkland Islands (Malvinas)",
            "Faroe Islands",
            "Fiji",
            "Finland",
            "France",
            "French Guiana",
            "French Polynesia",
            "French Southern Territories",
            "Gabon",
            "Gambia",
            "Georgia",
            "Germany",
            "Ghana",
            "Gibraltar",
            "Greece",
            "Greenland",
            "Grenada",
            "Guadeloupe",
            "Guatemala",
            "Guernsey",
            "Guinea",
            "Guinea-Bissau",
            "Guyana",
            "Haiti",
            "Heard Island and McDonald Islands",
            "Holy See (Vatican City State)",
            "Honduras",
            "Hungary",
            "Iceland",
            "India",
            "Indonesia",
            "Iran, Islamic Republic of",
            "Iraq",
            "Ireland",
            "Isle of Man",
            "Israel",
            "Italy",
            "Jamaica",
            "Japan",
            "Jersey",
            "Jordan",
            "Kazakhstan",
            "Kenya",
            "Kiribati",
            "Korea, Democratic People's Republic of",
            "Korea, Republic of",
            "Kuwait",
            "Kyrgyzstan",
            "Lao People's Democratic Republic",
            "Latvia",
            "Lebanon",
            "Lesotho",
            "Liberia",
            "Libyan Arab Jamahiriya",
            "Liechtenstein",
            "Lithuania",
            "Luxembourg",
            "Macao",
            "Macedonia, the former Yugoslav Republic of",
            "Madagascar",
            "Malawi",
            "Malaysia",
            "Maldives",
            "Mali",
            "Malta",
            "Martinique",
            "Mauritania",
            "Mauritius",
            "Mayotte",
            "Mexico",
            "Moldova, Republic of",
            "Monaco",
            "Mongolia",
            "Montenegro",
            "Montserrat",
            "Morocco",
            "Mozambique",
            "Myanmar",
            "Namibia",
            "Nauru",
            "Nepal",
            "Netherlands",
            "New Caledonia",
            "New Zealand",
            "Nicaragua",
            "Niger",
            "Nigeria",
            "Niue",
            "Norfolk Island",
            "Norway",
            "Oman",
            "Pakistan",
            "Palestinian Territory, Occupied",
            "Panama",
            "Papua New Guinea",
            "Paraguay",
            "Peru",
            "Philippines",
            "Pitcairn",
            "Poland",
            "Portugal",
            "Qatar",
            "Reunion",
            "Romania",
            "Russian Federation",
            "Rwanda",
            "Saint Barthélemy",
            "Saint Helena, Ascension and Tristan da Cunha",
            "Saint Kitts and Nevis",
            "Saint Lucia",
            "Saint Martin (French part)",
            "Saint Pierre and Miquelon",
            "Saint Vincent and the Grenadines",
            "Samoa",
            "San Marino",
            "Sao Tome and Principe",
            "Saudi Arabia",
            "Senegal",
            "Serbia",
            "Seychelles",
            "Sierra Leone",
            "Singapore",
            "Sint Maarten (Dutch part)",
            "Slovakia",
            "Slovenia",
            "Solomon Islands",
            "Somalia",
            "South Africa",
            "South Georgia and the South Sandwich Islands",
            "South Sudan",
            "Spain",
            "Sri Lanka",
            "Sudan",
            "Suriname",
            "Svalbard and Jan Mayen",
            "Swaziland",
            "Sweden",
            "Switzerland",
            "Syrian Arab Republic",
            "Tajikistan",
            "Tanzania, United Republic of",
            "Thailand",
            "Timor-Leste",
            "Togo",
            "Tokelau",
            "Tonga",
            "Trinidad and Tobago",
            "Tunisia",
            "Turkey",
            "Turkmenistan",
            "Turks and Caicos Islands",
            "Tuvalu",
            "Uganda",
            "Ukraine",
            "United Arab Emirates",
            "United Kingdom",
            "United States",
            "Uruguay",
            "Uzbekistan",
            "Vanuatu",
            "Venezuela, Bolivarian Republic of",
            "Viet Nam",
            "Virgin Islands, British",
            "Wallis and Futuna",
            "Western Sahara",
            "Yemen",
            "Zambia",
            "Zimbabwe"
          ],
      "State": [
                  "International (Non U.S. State)", "Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware",
        "Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky",
        "Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi",
        "Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico",
        "New York","North Carolina","North Dakota","Ohio","Oklahoma","Oregon","Pennsylvania",
        "Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont",
        "Virginia","Washington","West Virginia","Wisconsin","Wyoming","District of Columbia","Puerto Rico"
      ],
      "PrimaryRole":[
                      "Teacher",
                      "Reading / Literacy Coach",
                      "Math Coach",
                      "Principal / Asst Principal",
                      "Daycare / Head Start Director",
                      "Early Childhood Ed Director",
                      "Elementary Education Director",
                      "Math Director / Coordinator",
                      "Reading / ELA Director / Coordinator",
                      "Fed Program Director / Title 1 Coordinator",
                      "Special Ed / RTI Dir / Coord",
                      "Curriculum / Instructional Director / Specialist",
                      "Teaching and Learning Director",
                      "Digital / Instructional Technology Dir/Coord",
                      "Summer School Director",
                      "Chief Information/Technology Officer",
                      "Chief Academic Officer",
                      "Superintendent / Asst Superintendent",
                      "School Board Member",
                      "Other",
                      "Before/After School Dir/Coord",
                      "Admin Assistant"
],
      "OrganizationType": [
        "District","US Public School","Private School","Day Care Center","International Public School","Other"
      ],
      "Subjects": [
        "Math","Reading","Spanish Literacy"
      ],

      "Grade": [
       "Pre-K / TK","Kindergarten","1st Grade","2nd Grade","3rd Grade","4th Grade","5th Grade"
      ],

 "license_type": [
    "District-wide",
    "School-wide",
    "Grade Level",
    "Classroom",
    "Special Program (e.g., Intervention, After-school)"
  ],
   "District":[
  {"value": "", "text": "Please Select"},
  {"value": "0014x00000KQgEqAAL", "text": "Alabaster City School District"},
  {"value": "0014x00000KQg1SAAT", "text": "Albertville City School District"},
  {"value": "0014x00000KQW5DAAX", "text": "Alexander City School District"},
  {"value": "0014x00000KQW3xAAH", "text": "Andalusia City School District"},
  {"value": "0014x00000KQW3aAAH", "text": "Anniston City School District"},
  {"value": "0014x00000KQW4rAAH", "text": "Arab City School District"},
  {"value": "0014x00000KQW4gAAH", "text": "Athens City Schools"},
  {"value": "0014x00000KQW4EAAX", "text": "Attalla City School District"},
  {"value": "0014x00000KQW4dAAH", "text": "Auburn City School District"},
  {"value": "0014x00000KQW3RAAX", "text": "Autauga County School District"},
  {"value": "0014x00000KQW3SAAX", "text": "Baldwin County Public Schools"},
  {"value": "0014x00000KQW3TAAX", "text": "Barbour County School District"},
  {"value": "0014x00000KQW4TAAX", "text": "Bessemer City School District"},
  {"value": "0014x00000KQW3VAAX", "text": "Bibb County School District"},
  {"value": "0014x00000KQW4UAAX", "text": "Birmingham City School District"},
  {"value": "0014x00000KQW3WAAX", "text": "Blount County School District"},
  {"value": "0014x00000KQg1xAAD", "text": "Boaz City Schools"},
  {"value": "0014x00000KQW4CAAX", "text": "Brewton City School District"},
  {"value": "0014x00000KQW3YAAX", "text": "Bullock County School District"},
  {"value": "0014x00000KQW3ZAAX", "text": "Butler County School District"},
  {"value": "0014x00000KQW3bAAH", "text": "Calhoun County School District"},
  {"value": "0014x00000KQW3fAAH", "text": "Chambers County School District"},
  {"value": "0014x00000KQW3hAAH", "text": "Cherokee County School District"},
  {"value": "0014x00000KQgEmAAL", "text": "Chickasaw City School District"},
  {"value": "0014x00000KQW3iAAH", "text": "Chilton County School District"},
  {"value": "0014x00000KQW3jAAH", "text": "Choctaw County School District"},
  {"value": "0014x00000KQW3kAAH", "text": "Clarke County School District"},
  {"value": "0014x00000KQW3mAAH", "text": "Clay County School District"},
  {"value": "0014x00000KQW3nAAH", "text": "Cleburne County School District"},
  {"value": "0014x00000KQW3oAAH", "text": "Coffee County School District"},
  {"value": "0014x00000KQW3rAAH", "text": "Colbert County School District"},
  {"value": "0014x00000KQW3vAAH", "text": "Conecuh County School District"},
  {"value": "0014x00000KQW3wAAH", "text": "Coosa County School District"},
  {"value": "0014x00000KQW3yAAH", "text": "Covington County School District"},
  {"value": "0014x00000KQW40AAH", "text": "Crenshaw County Public School District"},
  {"value": "0014x00000KQW41AAH", "text": "Cullman City School District"},
  {"value": "0014x00000KQW42AAH", "text": "Cullman County School District"},
  {"value": "0014x00000KQW43AAH", "text": "Dale County School District"},
  {"value": "0014x00000KQW44AAH", "text": "Daleville City School District"},
  {"value": "0014x00000KQW46AAH", "text": "Dallas County School District"},
  {"value": "0014x00000KQW4xAAH", "text": "Decatur City School District"},
  {"value": "0014x00000KQW48AAH", "text": "DeKalb County School District"},
  {"value": "0014x00000KQW4mAAH", "text": "Demopolis City Schools"},
  {"value": "0014x00000KQW4PAAX", "text": "Dothan City School District"},
  {"value": "0014x00000KQW3pAAH", "text": "Elba City School District 131"},
  {"value": "0014x00000KQW4AAAX", "text": "Elmore County School District"},
  {"value": "0014x00000KQW3qAAH", "text": "Enterprise City School District"},
  {"value": "0014x00000KQW4DAAX", "text": "Escambia County School District"},
  {"value": "0014x00000KQW4FAAX", "text": "Etowah County Schools"},
  {"value": "0014x00000KQW3UAAX", "text": "Eufaula City School District"},
  {"value": "0014x00000KQW4VAAX", "text": "Fairfield City Schools"},
  {"value": "0014x00000KQW4HAAX", "text": "Fayette County School District"},
  {"value": "0014x00000KQW4aAAH", "text": "Florence City School District"},
  {"value": "0014x00000KQb5ZAAT", "text": "Fort Novosel Dependent Schools"},
  {"value": "0014x00000KQW49AAH", "text": "Fort Payne City School District"},
  {"value": "0014x00000KQW4IAAX", "text": "Franklin County School District"},
  {"value": "0014x00000KQW4GAAX", "text": "Gadsden City School District"},
  {"value": "0014x00000KQW4KAAX", "text": "Geneva City School District"},
  {"value": "0014x00000KQW4LAAX", "text": "Geneva County School District"},
  {"value": "0014x00000KQW4MAAX", "text": "Greene County School District"},
  {"value": "0014x00000KQgFCAA1", "text": "Gulf Shores City Schools"},
  {"value": "0014x00000KQW4sAAH", "text": "Guntersville City School District"},
  {"value": "0014x00000KQW4NAAX", "text": "Hale County School District"},
  {"value": "0014x00000KQW5LAAX", "text": "Haleyville City School District"},
  {"value": "0014x00000KQfzKAAT", "text": "Hartselle City School District"},
  {"value": "0014x00000KQW4OAAX", "text": "Henry County School District"},
  {"value": "0014x00000KQgFPAA1", "text": "Homewood City School District"},
  {"value": "0014x00000KQb2zAAD", "text": "Hoover City School District"},
  {"value": "0014x00000KQW4QAAX", "text": "Houston County School District"},
  {"value": "0014x00000KQW4kAAH", "text": "Huntsville City School District"}
]


    }
  };












  document.addEventListener("DOMContentLoaded", () => {
    const data = jsonData.formData;

    // Populate helper function
    function populateSelect(id, values) {
      const select = document.getElementById(id);
      values.forEach(v => {
        const opt = document.createElement("option");
        opt.value = v;
        opt.textContent = v;
        select.appendChild(opt);
      });
    }

    populateSelect("country", data.Country);
    populateSelect("state", data.State);
    populateSelect("primaryRole", data.PrimaryRole);
    populateSelect("organizationType", data.OrganizationType);
    populateSelect("typeLicense", data.license_type);
    populateSelect("District", data.District.map(d => d.text));

    // Subjects as checkboxes
    const subjContainer = document.getElementById("subjectsContainer");
    const gradeContainer = document.getElementById("gradeContainer");
    data.Subjects.forEach(sub => {
      const div = document.createElement("div");
      div.innerHTML = `<label><input type="checkbox" name="Subjects[]" value="${sub}"> ${sub}</label>`;
      subjContainer.appendChild(div);
    });



  data.Grade.forEach(grade => {
      const div = document.createElement("div");
      div.innerHTML = `<label><input type="checkbox" name="grade[]" value="${grade}"> ${grade}</label>`;
      gradeContainer.appendChild(div);
    });


  });














  // Helper function
  function attachValidation(inputId, errorClass) {
    const inputField = document.getElementById(inputId);
    const errorMsg = document.querySelector("." + errorClass);

    if (!inputField || !errorMsg) return;

    // Focus হলে error hide হবে
    inputField.addEventListener("focus", function () {
      errorMsg.style.display = "none";
      inputField.style.setProperty('border-bottom', '2px solid #ccc', 'important');
    });

    // Focus out হলে
    inputField.addEventListener("blur", function () {
      if (inputField.value.trim() === "") {
        errorMsg.style.display = "inline";
   inputField.style.setProperty('border-bottom', '2px solid red', 'important');



      } else {
        errorMsg.style.display = "none";
        inputField.style.setProperty('border-bottom', '2px solid #ccc', 'important');
      }
    });
  }

  // সব ফিল্ডের জন্য আলাদা আলাদা কল
  attachValidation("fname", "fname-error");
  attachValidation("lname", "lname-error");
  attachValidation("email", "email-error");
  attachValidation("phone", "phone-error");
  attachValidation("primaryRole", "primaryRole-error");
  attachValidation("jobTitle", "job-error");
  attachValidation("state", "state-error");
  attachValidation("organizationType", "organization-error");

  attachValidation("schoolOrganization", "schoolOrganization-error");
  attachValidation("District", "District-error");
  attachValidation("Address", "Address-error");
  attachValidation("City", "City-error");
  attachValidation("Code", "Code-error");
  attachValidation("Website", "Website-error");
  attachValidation("country", "fname-error");
  attachValidation("typeLicense", "typeLicense-error");
  attachValidation("studentLicenses", "studentLicenses-error");
  attachValidation("teacherLicenses", "teacherLicenses-error");
  attachValidation("subjectsContainer", "subjects-error");
  attachValidation("gradeContainer", "grade-error");






  const stateSelect = document.getElementById("state");
  const countryDiv = document.querySelector(".country");
const meetingLink = document.querySelector(".meeting-link");
const meetingLinkTo = document.querySelector('.meeting-link-to');
const meetingDesc = document.querySelector('.meeting-des');
const meetingDescTwo = document.querySelector('.meeting-des-two');
const meetingArea = document.querySelector('.meeting-area');
  // শুরুতে লুকানো থাকবে
  countryDiv.style.display = "none";
meetingLink.style.display = "none";
meetingLinkTo.style.display = "none";
meetingDesc.style.display = "none";
meetingDescTwo.style.display = "none";
meetingArea.style.display = "none";
  stateSelect.addEventListener("change", function () {
    if (stateSelect.value === "International (Non U.S. State)") {
      countryDiv.style.display = "block"; // দেখাবে
    } else {
      countryDiv.style.display = "none"; // লুকাবে
    }
















meetingArea.style.display = "block";
meetingLink.style.display = "block";
// State select
if (stateSelect.value === "International (Non U.S. State)") {
  meetingLink.href = "https://meetings.hubspot.com/lisa-padilla1";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Lisa Padilla!';
}
else if (stateSelect.value === "Alabama") {
  meetingLink.href = "https://schools.ageoflearning.com/meetings/susan-provost1";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Susan Provost!';

}
else if (stateSelect.value === "Alaska") {
  meetingLink.href = "https://meetings.hubspot.com/lisa-padilla1";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Lisa Padilla!';
}
else if (stateSelect.value === "Arizona") {
  meetingLink.href = "https://meetings.hubspot.com/lisa-padilla1";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Lisa Padilla!';
}
else if (stateSelect.value === "Arkansas") {
  meetingLink.href = "https://meetings.hubspot.com/jen-evans";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Jen Evans!';
}
else if (stateSelect.value === "California") {
  meetingLink.href = "https://meetings.hubspot.com/lisa-padilla1";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Lisa Padilla!';
}
else if (stateSelect.value === "Colorado") {
  meetingLink.href = "https://meetings.hubspot.com/tyler-bosserman/tyler-personal-meeting-link";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Tyler Bosserman!';
}
else if (stateSelect.value === "Connecticut") {
  meetingLink.href = "https://meetings.hubspot.com/dana-grau";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Dana Grau!';
}
else if (stateSelect.value === "Delaware") {
  meetingLink.href = "https://meetings.hubspot.com/dana-grau";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Dana Grau!';
}
else if (stateSelect.value === "Florida") {
  meetingLink.href = "https://schools.ageoflearning.com/meetings/susan-provost1";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Susan Provost!';
}
else if (stateSelect.value === "Georgia") {
  meetingLink.href = "https://schools.ageoflearning.com/meetings/susan-provost1";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Susan Provost!';
}
else if (stateSelect.value === "Hawaii") {
  meetingLink.href = "https://meetings.hubspot.com/isaac-trevino1";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Isaac Trevino!';
}
else if (stateSelect.value === "Idaho") {
    meetingLink.href = "https://meetings.hubspot.com/lisa-padilla1";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Lisa Padilla!';
}
else if (stateSelect.value === "Illinois") {
  meetingLink.href = "https://meetings.hubspot.com/dana-grau";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Dana Grau!';
}
else if (stateSelect.value === "Indiana") {
   meetingLink.href = "https://meetings.hubspot.com/dana-grau";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Dana Grau!';
}
else if (stateSelect.value === "Iowa") {
  meetingLink.href = "https://meetings.hubspot.com/jen-evans";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Jen Evans!';
}
else if (stateSelect.value === "Kansas") {
  meetingLink.href = "https://meetings.hubspot.com/tyler-bosserman/tyler-personal-meeting-link";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Tyler Bosserman!';
}
else if (stateSelect.value === "Kentucky") {
  meetingLink.href = "https://meetings.hubspot.com/patti-gill";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Patti Gill!';
}
else if (stateSelect.value === "Louisiana") {
  meetingLink.href = "https://schools.ageoflearning.com/meetings/susan-provost1";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Susan Provost!';
}




else if (stateSelect.value === "Maine") {
  meetingLink.href = "https://meetings.hubspot.com/dana-grau";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Dana Grau!';
}
else if (stateSelect.value === "Maryland") {
  meetingLink.href = "https://meetings.hubspot.com/jen-evans";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Jen Evans!';
}
else if (stateSelect.value === "Massachusetts") {
  meetingLink.href = "https://meetings.hubspot.com/dana-grau";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Dana Grau!';
}
else if (stateSelect.value === "Michigan") {
  meetingLink.href = "https://meetings.hubspot.com/dana-grau";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Dana Grau!';
}
else if (stateSelect.value === "Minnesota") {
  meetingLink.href = "https://meetings.hubspot.com/jen-Evans";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, jen Evans!';
}
else if (stateSelect.value === "Mississippi") {
  meetingLink.href = "https://schools.ageoflearning.com/meetings/susan-provost1";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Susan Provost!';
}
else if (stateSelect.value === "Missouri") {
  meetingLink.href = "https://meetings.hubspot.com/jen-evans";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Jen Evans!';
}
else if (stateSelect.value === "Montana") {
meetingLink.style.display = "none";
}
else if (stateSelect.value === "Nebraska") {
meetingLink.style.display = "none";
}
else if (stateSelect.value === "Nevada") {
  meetingLink.href = "https://meetings.hubspot.com/lisa-padilla1";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Lisa Padilla!';
}
else if (stateSelect.value === "New Hampshire") {
  meetingLink.href = "https://meetings.hubspot.com/dana-grau";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Dana Grau!';
}
else if (stateSelect.value === "New Jersey") {
  meetingLink.href = "https://meetings.hubspot.com/dana-grau";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Dana Grau!';
}
else if (stateSelect.value === "New Mexico") {
  meetingLink.href = "https://meetings.hubspot.com/isaac-trevino1";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Isaac Trevino!';
}
else if (stateSelect.value === "New York") {//////////////////////////////////////////////
  meetingLink.href = "https://meetings.hubspot.com/dana-grau";
  meetingLink.innerHTML = 'Click here to book a meeting with Dana Grau';
  meetingLinkTo.style.display = "block";
    meetingLinkTo .href = "https://meetings.hubspot.com/courtney-johnson3";
  meetingLinkTo .innerHTML = 'Click here to book a meeting with Dr. Courtney Johnson';
  meetingDesc.style.display = "none";
  meetingDescTwo.style.display = "block";
  meetingDescTwo.innerHTML = '(Bronx, Queens, Richmond, Westchester, Dutchess, Suffolk, Nassau, Putnam or Rockland County)';



}
else if (stateSelect.value === "North Carolina") {
  meetingLink.href = "https://schools.ageoflearning.com/meetings/susan-provost1";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Susan Provost!';
}
else if (stateSelect.value === "North Dakota") {
  meetingLink.href = "https://meetings.hubspot.com/jen-evans";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Jen Evans!';
}
else if (stateSelect.value === "Ohio") {
  meetingLink.href = "https://meetings.hubspot.com/patti-gill";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Patti Gill!';

}
else if (stateSelect.value === "Oklahoma") {
 meetingLink.href = "https://meetings.hubspot.com/tyler-bosserman/tyler-personal-meeting-link";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Tyler Bosserman!';

}
else if (stateSelect.value === "Oregon") {
  meetingLink.href = "https://meetings.hubspot.com/lisa-padilla1";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Lisa Padilla!';
}
else if (stateSelect.value === "Pennsylvania") {
  meetingLink.href = "https://meetings.hubspot.com/patti-gill";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Patti Gill!';

}
else if (stateSelect.value === "Rhode Island") {
  meetingLink.href = "https://meetings.hubspot.com/dana-grau";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Dana Grau!';
}
else if (stateSelect.value === "South Carolina") {
  meetingLink.href = "https://meetings.hubspot.com/jen-evans";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Jen Evans!';

}
else if (stateSelect.value === "South Dakota") {
  meetingLink.href = "https://meetings.hubspot.com/jen-evans";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Jen Evans!';
}
else if (stateSelect.value === "Tennessee") {
  meetingLink.href = "https://meetings.hubspot.com/jen-evans";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Jen Evans!';

}
else if (stateSelect.value === "Texas") {/////////////////////////////////////////////////////////
  meetingLink.href = "https://meetings.hubspot.com/isaac-trevino1";
  meetingLink.innerHTML = 'Click here to book a meeting with Isaac Trevino';
  meetingLinkTo.style.display = "block";
    meetingLinkTo .href = "https://schools.ageoflearning.com/meetings/tyler-bosserman/tyler-personal-meeting-link";
  meetingLinkTo .innerHTML = 'Click here to book a meeting with Tyler Bosserman';
  meetingDesc.style.display = "block";
  meetingDesc.innerHTML = '(ESC Regions 1-6, 9, 15, 18, 19)';
  meetingDescTwo.style.display = "none";

}
else if (stateSelect.value === "Utah") {
 meetingLink.href = "https://meetings.hubspot.com/tyler-bosserman/tyler-personal-meeting-link";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Tyler Bosserman!';

}
else if (stateSelect.value === "Vermont") {
  meetingLink.href = "https://meetings.hubspot.com/dana-grau";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Dana Grau!';
}
else if (stateSelect.value === "Virginia") {
  meetingLink.href = "https://meetings.hubspot.com/jen-evans";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Jen Evans!';

}
else if (stateSelect.value === "Washington") {
  meetingLink.href = "https://meetings.hubspot.com/lisa-padilla1";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Lisa Padilla!';
}
else if (stateSelect.value === "West Virginia") {
   meetingLink.href = "https://meetings.hubspot.com/patti-gill";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Patti Gill!';
}
else if (stateSelect.value === "Wisconsin") {
  meetingLink.href = "https://meetings.hubspot.com/dana-grau";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Dana Grau!';

}
else if (stateSelect.value === "Wyoming") {
meetingLink.style.display = "none";
}
else if (stateSelect.value === "District of Columbia") {
 meetingLink.href = "https://meetings.hubspot.com/jen-evans";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Jen Evans!';

}
else if (stateSelect.value === "Puerto Rico") {
   meetingLink.href = "https://meetings.hubspot.com/tyler-bosserman/tyler-personal-meeting-link";
  meetingLink.innerHTML = 'Click here to book a meeting with your Account Executive, Tyler Bosserman!';
}


















  });


  const organizationType = document.getElementById("organizationType");
  const District = document.querySelector(".District");
  District.style.display = "none";

  const Address = document.querySelector(".Address");
  Address.style.display = "none";
  const school = document.querySelector(".school");
  school.style.display = "none";
   const City = document.querySelector(".City");
  City.style.display = "none";
  const Postal = document.querySelector(".Postal");
  Postal.style.display = "none";
  const Website = document.querySelector(".Website");
  Website.style.display = "none";


// District select
organizationType.addEventListener("change", function () {
  // প্রথমে সবগুলোকে hide করে দাও
  District.style.display = "none";
  school.style.display = "none";
  Address.style.display = "none";
  City.style.display = "none";
  Postal.style.display = "none";
  Website.style.display = "none";

  // এখন value অনুযায়ী show করো
  if (organizationType.value === "District") {
    District.style.display = "block";

  } else if (organizationType.value === "US Public School") {
    District.style.display = "block";
    school.style.display = "block";

  } else if (
    organizationType.value === "Private School" ||
    organizationType.value === "Day Care Center" ||
    organizationType.value === "International Public School" ||
    organizationType.value === "Other"
  ) {
    Address.style.display = "block";
    school.style.display = "block";
    City.style.display = "block";
    Postal.style.display = "block";
    Website.style.display = "block";
  }
});










// meeting  link


</script>
</body>
</html>