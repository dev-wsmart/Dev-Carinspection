<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calendar</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<style>
    //Text
$base__font-size: 16px;

$font-family--montserrat: 'Montserrat', sans-serif;
$font-family--primary : $font-family--montserrat;

//Colors
$white: #fff;
$black: #222741;
$gray: #99A4AE;
$blue: #66DCEC;
$yellow: #FDCA40;
$green: #86D8C9;

//Color Palette
$palettes: (
  gray-shades: (
    darker: #9FAAB7,
    base: #99A4AE,
    light: #DCDCE3,
    lighter: #BEC1CA,
    lightest: #F2F6F8
  )
);

// Color usages
$main-background-color: #F8FAFA;
$calendar-item-border: #FEFEFE;
$calendar-item-text: #424588;
$calendar-button-color: #E9E8E8;

//Font size variables
$lg-font-size: 20px;
$default-font-size: 14px;
$sm-font-size: 12px;
$xsm-font-size: 10px;

//Font weight variables
$font-weight--bold: 700;
$font-weight--semi-bold: 600;
$font-weight--regular: 400;

//Color Usage
$primary-color: $green;

@function palette($palette, $shade: base){
  @return map-get(map-get($palettes, $palette), $shade);
}
// Retrieved from https://github.com/sshikhrakar/Sass-Starter/
// BEM(Block Element Modifier) Naming Convention
// For Element
// $element  - Just the element name for the parent block (doesn't require the parent Block name)
// @usage    - `.Nav {@include e(item){...}}`
@mixin e($element){
  &__#{$element}{
    @content;
  }
}

// For Modifier
// $modifier  - Just the modifier name for the parent block or element
// @usage     - `.Nav {@include e(item) {@include m(active) {...}}}`
@mixin m($modifier){
  &--#{$modifier}{
    @content;
  }
}

// Media Query
@mixin mq($break){
    @if type-of($break) == 'number' {
      @media(min-width: $break + 'px') {
        @content;
      }
    }
    @else {
      @error "No value could be retrieved for '#{$break}'";
    }
}

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

// Base Code
html, body{
  height: 100%;
}
body{
  -webkit-font-smoothing: antialiased;
  font-family: $font-family--primary;
  text-rendering: optimizeLegibility;
  background: #fcfcfc;
}

.mock-up-link {
  display: none;

  @include mq(768) {
    display: block;
  }
}

.main-container-wrapper {
  background-color: $main-background-color;
  min-width: 320px;
  min-height: 568px;
  max-width: 414px;
  overflow-y: auto;

  @include mq(415) {
    -moz-box-shadow: 0px 32px 47px rgba(32, 23, 23, 0.09);
    -webkit-box-shadow: 0px 32px 47px rgba(32, 23, 23, 0.09);
    box-shadow: 0px 32px 47px rgba(32, 23, 23, 0.09);
    margin: 24px auto;
  }
}

header {
  background-color: $white;
  display: flex;
  height: 58px;
  justify-content: space-between;
  overflow: hidden;
  position: relative;
}

.header {
  @include e(btn) {
    background-color: $primary-color;
    border: 2px solid $white;
    border-radius: 50%;
    -moz-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    height: 80px;
    padding-top: 18px;
    position: absolute;
    top: -25px;
    width: 80px;

    &:hover,
    &:focus {
      background: darken($primary-color, 8%);
      transition: all 0.3s ease-in;
      outline: none;
    }

    .icon {
      display: inline-block;
    }

    @include m(left) {
      left: -25px;
      padding-left: 38px;
      text-align: left;
    }

    @include m(right) {
      padding-right: 32px;
      right: -25px;
      text-align: right;
    }
  }
}

.calendar-container {
  background-color: $white;
  padding: 16px;
  margin-bottom: 24px;

  @include e(header) {
    display: flex;
    justify-content: space-between;
  }

  @include e(btn) {
    background: transparent;
    border: 0;
    cursor: pointer;
    font-size: 16px;
    outline: none;
    color: $calendar-button-color;

    &:hover,
    &:focus {
      color: palette(gray-shades, darker);
      transition: all 0.3s ease-in;
    }
  }

  @include e(title) {
    color: $black;
    font-size: $lg-font-size;
    font-weight: $font-weight--bold;
  }
}

.calendar-table {
  margin-top: 12px;
  width: 100%;

  @include e(item) {
    border: 2px solid transparent;
    border-radius: 50%;
    color: $calendar-item-text;
    font-size: $sm-font-size;
    font-weight: $font-weight--bold;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;

    &:hover {
      background: #f8fafa;
      -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
      -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
      transition: 0.2s all ease-in;
    }
  }

  @include e(row) {
    display: flex;
    justify-content: center;
  }

  @include e(header) {
    border-bottom: 2px solid palette(gray-shades, lightest);
    margin-bottom: 4px;

    .calendar-table__col {
      display: inline-block;
      color: $gray;
      font-size: $sm-font-size;
      font-weight: $font-weight--bold;
      padding: 12px 3px;
      text-align: center;
      text-transform: uppercase;
      width: 40px;
      height: 38px;

      @include mq(360) {
        width: 46px;
      }

      @include mq(410) {
        width: 54px;
      }
    }
  }

  @include e(body) {
    .calendar-table__col {
      width: 40px;
      height: 42px;
      padding-bottom: 2px;

      @include mq(360) {
        width: 46px;
        height: 48px;
      }

      @include mq(410) {
        width: 54px;
        height: 56px;
      }
    }
  }

  @include e(today) {
    .calendar-table__item {
      border-color: $calendar-item-border;
      background-color: palette(gray-shades, lightest);
      -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
      -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    }
  }

  @include e(event)  {
    .calendar-table__item {
      background-color: $blue;
      border-color: $calendar-item-border;
      -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
      -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
      color: $white;
    }

    @include m(long) {
      overflow-x: hidden;

      .calendar-table__item {
        border-radius: 0;
        border-width: 2px 0;
      }
    }

    @include m(start) {
      .calendar-table__item {
        border-left: 2px solid $white;
        border-radius: 50% 0 0 50%;
      }

      &.calendar-table__col:last-child {
        .calendar-table__item {
          border-width: 2px;
        }
      }
    }

    @include m(end) {
      .calendar-table__item {
        border-right: 2px solid $white;
        border-radius: 0 50% 50% 0;
      }

      &.calendar-table__col:first-child {
        .calendar-table__item {
          border-width: 2px;
        }
      }
    }
  }

  @include e(inactive) {
    .calendar-table__item {
      color: palette(gray-shades, light);
      cursor: default;

      &:hover {
        background: transparent;
        box-shadow: none;
      }
    }

    &.calendar-table__event {
      .calendar-table__item {
        color: $white;
        opacity: 0.25;

        &:hover {
          background: $blue;
          -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
          -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }
      }
    }
  }
}

.events-container {
  padding: 0 15px;
}

.events {
  @include e(title) {
    color: palette(gray-shades, lighter);
    display: inline-block;
    font-size: $default-font-size;
    font-weight: $font-weight--semi-bold;
    margin-bottom: 16px;
  }

  @include e(tag) {
    background: $blue;
    border: 2px solid $calendar-item-border;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    border-radius: 20px;
    color: $white;
    font-size: $xsm-font-size;
    font-weight: $font-weight--semi-bold;
    width: 60px;
    margin-left: 16px;
    padding: 5px 2px;
    text-align: center;

    @include m(highlighted) {
      background: $yellow;
    }
  }

  @include e(item) {
    background: $white;
    border-left: 8px solid $primary-color;
    border-radius: 2px;
    -moz-box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
    -webkit-box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
    padding: 15px 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 16px;

    @include m(left) {
      width: calc(100% - 76px);
    }
  }

  @include e(name) {
    font-size: $sm-font-size;
    font-weight: $font-weight--bold;
    color: $black;
    display: block;
    margin-bottom: 6px;
  }

  @include e(date) {
    font-size: $sm-font-size;
    color: palette(gray-shades, darker);
    display: inline-block;
  }
}




</style>
<body>
  <p class="mock-up-link">Mock up link <a href="https://dribbble.com/shots/5465486-Calendar-UI#comment-7928835">here</a></p>
  <div class="main-container-wrapper">
    <header>
      <button class="header__btn header__btn--left" title="Menu">
        <svg class="icon" width="20px" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill="#fff" d="M0 0h20v2H0zM0 7h20v2H0zM0 14h20v2H0z"/>
        </svg>
      </button>
      <button class="header__btn header__btn--right" title="Add event">
        <svg class="icon" width="26px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="#fff" d="M416 277.333H277.333V416h-42.666V277.333H96v-42.666h138.667V96h42.666v138.667H416v42.666z"/>
        </svg>
      </button>
    </header>
    <main>
      <div class="calendar-container">
        <div class="calendar-container__header">
          <button class="calendar-container__btn calendar-container__btn--left" title="Previous">
            <i class="icon ion-ios-arrow-back"></i>
          </button>
          <h2 class="calendar-container__title">October 2018</h2>
          <button class="calendar-container__btn calendar-container__btn--right" title="Next">
            <i class="icon ion-ios-arrow-forward"></i>
          </button>
        </div>
        <div class="calendar-container__body">
          <div class="calendar-table">
            <div class="calendar-table__header">
              <div class="calendar-table__row">
                <div class="calendar-table__col">S</div>
                <div class="calendar-table__col">M</div>
                <div class="calendar-table__col">T</div>
                <div class="calendar-table__col">W</div>
                <div class="calendar-table__col">T</div>
                <div class="calendar-table__col">F</div>
                <div class="calendar-table__col">S</div>
              </div>
            </div>
            <div class="calendar-table__body">
              <div class="calendar-table__row">
                <div class="calendar-table__col calendar-table__inactive">
                  <div class="calendar-table__item">
                    <span>30</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__today">
                  <div class="calendar-table__item">
                    <span>1</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>2</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>3</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>4</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__event">
                  <div class="calendar-table__item">
                    <span>5</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>6</span>
                  </div>
                </div>
              </div>
              <div class="calendar-table__row">
                <div class="calendar-table__col calendar-table__event">
                  <div class="calendar-table__item">
                    <span>7</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>8</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>9</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>10</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>11</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>12</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>13</span>
                  </div>
                </div>
              </div>
              <div class="calendar-table__row">
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>14</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>15</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__event calendar-table__event--long calendar-table__event--start">
                  <div class="calendar-table__item">
                    <span>16</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__event calendar-table__event--long">
                  <div class="calendar-table__item">
                    <span>17</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__event calendar-table__event--long calendar-table__event--end">
                  <div class="calendar-table__item">
                    <span>18</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>19</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>20</span>
                  </div>
                </div>
              </div>
              <div class="calendar-table__row">
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>21</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>22</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>23</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>24</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>25</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>26</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__event calendar-table__event--long calendar-table__event--start">
                  <div class="calendar-table__item">
                    <span>27</span>
                  </div>
                </div>
              </div>
              <div class="calendar-table__row">
                <div class="calendar-table__col calendar-table__event calendar-table__event--long calendar-table__event--end">
                  <div class="calendar-table__item">
                    <span>28</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>29</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>30</span>
                  </div>
                </div>
                <div class="calendar-table__col">
                  <div class="calendar-table__item">
                    <span>31</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__event calendar-table__inactive">
                  <div class="calendar-table__item">
                    <span>1</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__inactive">
                  <div class="calendar-table__item">
                    <span>2</span>
                  </div>
                </div>
                <div class="calendar-table__col calendar-table__inactive">
                  <div class="calendar-table__item">
                    <span>3</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="events-container">
        <span class="events__title">Upcoming events this month</span>
        <ul class="events__list">
          <li class="events__item">
            <div class="events__item--left">
              <span class="events__name">Town hall meeting</span>
              <span class="events__date">Oct 5</span>
            </div>
            <span class="events__tag">16:00</span>
          </li>
          <li class="events__item">
            <div class="events__item--left">
              <span class="events__name">Meet with George</span>
              <span class="events__date">Oct 7</span>
            </div>
            <span class="events__tag">10:00</span>
          </li>
          <li class="events__item">
            <div class="events__item--left">
              <span class="events__name">Vacation!!!</span>
              <span class="events__date">Oct 16 - Oct 18</span>
            </div>
            <span class="events__tag events__tag--highlighted">All day</span>
          </li>
          <li class="events__item">
            <div class="events__item--left">
              <span class="events__name">Visit Grandma</span>
              <span class="events__date">Oct 27 - Oct 28</span>
            </div>
          </li>
        </ul>
      </div>
    </main>
  </div>
</body>
</html>
