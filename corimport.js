var dataSetName = document.getElementById('dataSetDropDown');
var dataSetString = dataSetName.options[dataSetName.selectedIndex].value;
var fileLocations = 'ValidationFiles/' + dataSetString + '.pdf';
var openImpDoc = document.getElementById('open-doc-box');

  //setting the option for the dataset name
  function dataSetNameSave() {
    var dataSetName = document.getElementById('dataSetDropDown');
    var dataSetString = dataSetName.options[dataSetName.selectedIndex].value;

    localStorage.setItem("dataSetName", dataSetString);
  }

  //setting the data file name
  function dataFileNameSave() {
    var input = document.getElementById('fileToUpload');
    var fileName = input.files[0].name;
    var fileURL = input.value;
    //var dataFileName = document.getElementById("fileToUpload")

    localStorage.setItem("dataFileName", fileName);
    localStorage.setItem("fileURL", fileURL);
    //localStorage.setItem("dataFileName", dataFileName);
  }

  function Generate() {

       var dataSetName = document.getElementById('dataSetDropDown');
       var dataSetString = dataSetName.options[dataSetName.selectedIndex].value;
       var openImpDoc = document.getElementById('open-doc-box');
       var errorMessageName = document.getElementById('error-message-name');
       var errorMessageFile = document.getElementById('error-mrssage-file');

       if (openImpDoc.checked == true) {
          window.open('ValidationFiles/' + dataSetString + '.pdf');
      } else {
          return;
    }
}

  //clear localStorage on refresh
  window.onload = window.localStorage.clear();
  //reset fields on the form
  document.getElementById("main-form").reset();

//////////////////////////////////////////////////////////////////////

  var dataSetName = document.getElementById('data-set-name');
  var dataFileName = document.getElementById('data-file-name');

  if (localStorage.getItem('dataSetName') == null) {
    dataSetName.innerHTML = "CorImport Web Tool";
    alert('Please return the the home page and select a Data Set and a Data File to format.');
  } else {
    dataSetName.innerHTML = localStorage.getItem('dataSetName');
  }

  if (localStorage.getItem('dataFileName') == null) {
    dataFileName.innerHTML = "**No file has been selected**";
    dataFileName.style.color = '#FF0000';
  } else {
    dataFileName.innerHTML = "The name of this file is " + localStorage.getItem('dataFileName');
  }

  //Spreadsheet entry
  $('#spreadsheet').jexcel({
  // file path of the CSV file
  csv: 'https://bossanova.uk/components/bossanova-ui/demo/demo1.csv',
  // Get the first of the CSV file and consider the headers
  csvHeaders: true,
  // Default column widths
  colWidths: [ 300, 300, 300 ]
  });

  //Download CSV button function
  $('#download-csv').on('click', function () {
     $('#spreadsheet').jexcel('download');
   });

   $('#restart').on('click', function () {
     location.href = "index.html";
   });
