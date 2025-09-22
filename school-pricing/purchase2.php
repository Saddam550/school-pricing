<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Classroom Licenses</title>
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/style.css">

<style>
.active { color: blue; }
.btn-dis { color: gray; }
.continue-btn.btn-dis { background: #ccc; cursor: not-allowed; }
.continue-btn.active { background: blue; color: white; }
i.student-error {
    width: 185px;
    display: block;
    font-size: 11px;
    color: #ff0000bd;
}

</style>

</head>
<body>
<?php include './assets/header.php'; ?>

 <div class="container">
    <!-- //top section -->
<div class="top-section">
        <header>
        <h1>Purchase Classroom Licenses</h1>
    </header>
    <div class="title-bar">
        Receive instant access to adaptive programs that students love.

    </div>
    <div class="description">
Interested in <i>My Math Academy, My Reading Academy, or My Reading Academy Español</i> for your entire school or district? <a href="schoolplus-quote-request.php" class="rqu-btn" target="_blank" rel="noopener noreferrer">Request a quote</a>
    </div>
</div>

<!-- Select your programs -->
<div class="program-selection">
    <h2>1.  Select Your Programs</h2>

   <div class="program-options">
         <div class="program-option">

            <label for="math">
              <img src="./assets/img/my_math_academy.png" alt="" class="main-img">
           <div>
            <img src="./assets/img/my-math.svg" alt="" class="math-img">
            <img src="./assets/img/stacked_white.svg" alt="" class="math-img-two">
            <input type="checkbox" id="math" name="programs[]" value="My Math Academy">
<span>Pre-K through 5th grade</span></div>
            </label>
        </div>
        <div class="program-option">
                <label for="reading">
                    <img src="./assets/img/my_reading_academy.png" alt="" class="main-img ">
                  <div>
                     <img src="./assets/img/my-reading.svg" alt="" class="reading-img">
                     <img src="./assets/img/re-white (1).svg" alt="" class="reading-img-two">
        <input type="checkbox" id="reading" name="programs[]" value="My Reading Academy">
            <span>Pre-K through 5th grade</span></div>
        </label>
        </div>
        <div class="program-option">
              <label for="spanish">
                    <img src="./assets/img/my_reading_academy_es.png" alt="" class="main-img espanol">
                    <div>
                        <img src="./assets/img/espanol.svg" alt="" class="espanol-img">
                        <img src="./assets/img/my_reading_academy_e.svg" alt="" class="espanol-img-two">
          <input type="checkbox" id="spanish" name="programs[]" value="My Reading Academy Español">
            <span>Pre-K through 2nd grade</span>
                    </div>
          </label>
        </div>
   </div>
    </div>







<!-- Select number of students -->

<div class="student-selection">
    <h2>2.  Select Number of Students</h2>

<div class="student-content">

<div class="counter left-side">
    <button class="decrement"><i class="fa-solid fa-angle-left"></i>    </button>

  <div>  <input type="text" id="studentCount" name="studentCount" value="25" min="25" max="250" >
    <p class="input-students">students</p>
    <p  style="margin:0%;"> <i class="student-error"></i> </p>
  </div>

    <button class="increment"><i class="fa-solid fa-angle-right"></i></button>
</div>



<div class="student-right">
    <p>More than 250 students?</p>
    <p><a href="schoolplus-quote-request.php" target="_blank"  class="rqu-btn" rel="noopener noreferrer">Request a quote</a> for site license pricing today!</p>

</div>
</div>

</div>


<!-- Bottom Section -->
<div class="bottom-section">
<div class="button-head">
    <h2>Purchase includes</h2>
  <div>
    <div class="total-price">
        <div class="price-benner">
            <img src="./assets/img/svg.svg" alt="" srcset="">
        </div>
      <h1>
         <span class="price-text"> Starting at: </span> <span class="price-value"> $350</span>
      </h1>

    </div>
  </div>
</div>
<div class="price-detils">
<div class="price-detils-left">
       <ul class="select-title">
    <li>1 year license to all Pre-K to grade 5 content</li>
    <li>Reporting for teachers and parents</li>
    <li>Assessment</li>
    <li>Printable student activities</li>
    <li>Educator U Development Center</li>
    <li>Technical support</li>
</ul>
</div>


<div class="button-des">

<div class="hide-show">
    <div class="total-student-count"></div>
<div class="student-des">
Licenses provide product access for 1 year from payment date and will expire thereafter. Students must be licensed in order to use products.

</div>
</div>
</div>


<div class="price-detils-left">
<div class="price-section">
<div class="prce-title">
Price detail (per student, per year, per product)
</div>

<div class="price-amount">
    <ul>
        <li>More than 2000 students: $35</li>
        <li>500-1999 students: $40</li>
        <li>Fewer than 500 students: $45</li>
    </ul>
</div>
</div>
<div class="price-detils-left-footer">
    <ul>
        <li><b>Questions?</b></li>
        <li>866-788-8868</li>
        <li><a href="http://" target="_blank" rel="noopener noreferrer">FAQs</a></li>
    </ul>
</div>
</div>
</div>

<div style="text-align: center; margin-top: 33px; margin-bottom: 50px;">
  <form  method="post" action="./Purchase-pay.php" >
<input type="text" name="selectedPrograms" id="selectedPrograms" style="display:none;" value="">
<input type="text" name="totalStudents" id="totalStudents" style="display:none;" value="">
<input type="text" name="totalPrice" id="totalPrice" style="display:none;" value="">

    <button class="continue-btn">Continue</button>

  </form>

</div>
</div>



</div>


    <script>
     document.addEventListener("DOMContentLoaded", function () {
  const checkboxes = document.querySelectorAll('.program-options input[type="checkbox"]');
  const priceValue = document.querySelector('.price-value');
  const detailsList = document.querySelector('.price-detils-left .select-title');
  const input = document.getElementById("studentCount");
  const incBtn = document.querySelector(".increment");
  const decBtn = document.querySelector(".decrement");
  const hideshow = document.querySelector(".hide-show");
  const totalstudentcount = document.querySelector(".total-student-count");
  const continueBtn = document.querySelector(".continue-btn");
  const errorMsg = document.querySelector(".student-error");

  const selectedProgramsInput = document.getElementById("selectedPrograms");
  const totalStudentsInput = document.getElementById("totalStudents");
  const totalPriceInput = document.getElementById("totalPrice");

const studentPrice = 45; // প্রতি student এর দাম
let studentCount = parseInt(input.value, 10);
hideshow.style.display = "none";

// ✅ Allow only numbers in input
input.addEventListener("input", function () {
  this.value = this.value.replace(/[^0-9]/g, ""); // non-numeric remove
});

// Default list
const defaultLis = [
  "1 year license to all Pre-K to grade 5 content",
  "Reporting for teachers and parents",
  "Assessment",
  "Printable student activities",
  "Educator U Development Center",
  "Technical support"
];

function updateContinueBtn(selected) {
  if (selected.length > 0 && isValidStudentCount(studentCount)) {
    continueBtn.classList.remove("btn-dis");
    continueBtn.style.pointerEvents = "auto";
  } else {
    continueBtn.classList.add("btn-dis");
    continueBtn.style.pointerEvents = "none";
  }
}

// Validation check
function isValidStudentCount(value) {
  return !isNaN(value) && value >= 25 && value <= 250 && value % 5 === 0;
}

function updateButtons() {
  const value = parseInt(input.value, 10);
  errorMsg.textContent = "";

  if (!isValidStudentCount(value)) {
    errorMsg.textContent =
      "Must be a whole number between 25 and 250 and divisible by 5.";
  }

  studentCount = isNaN(value) ? 25 : value;

  // plus minus button state
  incBtn.classList.remove("active", "btn-dis");
  decBtn.classList.remove("active", "btn-dis");

  if (studentCount <= 25) {
    decBtn.classList.add("btn-dis");
  } else {
    decBtn.classList.add("active");
  }

  if (studentCount >= 250) {
    incBtn.classList.add("btn-dis");
  } else {
    incBtn.classList.add("active");
  }

  updatePriceAndDetails();
}

function updatePriceAndDetails() {
  let selected = [];
  checkboxes.forEach(cb => {
    if (cb.checked) {
      selected.push(cb.value);
      totalstudentcount.textContent = studentCount + " Students";
      hideshow.style.display = "block";
    }
  });

  // ✅ Price calculation: প্রতি student 45 USD
  let totalPrice = studentCount * studentPrice;

  priceValue.textContent = `$${totalPrice.toLocaleString()}.00`;
  // Set hidden input values
  selectedProgramsInput.value = selected.join(", ");
  totalStudentsInput.value = studentCount;
  totalPriceInput.value = totalPrice;
  console.log(selectedProgramsInput.value, totalStudentsInput.value, totalPriceInput.value);
  // Update details list
  detailsList.innerHTML = "";

  if (selected.length > 0) {
    selected.forEach(item => {
      const li = document.createElement("li");
      li.textContent = item;
      detailsList.appendChild(li);
    });
  } else {
    defaultLis.forEach(text => {
      const li = document.createElement("li");
      li.textContent = text;
      detailsList.appendChild(li);
    });
  }

  updateContinueBtn(selected);
}

checkboxes.forEach(cb =>
  cb.addEventListener("change", updatePriceAndDetails)
);

incBtn.addEventListener("click", () => {
  if (studentCount < 250) {
    studentCount += 5;
    input.value = studentCount;
    updateButtons();
  }
});

decBtn.addEventListener("click", () => {
  if (studentCount > 25) {
    studentCount -= 5;
    input.value = studentCount;
    updateButtons();
  }
});

input.addEventListener("input", updateButtons);

updateButtons();
updatePriceAndDetails();
});




    </script>
</body>
</html>