<?php require_once("header.php"); ?>
<?php date_default_timezone_set("Asia/Dhaka"); ?>
<style type="text/css">
  * {
  box-sizing: border-box;
  font-family: 'Roboto', sans-serif;
  list-style: none;
  margin: 0;
  outline: none;
  padding: 0;
}

a {
  text-decoration: none;
}

body, html {
  height: 100%;
}

body {
  font-family: 'Roboto', sans-serif;
}

.container {
  margin-top: 120px;
}

.calendar {
  background: #2b4450;
  border-radius: 4px;
  box-shadow: 0 5px 20px rgba(0, 0, 0, .3);
  height: 501px;
  perspective: 1000;
  transition: .9s;
  transform-style: preserve-3d;
  width: 100%;
}

/* Front - Calendar */
.front {
  transform: rotateY(0deg);
}

.current-date {
  border-bottom: 1px solid rgba(73, 114, 133, .6);
  display: flex;
  justify-content: space-between;
  padding: 30px 40px;
}

.current-date h1 {
  color: #dfebed;
  font-size: 1.4em;
  font-weight: 300;
}

.week-days {
  color: #dfebed;
  display: flex;
  justify-content: space-between;
  font-weight: 600;
  padding: 30px 40px;
}

.days {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.weeks {
  color: #fff;
  display: flex;
  flex-direction: column;
  padding: 0 40px;
}

.weeks div {
  display: flex;
  font-size: 1.2em;
  font-weight: 300;
  justify-content: space-between;
  margin-bottom: 20px;
  width: 100%;
}

.last-month {
  opacity: .3;
}

.weeks span {
  padding: 10px;
}

.weeks span.active {
  background: #f78536;
  border-radius: 50%;
}

.weeks span:not(.last-month):hover {
  cursor: pointer;
  font-weight: 600;
}

.event {
  position: relative;
}

.event:after {
  content: '•';
  color: #f78536;
  font-size: 1.4em;
  position: absolute;
  right: -4px;
  top: -4px;
}

/* Back - Event form */

.back {
  height: 100%;
  transform: rotateY(180deg);
}

.back input {
  background: none;
  border: none;
  border-bottom: 1px solid rgba(73, 114, 133, .6);
  color: #dfebed;
  font-size: 1.4em;
  font-weight: 300;
  padding: 30px 40px;
  width: 100%;
}

.info {
  color: #dfebed;
  display: flex;
  flex-direction: column;
  font-weight: 600;
  font-size: 1.2em;
  padding: 30px 40px;
}

.info div:not(.observations) {
  margin-bottom: 40px;
}

.info span {
  font-weight: 300;
}

.info .date {
  display: flex;
  justify-content: space-between;
}

.info .date p {
  width: 50%;
}

.info .address p {
  width: 100%;
}

.actions {
  bottom: 0;
  border-top: 1px solid rgba(73, 114, 133, .6);
  display: flex;
  justify-content: space-between;
  position: absolute;
  width: 100%;
}

.actions button {
  background: none;
  border: 0;
  color: #fff;
  font-weight: 600;
  letter-spacing: 3px;
  margin: 0;
  padding: 30px 0;
  text-transform: uppercase;
  width: 50%;
}

.actions button:first-of-type {
  border-right: 1px solid rgba(73, 114, 133, .6);
}

.actions button:hover {
  background: #497285;
  cursor: pointer;
}

.actions button:active {
  background: #5889a0;
  outline: none;
}

/* Flip animation */

.flip {
  transform: rotateY(180deg);
}

.front, .back {
  backface-visibility: hidden;
}
</style>
  <!-- inspired by http://colorhunt.co/c/8184 and 
    https://dribbble.com/shots/2407357-Calendar%60 -->

    <div class="container">
     <div class="row">
       <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="calendar">
        <div class="front">
          <div class="current-date">
            <h1><?php echo date('D').' ';echo date('d'); ?></h1>
            <h1><?php
 $monthNum = date('m');
 $yearNum = date('Y');
 $monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
 echo $monthName.' '; // Output: May
 echo $yearNum; // Output: May
?></h1> 
          </div>

          <div class="current-month">
            <ul class="week-days">
              <li>MON</li>
              <li>TUE</li>
              <li>WED</li>
              <li>THU</li>
              <li>FRI</li>
              <li>SAT</li>
              <li>SUN</li>
            </ul>

            <div class="weeks">
              <div class="first">
                <span class="last-month ">28</span>
                <span class="last-month ">29</span>
                <span class="last-month ">30</span>
                <span class="last-month ">31</span>
                <span class="<?php if( date('d') == 1 ){ echo 'active';} ?>">01</span>
                <span class="<?php if( date('d') == 2 ){ echo 'active';} ?>">02</span>
                <span class="<?php if( date('d') == 3 ){ echo 'active';} ?>">03</span>
              </div>

              <div class="second">
                <span class="<?php if( date('d') == 4 ){ echo 'active';} ?>">04</span>
                <span class="<?php if( date('d') == 5 ){ echo 'active';} ?>">05</span>
                <span class="event <?php if( date('d') == 6 ){ echo 'active';} ?>">06</span>
                <span class="<?php if( date('d') == 7 ){ echo 'active';} ?>">07</span>
                <span class="<?php if( date('d') == 8 ){ echo 'active';} ?>">08</span>
                <span class="<?php if( date('d') == 9 ){ echo 'active';} ?>">09</span>
                <span class="<?php if( date('d') == 10 ){ echo 'active';} ?>">10</span>
              </div>

              <div class="third">
                <span class="<?php if( date('d') == 11 ){ echo 'active';} ?>">11</span>
                <span class="<?php if( date('d') == 12 ){ echo 'active';} ?>">12</span>
                <span class="<?php if( date('d') == 13 ){ echo 'active';} ?>">13</span>
                <span class="<?php if( date('d') == 14 ){ echo 'active';} ?>">14</span>
                <span class="<?php if( date('d') == 15 ){ echo 'active';} ?>">15</span>
                <span class="<?php if( date('d') == 16 ){ echo 'active';} ?>">16</span>
                <span class="<?php if( date('d') == 17 ){ echo 'active';} ?>">17</span>
              </div>

              <div class="fourth">
                <span class="<?php if( date('d') == 18 ){ echo 'active';} ?>">18</span>
                <span class="<?php if( date('d') == 19 ){ echo 'active';} ?>">19</span>
                <span class="<?php if( date('d') == 20 ){ echo 'active';} ?>">20</span>
                <span class="<?php if( date('d') == 21 ){ echo 'active';} ?>">21</span>
                <span class="<?php if( date('d') == 22 ){ echo 'active';} ?>">22</span>
                <span class="<?php if( date('d') == 23 ){ echo 'active';} ?>">23</span>
                <span class="<?php if( date('d') == 24 ){ echo 'active';} ?>">24</span>
              </div>

              <div class="fifth">
                <span class="<?php if( date('d') == 25 ){ echo 'active';} ?>">25</span>
                <span class="<?php if( date('d') == 26 ){ echo 'active';} ?>">26</span>
                <span class="<?php if( date('d') == 27 ){ echo 'active';} ?>">27</span>
                <span class="<?php if( date('d') == 28 ){ echo 'active';} ?>">28</span>
                <span class="<?php if( date('d') == 29 ){ echo 'active';} ?>">29</span>
                <span class="<?php if( date('d') == 30 ){ echo 'active';} ?>">30</span>
                <span class="<?php if( date('d') == 31 ){ echo 'active';} ?>">31</span>
              </div>
            </div>
          </div>
        </div>

        <div class="back">
          <input placeholder="What's the event?">
          <div class="info">
            <div class="date">
              <p class="info-date">
              Date: <span>Jan 15th, 2016</span>
              </p>
              <p class="info-time">
                Time: <span>6:35 PM</span>
              </p>
            </div>
            <div class="address">
              <p>
                Address: <span>129 W 81st St, New York, NY</span>
              </p>
            </div>
            <div class="observations">
              <p>
                Observations: <span>Be there 15 minutes earlier</span>
              </p>
            </div>
          </div>

          <div class="actions">
            <button class="save">
              Save <i class="ion-checkmark"></i>
            </button>
            <button class="dismiss">
              Dismiss <i class="ion-android-close"></i>
            </button>
          </div>
        </div>

      </div>
       </div>
     </div>
    </div>
<?php require_once("footer.php"); ?>