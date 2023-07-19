<?php
include "header.php";

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']  == true  )  {
?>

    <main>
      <div class="m-auto">
        <div class="row mx-0" id="main">
          <div class="col-12 text-center">
            <div
              class="d-flex align-items-center justify-content-center text-light main-img"
            >
              <div>
                <span style="font-size: 1rem;">TECHNOLOGY</span>
                <p style="font-size: 4rem;">Creative Space</p>
                <p style="font-size: 1.5625rem;">
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                  Explicabo, eaque molestias sed cupiditate enim temporibus
                  numquam perferendis possimus.
                </p>
                <a class="btn btn-lg display-4 btnn" href="#"
                  ><span
                    class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont mbr-iconfont-btn"
                    style="font-size: 1rem"
                    >Get Started
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      width="11"
                      height="11"
                    >
                      <path
                        d="M4.6 22.6L15.2 12 4.6 1.4 6 0l12 12L6 24z"
                      ></path></svg></span
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container m-auto">
        <div class="row">
          <div class="col-12">
            <div class="row align-content-center" style="height: 15rem">
              <div class="col-7">
                <h6 class="text-info">B E N E F I T S</h6>
                <h2>Your Comfort is Our Priority</h2>
              </div>
              <div class="col-5 mt-3">
                <h4>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container" style="padding: 20px">
        <div class="row">
          <div class="col-12 m-auto">
            <div class="row align-content-center">
              <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <ul class="list-unstyled" style="padding: 20px">
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      width="48"
                      height="48"
                      style="color: #a1ce55"
                    >
                      <path
                        d="M0 4v16h24V4H0zm19.8 2L12 10.7 4.2 6h15.6zM2 18V7l10 6 10-6v11H2z"
                      ></path>
                    </svg>
                  </li>
                  <li style="padding-top: 20px">
                    <p class="menu-list">Mail</p>
                  </li>
                  <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <ul class="list-unstyled" style="padding: 20px">
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      width="48"
                      height="48"
                      style="color: #a1ce55"
                    >
                      <path
                        d="M24 18V2H0v16h9v2H7v2h10v-2h-2v-2h9zm-11 2h-2v-2h2v2zM2 16V4h20v12H2z"
                      ></path>
                    </svg>
                  </li>
                  <li style="padding-top: 20px">
                    <p class="menu-list">Visual</p>
                  </li>
                  <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <ul class="list-unstyled" style="padding: 20px">
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      width="48"
                      height="48"
                      style="color: #a1ce55"
                    >
                      <path
                        d="M11.4 6l-3-3H0v19h24V6H11.4zM22 20H2V5h5.6l3 3H22v12z"
                      ></path>
                    </svg>
                  </li>
                  <li style="padding-top: 20px">
                    <p class="menu-list">File</p>
                  </li>
                  <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <ul class="list-unstyled" style="padding: 20px">
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      width="48"
                      height="48"
                      style="color: #a1ce55"
                    >
                      <path
                        d="M19 3V2h-2v1H7V2H5v1H0v19h24V3h-5zm3 17H2V5h3v1h2V5h10v1h2V5h3v15zM5 12h2v2H5v-2zm4 0h2v2H9v-2zm4 0h2v2h-2v-2zm4 0h2v2h-2v-2zM5 8h2v2H5V8zm4 0h2v2H9V8zm4 0h2v2h-2V8zm4 0h2v2h-2V8zM5 16h2v2H5v-2zm4 0h2v2H9v-2zm4 0h2v2h-2v-2zm4 0h2v2h-2v-2z"
                      ></path>
                    </svg>
                  </li>
                  <li style="padding-top: 20px">
                    <p class="menu-list">Calendar</p>
                  </li>
                  <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container" style="padding: 20px">
        <div class="row">
          <div class="col-12 m-auto">
            <div class="row align-content-center">
              <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <ul class="list-unstyled" style="padding: 20px">
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      width="48"
                      height="48"
                      style="color: #a1ce55"
                    >
                      <path
                        d="M17 6V2H7v4H0v16h24V6h-7zM9 4h6v2H9V4zm13 16H2v-7h20v7zm0-9H2V8h20v3z"
                      ></path>
                    </svg>
                  </li>
                  <li style="padding-top: 20px">
                    <p class="menu-list">Suitcase</p>
                  </li>
                  <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <ul class="list-unstyled" style="padding: 20px">
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      width="48"
                      height="48"
                      style="color: #a1ce55"
                    >
                      <path
                        d="M0 23.4V2h24v15H6.4L0 23.4zM2 4v14.6L5.6 15H22V4H2z"
                      ></path>
                    </svg>
                  </li>
                  <li style="padding-top: 20px">
                    <p style="font-size: 1.5625rem; font-weight: 500">Chat</p>
                  </li>
                  <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <ul class="list-unstyled" style="padding: 20px">
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      width="48"
                      height="48"
                      style="color: #a1ce55"
                    >
                      <path
                        d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zM4.9 5H9c.6 0 1 .4 1 1s-.4 1-1 1H5.5C4.1 7 3 8.1 3 9.5S4.1 12 5.5 12H6c.6 0 1 .4 1 1s-.4 1-1 1H2.2c-.1-.6-.2-1.3-.2-2 0-2.7 1.1-5.2 2.9-7zM2.8 16H6c1.7 0 3-1.3 3-3s-1.3-3-3-3h-.5c-.3 0-.5-.2-.5-.5s.2-.5.5-.5H9c1.7 0 3-1.3 3-3s-1.3-3-3-3H7.7C9 2.4 10.4 2 12 2c4.1 0 7.6 2.5 9.2 6H17c-1.7 0-3 1.3-3 3s1.3 3 3 3h.5c.3 0 .5.2.5.5s-.2.5-.5.5H13c-1.7 0-3 1.3-3 3s1.3 3 3 3h3.3c-1.3.6-2.8 1-4.3 1-4.1 0-7.6-2.5-9.2-6zm16.3 3H13c-.6 0-1-.4-1-1s.4-1 1-1h4.5c1.4 0 2.5-1.1 2.5-2.5S18.9 12 17.5 12H17c-.6 0-1-.4-1-1s.4-1 1-1h4.8c.1.6.2 1.3.2 2 0 2.7-1.1 5.2-2.9 7z"
                      ></path>
                    </svg>
                  </li>
                  <li style="padding-top: 20px">
                    <p class="menu-list">Global</p>
                  </li>
                  <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <ul class="list-unstyled" style="padding: 20px">
                  <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      width="48"
                      height="48"
                      style="color: #a1ce55"
                    >
                      <path
                        d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zM4.9 5H9c.6 0 1 .4 1 1s-.4 1-1 1H5.5C4.1 7 3 8.1 3 9.5S4.1 12 5.5 12H6c.6 0 1 .4 1 1s-.4 1-1 1H2.2c-.1-.6-.2-1.3-.2-2 0-2.7 1.1-5.2 2.9-7zM2.8 16H6c1.7 0 3-1.3 3-3s-1.3-3-3-3h-.5c-.3 0-.5-.2-.5-.5s.2-.5.5-.5H9c1.7 0 3-1.3 3-3s-1.3-3-3-3H7.7C9 2.4 10.4 2 12 2c4.1 0 7.6 2.5 9.2 6H17c-1.7 0-3 1.3-3 3s1.3 3 3 3h.5c.3 0 .5.2.5.5s-.2.5-.5.5H13c-1.7 0-3 1.3-3 3s1.3 3 3 3h3.3c-1.3.6-2.8 1-4.3 1-4.1 0-7.6-2.5-9.2-6zm16.3 3H13c-.6 0-1-.4-1-1s.4-1 1-1h4.5c1.4 0 2.5-1.1 2.5-2.5S18.9 12 17.5 12H17c-.6 0-1-.4-1-1s.4-1 1-1h4.8c.1.6.2 1.3.2 2 0 2.7-1.1 5.2-2.9 7z"
                      ></path>
                    </svg>
                  </li>
                  <li style="padding-top: 20px">
                    <p class="menu-list">Sites</p>
                  </li>
                  <li>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="row m-auto h-50">
              <div class="col-6 m-auto">
                <h6 class="text-info">W H O W E A R E</h6>
                <span style="font-size: 3rem; font-weight: 500"
                  >We're Creative Coworking Workers Space For Success</span
                >
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Voluptatem hic dignissimos natus adipisci quas iste.
                </p>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <img
                  src="images/pexels-myicahel-tamburini-1553783.jpg"
                  alt=""
                  style="width: 100%; height: 100%"
                />
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row m-auto" style="padding-top: 150px">
          <div class="col-lg-4 col-sm-12 col-md-12 testing_hover" style="cursor: pointer">
            <div class="row on_hover1 testing">
              <a href="index.html" class="col-12">
                <span>How to success through market segmentation</span>
              </a>
            </div>

            <img
              src="images/01.jpg"
              alt=""
              class="img-s-1"
            />
          </div>
          <div class="col-lg-4 col-sm-12 col-md-12" style="cursor: pointer">
            <div class="card img-m-1 card-m-1">
              <div
                class="card-body"
                style="font-size: 2.15rem; font-weight: 500"
              >
                <p class="card-text text-light">
                  3 clear warnings that say your goals are too small
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 col-md-12 testing_hover" style="cursor: pointer">
            <div class="row on_hover1 testing">
              <a href="index.html" class="col-12">
                <span>10 things successful people do differently Career</span>
              </a>
            </div>

            <img
              src="images/06.jpg"
              alt=""
              class="img-s-1"
            />
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row m-auto">
          <div class="col-lg-8 col-sm-12 col-md-12 testing_hover" style="cursor: pointer">
            <div class="row on_hover2 testing">
              <a href="index.html" class="col-12">
                <span
                  >Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Soluta quia minus doloremque repellendus.</span
                >
              </a>
            </div>

            <img
              src="images/09.jpg"
              alt=""
              class="img_09"
              
            />
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12" style="cursor: pointer">
            <div class="card card1">
              <div
                class="card-body"
                style="font-size: 2.15rem; font-weight: 500"
              >
                <p class="card-text text-light">
                  3 clear warnings that say your goals are too small
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container" style="padding-bottom: 60px">
        <div class="row m-auto card_container">
          <div class="col-lg-4 col-md-12 col-sm-12" style="cursor: pointer">
            <div class="card card2">
              <div
                class="card-body align-content-center justify-content-center"
                style="
                  font-size: 2.15rem;
                  font-weight: 500;
                  text-align: center;
                  color: #fff;
                "
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  width="56"
                  height="56"
                >
                  <path
                    d="M20 10h-1V7H1v11c0 3.3 2.7 6 6 6h6c3 0 5.4-2.2 5.9-5H20c2.2 0 4-1.8 4-4v-1c0-2.2-1.8-4-4-4zm-3 8c0 2.2-1.8 4-4 4H7c-2.2 0-4-1.8-4-4V9h14v9zm5-3c0 1.1-.9 2-2 2h-1v-5h1c1.1 0 2 .9 2 2v1zM9 5H7V0h2v5zm4 0h-2V3h2v2z"
                  ></path>
                </svg>

                <p class="card-text text-light">Comfort</p>
                <p style="font-size: 1rem">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 col-sm-12 testing_hover" style="cursor: pointer">
            <div class="row on_hover1 testing">
              <a href="index.html" class="col-12">
                <span>How to success through market segmentation</span>
              </a>
            </div>

            <img
              src="images/07.jpg"
              alt=""
              class="img-s-1"
            />
          </div>

          <div class="col-lg-4 col-md-12 col-sm-12 testing_hover" style="cursor: pointer">
            <div class="row on_hover1 testing">
              <a href="index.html" class="col-12">
                <span>10 things successful people do differently career</span>
              </a>
            </div>

            <img
              src="images/08.jpg"
              alt=""
              class="img-s-1"
            />
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div
            class="col-12"
            style="
              text-align: center;
              padding-top: 120px;
              font-size: 1rem;
              font-weight: 500;
              color: #20a997;
            "
          >
            E X A M P L E S
          </div>
          <div class="col-12" style="text-align: center">
            <h3 style="font-size: 3rem; font-weight: 500; padding-bottom: 30px">
              We create a space for creativity
            </h3>
          </div>
        </div>
      </div>

      <div class="container mx-auto">
        <div class="row">
          <div class="col-lg-5 col-md-12 col-sm-12">
            <img src="images/10.jpg" alt="" class="img-m-3" />
          </div>
          <div class="col-lg-5 col-sm-12 col-md-12">
            <img src="images/11.jpg" alt="" class="img-m-3" />
          </div>
          <div class="col-lg-2 col-md-12 col-sm-12">
            <img
              src="images/12.jpg"
              alt=""
              class="img_12"
              />
          </div>
        </div>
      </div>

      <div class="container" style="height: 360px">
        <div class="row">
          <div
            class="col-12"
            style="text-align: center; color: #20a997; padding-bottom: 30px"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24 24"
              fill="currentColor"
              width="32"
              height="32"
            >
              <path
                d="M15.9 20.4l7.1-5.9V3H13v10h3.6l-4 4 3.3 3.4zM15 11V5h6v8.5l-4.9 4.1-.7-.6 3.6-3.6V11h-4zM.6 17L4 20.4l7.1-5.9V3H1v10h3.6l-4 4zM3 11V5h6v8.5l-4.9 4.1-.7-.6L7 13.4V11H3z"
              ></path>
            </svg>
          </div>
          <div class="row">
            <div class="col-10 mx-auto">
              <p
                style="
                  font-size: 2.125rem;
                  font-weight: 500;
                  text-align: center;
                "
              >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius
                ut similique, enim dignissimos delectus provident placeat
                reprehenderit tempore.
              </p>
              <p
                style="
                  font-size: 1.562rem;
                  text-align: center;
                  padding-bottom: 15px;
                "
              >
                Jack Blake
              </p>
              <p
                style="
                  font-size: 1rem;
                  text-align: center;
                  color: #a1ce55;
                  font-weight: 500;
                "
              >
                HEAD OF SALES
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-lg-5 col-md-12 col-sm-12">
                <img
                  src="images/13.jpg"
                  alt=""
                  class="img_13"
                />
              </div>
              <div
                class="col-lg-7 col-md-12 col-sm-12 img_13_m"
              >
              <div style="padding: 52px 60px 52px 30px;">
                <p
                  style="
                    font-size: 2.125rem;
                    font-weight: 500;
                    padding-bottom: 20px;
                  "
                >
                  We create a work space
                </p>
                <p style="padding: 10px 0px; margin-left: 20px">
                  March 13, 2025 - March 27, 2025
                </p>
                <p style="padding: 10px 0px">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    width="16"
                    height="16"
                    style="color: #20a997; margin-right: 5px"
                  >
                    <path
                      d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 22C6.5 22 2 17.5 2 12S6.5 2 12 2s10 4.5 10 10-4.5 10-10 10zM11 4h2v9H7v-2h4V4z"
                    ></path>
                  </svg>
                  18:00 pm - 21:00 pm
                </p>
                <p style="padding: 10px 0px">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    width="16"
                    height="16"
                    style="color: #20a997; margin-right: 5px"
                  >
                    <path
                      d="M12 1.8L.4 10.2l1.2 1.6L4 10.1V22h16V10.1l2.4 1.8 1.2-1.6L12 1.8zM13 20h-2v-5h2v5zm5 0h-3v-7H9v7H6V8.6l6-4.4 6 4.4V20z"
                    ></path>
                  </svg>
                  Mobirise Studio
                </p>
                <p style="padding: 10px 0px">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    width="16"
                    height="16"
                    style="color: #20a997; margin-right: 5px"
                  >
                    <path
                      d="M12 0C7 0 3 4 3 9c0 7.4 8.1 14.3 8.4 14.5l.6.5.6-.5c.3-.2 8.4-7.1 8.4-14.5 0-5-4-9-9-9zm0 21.5C10.2 19.9 5 14.3 5 9c0-3.9 3.1-7 7-7s7 3.1 7 7c0 5.3-5.2 10.9-7 12.5zM12 5C9.8 5 8 6.8 8 9s1.8 4 4 4 4-1.8 4-4-1.8-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"
                    ></path>
                  </svg>
                  350 5th Ave, New York, NY 10118
                </p>
                <p style="padding: 10px 0px">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Reprehenderit aspernatur labore quisquam nemo.
                  Necessitatibus error est, modi eos iure nulla.
                </p>
                <a
                  class="btn btn-lg display-4"
                  href="#"
                  style="
                    background-color: #20a997;
                    color: #fff;
                    border: #20a997;
                  "
                  ><span
                    class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont mbr-iconfont-btn"
                    style="font-size: 1rem; padding-top: 15px"
                    >Read More
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24"
                      fill="currentColor"
                      width="11"
                      height="11"
                    >
                      <path
                        d="M4.6 22.6L15.2 12 4.6 1.4 6 0l12 12L6 24z"
                      ></path></svg></span
                ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container" style="padding: 75px 0px">
        <div class="row">
          <div class="col-12">
            <p style="text-align: center; color: #20a997; font-weight: 500">
              C O W O R K I N G
            </p>
          </div>
          <div class="col-12">
            <p style="font-size: 3rem; font-weight: 500; text-align: center">
              Follow Us
            </p>
            <div class="container">
              <div class="row m-auto" style="padding-top: 150px">
                <div class="col-lg-3 col-md-6 col-sm-12 testing_hover" style="cursor: pointer">
                  <div class="row on_hover3 testing">
                    <a href="index.html" class="col-12">
                      <span
                        ><svg
                          width="32"
                          height="32"
                          viewBox="0 0 1792 1792"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                        >
                          <path
                            d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z"
                          ></path></svg
                      ></span>
                    </a>
                  </div>

                  <img
                    src="images/07.jpg"
                    alt=""
                    class="img-m-end"
                  />
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 testing_hover" style="cursor: pointer">
                  <div class="row on_hover3 testing">
                    <a href="index.html" class="col-12">
                      <span
                        ><svg
                          width="32"
                          height="32"
                          viewBox="0 0 1792 1792"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                        >
                          <path
                            d="M1152 896q0-106-75-181t-181-75-181 75-75 181 75 181 181 75 181-75 75-181zm138 0q0 164-115 279t-279 115-279-115-115-279 115-279 279-115 279 115 115 279zm108-410q0 38-27 65t-65 27-65-27-27-65 27-65 65-27 65 27 27 65zm-502-220q-7 0-76.5-.5t-105.5 0-96.5 3-103 10-71.5 18.5q-50 20-88 58t-58 88q-11 29-18.5 71.5t-10 103-3 96.5 0 105.5.5 76.5-.5 76.5 0 105.5 3 96.5 10 103 18.5 71.5q20 50 58 88t88 58q29 11 71.5 18.5t103 10 96.5 3 105.5 0 76.5-.5 76.5.5 105.5 0 96.5-3 103-10 71.5-18.5q50-20 88-58t58-88q11-29 18.5-71.5t10-103 3-96.5 0-105.5-.5-76.5.5-76.5 0-105.5-3-96.5-10-103-18.5-71.5q-20-50-58-88t-88-58q-29-11-71.5-18.5t-103-10-96.5-3-105.5 0-76.5.5zm768 630q0 229-5 317-10 208-124 322t-322 124q-88 5-317 5t-317-5q-208-10-322-124t-124-322q-5-88-5-317t5-317q10-208 124-322t322-124q88-5 317-5t317 5q208 10 322 124t124 322q5 88 5 317z"
                          ></path></svg
                      ></span>
                    </a>
                  </div>

                  <img
                    src="images/15.jpg"
                    alt=""
                    class="img-m-end"
                  />
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 testing_hover" style="cursor: pointer">
                  <div class="row on_hover3 testing">
                    <a href="index.html" class="col-12">
                      <span
                        ><svg
                          width="32"
                          height="32"
                          viewBox="0 0 1792 1792"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                        >
                          <path
                            d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"
                          ></path></svg
                      ></span>
                    </a>
                  </div>

                  <img
                    src="images/14.jpg"
                    alt=""
                    class="img-m-end"
                  />
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12" style="cursor: pointer">
                  <div
                    class="card card-e"
                    
                  >
                    <div
                      class="card-body"
                      style="font-size: 2.15rem; font-weight: 500"
                    >
                      <p class="card-text text-light">
                        Lorem ipsum dolor sit amet.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php
}else{?> 
  <script>
      window.location.href = "http://localhost/NewWebsite/login.php";
  </script>
  <?php
}
include "footer.php";
?>