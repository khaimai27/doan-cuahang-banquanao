import React, { useState } from "react";
import { NavLink } from "react-router-dom";

const Login = () => {
  const [account, setAccount] = useState('');
  const [password, setPassword] = useState('');

  const handleLogin = async () => {
    try {
      const response = await fetch('http://127.0.0.1:8000/api/login', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ account, password }),
      });

      if (response.ok) {
        // Đăng nhập thành công, thực hiện các thao tác cần thiết (ví dụ: chuyển hướng)
        console.error('Đăng nhập thành công!');
      } else {
        // Đăng nhập thất bại, xử lý lỗi
        console.error('Đăng nhập thất bại!');
      }
    } catch (error) {
      console.error('Lỗi kết nối:', error);
    }
  };
 
  return(
  <>
  <form className="vh-100" style={{ backgroundColor: '#508bfc' }} onSubmit={handleLogin}>
  <div className="container py-5 h-100">
    <div className="row d-flex justify-content-center align-items-center h-100">
      <div className="col-12 col-md-8 col-lg-6 col-xl-5">
        <div className="card shadow-2-strong" style={{ borderRadius: '1rem' }}>
          <div className="card-body p-5 text-center">
            <h3 className="mb-5">Đăng Nhập</h3>

            <div className="form-outline mb-4">
            <h5 className='form-name'>Tài Khoản</h5>
              <input type="text" id="typeEmailX-2" className="form-control form-control-lg" placeholder="account"
              onChange={(e)=>setAccount(e.target.value)}
              />
              <label className="form-label2" for="typeEmailX-2"></label>
            </div>

            <div className="form-outline mb-4">
            <h5 className='form-name'>Mật Khẩu</h5>
              <input type="password" id="typePasswordX-2" className="form-control form-control-lg" 
              placeholder="password"
              onChange={(e)=>setPassword(e.target.value)}
              />
              <label className="form-label2" for="typePasswordX-2"></label>
            </div>

            <div className="form-check d-flex justify-content-start mb-4">
              <input className="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label className="form-check-label" for="form1Example3">ghi nhớ thông tin đăng nhập</label>
            </div>

            <NavLink to="/chi-tiet-nhan-vien"><button className="btn btn-primary btn-lg btn-block" type="submit" onClick={handleLogin}>Đăng Nhập</button></NavLink>
            <br></br>
            <NavLink to="/dang-ky"><button type="button" className="btn2 btn-success" >Đăng Ký</button></NavLink>
            <hr className="my-4" />

            <button className="btn btn-lg btn-block btn-primary" style={{ backgroundColor: '#dd4b39' }} type="submit">
              <i className="fab fa-google me-2"></i> Sign in with Google
            </button>
            <button className="btn btn-lg btn-block btn-primary mb-2" style={{ backgroundColor: '#3b5998' }} type="submit">
              <i className="fab fa-facebook-f me-2"></i> Sign in with Facebook
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
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
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>
</>);
}
export default Login;