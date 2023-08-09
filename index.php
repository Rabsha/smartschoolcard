<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" type="text/css">
    <title>Smart Card</title>
</head>
<style>
.container {
    max-width: 1100px;
}
@font-face {
  font-family: MySchoolFont;
  src: url(../smartschoolcard/assets/font/arenskiregular.ttf);
}
.headingwork h1 {
  font-family: MySchoolFont;
}
.maincard {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-around;
    align-items: center;
    padding-top: 35px;
    padding-bottom: 35px;
    position: relative;
}
.leftside {
    text-align: center;
}
.logo img {
    width: 55%;
}
.rightside {
    text-align: center;
}
.headingwork h1 {
    font-family: MySchoolFont;
    color: #d82f3b;
    word-spacing: 8px;
    font-size: 48px;
    padding-top: 16px;
}
.headingwork h2 {
    font-size: 30px;
    width: 70%;
    margin: 0 auto;
    line-height: 40px;
    letter-spacing: 3px;
    font-weight: 600;
}
.headingwork {
    padding-bottom: 60px;
}
.barcodework {
    text-align: left;
    position: relative;
}
.detailwork {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-around;
    align-items: center;
}
.detailwork h5 {
    font-size: 18px;
    color: #948c8c;
    font-weight: 600;
    letter-spacing: 3px;
    margin: 0;
}
.detailwork span {
    font-size: 20px;
}
.barcodes {
    text-align: center;
}
.barcodes img {
    width: 73%;
}
.detailwork {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-around;
    align-items: center;
    padding: 0 26px;
}
.canditextwork h1 {
    font-weight: 500;
    font-size: 28px;
    letter-spacing: 5px;
    padding-top: 20px;
    margin: 0;
    padding-bottom: 16px;
    color: #fff;
}
.candidatework img {
    width: 80%;
    border: 1px solid #ccc;
    background: #fff;
}
.canditextwork h3 {
    font-size: 26px;
    color: #fff;
}
.dateofbirth {
    padding-top: 45px;
}
.dateofbirth h1 {
    font-size: 24px;
    letter-spacing: 2px;
    color: #fff;
}
.dateofbirth h2 {
    font-size: 22px;
    font-weight: 600;
    color: #fff;
}
.rightside:after {
    border-top: 600px solid #d9162c;
    border-left: 239px solid transparent;
    border-right: 405px solid #d9162c;
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    z-index: -9;
}
.barcodework:after {
    border-bottom: 132px solid black;
    border-left: 222px solid transparent;
    border-right: 52px solid transparent;
    content: "";
    position: absolute;
    right: -166px;
    top: 34px;
}
.barcodework:before {
    border-bottom: 132px solid black;
    border-left: 0 solid transparent;
    border-right: 50px solid transparent;
    content: "";
    position: absolute;
    left: 0;
    top: 34px;
}
.webwork {
    display: block;
}
.mobilework{
    display: none;
}
@media only screen and (max-width: 1060px)
{
    .rightside:after {
        border-right: 374px solid #d9162c;
    }
}
@media only screen and (max-width: 1024px)
{
    .maincard {
        display: inherit;
    }
    .logo img {
        width: 30%;
    }
    .rightside:after{
        display: none;
    }
    .headingwork h1 {
        font-size: 56px;
        margin: 0;
    }
    .headingwork h2 {
        font-size: 26px;
        width: 30%;
        padding-top: 8px;
    }
    .webwork {
        display: none;
    }
    .mobilework {
        display: block;
        padding-top: 36px;
    }
    .barcodework::before{
        display: none;
    }
    .barcodework::after{
        display: none;
    }
    .candidatework img {
        width: 50%;
    }
    .detailwork {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: center;
        padding: 0 0;
    }
    .detailwork h5 {
        padding: 0 22px;
    }
    .detailwork span {
        padding: 0 22px;
    }
    .barcodes img {
        width: 48%;
    }
    .headingwork {
        padding-bottom: 30px;
    }
    .rightside {
        text-align: center;
        background: #d9162c;
        width: 70%;
        margin: 0 auto;
        padding: 50px 20px;
    }
    .dateofbirth h2{
        margin: 0;
    }
    .canditextwork h1{
        letter-spacing: 3px;
        font-size: 30px;
    }
}
@media only screen and (max-width: 767px){
    .headingwork h2 {
        width: 50%;
    }
}
@media only screen and (max-width: 600px){
    .logo img {
        width: 35%;
    }
    .headingwork h1 {
        font-size: 40px;
        margin: 0;
    }
    .candidatework img {
        width: 70%;
    }
    .canditextwork h1 {
        font-size: 26px;
    }
    .canditextwork h3 {
        font-size: 23px;
    }
    .dateofbirth {
        padding-top: 30px;
    }
    .dateofbirth h1 {
        font-size: 22px;
    }
    .dateofbirth h2 {
        font-size: 18px;
    }
    .barcodes img {
        width: 60%;
    }
}
@media only screen and (max-width: 500px){
    .logo img {
        width: 35%;
    }
    .headingwork h1 {
        font-size: 40px;
        margin: 0;
    }
    .headingwork h2 {
        width: 50%;
        font-size: 20px;
        line-height: 24px;
    }
    .rightside {
        width: 80%;
    }
    .barcodes img {
        width: 75%;
    }
}
@media only screen and (max-width: 414px)
{
    .logo img {
        width: 46%;
    }
    .headingwork h2 {
        line-height: 26px;
    }
    .rightside {
        width: 90%;
        padding: 33px 20px;
    }
    .barcodes img {
        width: 85%;
    }
    .canditextwork h1 {
        font-size: 22px;
    }
    .canditextwork h3 {
        font-size: 20px;
    }
    .dateofbirth h1 {
        font-size: 20px;
    }
}
@media only screen and (max-width: 360px)
{
    .logo img {
        width: 60%;
    }
    .headingwork h1 {
        font-size: 38px;
        word-spacing: 2px;
    }
    .headingwork h2 {
        width: 80%;
    }
    .detailwork h5 {
        font-size: 15px;
    }
    .detailwork span {
        font-size: 16px;
    }
}
@media only screen and (max-width: 342px)
{
    .canditextwork h1 {
        font-size: 18px;
    }
    .canditextwork h3 {
        font-size: 18px;
    }
    .dateofbirth h1 {
        font-size: 18px;
    }
    .dateofbirth h2 {
        font-size: 16px;
    }
    .detailwork h5 {
        font-size: 13px;
    }
}
@media only screen and (max-width: 320px)
{
    .logo img {
        width: 60%;
    }
    .headingwork h1 {
        font-size: 35px;
        word-spacing: 2px;
    }
    .headingwork h2 {
        width: 80%;
        font-size: 20px;
    }
}
</style>
<body>
<div class="wrapper">
    <div class="container">
        <div class="maincard">
            <div class="leftside">
                <div class="logo">
                    <img src="assets/images/mainlogo.png" />
                </div>
                <div class="headingwork">
                    <h1>The Smart School</h1>
                    <h2>IBN-E-SACHAL CAMPUS</h2>
                </div>
                <div class="barcodework webwork">
                    <div class="detailwork">
                        <h5>STUDENT ID</h5>
                        <span>0897536437</span>
                    </div>
                    <div class="barcodes">
                        <img src="assets/images/barcode.png" />
                    </div>
                </div>
            </div>
            <div class="rightside">
                <div class="candidatework">
                    <img src="assets/images/candidate.png" />
                </div>
                <div class="canditextwork">
                    <h1>RAZAM-E-HUSSAIN</h1>
                    <h3>CLASS 04</h3>
                </div>
                <div class="dateofbirth">
                    <h1>DATE OF BIRTH</h1>
                    <h2>26-09-2012</h2>
                </div>
            </div>
            <div class="barcodework mobilework">
                <div class="detailwork">
                    <h5>STUDENT ID</h5>
                    <span>0897536437</span>
                </div>
                <div class="barcodes">
                    <img src="assets/images/barcode.png" />
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>