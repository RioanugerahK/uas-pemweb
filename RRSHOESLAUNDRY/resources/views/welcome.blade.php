<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="desktop">
      <div class="overlap-group-wrapper">
        <div class="overlap-group">
          <div class="rectangle"></div>
          <div class="div"></div>
          <p class="HOME-ABOUT-SERVICES">
              &nbsp;&nbsp;
              <a href="home.html">HOME</a>&nbsp;&nbsp;
              <a href="about.blade.php">ABOUT</a>&nbsp;&nbsp;
              <a href="services.blade.php">SERVICES</a>&nbsp;&nbsp;
              <a href="pricing.html">PRICING</a>&nbsp;&nbsp;
              <a href="pages.html">PAGES</a>&nbsp;&nbsp;
              <a href="contact.blade.php">CONTACT</a>
            </span>
          </p>
          <p class="RR-SHOESLAUNDRY">
            <span class="text-wrapper-2">RR </span> <span class="text-wrapper-3">SHOESLAUNDRY</span>
          </p>
        </div>
      </div>
    </div>
  </body>
</html>

<style>
    .desktop {
  background-color: #ffffff;
  display: flex;
  flex-direction: row;
  justify-content: center;
  width: 100%;
}

.desktop .overlap-group-wrapper {
  background-color: #ffffff;
  width: 1440px;
  height: 1024px;
}

.desktop .overlap-group {
  position: relative;
  height: 245px;
}

.desktop .rectangle {
  position: absolute;
  width: 1440px;
  height: 430px;
  top: 0;
  left: 0;
  background-color: #194376;
}

.desktop .div {
  position: absolute;
  width: 1080px;
  height: 146px;
  top: 99px;
  left: 180px;
  background-color: #ffffff;
  box-shadow: 0px 4px 4px #00000040;
}

.desktop .HOME-ABOUT-SERVICES {
  position: absolute;
  width: 561px;
  height: 69px;
  top: 115px;
  left: 676px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-family: "Inter-Medium", Helvetica;
  font-weight: 500;
  color: transparent;
  font-size: 20px;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .text-wrapper {
  font-family: "Inter-MediumItalic", Helvetica;
  font-style: italic;
  color: #ff0000;
}

.desktop .span {
  font-family: "Inter-MediumItalic", Helvetica;
  font-style: italic;
  color: #000000;
}

.desktop .RR-SHOESLAUNDRY {
  position: absolute;
  width: 413px;
  height: 74px;
  top: 110px;
  left: 180px;
  font-family: "Inter-ExtraBold", Helvetica;
  font-weight: 800;
  color: transparent;
  font-size: 35px;
  text-align: center;
  letter-spacing: 0;
  line-height: normal;
}

.desktop .text-wrapper-2 {
  color: #ed1515;
}

.desktop .text-wrapper-3 {
  color: #000000;
}

</style>