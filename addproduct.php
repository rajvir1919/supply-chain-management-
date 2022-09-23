<?php 
session_start(); 
$color="navbar-light orange darken-4";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="SHORTCUT ICON" href="images/fibble.png" type="image/x-icon" />
  <link rel="ICON" href="images/fibble.png" type="image/ico" />
  <title>Add New Products</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<?php
if($_SESSION['role']==0 ){
  ?>
  <body class="area">
    <?php include 'navbar.php'; ?>
    <div class="circles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <center>
        <div style="padding-top: 100px; color: white;">
          <h1><?php echo $usertype . " Dashboard"; ?></h1>
        </div>
       <div class="customalert">
        <div class="alertcontent">
         <div id="alertText"> &nbsp </div>
         <img id="qrious">
         <div id="bottomText" style="margin-top: 10px; margin-bottom: 15px;"> &nbsp </div>
         <button id="closebutton" class="formbtn"> Done </button>
       </div>
     </div>
   </center>
   <div class="bgrolesadd">
     <center>
      <div class="mycardstyle">
       <div class="greyarea">
        <h5> Please fill product details  </h5>
        <form id="form1" autocomplete="off">
         <div class="formitem">
          <label type="text" class="formlabel"> Product Name </label>
          <select id="prodname" name="prodname" class="forminput" style="padding: 0px;">
            <option value="Canned Salmon">Canned Salmon</option>
            <option value="Canned Tuna">Canned Tuna</option>
            <option value="Canned Sardines">Canned Sardines</option>
            <option value="Canned Shellfish">Canned Shellfish</option>
          </select>
          <!-- <input type="dropdown" class="forminput" id="prodname" required> -->
          <label type="text" class="formlabel"> Product Info </label>
          <input type="text" class="forminput" id="prodinfo" required>
          <input type="hidden" class="forminput" id="user" value=<?php echo $_SESSION['username']; ?> required>
        </div>
        <button class="formbtn" id="mansub" type="submit">Register Item</button>
      </form>
    </div>
  </div>
</center>
</div>
</div>
<?php
}else{
  include 'redirection.php';
  redirect('index.php');
}
?>
         <!--     <div class='box'>
            <div class='wave -one'></div>
            <div class='wave -two'></div>
            <div class='wave -three'></div>
          </div> -->
          <!-- JQuery -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <!-- Material Design Bootstrap-->
          <script type="text/javascript" src="js/popper.min.js"></script>
          <script type="text/javascript" src="js/bootstrap.min.js"></script>
          <script type="text/javascript" src="js/mdb.min.js"></script>
          <!-- Web3.js -->
          <script src="web3.min.js"></script>
          <!-- QR Code Library-->
          <script src="./dist/qrious.js"></script>
          <!-- QR Code Reader -->
          <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
          <script src="app.js"></script>
          <!-- Web3 Injection -->
          <script>
            // Initialize Web3
            if (typeof web3 !== 'undefined') {
              web3 = new Web3(web3.currentProvider);
              web3 = new Web3(new Web3.providers.HttpProvider('HTTP://127.0.0.1:8545'));
            } else {
              web3 = new Web3(new Web3.providers.HttpProvider('HTTP://127.0.0.1:8545'));
            }
            
            // Set the Contract
            
            
            // Paste Address here
            var contractAbi = [
            {
              "anonymous": false,
              "inputs": [
              {
                "indexed": false,
                "internalType": "uint256",
                "name": "index",
                "type": "uint256"
              }
              ],
              "name": "Added",
              "type": "event"
            },
            {
              "inputs": [
              {
                "internalType": "uint256",
                "name": "_productId",
                "type": "uint256"
              },
              {
                "internalType": "string",
                "name": "info",
                "type": "string"
              }
              ],
              "name": "addState",
              "outputs": [
              {
                "internalType": "string",
                "name": "",
                "type": "string"
              }
              ],
              "stateMutability": "nonpayable",
              "type": "function"
            },
            {
              "inputs": [
              {
                "internalType": "string",
                "name": "_text",
                "type": "string"
              },
              {
                "internalType": "string",
                "name": "_date",
                "type": "string"
              }
              ],
              "name": "newItem",
              "outputs": [
              {
                "internalType": "bool",
                "name": "",
                "type": "bool"
              }
              ],
              "stateMutability": "nonpayable",
              "type": "function"
            },
            {
              "inputs": [
              {
                "internalType": "string",
                "name": "_a",
                "type": "string"
              },
              {
                "internalType": "string",
                "name": "_b",
                "type": "string"
              }
              ],
              "name": "concat",
              "outputs": [
              {
                "internalType": "string",
                "name": "",
                "type": "string"
              }
              ],
              "stateMutability": "pure",
              "type": "function"
            },
            {
              "inputs": [
              {
                "internalType": "uint256",
                "name": "_productId",
                "type": "uint256"
              }
              ],
              "name": "searchProduct",
              "outputs": [
              {
                "internalType": "string",
                "name": "",
                "type": "string"
              }
              ],
              "stateMutability": "view",
              "type": "function"
            }
            ]; // Paste Contract Here
            
            var contractAddress ='0xAe3d3FB8880DCc25F8aF3116B51aAD47538459a3'; 
            
            
            
            
            
            var contract = new web3.eth.Contract(contractAbi, contractAddress);
            
            
            
            $("#manufacturer").on("click", function(){
              $("#districard").hide("fast","linear");
              $("#manufacturercard").show("fast","linear");
            });
            
            $("#distributor").on("click", function(){
              $("#manufacturercard").hide("fast","linear");
              $("#districard").show("fast","linear");
            });
            
            $("#closebutton").on("click", function(){
              $(".customalert").hide("fast","linear");
            });
            
            
            $('#form1').on('submit', function(event) {
              event.preventDefault(); // to prevent page reload when form is submitted
              prodname = $('#prodname').val();
              username = $('#user').val(); 
              prodinfo = $('#prodinfo').val();
              prodname=prodname+"<br>Registered By: "+username +"<br>Product Information: "+ prodinfo;
              console.log(prodname);
              var today = new Date();
              var thisdate = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();

              web3.eth.getAccounts().then(async function(accounts) {
                var receipt = await contract.methods.newItem(prodname, thisdate).send({ from: accounts[0], gas: 1000000 })
                .then(receipt => {
                  var msg="<h5 style='color: #53D769'><b>Item Added Successfully</b></h5><p>Product ID: "+receipt.events.Added.returnValues[0]+"</p>";
                  qr.value = receipt.events.Added.returnValues[0];
                  $bottom="<p style='color: #FECB2E'> You may print the QR Code if required </p>"
                  $("#alertText").html(msg);
                  $("#qrious").show();
                  $("#bottomText").html($bottom);
                  $(".customalert").show("fast","linear");
                });
                //console.log(receipt);
              });
              $("#prodname").val('');
              
            });
            
            $('#form2').on('submit', function(event) {
              event.preventDefault(); // to prevent page reload when form is submitted
              prodid = $('#prodid').val();
              prodlocation = $('#prodlocation').val();
              console.log(prodid);
              console.log(prodlocation);
              var today = new Date();
              var thisdate = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
              var info = "<br><br><b>Date: "+thisdate+"</b><br>Location: "+prodlocation;
              web3.eth.getAccounts().then(async function(accounts) {
                var receipt = await contract.methods.addState(prodid, info).send({ from: accounts[0], gas: 1000000 })
                .then(receipt => {
                  var msg="Item has been updated ";
                  $("#alertText").html(msg);
                  $("#qrious").hide();
                  $("#bottomText").hide();
                  $(".customalert").show("fast","linear");
                });
              });
              $("#prodid").val('');
              $("#prodlocation").val('');
            });
            
            
            function isInputNumber(evt){
              var ch = String.fromCharCode(evt.which);
              if(!(/[0-9]/.test(ch))){
                evt.preventDefault();
              }
            }
            
            (function() {
              var qr = window.qr = new QRious({
                element: document.getElementById('qrious'),
                size: 200,
                value: '0'
              });

              
            })();
            
            function openQRCamera(node) {
              var reader = new FileReader();
              reader.onload = function() {
                node.value = "";
                qrcode.callback = function(res) {
                  if(res instanceof Error) {
                    alert("No QR code found. Please make sure the QR code is within the camera's frame and try again.");
                  } else {
                    node.parentNode.previousElementSibling.value = res;
                    document.getElementById('searchButton').click();
                  }
                };
                qrcode.decode(reader.result);
              };
              reader.readAsDataURL(node.files[0]);
            }
            
            function showAlert(message){
              $("#alertText").html(message);
              $("#qrious").hide();
              $("#bottomText").hide();
              $(".customalert").show("fast","linear");
            }
            
            $("#aboutbtn").on("click", function(){
              showAlert("A Decentralised End to End Logistics Application that stores the whereabouts of product at every freight hub to the Blockchain. At consumer end, customers can easily scan product's QR CODE and get complete information about the provenance of that product hence empowering  consumers to only purchase authentic and quality products.");
            });
            
          </script>
        </div>
      </body>
      </html>