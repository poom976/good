function doGet(e) {
    return HtmlService.createTemplateFromFile("index").evaluate()
    .addMetaTag('viewport', 'width=device-width, initial-scale=1')
    .setXFrameOptionsMode(HtmlService.XFrameOptionsMode.ALLOWALL);
  }
  
  function checkLogin(username, password) {
    var url = 'https://docs.google.com/spreadsheets/d/1Syhglybow-itrxUiQEv0WqFINpZkKXpD8Cy1G0315fc/edit#gid=0';
    var ss= SpreadsheetApp.openByUrl(url);
    var webAppSheet = ss.getSheetByName("ชีต1");
    var getLastRow =  webAppSheet.getLastRow();
    var found_record = '';
    for(var i = 1; i <= getLastRow; i++)
    {
     if(webAppSheet.getRange(i, 1).getDisplayValue().toUpperCase() == username.toUpperCase() && 
       webAppSheet.getRange(i, 2).getDisplayValue().toUpperCase() == password.toUpperCase())
     {
       found_record = 'TRUE';
     }    
    }
    if(found_record == '')
    {
      found_record = 'FALSE'; 
    }
    return found_record;
  }
  let jwt = localStorage.getItem("jwt")
  if (jwt = null) {
      window.location.href = 'index.html'
  }