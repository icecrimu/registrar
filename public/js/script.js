// Print page
function printDiv(divName) {
  var printContents = document.getElementById(divName).innerHTML
  var originalContents = document.body.innerHTML

  document.body.innerHTML = printContents

  window.print()

  document.body.innerHTML = originalContents
}

const unitCertBtn = document.querySelector('.addUnitCertbtn')

unitCertBtn.addEventListener('click', () => {
  $.ajax({
    url: 'add_units_cert/',
    type: 'GET',
    dataType: 'JSON',
    success: function (data) {
      document.querySelector('#courseNo1').value = data[0].course_no
      document.querySelector('#courseNo2').value = data[1].course_no
      document.querySelector('#courseNo3').value = data[2].course_no
      document.querySelector('#courseNo4').value = data[3].course_no
      document.querySelector('#courseNo5').value = data[4].course_no
      document.querySelector('#courseNo6').value = data[5].course_no
      document.querySelector('#courseNo7').value = data[6].course_no

      document.querySelector('#courseDesc1').value = data[0].course_desc
      document.querySelector('#courseDesc2').value = data[1].course_desc
      document.querySelector('#courseDesc3').value = data[2].course_desc
      document.querySelector('#courseDesc4').value = data[3].course_desc
      document.querySelector('#courseDesc5').value = data[4].course_desc
      document.querySelector('#courseDesc6').value = data[5].course_desc
      document.querySelector('#courseDesc7').value = data[6].course_desc

      document.querySelector('#units1').value = data[0].units
      document.querySelector('#units2').value = data[1].units
      document.querySelector('#units3').value = data[2].units
      document.querySelector('#units4').value = data[3].units
      document.querySelector('#units5').value = data[4].units
      document.querySelector('#units6').value = data[5].units
      document.querySelector('#units7').value = data[6].units
    }
  })
})

// $(document).ready(function () {
//   $('.addUnitCertbtn').click(function () {
//     $.ajax({
//       url: 'add_units_cert/',
//       type: 'GET',
//       dataType: 'JSON',
//       success: function (data) {
//         $('#courseNo1').val(data[0].course_no)
//         $('#courseNo2').val(data[1].course_no)
//         $('#courseNo3').val(data[2].course_no)
//         $('#courseNo4').val(data[3].course_no)
//         $('#courseNo5').val(data[4].course_no)
//         $('#courseNo6').val(data[5].course_no)
//         $('#courseNo7').val(data[6].course_no)

//         $('#courseDesc1').val(data[0].course_desc)
//         $('#courseDesc2').val(data[1].course_desc)
//         $('#courseDesc3').val(data[2].course_desc)
//         $('#courseDesc4').val(data[3].course_desc)
//         $('#courseDesc5').val(data[4].course_desc)
//         $('#courseDesc6').val(data[5].course_desc)
//         $('#courseDesc7').val(data[6].course_desc)

//         $('#units1').val(data[0].units)
//         $('#units2').val(data[1].units)
//         $('#units3').val(data[2].units)
//         $('#units4').val(data[3].units)
//         $('#units5').val(data[4].units)
//         $('#units6').val(data[5].units)
//         $('#units7').val(data[6].units)
//       }
//     })
//   })
// })
