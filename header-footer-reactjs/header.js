import React from 'react';
import { Link } from 'react-router-dom'; // Assuming you're using React Router
function Header() {
  return (
    <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <Link to="/" class="navbar-brand" href="#">Navbar</Link>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <Link class="nav-link" href="#">Trang Chủ</Link>
        </li>
      
      </ul>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <Link class="nav-link" href="#">Bộ Sưu Tập</Link>
        </li>
      
      </ul>
      <form class="form-inline my-2 my-lg-0" >
        <input class="form-control mr-sm-2" type="search" placeholder="Nhập tên sản phẩm" aria-label="Search"/>
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm</button>
        <div className='spacing'></div>
      </form>
      <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"  fill="currentColor" class="bi bi-chat-right-text" viewBox="0 0 16 16">
      <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
      <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
      <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
      </svg>
      <div className="dropdown d-md-flex profile-1">
      <a href="#" data-bs-toggle="dropdown" className="nav-link pe-2 leading-none d-flex animate">
        <span>
          <img
            src="{{ asset(session('hinh_anh_url')) }}"
            alt="profile-user"
            className="avatar profile-user brround cover-image"
          />
        </span>
        <div className="text-center p-1 d-flex d-lg-none-max">
          <h6 className="mb-0" id="profile-heading">
            <i className="user-angle ms-1 fa fa-angle-down"></i>
          </h6>
        </div>
      </a>
      <div className="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <a className="dropdown-item" href="profile.html">
          <svg
            className="w-inner-icn"
            enable-background="new 0 0 24 24"
            viewBox="0 0 24 24"
          >
            ... </svg>
          Profile
        </a>
        <a className="dropdown-item" href="mail-compose.html">
          <svg
            className="w-inner-icn"
            enable-background="new 0 0 24 24"
            viewBox="0 0 24 24"
          >
            ... </svg>
          My Wallet
          <span className="badge bg-secondary float-end">3</span>
        </a>
        <a className="dropdown-item" href="mail-inbox.html">
          <svg
            className="w-inner-icn"
            enable-background="new 0 0 24 24"
            viewBox="0 0 24 24"
          >
            ... </svg>
          Settings
        </a>
        
      </div>
      <Link to="/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
      <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
      </svg></Link>
    </div>
      </div>
  </nav>
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>

<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
  rel="stylesheet"
/>
    </header>
    
  );
}

export default Header;
