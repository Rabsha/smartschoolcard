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
.headingworkstdh h1 {
  font-family: MySchoolFont;
}
.maincardstdh {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-around;
    align-items: center;
    padding-top: 35px;
    padding-bottom: 35px;
    position: relative;
}
.leftsidestdh {
    text-align: center;
}
.logostdh img {
    width: 55%;
}
.rightsidestdh {
    text-align: center;
}
.headingworkstdh h1 {
    font-family: MySchoolFont;
    color: #d82f3b;
    word-spacing: 8px;
    font-size: 48px;
    padding-top: 16px;
}
.headingworkstdh h2 {
    font-size: 30px;
    width: 70%;
    margin: 0 auto;
    line-height: 40px;
    letter-spacing: 3px;
    font-weight: 600;
}
.headingworkstdh {
    padding-bottom: 60px;
}
.barcodeworkstdh {
    text-align: left;
    position: relative;
}
.detailworkstdh {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-around;
    align-items: center;
}
.detailworkstdh h5 {
    font-size: 18px;
    color: #948c8c;
    font-weight: 600;
    letter-spacing: 3px;
    margin: 0;
}
.detailworkstdh span {
    font-size: 20px;
}
.barcodesStdh {
    text-align: center;
}
.barcodesStdh img {
    width: 73%;
}
.detailworkstdh {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-around;
    align-items: center;
    padding: 0 26px;
}
.canditextworkstdh h1 {
    font-weight: 500;
    font-size: 28px;
    letter-spacing: 5px;
    padding-top: 20px;
    margin: 0;
    padding-bottom: 16px;
    color: #fff;
}
.candidateworkstdh img {
    width: 80%;
    border: 1px solid #ccc;
    background: #fff;
}
.canditextworkstdh h3 {
    font-size: 26px;
    color: #fff;
}
.dateofbirthstdh {
    padding-top: 45px;
}
.dateofbirthstdh h1 {
    font-size: 24px;
    letter-spacing: 2px;
    color: #fff;
}
.dateofbirthstdh h2 {
    font-size: 22px;
    font-weight: 600;
    color: #fff;
}
.rightsidestdh:after {
    border-top: 600px solid #d9162c;
    border-left: 239px solid transparent;
    border-right: 405px solid #d9162c;
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    z-index: -9;
}
.barcodeworkstdh:after {
    border-bottom: 132px solid black;
    border-left: 222px solid transparent;
    border-right: 52px solid transparent;
    content: "";
    position: absolute;
    right: -166px;
    top: 34px;
}
.barcodeworkstdh:before {
    border-bottom: 132px solid black;
    border-left: 0 solid transparent;
    border-right: 50px solid transparent;
    content: "";
    position: absolute;
    left: 0;
    top: 34px;
}
.webworkstdh {
    display: block;
}
.mobileworkstdh{
    display: none;
}
@media only screen and (max-width: 1060px)
{
    .rightsidestdh:after {
        border-right: 374px solid #d9162c;
    }
}
@media only screen and (max-width: 1024px)
{
    .maincardstdh {
        display: inherit;
    }
    .logostdh img {
        width: 30%;
    }
    .rightsidestdh:after{
        display: none;
    }
    .headingworkstdh h1 {
        font-size: 56px;
        margin: 0;
    }
    .headingworkstdh h2 {
        font-size: 26px;
        width: 30%;
        padding-top: 8px;
    }
    .webworkstdh {
        display: none;
    }
    .mobileworkstdh {
        display: block;
        padding-top: 36px;
    }
    .barcodeworkstdh::before{
        display: none;
    }
    .barcodeworkstdh::after{
        display: none;
    }
    .candidateworkstdh img {
        width: 50%;
    }
    .detailworkstdh {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: center;
        padding: 0 0;
    }
    .detailworkstdh h5 {
        padding: 0 22px;
    }
    .detailworkstdh span {
        padding: 0 22px;
    }
    .barcodesStdh img {
        width: 48%;
    }
    .headingworkstdh {
        padding-bottom: 30px;
    }
    .rightsidestdh {
        text-align: center;
        background: #d9162c;
        width: 70%;
        margin: 0 auto;
        padding: 50px 20px;
    }
    .dateofbirthstdh h2{
        margin: 0;
    }
    .canditextworkstdh h1{
        letter-spacing: 3px;
        font-size: 30px;
    }
}
@media only screen and (max-width: 767px){
    .headingworkstdh h2 {
        width: 50%;
    }
}
@media only screen and (max-width: 600px){
    .logostdh img {
        width: 35%;
    }
    .headingworkstdh h1 {
        font-size: 40px;
        margin: 0;
    }
    .candidateworkstdh img {
        width: 70%;
    }
    .canditextworkstdh h1 {
        font-size: 26px;
    }
    .canditextworkstdh h3 {
        font-size: 23px;
    }
    .dateofbirthstdh {
        padding-top: 30px;
    }
    .dateofbirthstdh h1 {
        font-size: 22px;
    }
    .dateofbirthstdh h2 {
        font-size: 18px;
    }
    .barcodesStdh img {
        width: 60%;
    }
}
@media only screen and (max-width: 500px){
    .logostdh img {
        width: 35%;
    }
    .headingworkstdh h1 {
        font-size: 40px;
        margin: 0;
    }
    .headingworkstdh h2 {
        width: 50%;
        font-size: 20px;
        line-height: 24px;
    }
    .rightsidestdh {
        width: 80%;
    }
    .barcodesStdh img {
        width: 75%;
    }
}
@media only screen and (max-width: 414px)
{
    .logostdh img {
        width: 46%;
    }
    .headingworkstdh h2 {
        line-height: 26px;
    }
    .rightsidestdh {
        width: 90%;
        padding: 33px 20px;
    }
    .barcodesStdh img {
        width: 85%;
    }
    .canditextworkstdh h1 {
        font-size: 22px;
    }
    .canditextworkstdh h3 {
        font-size: 20px;
    }
    .dateofbirthstdh h1 {
        font-size: 20px;
    }
}
@media only screen and (max-width: 360px)
{
    .logostdh img {
        width: 60%;
    }
    .headingworkstdh h1 {
        font-size: 38px;
        word-spacing: 2px;
    }
    .headingworkstdh h2 {
        width: 80%;
    }
    .detailworkstdh h5 {
        font-size: 15px;
    }
    .detailworkstdh span {
        font-size: 16px;
    }
}
@media only screen and (max-width: 342px)
{
    .canditextworkstdh h1 {
        font-size: 18px;
    }
    .canditextworkstdh h3 {
        font-size: 18px;
    }
    .dateofbirthstdh h1 {
        font-size: 18px;
    }
    .dateofbirthstdh h2 {
        font-size: 16px;
    }
    .detailworkstdh h5 {
        font-size: 13px;
    }
}
@media only screen and (max-width: 320px)
{
    .logostdh img {
        width: 60%;
    }
    .headingworkstdh h1 {
        font-size: 35px;
        word-spacing: 2px;
    }
    .headingworkstdh h2 {
        width: 80%;
        font-size: 20px;
    }
}
</style>
<body>
<div class="wrapperstdh">
    <div class="container">
        <div class="maincardstdh">
            <div class="leftsidestdh">
                <div class="logostdh">
                    <img src="assets/images/mainlogo.png" />
                </div>
                <div class="headingworkstdh">
                    <h1>The Smart School</h1>
                    <h2>IBN-E-SACHAL CAMPUS</h2>
                </div>
                <div class="barcodeworkstdh webworkstdh">
                    <div class="detailworkstdh">
                        <h5>STUDENT ID</h5>
                        <span>0897536437</span>
                    </div>
                    <div class="barcodesStdh">
                        <img src="assets/images/barcode.png" />
                    </div>
                </div>
            </div>
            <div class="rightsidestdh">
                <div class="candidateworkstdh">
                    <img src="assets/images/candidate.png" />
                </div>
                <div class="canditextworkstdh">
                    <h1>RAZAM-E-HUSSAIN</h1>
                    <h3>CLASS 04</h3>
                </div>
                <div class="dateofbirthstdh">
                    <h1>DATE OF BIRTH</h1>
                    <h2>26-09-2012</h2>
                </div>
            </div>
            <div class="barcodeworkstdh mobileworkstdh">
                <div class="detailworkstdh">
                    <h5>STUDENT ID</h5>
                    <span>0897536437</span>
                </div>
                <div class="barcodesStdh">
                    <img src="assets/images/barcode.png" />
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>