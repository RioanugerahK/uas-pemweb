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
            <span class="text-wrapper">HOME</span>
            <span class="span"
              >&nbsp;&nbsp; ABOUT&nbsp;&nbsp; SERVICES&nbsp;&nbsp; PRICING&nbsp;&nbsp; PAGES&nbsp;&nbsp; CONTACT</span
            >
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
  height: 161px;
  top: 0;
  left: 0;
  background-color: #005ae1;
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
  top: 137px;
  left: 676px;
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
  top: 134px;
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