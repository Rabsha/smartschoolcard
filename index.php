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
.candidatework img {
    width: 85%;
    border: 1px solid #ccc;
    background: #fff;
}
.headingwork h1 {
    font-family: MySchoolFont;
    color: #d82f3b;
    word-spacing: 8px;
    font-size: 48px;
    padding-top: 20px;
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
.barcodework {
    text-align: center;
}
.barcodework img {
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
                <div class="barcodework">
                    <div class="detailwork">
                        <h5>STUDENT ID</h5>
                        <span>0897536437</span>
                    </div>
                    <div class="barcodework">
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
        </div>
    </div>
</div>
</body>
</html>